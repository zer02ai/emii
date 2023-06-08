<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;

// Clear route & cache
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    return "Cache & Routes Have Been Cleared";
});

Route::namespace('App\Http\Controllers')->group(function () {

        Route::get('/', 'HomeController@index')->name('home');
        Route::get('about-us', 'HomeController@about_us')->name('about_us');
        Route::get('contact-us', 'HomeController@contact_us')->name('contact_us');

});
