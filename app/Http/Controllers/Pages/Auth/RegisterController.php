<?php

namespace App\Http\Controllers\Pages\Auth;
// namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Pages\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Mail\SendForgot;
use Illuminate\Support\Facades\Mail;

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
        $users->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
    public function getForgot() {
        return view('partials.forgot-pass');
    }
    public function postForgot(Request $req) {
        // dd($req->all());
        $users = User::whereEmail($req->email)->first();

        if($users == null){
            return redirect()->back()->with(['flag'=>'danger','message'=>'Email not exists']);
        }
        // $users = Sentinel::findById($users->id);
        // $reminder = Reminder::exists($users) ? : Reminder::create($users);
        // $this->sendEmail($users, $reminder->code);
        $data=array(
            'email'=>$req->input('email'),
            'name' => $users->full_name,
            'id' => $users->id,
    );
    // dd($data);
    Mail::to($req->input('email'))->send(new SendForgot($data));

        return redirect()->back()->with(['flag'=>'danger','message'=>'Reset code sent to your email.']);
    }

    public function getReset($id) {
        $users = User::find($id);
        return view('partials.resetpass',compact('users'));
    }

    public function postReset(Request $req,$id) {
        $users = User ::find($id);
        $this->validate($req,
        [
            'password' =>'required',
            're_password' => 'required|same:password'       

        ],
        [
            
            'password.required'=> 'Hãy nhập mật khẩu',
            're_password.required'=> 'Hãy nhập lại mật khẩu',
            're_password.same' => 'Mật khẩu không giống nhau'
        ]);

        $users-> password = Hash::make($req-> password);
        $users -> save();
        return redirect('login')->with(['flag'=>'succes','message'=>'Reset password Success']);
    }
   
}

