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

Route::get('login', 'LoginController@showViewLogin')->name('showViewLogin');
Route::post('login', 'LoginController@progressLogin')->name('progressLogin');

Route::get('logout', 'LoginController@logout')->name('logout');


Route::middleware('check_login')->group(function(){
        Route::get('admin','Admin\AdminController@index')->name('admin');

        Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

            Route::prefix('category')->name('category.')->group(function(){
                Route::get('index','CategoryController@index')->name('index');

                Route::get('create','CategoryController@create')->name('create');
                Route::post('store','CategoryController@store')->name('store');

                Route::get('edit/{id}', 'CategoryController@edit')->name('edit');
                Route::post('update/{id}', 'CategoryController@update')->name('update');

                Route::get('status/{id}', 'CategoryController@status')->name('status');
                Route::get('destroy/{id}', 'CategoryController@destroy')->name('destroy');
            });

            Route::prefix('product')->name('product.')->group(function(){
                Route::get('index','ProductController@index')->name('index');

                Route::get('create','ProductController@create')->name('create');
                Route::post('store','ProductController@store')->name('store');

                Route::get('edit/{id}', 'ProductController@edit')->name('edit');
                Route::post('update/{id}', 'ProductController@update')->name('update');

                Route::get('hot/{id}', 'ProductController@hot')->name('hot');
                Route::get('status/{id}', 'ProductController@status')->name('status');
                Route::get('destroy/{id}', 'ProductController@destroy')->name('destroy');
            });

            Route::prefix('user')->name('user.')->group(function(){

                Route::get('index','UserController@index')->name('index');

                Route::get('create','UserController@create')->name('create');
                Route::post('store','UserController@store')->name('store');
                // Route::get('index',['as'=>'index','uses'=>'UserController@index','middleware'=>'checkacl:user-list']);

                // Route::get('create',['as'=>'create','uses'=>'UserController@create','middleware'=>'checkacl:user-add']);
                // Route::post('store',['as'=>'store','uses'=>'UserController@store','middleware'=>'checkacl:user-add']);

                Route::get('edit/{id}', 'UserController@edit')->name('edit');
                Route::post('update/{id}', 'UserController@update')->name('update');
                // Route::get('edit/{id}',['as'=>'edit','uses'=>'UserController@edit','middleware'=>'checkacl:user-edit']);
                // Route::post('update/{id}',['as'=>'update','uses'=>'UserController@update','middleware'=>'checkacl:user-edit']);

                Route::get('status/{id}', 'UserController@status')->name('status');
                // Route::post('status/{id}',['as'=>'status','uses'=>'UserController@status', 'middleware'=>'checkacl:user-list']);

                Route::get('destroy/{id}', 'UserController@destroy')->name('destroy');
                // Route::get('destroy/{id}',['as'=>'destroy','uses'=>'UserController@destroy','middleware'=>'checkacl:user-delete']);
            });

            Route::prefix('supplier')->name('supplier.')->group(function(){
                Route::get('index','SupplierController@index')->name('index');

                Route::get('create','SupplierController@create')->name('create');
                Route::post('store','SupplierController@store')->name('store');

                Route::get('edit/{id}', 'SupplierController@edit')->name('edit');
                Route::post('update/{id}', 'SupplierController@update')->name('update');

                Route::get('destroy/{id}', 'SupplierController@destroy')->name('destroy');
            });

            Route::prefix('customer')->name('customer.')->group(function(){
                Route::get('index','CustomerController@index')->name('index');

                Route::get('create','CustomerController@create')->name('create');
                Route::post('store','CustomerController@store')->name('store');

                Route::get('edit/{id}', 'CustomerController@edit')->name('edit');
                Route::post('update/{id}', 'CustomerController@update')->name('update');

                Route::get('destroy/{id}', 'CustomerController@destroy')->name('destroy');
            });

            Route::prefix('shipment')->name('shipment.')->group(function(){
                Route::get('index','ShipmentController@index')->name('index');

                Route::get('create','ShipmentController@create')->name('create');
                Route::post('store','ShipmentController@store')->name('store');

                Route::get('edit/{id}', 'ShipmentController@edit')->name('edit');
                Route::post('update/{id}', 'ShipmentController@update')->name('update');

                Route::get('status/{id}', 'ShipmentController@status')->name('status');
                Route::get('destroy/{id}', 'ShipmentController@destroy')->name('destroy');
            });

            Route::prefix('shipmentdetail')->name('shipmentdetail.')->group(function(){
                Route::get('index','ShipmentDetailController@index')->name('index');

                Route::get('create','ShipmentDetailController@create')->name('create');
                Route::post('store','ShipmentDetailController@store')->name('store');

                Route::get('edit/{id}', 'ShipmentDetailController@edit')->name('edit');
                Route::post('update/{id}', 'ShipmentDetailController@update')->name('update');

                Route::get('status/{id}', 'ShipmentDetailController@status')->name('status');
                Route::get('destroy/{id}', 'ShipmentDetailController@destroy')->name('destroy');
            });

            Route::prefix('news')->name('news.')->group(function(){
                Route::get('index','NewsController@index')->name('index');

                Route::get('create','NewsController@create')->name('create');
                Route::post('store','NewsController@store')->name('store');

                Route::get('edit/{id}', 'NewsController@edit')->name('edit');
                Route::post('update/{id}', 'NewsController@update')->name('update');

                Route::get('destroy/{id}', 'NewsController@destroy')->name('destroy');
            });

            Route::prefix('slide')->name('slide.')->group(function(){
                Route::get('index','SlideController@index')->name('index');

                Route::get('create','SlideController@create')->name('create');
                Route::post('store','SlideController@store')->name('store');

                Route::get('destroy/{id}', 'SlideController@destroy')->name('destroy');
            });

            Route::prefix('food')->name('food.')->group(function(){
                Route::get('index','FoodController@index')->name('index');

                Route::get('create','FoodController@create')->name('create');
                Route::post('store','FoodController@store')->name('store');

                Route::get('edit/{id}', 'FoodController@edit')->name('edit');
                Route::post('update/{id}', 'FoodController@update')->name('update');
                Route::get('status/{id}', 'FoodController@status')->name('status');

                Route::get('destroy/{id}', 'FoodController@destroy')->name('destroy');

            });

            Route::prefix('role')->name('role.')->group(function(){
                Route::get('index','RoleController@index')->name('index');

                Route::get('create','RoleController@create')->name('create');
                Route::post('store','RoleController@store')->name('store');

                Route::get('edit/{id}', 'RoleController@edit')->name('edit');
                Route::post('update/{id}', 'RoleController@update')->name('update');

                Route::get('destroy/{id}', 'RoleController@destroy')->name('destroy');

                // Route::get('index',['as'=>'index','uses'=>'RoleController@index','middleware'=>'checkacl:role-list']);

                // Route::get('create',['as'=>'create','uses'=>'RoleController@create','middleware'=>'checkacl:role-add']);
                // Route::post('store',['as'=>'store','uses'=>'RoleController@store','middleware'=>'checkacl:role-add']);

                // Route::get('edit/{id}',['as'=>'edit','uses'=>'RoleController@edit','middleware'=>'checkacl:role-edit']);
                // Route::post('update/{id}',['as'=>'update','uses'=>'RoleController@update','middleware'=>'checkacl:role-edit']);

                // Route::get('destroy/{id}',['as'=>'destroy','uses'=>'RoleController@destroy','middleware'=>'checkacl:role-delete']);

            });

            Route::prefix('permission')->name('permission.')->group(function(){
                Route::get('index','PermissionController@index')->name('index');

                Route::get('create','PermissionController@create')->name('create');
                Route::post('store','PermissionController@store')->name('store');

                Route::get('edit/{id}', 'PermissionController@edit')->name('edit');
                Route::post('update/{id}', 'PermissionController@update')->name('update');

                Route::get('destroy/{id}', 'PermissionController@destroy')->name('destroy');

                // Route::get('index',['as'=>'index','uses'=>'PermissionController@index','middleware'=>'checkacl:permission-list']);

                // Route::get('create',['as'=>'create','uses'=>'PermissionController@create','middleware'=>'checkacl:permission-add']);
                // Route::post('store',['as'=>'store','uses'=>'PermissionController@store','middleware'=>'checkacl:permission-add']);

                // Route::get('edit/{id}',['as'=>'edit','uses'=>'PermissionController@edit','middleware'=>'checkacl:permission-edit']);
                // Route::post('update/{id}',['as'=>'update','uses'=>'PermissionController@update','middleware'=>'checkacl:permission-edit']);

                // Route::get('destroy/{id}',['as'=>'destroy','uses'=>'PermissionController@destroy','middleware'=>'checkacl:permission-delete']);

            });

            Route::prefix('bill')->name('bill.')->group(function(){
                
                Route::get('index','BillController@index')->name('index');

                Route::get('bill-detail/{id}','BillController@show')->name('show');
                Route::get('status/{id}', 'BillController@status')->name('status');
            });

            Route::prefix('comment')->name('comment.')->group(function(){
                Route::get('index','CommentController@index')->name('index');

                Route::get('status/{id}', 'CommentController@status')->name('status');

                Route::get('create','CommentController@create')->name('create');
                Route::post('create','CommentController@store')->name('store');


                Route::get('edit/{id}', 'CommentController@edit')->name('edit');
                Route::post('update/{id}', 'CommentController@update')->name('update');

                Route::get('destroy/{id}', 'CommentController@destroy')->name('destroy');

            });

            Route::prefix('recruitment')->name('recruitment.')->group(function(){
                Route::get('index','RecruitmentController@index')->name('index');

                Route::get('status/{id}', 'RecruitmentController@status')->name('status');

                Route::get('create','RecruitmentController@create')->name('create');
                Route::post('store','RecruitmentController@store')->name('store');


                Route::get('edit/{id}', 'RecruitmentController@edit')->name('edit');
                Route::post('update/{id}', 'RecruitmentController@update')->name('update');

                Route::get('destroy/{id}', 'RecruitmentController@destroy')->name('destroy');

            });
    });
});



//Page

Route::namespace('Page')->group(function(){

    Route::get('/', 'PageController@getIndex');

    Route::get('trang-chu', 'PageController@getIndex')->name('trang-chu');

    Route::get('loai-san-pham/{id}', 'CategoryPageController@getCategory')->name('loai-san-pham');

    Route::get('chi-tiet-san-pham/{url}', 'ProductPageCotroller@getProductDetail')->name('chi-tiet-san-pham');

    Route::get('lien-he', 'PageController@getContact')->name('lien-he');

    Route::get('gioi-thieu', 'PageController@getAbout')->name('gioi-thieu');

    Route::get('search','PageController@getSearch')->name('tim-kiem');

    Route::get('404','OopsController@Oops')->name('Oops');

    Route::get('tin-tuc','NewsController@getNews')->name('tin-tuc');

    Route::get('chi-tiet-tin-tuc/{url}','NewsController@News')->name('chi-tiet-tin-tuc');

    Route::get('mon-ngon','FoodController@getFood')->name('mon-ngon');

    Route::get('chi-tiet-mon-ngon/{id}','FoodController@Food')->name('chi-tiet-mon-ngon');

    Route::get('tuyen-dung','RecruitmentController@getRecruitment')->name('tuyen-dung');

    Route::get('chi-tiet-tuyen-dung/{url}','RecruitmentController@Recruitment')->name('chi-tiet-tuyen-dung');


    Route::get('add-to-cart/{id}','CartController@getAddtoCart')->name('themgiohang');
    Route::get('del-cart/{id}','CartController@getDelItemCart')->name('xoagiohang');

    Route::get('dat-hang','CartController@getCheckout')->name('dathang');
    Route::post('dat-hang','CartController@postCheckout')->name('dathang');

    Route::post('Save-All', 'CartController@SaveAllList');

});
