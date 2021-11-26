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
Route::post('/register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login']);
Route::post('vote/{category}/{nominee}', [VotingController::class, 'vote']);
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
// The route that the button calls to initialize payment
Route::post('/pay', [FlutterwaveController::class, 'initialize']);
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');
Route::get('login/{provider}', [SocialController::class,'redirect']);
Route::get('login/{provider}/callback', [SocialController::class,'callback']);