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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', 'HomeController@index')->name('index');

Route::get('blog', 'HomeController@blog')->name('blog');

Route::get('ctsp', 'HomeController@ctsp')->name('ctsp');

Route::get('contact', 'HomeController@contact')->name('contact');

Route::get('login', 'HomeController@login')->name('login');

Route::get('policy', 'HomeController@policy')->name('policy');

Route::get('register', 'HomeController@register')->name('register');

Route::get('shop', 'HomeController@shop')->name('shop');