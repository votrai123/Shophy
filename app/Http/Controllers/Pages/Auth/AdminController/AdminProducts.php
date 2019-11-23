<?php

namespace App\Http\Controllers\Pages\Auth\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\Products;

class AdminProducts extends Controller
{
    //
    public function getListproduct() {
        $categorys = ProductType::all();
        $products = Products::all();
        return view('admin.products.listproduct',compact('categorys','products'));
    }
    public function getEditproduct() {
        return view('admin.products.editproduct');
    }
    public function getAddproduct() {
        return view('admin.products.addproduct');
    }
    public function deletecate(Request $req) {
        $dcategorys = ProductType::where('id',$req->id)->first();
        return view('admin.products.listproduct',compact('dcategorys'));
    }
} 
