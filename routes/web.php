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
//     return view('partials.thanks');
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

Route::post('/comment/{id}', 'Pages\\NonAuths\\DetailproductController@postComment');

Route::get('/add-to-cart/{id}',[ 
    'as'=> 'add-to-cart',
    'uses'=>'Pages\\NonAuths\\CartController@getAddtoCart'] );

Route::get('/del-to-cart/{id}',[ 
    'as'=> 'del-to-cart',
    'uses'=>'Pages\\NonAuths\\CartController@getDeltoCart'] );

Route::get('ordercart',[ 
    'as'=> 'ordercard',
    'uses'=>'Pages\\NonAuths\\CartController@getCart'] );

Route::post('postordercart',[ 
    'as'=> 'postordercart',
    'uses'=>'Pages\\NonAuths\\CartController@postCart'] );


Route::post('/ordercart/send',[ 
    'as'=> 'send',
    'uses'=>'Pages\\NonAuths\\CartController@sendCart'] );

Route::get('thanks',[ 
    'as'=> 'thanks',
    'uses'=>'Pages\\NonAuths\\CartController@CamOn'] );

Route::get('home', [ 
    'as'=> 'home',
    'uses'=>'Pages\\NonAuths\\HomeController@getIndex']);




Route::get('/home/pronew', [ 
    'as'=> 'pronew',
    'uses'=>'Pages\\NonAuths\\HomeController@getHomeNew']);

Route::get('search',[
    'as' => 'search',
    'uses' =>'Pages\\NonAuths\\HomeController@getSearch']);



Route::get('login', [ 
    'as'=> 'dang-nhap',
    'uses'=>'Pages\\Auth\\LoginController@getLogin']);
Route::post('login', [ 
    'as'=> 'dang-nhap',
    'uses'=>'Pages\\Auth\\LoginController@postLogin']);
Route::get('logout', [ 
    'as'=> 'dang-xuat',
    'uses'=>'Pages\\Auth\\LoginController@getlogout']);
Route::get('register', [ 
    'as'=> 'dang-ky',
    'uses'=>'Pages\\Auth\\RegisterController@getRegister']);
Route::post('register', [ 
    'as'=> 'dang-ky',
    'uses'=>'Pages\\Auth\\RegisterController@postRegister']);
// Route::get('admin/adminpage', [ 
//     'as'=> 'admin',
//     'uses'=>'Pages\\Auth\\HomeAdminController@getAdminPage']);
// , 'middleware'=>'adminLogin'

Route::get('forgotpass', [ 
    'as'=> 'forgot-pass',
    'uses'=>'Pages\\Auth\\RegisterController@getForgot']);

Route::post('forgotpass', [ 
    'as'=> 'forgot-pass',
    'uses'=>'Pages\\Auth\\RegisterController@postForgot']);

Route::get('/resetpass/{id}', [ 
    'as'=> 'reset-pass',
    'uses'=>'Pages\\Auth\\RegisterController@getReset']);
Route::post('/resetpass1/{id}', [ 
    'as'=> 'reset-pass1',
    'uses'=>'Pages\\Auth\\RegisterController@postReset']);



Route::group(['prefix' => 'admin','middleware'=>'adminLogin'], function () {
    Route::get('admin', 'Pages\\Auth\\AdminController\\HomeAdminController@getAdminPage');
    Route::group(['prefix' => 'products', 'as'=>'products'], function () {
        Route::get('listproducts','Pages\\Auth\\AdminController\\AdminProducts@getListproduct');

        Route::get('editproducts/{id}','Pages\\Auth\\AdminController\\AdminProducts@getEditproduct');
        Route::post('editproducts/{id}','Pages\\Auth\\AdminController\\AdminProducts@postEditproduct');

        Route::get('addproducts','Pages\\Auth\\AdminController\\AdminProducts@getAddproduct');
        Route::post('addproducts','Pages\\Auth\\AdminController\\AdminProducts@postAddproduct');

        Route::post('delproducts/{id}','Pages\\Auth\\AdminController\\AdminProducts@postDelproduct');

        Route::post('delcomment/{id}','Pages\\Auth\\AdminController\\AdminProducts@postDelcomment');
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('listusers','Pages\\Auth\\AdminController\\UserController@getListuser');
        Route::get('ajax/role/{role}', 'Pages\\Auth\\AdminController\\UserController@getAdminAndUser');

        Route::get('editusers/{id}','Pages\\Auth\\AdminController\\UserController@getEdituser');
        Route::post('editusers/{id}','Pages\\Auth\\AdminController\\UserController@postEdituser');
        
        Route::get('addusers','Pages\\Auth\\AdminController\\UserController@getAdduser');
        Route::post('addusers','Pages\\Auth\\AdminController\\UserController@postAdduser');

        Route::post('deleteuser/{id}','Pages\\Auth\\AdminController\\UserController@postDelusers');
    });
    Route::group(['prefix' => 'categorys'], function () {

        Route::get('editcategorys/{id}','Pages\\Auth\\AdminController\\AdminCategorys@getEditcategory');
        Route::post('editcategorys/{id}','Pages\\Auth\\AdminController\\AdminCategorys@postEditcategory');

        Route::get('addcategorys','Pages\\Auth\\AdminController\\AdminCategorys@getAddcategory');
        Route::post('addcategorys','Pages\\Auth\\AdminController\\AdminCategorys@postAddcategory');

        Route::post('delcategorys/{id}', 'Pages\\Auth\\AdminController\\AdminCategorys@postDelcategory');
    });
    Route::group(['prefix' => 'bills'], function () {
        Route::get('listbill','Pages\\Auth\\AdminController\\BillController@getListBill');
        Route::get('ajax/status/{status}', 'Pages\\Auth\\AdminController\\BillController@getDoneorNot');
        Route::post('delbill/{id}','Pages\\Auth\\AdminController\\BillController@postDelBill');
        
        Route::post('donebill/{id}','Pages\\Auth\\AdminController\\BillController@postDoneBill');
        Route::post('detail/{id}','Pages\\Auth\\AdminController\\BillController@postDetailBill');
    });
});