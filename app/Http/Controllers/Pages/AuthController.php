<?php

namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;


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
    function __construct() {
        $this->Dangnhap();
    }

    function Dangnhap() {
        if (Auth::check()) {
            view()->share('user_login', Auth::user());
        }
    }
}
