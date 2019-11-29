<?php

namespace App\Http\Controllers\Pages\Auth\AdminController;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getAdminAndUser($role) {
        $adminorcus = User::where('admin',$role)->get();
        foreach ($adminorcus as $adcs) {
            echo"
            <tr>
            <td class='tm-product-name'>".$adcs->full_name."</td>
            <td>".$adcs->birth."</td>
            <td>".$adcs->email."</td>
           <td>".$adcs->phone."</td>
            <td>".$adcs->address."</td>
           
            <td>
                <a href='#' class='tm-product-delete-link'>
                    <i class='far fa-trash-alt tm-product-delete-icon'></i>
                </a>
             </td>
             </tr>";
        }
    }
    //
    public function getListuser() {
        // $users = User::where();
        // $admins = DB::select('select * from users where admin in (1)');
        $users = DB::select('select * from users');
        return view('admin.user.listusers',compact('users'));
    }
    
    public function getAdduser(){
        return view('admin.user.addusers',compact('users'));
    }
    public function getedituser($id){
        $users = User::find($id);
        return view('admin.user.editusers',compact('users'));
    }
    public function postedituser(Request $req,$id) {
        // return 1;
        $users = User ::find($id);
        $this->validate($req,
        [
            //'fullname' => 'required|min:6|max:155',
            //'birth' => 'required',
            //'email'=>'required|email|unique:users,email',
            'password' =>'required',
            'repassword' => 'required|same:password',
            'address'  =>'required|min:6|max:155',
            //'phone' => 'required',
            //'admin' => 'required'        

        ],
        [
        //     'fullname.required' => 'Hãy nhập họ và tên',
        //   'fullname.required' => 'Cái này có rồi',
        //     'fullname.min' => 'Tên có Ít nhất là 6 kí tự,Nhiều nhất là 15 kí tự',
        //     'address.min' => 'Địa chỉ có ít nhất là 6 kí tự,Nhiều nhất là 15 kí tự',
        //     'fullname.max' => 'Nhiều nhất là 150 kí tự',
        //     'address.max' => 'Địa chỉ có Nhiều nhất là 150 kí tự',
        //     'birth.required' => 'hãy chọn ngày sinh',
        //     'password.required'=> 'Hãy nhập mật khẩu',
            'repassword.same' => 'Mật khẩu không giống nhau',
            'address.required' => 'Hãy nhập địa chỉ',
            'phone.required'=> 'Hãy nhập số điện thoại',
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            // 'email.unique'=>'Email này đã được sử dụng'
        ]);

        $fullname=$req -> input('fullname');
        $birth = $req -> input('birth');
        $email = $req ->input('email');
        $password=$req->input('password');
        // $repassword=$req->input('repassword');
        $address=$req->input('address');
        $phone=$req->input('phone');
        // $admin=$req->input('admin');    
        $insertArr = [
            'full_name'=>$fullname,
            'birth'=>$birth,
            'email'=>$email,
            'password'=>$password,
            'address'=>$address,
            'phone'=>$phone,
          //  'admin'=>$admin
        ];
// --------------------------------------------------------------------------------------------
    
        //return $insertArr;

        // DB::table('products')
        //    ->insert($insertArr);
           DB::table('users')
              ->where('id', $id)
              ->update($insertArr);
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
}