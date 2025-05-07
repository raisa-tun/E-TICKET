<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\User\User_EditController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\Admin\BusScheduleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/adminlogin', function () {
    return view('admin.layouts.login');
});
Route::get('/userlogin', function () {
    return view('user.layouts.components.user_login_modal');
});
Route::resource('bus_schedule',BusScheduleController::class);
Route::post('/adminLogin',[AdminAuthController::class,'auth'])->name('adminLogin');
Route::post('/userLogin',[UserAuthController::class,'auth'])->name('userLogin');
Route::post('/userRegister',[UserAuthController::class,'register'])->name('userRegister');
//
Route::group(['middleware' => 'adminauth'], function(){
    Route::get('/admindashboard',[AdminAuthController::class,'index'])->name('admin');
    Route::post('logout', [AdminAuthController::class, 'adminLogOut'])->name('adminLogout');
    Route::resource('/newSchedule',BusScheduleController::class);
});
Route::group(['middleware' => 'auth'], function(){
    Route::get('/user_dashboard',[UserAuthController::class,'index'])->name('user');
    Route::post('user_logout', [UserAuthController::class, 'userLogOut'])->name('userLogout');
});
Route::get('/check-pdo', function () {
    return extension_loaded('pdo_mysql') ? 'PDO MySQL is installed' : 'PDO MySQL is NOT installed';
});