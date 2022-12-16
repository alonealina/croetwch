<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\CrowtechController@index')->name('index');
Route::get('about', 'App\Http\Controllers\CrowtechController@about')->name('about');
Route::get('service', 'App\Http\Controllers\CrowtechController@service')->name('service');
Route::get('graphic', 'App\Http\Controllers\CrowtechController@graphic')->name('graphic');
Route::get('web', 'App\Http\Controllers\CrowtechController@web')->name('web');
Route::get('media', 'App\Http\Controllers\CrowtechController@media')->name('media');
Route::get('photo', 'App\Http\Controllers\CrowtechController@photo')->name('photo');
Route::get('recruit', 'App\Http\Controllers\CrowtechController@recruit')->name('recruit');
Route::get('product', 'App\Http\Controllers\CrowtechController@product')->name('product');
Route::get('contact', 'App\Http\Controllers\CrowtechController@contact')->name('contact');
Route::post('mail_send', 'App\Http\Controllers\CrowtechController@mail_send')->name('mail_send');
Route::get('mail_comp', 'App\Http\Controllers\CrowtechController@mail_comp')->name('mail_comp');

Route::get('admin/news_list', 'App\Http\Controllers\CrowtechController@news_list')->name('admin.news_list')->middleware('login');
Route::get('admin/news_regist', 'App\Http\Controllers\CrowtechController@news_regist')->name('admin.news_regist')->middleware('login');
Route::post('admin/news_store', 'App\Http\Controllers\CrowtechController@news_store')->name('admin.news_store')->middleware('login');
Route::get('admin/news_edit/{id}/', 'App\Http\Controllers\CrowtechController@news_edit')->name('admin.news_edit')->middleware('login');
Route::post('admin/news_update', 'App\Http\Controllers\CrowtechController@news_update')->name('admin.news_update')->middleware('login');
Route::get('admin/news_delete/{id}/', 'App\Http\Controllers\CrowtechController@news_delete')->name('admin.news_delete')->middleware('login');

// ログイン
Route::get('admin/login', function () {
    return view('login');
});
Route::POST('/admin_login', 'App\Http\Controllers\CrowtechController@login')->name('admin.login');
Route::get('/admin_logout', 'App\Http\Controllers\CrowtechController@logout')->name('admin.logout')->middleware('login');