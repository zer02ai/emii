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
        Route::get('/add-gallery/{id?}','ImageController@add_update_gallery')->name('add_gallery');
        Route::post('/add-gallery/{id?}','ImageController@save')->name('save_gallery');
        Route::get('/change-status-gallery/{id}','ImageController@status')->name('status_gallery');
        Route::get('/delete-gallery/{id}','ImageController@delete')->name('delete_gallery');
        Route::post('/bulk-delete-gallery-images','ImageController@bulk_delete')->name('bulk_delete_gallery');

        // course route 
        Route::get('/courses/{type}','CourseController@index')->name('course');
        Route::get('/add-course/{type}/{id?}','CourseController@add_update_course')->name('add_course');
        Route::post('/save-course/{type}/{id?}','CourseController@save_course')->name('save_course');
        Route::get('/change-status-course/{type}/{id}','CourseController@status')->name('status_course');
        Route::get('/delete-courses/{type}/{id}','CourseController@delete')->name('delete_course');

        // WebInfo route
        Route::get('/infos','InfoController@index')->name('infos');
        Route::get('/add-info/{id?}','InfoController@add_update_info')->name('add_info');
        Route::post('/add-info/{id?}','InfoController@save')->name('save_info');
        Route::get('/change-status-info/{id}','InfoController@status')->name('status_info');
        Route::get('/delete-info/{id}','InfoController@delete')->name('delete_info');

    });

});
