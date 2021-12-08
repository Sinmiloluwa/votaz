<?php

namespace App\Http\Controllers;

use Paystack;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Payment;
use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }   
        
        return response()->json([
            'data' => auth()->user(),
            'message' => 'redirect to payastack'
        ]);
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        $data = $paymentDetails['data'];

        $amount = $data['amount']/ 100;

        $payment = new Payment;
        $payment->user_id = auth()->user()->id;
        $payment->amount = $amount;
        $payment->txn_id = $data['reference'];
        $payment->paid_at = Carbon::now();

        $payment->save();
        $user_id = auth()->user()->id;
        $price  = Pricing::where('price',$amount)->value('vote_count');
        $voting_power = User::where('id',$user_id)->value('voting_power');
        
        $user = DB::table('users')->update([
            'voting_power' => $voting_power + $price
        ]);

        return response()->json([
            'message' => 'Payment Successful',
            'data' => $user
        ]);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
