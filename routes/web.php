<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/getdata', [HomeController::class, 'getdata'])->name('getdata');
Route::get('/getdatabyid', [HomeController::class, 'getdatabyid'])->name('getdatabyid');
Route::post('/savedata', [HomeController::class, 'savedata'])->name('savedata');
Route::delete('/deletedata', [HomeController::class, 'deletedata'])->name('deletedata');
Route::get('/getjabatan', [HomeController::class, 'getjabatan'])->name('getjabatan');
