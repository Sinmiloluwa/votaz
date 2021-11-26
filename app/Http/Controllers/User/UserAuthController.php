<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\VerifyMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserAuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->all();
        $data['email_verify_token'] = md5(rand(10000, 99999));

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'phone_number' => 'required|digits:11',
            'password' => [
                'required',
                'min:8',
                // 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'
            ],
        ]);

        if($validator->fails())
        {
            return response()->json([
                'message' => 'Validation errors',
                'errors' => $validator->errors(),
            ],400);
        }

       

            $user = new User([
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'password' => bcrypt($data['password']),
                'role_id' => 2,
                'sex' => $data['sex'],
                'email_verify_token' => $data['email_verify_token'],
             ]);

            
            $user->save();
            
            $details = [
                'email' => $user->email,
                'url' =>  'https://google.com/verify/email/'.$data['email_verify_token'],
                //'firstname' => $user->firstname
            ];

            \Mail::to($user->email)->send(new \App\Mail\VerifyMail($details));

            return response()->json([
                'message' => 'Registration Successful',
                'data' => $user,
                'verifyUrl' => $details['url'],

            ],200);
}

    public function verifyEmail(Request $request,$token)
    {
        $data = $request->all();

        if(User::where('email_verify_token',$token)->where('email_verified',0)->exists())
        {
            $user = User::where('email_verify_token',$token)->first();

            $user->update([
                'email_verified_at' => Carbon::now(),
                'email_verified' => 1
            ]);

            return response()->json([
                'message' => 'Email Verification successful'
            ],200);

        }else
        {
            return response()->json([
                'message' => 'email verified already'
            ]);
        }
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $loginData = $request->all();

        if(!auth()->attempt($loginData))
        {
            return response()->json([
                'message' => 'Invalid Credentials'
            ],401);
        };
        $user = auth()->user();
        // $accessToken = $user->createToken('authToken')->accessToken;

        // if(Auth::user()->role_id == 1)
        //     {
        //         return response()->json([
        //             'status' => 'success',
        //             'message' => 'Login successful, redirect to admin dashboard',
        //             'user' => $user,
        //         ],202);
        //         // return redirect()->view('admin.dashboard');
        //     }

        //     else
        //     {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Login successful',
                    'user' => $user,
                    // 'accessToken' => $accessToken
                ],202);
            // }
    }

}

