<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('validateEmail/{email}',function($email){
    $data = DB::table('users')
    ->where('email', $email)
    ->count();
    return $data;
});
Route::post('deletecate/{id}', function ($id) {
    $data = DB::table('type_product')
    ->where('id', '=', $id)
    ->delete();
    dd($data);
    // return $data;
});
Route::post('deletepro/{id}', function ($id) {
    $data = DB::table('products')
    ->where('id', '=', $id)
    ->delete();
    dd($data);
    // return $data;
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
