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
 Route::get('/login', function () {
    return view('login');
 });
Route::get('/', 'PostsController@index');//my home page does not show posts;
Route::get('posts/create', 'PostsController@create')->name('posts.create');
Route::get('posts/{post}', 'PostsController@show')->name('posts.show');
Route::post('/posts', 'PostsController@store')->name('posts.store');
Route::post('posts/{post}/comments', 'CommentsController@store')->name('posts.comment');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/logout', 'Sessions@Contoller@destroy');