<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;

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
Route::post('/adminlogin',[AdminAuthController::class,'auth'])->name('adminLogin');
//
Route::group(['middleware' => 'adminauth'], function(){
    Route::get('/admindashboard',[AdminAuthController::class,'index'])->name('admin');
    Route::post('logout', [AdminAuthController::class, 'adminLogOut'])->name('adminLogout');
});