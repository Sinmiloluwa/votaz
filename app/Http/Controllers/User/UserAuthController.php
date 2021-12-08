<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\VerifyMail;
use App\Jobs\VerifyEmailJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules\EmailRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class UserAuthController extends Controller
{
    use AuthenticatesUsers;

    public function register(Request $request)
    {
        $data = $request->all();
        $data['email_verify_token'] = md5(rand(10000, 99999));
        $email = $request->email;
      
        if( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            // split on @ and return last value of array (the domain)
            $domain = explode('@', $email)[1];
         
            // output domain
            if($domain != 'gmail.com' && $domain != 'yahoo.com' && $domain != 'outlook.com' && $domain != 'hotmail.com' && $domain != 'microsoft.com'){
                return response()->json([
                    'message' => 'This mail is invalid'
                ]);
            }else{
                $validator = Validator::make($request->all(),[
                    'email' => ['required','email'],
                    'fullname' => 'required',
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
                        'fullname' => $data['fullname'],
                        'role_id' => 2,
                        'sex' => $data['sex'],
                        'email_verify_token' => $data['email_verify_token'],
                     ]);
        
                    
                    $user->save();
                    
                    $details = [
                        'email' => $user->email,
                        'url' =>  'https://votaz.herokuapp.com/api/verify/mail/'.$data['email_verify_token'],
                        //'firstname' => $user->firstname
                    ];
        
                    
                    \Mail::to($user->email)->send(new \App\Mail\VerificationMail($details));
        
                    return response()->json([
                        'message' => 'Registration Successful',
                        'data' => $user,
                        'verifyUrl' => $details['url'],
        
                    ],200);
            }
        }
        
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
        }
        $user = auth()->user();

        $accessToken = $user->createToken('authToken')->accessToken;
       
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
            return response(['user' => auth()->user(), 'token' => $accessToken]);
            // }
    }

}

