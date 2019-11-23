<?php

namespace App\Http\Controllers\Pages\Auth\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductType;
use Illuminate\Support\Facades\DB;

class AdminCategorys extends Controller
{
    //
    public function getEditcategory($id) {
        $categorys = ProductType::find($id);
        return view('admin.products.category.editcategory',compact('categorys'));
    }
    public function postEditcategory(Request $req,$id) {
        $categorys = ProductType::find($id);
        $this->validate($req,
        [
            'namecategory' => 'required|unique:type_products,name|min:3|max:150'
        ],
        [
            'namecategory.required' => 'Chưa nhập tên thể loại thì lấy gì add',
            'namecategory.unique' => 'Cái này có rồi',
            'namecategory.min' => 'Ít nhất là 3 kí tự,Nhiều nhất là 150 kí tự',
            'namecategory.max' => 'Nhiều nhất là 150 kí tự'
        ]);

        
        $categorys -> name = $req ->namecategory;
        $categorys -> description = $req -> descriptions;
        $categorys -> save();
        return redirect('/admin/categorys/editcategorys/'.$id)->with('thongbao','Đã sửa thành công');
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
    public function postDelcategory($id) {
        DB::table('products')->where('id_type', '=', $id)->delete();
        DB::table('type_products')->where('id', '=', $id)->delete();
    }
}
 