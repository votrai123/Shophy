<?php

namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;

use App\Http\Controllers\Pages\ViewController;
use Illuminate\Support\Facades\Auth;

class AuthController extends ViewController
{
    //
    // protected $user;
    // public function __construct()
    // {
        // parent::__construct();
        // $this->middleware('auth');
        // $this->user = Auth::user();
    // }

    // function Dangnhap() {
    //     echo 'chưa nhận được thông tin';
    //     if (Auth::check()) {
    //         echo 'đã nhận được thông tin';
    //         view()->share('user_login', Auth::user());
    //         if(isset($user_login)){
    //             echo "đã nhận được login";
    //         }else {
    //             echo "không nhận được login";
    //         }
    //     }
    // }
}
