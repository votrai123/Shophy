<?php

namespace App\Http\Controllers\Pages\Auth;
// namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Pages\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class RegisterController extends AuthController
{
    //
    public function getRegister() {
        return $this->view('partials.register');
    }
    public function postRegister(Request $req) {
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'Fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sữ dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
            // echo $req->Fullname;
            // echo $req->email;
            // echo Hash::make($req->password);
            // echo $req->Address;
            // echo $req->Phone;
            // echo $req->bday;

        $users = new User();
        $users->full_name = $req->Fullname;
        $users->email = $req->email;
        $users->password = Hash::make($req->password);
        $users->address = $req->Address;
        $users->phone = $req->Phone;
        $users->birth = $req->bday;
        //  echo $req ->fullname;
        // echo $req -> birth;
        // echo $req -> email;
        // echo Hash::make($req->password);
        // echo 'repassword';
        // echo $req -> address;
        // echo $req -> phone;
        $users->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
}
