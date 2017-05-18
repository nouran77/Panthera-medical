<?php

/* Register & Login */
Route::get('/','HomeController@index');
Route::get('login', 'HomeController@getLogin')->name('login');
Route::post('login', 'HomeController@login');
Route::post('register', 'HomeController@register');

/* Product */
Route::get('products', 'ProductController@index');
Route::get('/productDetails/{id}','ProductController@productDetails')->name('productDetails');

/* Cart */
Route::resource('cart','CartController');

/* Contact */
Route::get('contact-us' ,'ContactController@index');
Route::get('about-us','ContactController@about');


Route::group(['middleware' => 'auth'], function(){

    /*=======================================
    =            Admin Dashboard            =
    =======================================*/
    Route::group(['prefix' => 'admin','middleware' => ['admin']], function() {

        Route::get('/', 'AdminController@dashboard');
        Route::get('settings','SettingsController@getSettings');
        Route::post('postPriceSettings','SettingsController@postPriceSettings');


        /* Categories */

        Route::get('categories', 'CategoryController@getAllCategories');
        Route::post('addNewCategory','CategoryController@addNewCategory');
        Route::get('editCategory','CategoryController@editCategory');
        Route::put('updateCategory','CategoryController@updateCategory');
        Route::delete('deleteCategory','CategoryController@deleteCategory');

        /* Products */

        Route::get('products','ProductController@getAllProducts');
        Route::post('addNewProduct','ProductController@addNewProduct');
        Route::get('editProduct','ProductController@editProduct');
        Route::put('updateProduct','ProductController@updateProduct');
        Route::delete('deleteProduct','ProductController@deleteProduct');

        /* Admin */

        Route::get('admins','AdminController@getAllAdmins');
        Route::post('addNewAdmin','AdminController@addNewAdmin');
        Route::get('editAdmin','AdminController@editAdmin');
        Route::put('updateAdmin','AdminController@updateAdmin');
        Route::delete('deleteAdmin','AdminController@deleteAdmin');



    });
    /*=====  End of Admin Dashboard  ======*/
});

Route::get('logout', 'HomeController@logout')->name('logout');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
