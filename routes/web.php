<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsPortalController;

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
    return view('index');
});
Route::get('/',[SmsPortalController::class,'create'])->name('smsPortal.store');

Route::post('/store',[SmsPortalController::class,'store'])->name('smsPortal.store');

Route::get('/index',[SmsPortalController::class,'index'])->name('smsPortal.index');