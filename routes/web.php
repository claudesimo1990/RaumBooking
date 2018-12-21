<?php

Route::get('/', 'AppController@accueil')->name('accueil');
Route::get('/home', 'HomeController@index')->name('home');

route::get('/profile','ProfilController@index')->name('profile')->middleware('verified');

Auth::routes(['verify' => true]);
