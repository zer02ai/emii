<?php

use Illuminate\Support\Facades\Route;

// Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->as('admin.')->group(function () {

    Route::get('/','AuthController@login_page')->name('login_page1');
    Route::get('/login','AuthController@login_page')->name('login_page2');
    Route::post('/login','AuthController@login')->name('login');
    Route::get('/logout','AuthController@destroy')->name('logout');

    Route::middleware(['auth','admin'])->group(function(){
        Route::get('/dashboard','AuthController@dashboard')->name('dashboard');
        Route::get('/profile','AuthController@profile')->name('profile');

        // gallery route
        Route::get('/galleries','ImageController@index')->name('gallery');
        Route::get('/add-gallery','ImageController@add_update_gallery')->name('add_gallery');
        Route::post('/bulk-delete-gallery-images','ImageController@bulk_delete_gallery')->name('bulk_delete_gallery');

        // course route 
        Route::get('/courses','CourseController@index')->name('course');

    });

});
