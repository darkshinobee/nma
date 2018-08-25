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
    return view('welcome');
});
Route::get('/single_blog', function () {
    return view('blog.single');
});
Route::get('/create_blog', function () {
    return view('blog.create');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/edit_account', function () {
    return view('auth.edit_account');
});
Route::get('/my_account', function () {
    return view('auth.my_account');
});
Route::get('/my_articles', function () {
    return view('auth.my_articles');
});
Route::get('/all_articles', function () {
    return view('blog.all');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
