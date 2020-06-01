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

Route::get('/', 'PagesController@pages')->name('trang-chu');


Route::get('admin', 'AdminController@admin')->name('admin');

Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('danhmuc', 'AdminController@danhmuc')->name('danhmuc');
    Route::get('create', 'AdminController@create')->name('create');

    Route::get('sanpham', 'AdminController@sanpham')->name('sanpham');
    Route::get('nguoidung', 'AdminController@nguoidung')->name('nguoidung');
    Route::get('khachhang', 'AdminController@khachhang')->name('khachhang');
    Route::get('donhang', 'AdminController@donhang')->name('donhang');
    Route::get('binhluan', 'AdminController@binhluan')->name('binhluan');
    Route::get('monngon', 'AdminController@monngon')->name('monngon');
    Route::get('tuyendung', 'AdminController@tuyendung')->name('tuyendung');
    Route::get('khuyenmai', 'AdminController@khuyenmai')->name('khuyenmai');
    Route::get('khohang', 'AdminController@khohang')->name('khohang');
    Route::get('vanchuyen', 'AdminController@vanchuyen')->name('vanchuyen');


});

