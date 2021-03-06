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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'],function(){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('products', 'ProductController');
    Route::resource('blog_news','BlogNewsController');
    Route::post('products/delete/{id}', 'ProductController@destroy')->name('productsDelete');
    Route::post('products/create','ProductController@create')->name('productsCreate');
});
