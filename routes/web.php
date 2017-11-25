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

Route::get('/blog','PostsController@index')->name('blog');
Route::view('/blog/create','post.create')->middleware('auth');
Route::get('/blog/{post}','PostsController@show');
Route::post('/post','PostsController@store');
Auth::routes();
Route::post('/blog/{post}/comment','CommentController@store')->name('addcomment');
Route::get('/home', 'HomeController@index')->name('home');
