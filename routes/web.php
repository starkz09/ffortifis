<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\index;
use App\Http\Controllers\Frontend\about;
use App\Http\Controllers\Frontend\additionalproducts;
use App\Http\Controllers\Frontend\cart;
use App\Http\Controllers\Frontend\certificatemanager;
use App\Http\Controllers\Frontend\cloudsecurity;
use App\Http\Controllers\Frontend\customerstories;
use App\Http\Controllers\Frontend\dataforensicsrecovery;
use App\Http\Controllers\Frontend\emailinvestigation;
use App\Http\Controllers\Frontend\identityplat;
use App\Http\Controllers\Frontend\iotsecuritycomplaince;
use App\Http\Controllers\Frontend\login;
use App\Http\Controllers\Frontend\mission;
use App\Http\Controllers\Frontend\mobiledevicemanagement;
use App\Http\Controllers\Frontend\mobileforensics;
use App\Http\Controllers\Frontend\networkcomplaincesecurity;
use App\Http\Controllers\Frontend\networksecurity;
use App\Http\Controllers\Frontend\onlinetraining;
use App\Http\Controllers\Frontend\ourcustomers;
use App\Http\Controllers\Frontend\ourteam;
use App\Http\Controllers\Frontend\pentestinganalysis;
use App\Http\Controllers\Frontend\policydrafting;
use App\Http\Controllers\Frontend\productvideos;
use App\Http\Controllers\Frontend\quantumsafecertificate;
use App\Http\Controllers\Frontend\sdwan;
use App\Http\Controllers\Frontend\seccomp;
use App\Http\Controllers\Frontend\securitymanagement;
use App\Http\Controllers\Frontend\securitytraining;
use App\Http\Controllers\Frontend\sensors;
use App\Http\Controllers\Frontend\signingcertificates;
use App\Http\Controllers\Frontend\smartcamera;
use App\Http\Controllers\Frontend\switching;
use App\Http\Controllers\Frontend\tlsssl;
use App\Http\Controllers\Frontend\trail;
use App\Http\Controllers\Frontend\vision;
use App\Http\Controllers\Frontend\vulnerabilityassessment;
use App\Http\Controllers\Frontend\webapppentesting;
use App\Http\Controllers\Frontend\websecurity;
use App\Http\Controllers\Frontend\webcast;
use App\Http\Controllers\Frontend\wirelesslan;
use App\Http\Controllers\Frontend\wirelesswan;
use App\Http\Controllers\Frontend\contact;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\Frontend\loginController;
use App\Http\Controllers\Frontend\SignupController;

/*
|
| Web Routes
|
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/
// Route::get('/', function(){
//     if (Auth::check()) {
//         return redirect('/home');
//     }
// return view('Frontend.login');
// });
Route::get('/',[index::class,'index']);
Route::post('signin',[loginController::class,'login']);
Route::get('signup',[SignupController::class,'signup']);
Route::post('register',[SignupController::class,'register']);
Route::get('/contact', [contact::class, 'index']);
Route::post('sendPasswordResetLink',[loginController::class,'passwordResetLink']);
Route::get('reset-password/{token}', [loginController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::get('forgotPassword',[loginController::class,'forgotPassword']);
Route::post('changePassword',[loginController::class,'changePassword']);
Route::get('logout',[loginController::class,'logout']);

Route::get('/about', [about::class, 'index']);

Route::get('/additionalproducts', [additionalproducts::class, 'index']);

Route::get('/cart', [cart::class, 'index']);

Route::get('/certificatemanager', [certificatemanager::class, 'index']);

Route::get('/cloudsecurity', [cloudsecurity::class, 'index']);

Route::get('/customerstories', [customerstories::class, 'index']);

Route::get('/emailinvestigation', [emailinvestigation::class, 'index']);

Route::get('/identityplat', [identityplat::class, 'index']);

Route::get('/iotsecuritycomplaince', [iotsecuritycomplaince::class, 'index']);

Route::get('/login', [login::class, 'index']);

Route::get('/mission', [mission::class, 'index']);

Route::get('/mobiledevicemanagement', [mobiledevicemanagement::class, 'index']);

Route::get('/mobileforensics', [mobileforensics::class, 'index']);

Route::get('/networkcomplaincesecurity', [networkcomplaincesecurity::class, 'index']);

Route::get('/networksecurity', [networksecurity::class, 'index']);

Route::get('/onlinetraining', [onlinetraining::class, 'index']);

Route::get('/ourcustomers', [ourcustomers::class, 'index']);

Route::get('/ourteam', [ourteam::class, 'index']);

Route::get('/pentestinganalysis', [pentestinganalysis::class, 'index']);

Route::get('/policydrafting', [policydrafting::class, 'index']);

Route::get('/productvideos', [productvideos::class, 'index']);

Route::get('/quantumsafecertificate', [quantumsafecertificate::class, 'index']);

Route::get('/sdwan', [sdwan::class, 'index']);

Route::get('/seccomp', [seccomp::class, 'index']);

Route::get('/securitymanagement', [securitymanagement::class, 'index']);

Route::get('/securitytraining', [securitytraining::class, 'index']);

Route::get('/sensors', [sensors::class, 'index']);

Route::get('/signingcertificates', [signingcertificates::class, 'index']);

Route::get('/smartcamera', [smartcamera::class, 'index']);

Route::get('/switching', [switching::class, 'index']);

Route::get('/tlsssl', [tlsssl::class, 'index']);

Route::get('/trail', [trail::class, 'index']);

Route::get('/vision', [vision::class, 'index']);

Route::get('/vulnerabilityassessment', [vulnerabilityassessment::class, 'index']);

Route::get('/webapppentesting', [webapppentesting::class, 'index']);

Route::get('/websecurity', [websecurity::class, 'index']);

Route::get('/webcast', [webcast::class, 'index']);

Route::get('/wirelesslan', [wirelesslan::class, 'index']);

Route::get('/wirelesswan', [wirelesswan::class, 'index']);


Route::get('/network-security',[networksecurity::class,'index']);
Route::get('/data-forensics-recovery',[dataforensicsrecovery::class,'index']);

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
