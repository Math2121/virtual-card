<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\QRCodeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/qrcode',[QRCodeController::class,'index'])->name('qrcode');
Route::get('/{name}',EmployeeController::class)->name('employee');