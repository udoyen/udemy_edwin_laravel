<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('welcome');
});


//Route::get('/post/{id}', 'PostsController@index');

//Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');

Route::get('/post/{id}/{name}/{password}', 'PostsController@show_post');

//Route::get('/about', function () {
//    return "Hi about";
//});
//
//
//Route::get('/contact', function () {
//    return "Hi Contact";
//});
//
//Route::get('/post/{id}', function ($id) {
//
//    return 'This is post number ' . $id;
//});

