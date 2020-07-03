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

Route::get('/', function () {
    return view('front/index');
})->name('index');

Route::get('/knowledge', function () {
    return view('front/knowledge');
})->name('knowledge');

Route::get('/about', function () {
    return view('front/about');
})->name('about');

Route::get('/quiz', function () {
    return view('front/quiz');
})->name('quiz');
Route::get('/course', function () {
    return view('front/course');
})->name('course');
Route::group([
    'namespace'  => 'Front',
], function () { // custom admin routes
    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');
    Route::get('/category/{id}', 'BlogController@category')->name('category');
    Route::get('/knowledge/info', 'BlogController@knowledge')->name('knowledge.info');
}); // this should be the absolute last line of this file
