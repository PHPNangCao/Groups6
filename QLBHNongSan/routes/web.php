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
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::prefix('category')->name('category.')->group(function(){
        Route::get('index', 'CategoryController@index')->name('index');
        Route::get('create', 'CategoryController@create')->name('create');
        Route::post('store', 'CategoryController@store')->name('store');

        Route::get('edit/{id}', 'CategoryController@edit')->name('edit');
        Route::post('update/{id}', 'CategoryController@update')->name('update');

        Route::get('destroy/{id}', 'CategoryController@destroy')->name('destroy');

    });
    Route::prefix('user')->name('user.')->group(function(){
        Route::get('index', 'UserController@index')->name('index');
        Route::get('create', 'UserController@create')->name('create');
        Route::post('store', 'UserController@store')->name('store');

        Route::get('edit/{id}', 'UserController@edit')->name('edit');
        Route::post('update/{id}', 'UserController@update')->name('update');

        Route::get('destroy/{id}', 'UserController@destroy')->name('destroy');

    });

    Route::prefix('product')->name('product.')->group(function(){
        Route::get('index', 'ProductController@index')->name('index');
        Route::get('create', 'ProductController@create')->name('create');
        Route::post('store', 'ProductController@store')->name('store');

        Route::get('edit/{id}', 'ProductController@edit')->name('edit');
        Route::post('update/{id}', 'ProductController@update')->name('update');

        Route::get('destroy/{id}', 'ProductController@destroy')->name('destroy');

    });

    Route::prefix('group')->name('group.')->group(function(){
        Route::get('index', 'GroupsController@index')->name('index');
        Route::get('create', 'GroupsController@create')->name('create');
        Route::post('store', 'GroupsController@store')->name('store');

        Route::get('edit/{id}', 'GroupsController@edit')->name('edit');
        Route::post('update/{id}', 'GroupsController@update')->name('update');

        Route::get('destroy/{id}', 'GroupsController@destroy')->name('destroy');

    });

    Route::prefix('customer')->name('customer.')->group(function(){
        Route::get('index', 'CustomerController@index')->name('index');
        Route::get('create', 'CustomerController@create')->name('create');
        Route::post('store', 'CustomerController@store')->name('store');

        Route::get('edit/{id}', 'CustomerController@edit')->name('edit');
        Route::post('update/{id}', 'CustomerController@update')->name('update');

        Route::get('destroy/{id}', 'CustomerController@destroy')->name('destroy');

    });
});


Route::get('trang-chu', 'TrangChu\PageController@page')->name('trang-chu');

Route::get('dang-ki', 'TrangChu\PageController@dangki')->name('dangki');
Route::post('dang-ki', 'TrangChu\PageController@xulydangki')->name('xulydangki');


Route::get('tin-tuc', 'TrangChu\PageController@tintuc')->name('tin-tuc');
Route::get('khuyen-mai', 'TrangChu\PageController@khuyenmai')->name('khuyen-mai');
Route::get('mon-ngon', 'TrangChu\PageController@monngon')->name('mon-ngon');
Route::get('lien-he', 'TrangChu\PageController@lienhe')->name('lien-he');