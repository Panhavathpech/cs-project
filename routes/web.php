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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/food', 'HomeController@food')->name('food');
Route::get('/article', 'HomeController@article')->name('article');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/auth/login', 'HomeController@login')->name('login');
Route::get('/auth/register', 'HomeController@register')->name('register');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
