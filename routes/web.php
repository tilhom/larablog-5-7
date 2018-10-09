<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('/','PostsController@index');
Route::view('admin','dashboard.index');
Route::view('login','dashboard.sign-in');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
