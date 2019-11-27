<?php

namespace App\Http\Controllers\Pages\Auth\AdminController;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
            <td class='tm-product-name'>".$adcs->full_name."</td>
            <td>".$adcs->birth."</td>
            <td>".$adcs->email."</td>
           <td>".$adcs->phone."</td>
            <td>".$adcs->address."</td>
            <td>
                <a href='#' class='tm-product-delete-link'>
                    <i class='far fa-trash-alt tm-product-delete-icon'></i>
                </a>
            </td> </tr>";
        }
    }
    public function getAdduser(){
        return view('admin.user.addusers');
    }
    public function postAdduser(Request $req){
        $categorys = ProductType::find($id);
        $this->validate($req,
        [
            // 'namecategory' => 'required|unique:type_products,name|min:3|max:150',
            'fullname' => 'required|min:6|max:155',
            'birth' => 'required',
            'email'=>'required|email|unique:users,email',
            'password' =>'required',
            'address'  =>'required',
            'phone' => 'required'
        ],
        [
            'fullname.required' => 'Chưa nhập tên thì lấy gì sửa',
            'fullname.required' => 'Cái này có rồi',
            'namecategory.min' => 'Ít nhất là 3 kí tự,Nhiều nhất là 150 kí tự',
            'namecategory.max' => 'Nhiều nhất là 150 kí tự'
        ]);

        
        $categorys -> name = $req ->namecategory;
        $categorys -> description = $req -> descriptions;
        $categorys -> save();
        return redirect('/admin/categorys/editcategorys/'.$id)->with('thongbao','Đã sửa thành công');
    }
