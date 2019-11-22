<?php

namespace App\Http\Controllers\Pages\Auth\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductType;

class AdminCategorys extends Controller
{
    //
    public function getEditcategory() {
        return view('admin.products.category.editcategory');
    }
    public function getAddcategory() {
        return view('admin.products.category.addcategory');
    }
    public function postAddcategory(Request $req) {
        $this->validate($req,
        [
            'namecategory' => 'required|min:3|max:150'
        ],
        [
            'namecategory.required' => 'Chưa nhập tên thể loại thì lấy gì add',
            'namecategory.min' => 'Ít nhất là 3 kí tự,Nhiều nhất là 150 kí tự',
            'namecategory.max' => 'Nhiều nhất là 150 kí tự'
        ]);

        $category = new ProductType;
        $category -> name = $req ->namecategory;
        $category -> description = $req -> descriptions;
        $category -> save();
        return redirect('admin/categorys/addcategorys')->with('thongbao','Đã thêm thành công');
    }
}
