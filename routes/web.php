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
    return view('app.index');
})->name('accueil');
Route::get('/test', function () {
    return view('app.test');
});
Route::get('/email', function () {
    return view('users.emails.email');
});
Route::get('/profile', function () {
    return view('users.profile');
})->name('profile')->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
