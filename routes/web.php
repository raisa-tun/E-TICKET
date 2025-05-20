<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\User\User_EditController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\Admin\BusScheduleController;
use App\Http\Controllers\searchController;

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
Route::get('/admin/login', function () {
    return view('admin.layouts.admin_login');
});
Route::get('/user/login', function () {
    return view('user.layouts.components.user_login_modal');
});
Route::get('/search',[searchController::class,'search'])->name('search.schedule');
Route::resource('bus_schedule',BusScheduleController::class);
Route::post('/admin/login',[AdminAuthController::class,'auth'])->name('admin.login');
Route::post('/user/login',[UserAuthController::class,'auth'])->name('user.login');
Route::post('/user/register',[UserAuthController::class,'register'])->name('user.register');
//
Route::group(['middleware' => 'adminauth'], function(){
    Route::get('/admin-dashboard',[AdminAuthController::class,'index'])->name('admin');
    Route::post('admin/logout', [AdminAuthController::class, 'adminLogOut'])->name('admin.logout');
    Route::resource('/newSchedule',BusScheduleController::class);
});
Route::group(['middleware' => 'auth'], function(){
    Route::get('/user-dashboard',[UserAuthController::class,'index'])->name('user.dashboard');
    Route::post('user/logout', [UserAuthController::class, 'userLogOut'])->name('user.logout');
});
/*Route::get('/check-pdo', function () {
    return extension_loaded('pdo_mysql') ? 'PDO MySQL is installed' : 'PDO MySQL is NOT installed';
});*/