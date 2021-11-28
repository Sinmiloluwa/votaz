<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\User\UserAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function(){
    Route::post('vote/{category}/{nominee}', [VotingController::class, 'vote']);
    // Laravel 8
    Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');
    // Laravel 8
    Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);


});

Route::post('/register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login']);
Route::get('categories',[VotingController::class, 'getCategories']);
Route::get('categories/{id}',[VotingController::class, 'categoryView']);
Route::get('nominee/{id}',[VotingController::class, 'nomineeDetails']);
Route::get('exceptional',[VotingController::class, 'getExceptional']);
Route::get('promising',[VotingController::class, 'getPromising']);
Route::get('pricing',[VotingController::class, 'pricing']);
Route::get('pricing/{id}',[VotingController::class, 'pay']);
Route::post('search',[VotingController::class, 'search']);
Route::get('verify/mail/{token}', [UserAuthController::class, 'verifyEmail']);
Route::get('email/resend', [VotingController::class, 'resend']);
Route::get('login/{provider}', [SocialController::class,'redirect']);
Route::get('login/{provider}/callback', [SocialController::class,'callback']);

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('emmasimons141@gmail.com')->send(new \App\Mail\TestMail($details));
   
    dd("Email is Sent.");
});