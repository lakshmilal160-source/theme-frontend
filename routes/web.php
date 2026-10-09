<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.home');
});

Route::controller(FrontendController::class)->group(function () {

    Route::get('/home', 'home')->name('home');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/about', 'about')->name('about');
    Route::get('/send-enquiry', 'sendEnquiry')->name('contact.submit');
});

Route::controller(ThemeController::class)->prefix('themes')->name('themes.')->group(function(){
Route::get('index','index')->name('index');
Route::get('show','show')->name('show');
});