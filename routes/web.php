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
Route::post('/newsletter', 'NewsLetterController@store')->name('store'); 
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/food', 'HomeController@food')->name('food');
Route::get('/foodarticle2', 'HomeController@foodarticle2')->name('foodarticle2');
Route::get('/foodarticle3', 'HomeController@foodarticle3')->name('foodarticle3');
Route::get('/foodarticle4', 'HomeController@foodarticle4')->name('foodarticle4');
Route::get('/foodarticle5', 'HomeController@foodarticle5')->name('foodarticle5');
Route::get('/article', 'HomeController@article')->name('article');
Route::get('/article2', 'HomeController@article2')->name('article2');
Route::get('/article3', 'HomeController@article3')->name('article3');
Route::get('/article4', 'HomeController@article4')->name('article4');
Route::get('/article5', 'HomeController@article5')->name('article5');
Route::get('/contact', 'ContactFormController@create')->name('contact');
Route::post('/contact', 'ContactFormController@store')->name('contact');
Route::get('/auth/login', 'HomeController@login')->name('login');
Route::get('/auth/register', 'HomeController@register')->name('register');
Route::get('/auth/verify', 'HomeController@verify')->name('verify');


Route::get('/foods/food1', 'HomeController@food1')->name('food1');
Route::get('/foods/food2', 'HomeController@food2')->name('food2');
Route::get('/foods/food3', 'HomeController@food3')->name('food3');
Route::get('/foods/food4', 'HomeController@food4')->name('food4');
Route::get('/foods/food5', 'HomeController@food5')->name('food5');
Route::get('/foods/food6', 'HomeController@food6')->name('food6');
Route::get('/foods/food7', 'HomeController@food7')->name('food7');
Route::get('/foods/food8', 'HomeController@food8')->name('food8');
Route::get('/foods/food9', 'HomeController@food9')->name('food9');

Route::get('/foodsarticle/fooda1', 'HomeController@fooda1')->name('fooda1');
Route::get('/foodsarticle/fooda2', 'HomeController@fooda2')->name('fooda2');
Route::get('/foodsarticle/fooda3', 'HomeController@fooda3')->name('fooda3');
Route::get('/foodsarticle/fooda4', 'HomeController@fooda4')->name('fooda4');
Route::get('/foodsarticle/fooda5', 'HomeController@fooda5')->name('fooda5');
Route::get('/foodsarticle/fooda6', 'HomeController@fooda6')->name('fooda6');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
