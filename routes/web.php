<?php

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

Route::get('/hw', function () {
    return view('hw');
});

Route::get('/faq', 'FaqController@showPageF')->name('faq');

/*Route::get('posts', 'PostController@getposts')->name('posts');

Route::get('post', 'PostController@getpost')->name('posts');*/
