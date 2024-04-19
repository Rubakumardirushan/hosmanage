<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Channelcontroller;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Route::get('/', [Homecontroller::class, 'index'])->name('home');
Route::get('/', [Channelcontroller::class, 'showallchannel'])->name('channel');
Route::get('/channel', [Channelcontroller::class, 'showallchannel'])->name('channel')->middleware('auth');
Route::get('/appoint/{id}',[Channelcontroller::class, 'apodeatils'])->name('appoint')->middleware('auth');
Route::post('/store',[Channelcontroller::class, 'store'])->name('store')->middleware('auth');
Route::get('/mybooking',[Channelcontroller::class, 'index'])->name('mybooking')->middleware('auth');