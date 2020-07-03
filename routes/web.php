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
    return view('welcome');
});
Route::get('/about', function () {
    return view('front/about');
});
Route::group([
    'namespace'  => 'Front',
], function () { // custom admin routes
    Route::get('/blog', 'BlogController@index');
    Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');
    Route::get('/category/{id}', 'BlogController@category')->name('category');
}); // this should be the absolute last line of this file
