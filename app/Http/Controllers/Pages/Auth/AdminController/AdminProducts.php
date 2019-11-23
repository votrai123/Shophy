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
        $categorys = ProductType::all();
        return view('admin.products.addproduct',compact('categorys'));
    }
    public function postAddproduct(Request $req) {
        $this->validate($req,
        [
            'productname' => 'required|ProName',
            'descriptions' => 'required|min:3|max:255'
        ],
        [
            'productname.required' => 'Chưa nhập tên thể loại thì lấy gì add',
            'descriptions.required' => 'Chưa nhập tên thể loại thì lấy gì add',
            'descriptions.min' => 'Ít nhất là 3 kí tự,Nhiều nhất là 255 kí tự',
            'descriptions.max' => 'Nhiều nhất là 255 kí tự'
        ]);

        $product = new Products;
        $product -> ProName = $req -> productname;
        $product -> description = $req -> descriptions;
        $product -> id_type = $req -> category;
        $product -> ProUnit = $req -> unit;
        $product -> unit_price = $req -> unit_price;
        $product -> promotion_price = $req -> unit_promotion;
        $product -> save();
        return redirect('admin/products/addproducts')->with('thongbao','Đã thêm thành công');
    }
    public function deletecate(Request $req) {
        $dcategorys = ProductType::where('id',$req->id)->first();
        return view('admin.products.listproduct',compact('dcategorys'));
    }
} 
