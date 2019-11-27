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
}