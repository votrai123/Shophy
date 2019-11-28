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

// Route::get('/haizz', function () {
//     return view('admin.user.listusers-op');
// });
Route::get('product/{type}', [ 
    'as'=> 'productlist',
    'uses'=>'Pages\\NonAuths\\ProductShopController@getProduct']);
Route::get('/detail-product/{id}', [ 
    'as'=> 'detailproduct',
    'uses'=>'Pages\\NonAuths\\DetailproductController@getDetailproduct']);
Route::get('coming-soon', [ 
    'as'=> 'coming-soon',
    'uses'=>'Pages\\NonAuths\\ComingsoonController@getComingsoon']);
Route::get('contact', [ 
    'as'=> 'contact',
    'uses'=>'Pages\\NonAuths\\ContactController@getContact']);
Route::get('faqs', [ 
    'as'=> 'faqs',
    'uses'=>'Pages\\NonAuths\\FaqsController@getFaqs']);
Auth::routes();
// Route::get('/home', 'Pages\\Auth\\HomeController@getIndex');
Route::get('home', [ 
    'as'=> 'home',
    'uses'=>'Pages\\NonAuths\\HomeController@getIndex']);
Route::get('login', [ 
    'as'=> 'dang-nhap',
    'uses'=>'Pages\\Auth\\LoginController@getLogin']);
Route::post('login', [ 
    'as'=> 'dang-nhap',
    'uses'=>'Pages\\Auth\\LoginController@postLogin']);
Route::get('register', [ 
    'as'=> 'dang-ky',
    'uses'=>'Pages\\Auth\\RegisterController@getRegister']);
Route::post('register', [ 
    'as'=> 'dang-ky',
    'uses'=>'Pages\\Auth\\RegisterController@postRegister']);
Route::get('admin/adminpage', [ 
    'as'=> 'admin',
    'uses'=>'Pages\\Auth\\HomeAdminController@getAdminPage']);
Route::group(['prefix' => 'admin', 'as'=>'admin'], function () {
    Route::group(['prefix' => 'products', 'as'=>'products'], function () {
        Route::get('listproducts','Pages\\Auth\\AdminController\\AdminProducts@getListproduct');

        Route::get('editproducts/{id}','Pages\\Auth\\AdminController\\AdminProducts@getEditproduct');
        Route::post('editproducts/{id}','Pages\\Auth\\AdminController\\AdminProducts@postEditproduct');

        Route::get('addproducts','Pages\\Auth\\AdminController\\AdminProducts@getAddproduct');
        Route::post('addproducts','Pages\\Auth\\AdminController\\AdminProducts@postAddproduct');

        Route::post('delproducts/{id}','Pages\\Auth\\AdminController\\AdminProducts@postDelproduct');
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('listusers','Pages\\Auth\\AdminController\\UserController@getListuser');
        Route::get('ajax/role/{role}', 'Pages\\Auth\\AdminController\\UserController@getAdminAndUser');

        Route::get('editusers','Pages\\Auth\\AdminController\\UserController@getEdituser');
        
        Route::get('addusers','Pages\\Auth\\AdminController\\UserController@getAdduser');
    });
    Route::group(['prefix' => 'categorys'], function () {

        Route::get('editcategorys/{id}','Pages\\Auth\\AdminController\\AdminCategorys@getEditcategory');
        Route::post('editcategorys/{id}','Pages\\Auth\\AdminController\\AdminCategorys@postEditcategory');

        Route::get('addcategorys','Pages\\Auth\\AdminController\\AdminCategorys@getAddcategory');
        Route::post('addcategorys','Pages\\Auth\\AdminController\\AdminCategorys@postAddcategory');

        Route::post('delcategorys/{id}', 'Pages\\Auth\\AdminController\\AdminCategorys@postDelcategory');
    });
});