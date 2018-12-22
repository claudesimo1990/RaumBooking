<?php

Route::get('/', 'AppController@accueil')->name('accueil');
Route::get('/contact', 'AppController@contact')->name('contact');
Route::get('/home', 'HomeController@index')->name('home');

//Gebäude und Räume
route::get('/posts','PostController@index')->name('posts.index');

//einzelne Raum
route::get('/post','PostController@show')->name('posts.show');

//profile
route::get('/profile','ProfilController@index')->name('profile')->middleware('verified');
//login an register
Auth::routes(['verify' => true]);
