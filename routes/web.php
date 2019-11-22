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
//     return view('admin.partials.addproduct');
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
        Route::get('listproducts', [ 
            'as'=> 'listproducts',
            'uses'=>'Pages\\Auth\\AdminController\\AdminProducts@getListproduct']);

        Route::get('editproducts','Pages\\Auth\\AdminController\\AdminProducts@getEditproduct');

        Route::get('addproducts','Pages\\Auth\\AddProductController@getAddproduct');
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('listusers','Pages\\Auth\\ListUserController@getListuser');

        Route::get('editusers','Pages\\Auth\\EditUserController@getEdituser');
        
        Route::get('addusers','Pages\\Auth\\AddUserController@getAdduser');
    });
    Route::group(['prefix' => 'categorys'], function () {

        Route::get('editcategorys','Pages\\Auth\\AdminController\\AdminCategorys@getEditcategory');
        
        Route::get('addcategorys','Pages\\Auth\\AdminController\\AdminCategorys@getAddcategory');

        Route::post('addcategorys','Pages\\Auth\\AdminController\\AdminCategorys@postAddcategory');
    });
});
ahsdhjsad hhhhhhhhhhhhhhhhhh
ggggggggggggggggg  chinh sua trong master
jugjgu