<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class NonAuthController extends ViewController
{
    //
    public function __construct() { 
        // parent::__construct();
        // echo ;
        // if (Auth::check()) {
        //     echo 'đã nhận được thông tin';
        //     view()->share('user_login', Auth::user());
        //     if(isset($user_login)){
        //         echo "đã nhận được login";
        //     }else {
        //         echo "không nhận được login";
        //     }
        // }
    }
    // public function __construct()
    // {
        // parent::__construct();
        // $this->middleware('auth');
        // $this->user = Auth::user();
        
    // }

    
}
