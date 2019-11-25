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
    
    }
}
