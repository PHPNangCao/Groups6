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


    Route::prefix('news')->name('news.')->group(function(){
        Route::get('index', 'NewsController@index')->name('index');
        Route::get('create', 'NewsController@create')->name('create');
        Route::post('store', 'NewsController@store')->name('store');
    
        Route::get('edit/{id}', 'NewsController@edit')->name('edit');
        Route::post('update/{id}', 'NewsController@update')->name('update');
    
        Route::get('destroy/{id}', 'NewsController@destroy')->name('destroy');

    });


    Route::prefix('recruitment')->name('recruitment.')->group(function(){
        Route::get('index', 'RecruitmentController@index')->name('index');
        Route::get('create', 'RecruitmentController@create')->name('create');
        Route::post('store', 'RecruitmentController@store')->name('store');
    
        Route::get('edit/{id}', 'RecruitmentController@edit')->name('edit');
        Route::post('update/{id}', 'RecruitmentController@update')->name('update');
    
        Route::get('destroy/{id}', 'RecruitmentController@destroy')->name('destroy');
    });

    
    Route::prefix('monngon')->name('monngon.')->group(function(){
        Route::get('index', 'MonNgonController@index')->name('index');
        Route::get('create', 'MonNgonController@create')->name('create');
        Route::post('store', 'MonNgonController@store')->name('store');
    
        Route::get('edit/{id}', 'MonNgonController@edit')->name('edit');
        Route::post('update/{id}', 'MonNgonController@update')->name('update');
    
        Route::get('destroy/{id}', 'MonNgonController@destroy')->name('destroy');
    });



    Route::prefix('unit')->name('unit.')->group(function(){
        Route::get('index', 'UnitController@index')->name('index');
        Route::get('create', 'UnitController@create')->name('create');
        Route::post('store', 'UnitController@store')->name('store');

        Route::get('edit/{id}', 'UnitController@edit')->name('edit');
        Route::post('update/{id}', 'UnitController@update')->name('update');

        Route::get('destroy/{id}', 'UnitController@destroy')->name('destroy');

    });

    
    Route::prefix('supplier')->name('supplier.')->group(function(){
        Route::get('index', 'SupplierController@index')->name('index');
        Route::get('create', 'SupplierController@create')->name('create');
        Route::post('store', 'SupplierController@store')->name('store');

        Route::get('edit/{id}', 'SupplierController@edit')->name('edit');
        Route::post('update/{id}', 'SupplierController@update')->name('update');

        Route::get('destroy/{id}', 'SupplierController@destroy')->name('destroy');

    });


    Route::prefix('lot-order')->name('lot-order.')->group(function(){
        Route::get('index', 'LotOrđerController@index')->name('index');
        Route::get('create', 'LotOrđerController@create')->name('create');
        Route::post('store', 'LotOrđerController@store')->name('store');

        Route::get('edit/{id}', 'LotOrđerController@edit')->name('edit');
        Route::post('update/{id}', 'LotOrđerController@update')->name('update');

        Route::get('destroy/{id}', 'LotOrđerController@destroy')->name('destroy');

    });


    Route::prefix('sale')->name('sale.')->group(function(){
        Route::get('index', 'SaleController@index')->name('index');
        Route::get('create', 'SaleController@create')->name('create');
        Route::post('store', 'SaleController@store')->name('store');

        Route::get('edit/{id}', 'SaleController@edit')->name('edit');
        Route::post('update/{id}', 'SaleController@update')->name('update');

        Route::get('destroy/{id}', 'SaleController@destroy')->name('destroy');

    });


    Route::prefix('promotional')->name('promotional.')->group(function(){
        Route::get('index', 'PromotionalController@index')->name('index');
        Route::get('create', 'PromotionalController@create')->name('create');
        Route::post('store', 'PromotionalController@store')->name('store');

        Route::get('edit/{id}', 'PromotionalController@edit')->name('edit');
        Route::post('update/{id}', 'PromotionalController@update')->name('update');

        Route::get('destroy/{id}', 'PromotionalController@destroy')->name('destroy');

    });


    Route::prefix('kindofuser')->name('kindofuser.')->group(function(){
        Route::get('index', 'KindOfUserController@index')->name('index');
        Route::get('create', 'KindOfUserController@create')->name('create');
        Route::post('store', 'KindOfUserController@store')->name('store');

        Route::get('edit/{id}', 'KindOfUserController@edit')->name('edit');
        Route::post('update/{id}', 'KindOfUserController@update')->name('update');

        Route::get('destroy/{id}', 'KindOfUserController@destroy')->name('destroy');

    });


});


Route::get('trang-chu', 'TrangChu\PageController@page')->name('trang-chu');

Route::get('dang-ki', 'TrangChu\PageController@dangki')->name('dangki');
Route::post('dang-ki', 'TrangChu\PageController@xulydangki')->name('xulydangki');


Route::get('khuyen-mai', 'TrangChu\PageController@khuyenmai')->name('khuyen-mai');
Route::get('lien-he', 'TrangChu\PageController@lienhe')->name('lien-he');
