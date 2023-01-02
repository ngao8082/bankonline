<?php

use App\Http\Controllers\FactorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use \Illuminate\Support\Facades\Mail;
use App\Http\Controllers\TestsEnrollmentController;
use App\Http\Controllers\NexmoController;
use App\Http\Controllers\WithdrawController;
use \App\Http\Controllers\SettingController;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Fortify\TwoFactorAuthenticatable;




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
Route::get('/', 'IndexController@index' );
Route::get('/home', 'HomeController@index' )->Middleware(['auth','verified']);
Route::get('/email', function (){
   Mail::to('danielngao1999@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});
Route::get('/welcome', function (){

    return view('/welcome');
});

Route::get('/nexmo','NexmoController@show')->name('nexmo');
Route::post('/nexmo','NexmoController@verify')->name('nexmo');
Route::get('/factor','FactorController@show')->name('factor');
Route::post('/factor','FactorController@verify')->name('factor');
Route::get('/withdraw', 'WithdrawController@withdrawindex')->name('withdraw');
Route::get('/crypto','WithdrawController@cryptoindex')->name('crypto');
Route::get('/sendandrequest', 'WithdrawController@senandrequestindex')->name('senandrequestindex');
Route::get('/dashboard', 'WithdrawController@dashboardindex')->name('dashboardindex');
Route::get('/settings','SettingsController@settingindex')->name('settings');
Route::post('/payments/crypto/callback', 'PaymentController@callback')
                ->withoutMiddleware(['web', 'auth']);

Auth::routes([
    'register'=>true,
    'verify'=>true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/sms', [App\Http\Controllers\SmsController::class, 'index'])->name('sms');
Route::get('/send-enrollment',[App\Http\Controllers\TestsEnrollmentController::class, 'sendTestNotification'])->name('testenrollment');
Route::get('/nexmo',[App\Http\Controllers\NexmoController::class, 'show'])->name('nexmo');
Route::get('/factor',[App\Http\Controllers\FactorController::class,'show'])->name('factor');
Route::post('/factor', [App\Http\Controllers\FactorController::class,'verify'])->name('factor');
Route::get('/deposit',[App\Http\Controllers\WithdrawController::class,'depositindex'])->name('deposit')->middleware(['auth','verified']);
Route::get('/withdraw',[App\Http\Controllers\WithdrawController::class,'withdrawindex'])->name('withdraw')->middleware(['auth','verified']);
Route::get('/crypto',[App\Http\Controllers\WithdrawController::class, 'cryptoindex'])->name('crypto');
Route::get('/dashboard', [App\Http\Controllers\WithdrawController::class,'dashboardindex'])->name('dashboardindex');
Route::get('/sendandrequest',[App\Http\Controllers\WithdrawController::class,'senandrequestindex'])->name('sendandrequest')->middleware(['auth','verified']);
Route::get('/settings',[App\Http\Controllers\SettingController::class,'settingindex'])->name('settings')->middleware(['auth','verified']);
Route::post('/payments/crypto/callback', [App\Http\Controllers\Payment\PaymentController::class, 'callback'])
                ->withoutMiddleware(['web', 'auth']);