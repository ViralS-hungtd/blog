<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/an-toan-tren-khong-gian-mang', function () {
    return view('front/knowledge');
})->name('knowledge');

Route::get('/ve-cyberkid', function () {
    return view('front/about');
})->name('about');

Route::get('/cau-hoi', function () {
    return view('front/quiz');
})->name('quiz');
Route::get('/khoa-hoc', function () {
    return view('front/course');
})->name('course');
Route::group([
    'namespace'  => 'Front',
], function () { // custom admin routes
    Route::get('/', 'BlogController@main')->name('index');
    Route::post('/customer/store', 'CustomerController@store')->name('store.customer');
    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/su-kien', 'BlogController@event')->name('event');
    Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');
    Route::get('/danh-muc/{id}', 'BlogController@category')->name('category');
    Route::get('/an-toan-tren-khong-gian-mang/hieu-ve-khong-gian-mang', 'BlogController@knowledge')->name('knowledge.info');
    Route::get('/an-toan-tren-khong-gian-mang/quyen-tre-em', 'BlogController@power')->name('knowledge.power');
}); // this should be the absolute last line of this file
