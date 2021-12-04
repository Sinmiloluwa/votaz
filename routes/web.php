<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\FlutterwaveController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');
Route::get('login/{provider}', [SocialController::class,'redirect']);
Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('emmasimons141@gmail.com')->send(new \App\Mail\TestMail($details));
   
    dd("Email is Sent.");
});

Route::get('verify/mail/{token}', [UserAuthController::class, 'verifyEmail']);




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
