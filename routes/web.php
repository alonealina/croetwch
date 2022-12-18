<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\CrowtechController@index')->name('index');
Route::get('about', 'App\Http\Controllers\CrowtechController@about')->name('about');
Route::get('design', 'App\Http\Controllers\CrowtechController@design')->name('design');
Route::get('web', 'App\Http\Controllers\CrowtechController@web')->name('web');
Route::get('engineer', 'App\Http\Controllers\CrowtechController@engineer')->name('engineer');
Route::get('plan', 'App\Http\Controllers\CrowtechController@plan')->name('plan');
Route::get('product', 'App\Http\Controllers\CrowtechController@product')->name('product');
Route::get('contact', 'App\Http\Controllers\CrowtechController@contact')->name('contact');
Route::post('mail_send', 'App\Http\Controllers\CrowtechController@mail_send')->name('mail_send');
Route::get('mail_comp', 'App\Http\Controllers\CrowtechController@mail_comp')->name('mail_comp');

