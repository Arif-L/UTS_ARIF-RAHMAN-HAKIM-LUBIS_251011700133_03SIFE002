<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalArtController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/test', function () {
    return view('pages.detail');
});

Route::get('/gallery', [DigitalArtController::class, 'show']);
Route::get('/test', [DigitalArtController::class, 'test']);
Route::get('/detail/{id}', [DigitalArtController::class, 'detail']);
