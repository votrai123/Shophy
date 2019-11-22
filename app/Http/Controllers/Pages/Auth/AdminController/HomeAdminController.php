<?php

namespace App\Http\Controllers\Pages\Auth\AdminController;

// use App\Http\Controllers\Controller;
use App\Http\Controllers\Pages\AuthController;
use Illuminate\Http\Request;

class HomeAdminController extends AuthController
{
    //
    public function getAdminPage() {
        return $this->view('admin.partials.home');
    }
}
