<?php

namespace App\Http\Controllers\Pages\Auth\AdminController;


// use App\Http\Controllers\Controller;
use App\Http\Controllers\Pages\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends AuthController
{
    //
    public function getListuser() {
        // $users = User::where();
        // $admins = DB::select('select * from users where admin in (1)');
        $users = DB::select('select * from users');
        return view('admin.user.listusers',compact('users'));
    }
    public function getAdminAndUser($role) {
        $adminorcus = User::where('admin',$role)->get();
        foreach ($adminorcus as $adcs) {
            echo"
            <tr>
            <td class='tm-product-name'> <a href='/admin/users/editusers/".$adcs->id."'  
            style='color:white;'>".$adcs->full_name."</a></td>
            <td>".$adcs->birth."</td>
            <td>".$adcs->email."</td>
           <td>".$adcs->phone."</td>
            <td>".$adcs->address."</td>
            <td>
                <a href='#' class='tm-product-delete-link'>
                    <i class='far fa-trash-alt tm-product-delete-icon'  
                    onclick='setidusers(".$adcs->id.")' data-toggle='modal' data-target='#myModal'></i>
                </a>
            </td> </tr>";
            // <td class="tm-product-name">
            //                 <a href="/admin/users/editusers/{{$us->id}}"  style="color:white;">{{$us->full_name}}
            //                 </a></td>
        }
    }
    public function getAdduser(){

        return view('admin.user.addusers');
    }
    public function getEdituser($id){
        $users = User::find($id);
        return view('admin.user.editusers',compact('users'));
    }
    public function postEdituser(Request $req,$id) {
        // return 1;
        $users = User ::find($id);
        $this->validate($req,
        [
            'fullname' => 'required|min:6|max:155',
            'birth' => 'required',
            'email'=>'required|email',
            'password' =>'required',
            'password2' => 'required|same:password',
            'address'  =>'required|min:6|max:155',
            'phone' => 'required'
            // 'admin' => 'required'        

        ],
        [
            'fullname.required' => 'Hãy nhập họ và tên',
        //   'fullname.required' => 'Full Name Cái này có rồi',
            'fullname.min' => 'Tên có Ít nhất là 6 kí tự,Nhiều nhất là 155 kí tự',
            'address.min' => 'Địa chỉ có ít nhất là 6 kí tự,Nhiều nhất là 155 kí tự',
            'fullname.max' => 'Nhiều nhất là 150 kí tự',
            'address.max' => 'Địa chỉ có Nhiều nhất là 150 kí tự',
            'birth.required' => 'hãy chọn ngày sinh',
            'password.required'=> 'Hãy nhập mật khẩu',
            'password2.required'=> 'Hãy nhập lại mật khẩu',
            'password2.same' => 'Mật khẩu không giống nhau',
            'address.required' => 'Hãy nhập địa chỉ',
            'phone.required'=> 'Hãy nhập số điện thoại',
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email'
            // 'email.unique'=>'Email này đã được sử dụng'
        ]);
        $time=time();
        $users -> full_name = $req -> fullname;
        $users -> birth = $req -> birth;
        $users -> email = $req -> email;
        $users-> password = Hash::make($req-> password);
        $users-> address = $req-> address;
        $users-> phone = $req-> phone;
        // $product -> id_type = $req -> $_POST['category'];
        $users-> admin = $req-> admin;
        $users-> updated_at =  date("Y-m-d",$time);
        // echo  $req -> fullname;
        // echo  $req -> birth;
        // echo  $req -> email;
        // echo Hash::make($req-> password);
        // echo  $req -> address;
        // echo  $req -> phone;
        // echo "<br>";
        // echo $req-> admin;
        $users -> save();
         // if (isset($_POST['category']))
        // {
        //     $category = $_POST['category'];
        //     echo "$category";
        // }
        
        return redirect('/admin/users/editusers/'.$id)->with('thongbao','Đã sữa thành công');
    }
    public function postAdduser(Request $req){
        // $categorys = User::find($id);
        $this->validate($req,
        [
            // 'namecategory' => 'required|unique:type_products,name|min:3|max:150',
            'fullname' => 'required|min:6|max:155',
            'birth' => 'required',
            'email'=>'required|email|unique:users,email',
            'password' =>'required',
            'repassword' => 'required|same:password',
            'address'  =>'required|min:6|max:155',
            'phone' => 'required|'
        ],
        [
            'fullname.required' => 'Chưa nhập tên thì lấy gì sửa',
            // 'fullname.required' => 'Cái này có rồi',
            'fullname.min' => 'Tên có Ít nhất là 6 kí tự,Nhiều nhất là 15 kí tự',
            'address.min' => 'Địa chỉ có ít nhất là 6 kí tự,Nhiều nhất là 15 kí tự',
            'fullname.max' => 'Nhiều nhất là 150 kí tự',
            'address.max' => 'Địa chỉ có Nhiều nhất là 150 kí tự',
            'birth.required' => 'hãy chọn ngày sinh',
            'password.required'=> 'Hãy nhập mật khẩu',
            'repassword.same' => 'Mật khẩu không giống nhau',
            'address.required' => 'Hãy nhập địa chỉ',
            'phone.required'=> 'Hãy nhập địa chỉ',
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sữ dụng'

        ]);
        
        $users = new User;
        $users -> full_name = $req ->fullname;
        $users -> birth = $req -> birth;
        $users -> email = $req -> email;
        $users->password = Hash::make($req->password);
        
        $users -> address = $req -> address;
        $users -> phone = $req -> phone;
        // echo $req ->fullname;
        // echo $req -> birth;
        // echo $req -> email;
        // echo Hash::make($req->password);
        // echo 'repassword';
        // echo $req -> address;
        // echo $req -> phone;
        //$categorys -> name = $req ->namecategory;
       // $categorys -> description = $req -> descriptions;
        $users -> save();
        return redirect('/admin/users/addusers/')->with('thongbao','Đã thêm thành công');
    }
    //
    public function postDelusers($id) {
        DB::table('users')
        ->where('id', '=', $id)->delete();
    }
}