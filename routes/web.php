<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index']);
    Route::post('/', [SesiController::class, 'login'])->name('login');
});

Route::get('/home', function() {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/penyewa', [AdminController::class, 'penyewa'])->middleware('userAkses:penyewa');
    Route::get('/logout', [SesiController::class, 'logout']);
});