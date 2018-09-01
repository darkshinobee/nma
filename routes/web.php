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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/my_account', 'UserController@my_account')->name('my_account');
Route::get('/edit_account', 'UserController@edit_account')->name('edit_account');
Route::put('/update_account/{user_id}', 'UserController@update_account')->name('update_account');
Route::get('/my_info', 'UserController@my_info')->name('my_info');
Route::get('/author_info/{id}', 'UserController@author_info')->name('author_info');

Route::get('/all_articles', 'BlogController@index')->name('all_articles');
Route::get('/post_article', 'BlogController@create')->name('post_article');
Route::post('/store_article', 'BlogController@store')->name('store_article');
Route::get('/article/{id}', 'BlogController@show')->name('show_article');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
