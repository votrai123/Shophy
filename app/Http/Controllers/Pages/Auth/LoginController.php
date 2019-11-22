<?php

namespace App\Http\Controllers\Pages\Auth;

use App\Http\Controllers\Pages\AuthController;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
class LoginController extends AuthController
{
    //
    public function getLogin() {
        // echo 'ok';
        return view('partials.login');
        
    }
    use AuthenticatesUsers;
    public function postLogin(Request $req) {
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        
        $credentials = array('email' =>$req->email ,'password' =>$req->password );
        // echo $req->email ;
        // echo $req->password ;
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            // echo 'ok';
            $user = Auth::user();

            $name = $user->full_name; //or Auth::user()->id;
            // $user_email = $user->email; // or Auth::user()->email;
            dd($name);

            // return redirect()->intended('home');
            // return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }else {
            // echo 'error';
            return redirect()->intended('login');
            // return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
    }
}
