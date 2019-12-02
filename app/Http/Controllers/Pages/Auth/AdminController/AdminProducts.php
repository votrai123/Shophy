<?php

namespace App\Http\Controllers\Pages\Auth\AdminController;

// use App\Http\Controllers\Controller;
use App\Http\Controllers\Pages\AuthController;
use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\Products;
// use Validator;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use App\Utils\UploadFile;
use Illuminate\Support\Facades\DB;

class AdminProducts extends AuthController
{
    //
    public function getListproduct() {
        $categorys = ProductType::all();
        $products = Products::all();
        // $products = DB::table('products')
        //                                 ->join('type_products','products.id','=','type_products.id')
        //                                 ->select('products.*','type_products.name')
        //                                 ->get();
        // $products = DB::table('products')
        // // ->join('type_products','products.id','=','type_products.id')
        // ->crossJoin('type_products')
        // ->select('products.*','type_products.name')
        // ->get();
        return view('admin.products.listproduct',compact('categorys','products'));
    }
    public function getEditproduct($id) {
        $products = Products::find($id);
        $categorys = ProductType::all();
        return view('admin.products.editproduct',compact('products','categorys'));
    }
    public function postEditproduct(Request $req,$id) {
        $products = Products::find($id);
        $this->validate($req,
        [
            // 'productname'=>'required|productname|unique:products,ProName',
            // 'productname'=>'required|ProName|unique:products,ProName',
            'descriptions' => 'required|min:3|max:1500',
            'productname' => 'required|min:3|max:150',
            // 'img' => 'required',
            'unit' => 'required',
            'unit_price' => 'required',
            'unit_promotion' => 'required'
        ],
        [
            // 'productname.required' => 'Chưa nhập tên sản phẩm thì lấy gì sửa',
            // 'descriptions.required' => 'Chưa nhập tên thể loại thì lấy gì sửa',
            // 'img.required' => 'Chưa nhập hình thì lấy gì sửa',
            // 'productname.unique' => 'Cái này có rồi',
            // 'unit.required' => 'Chưa nhập đơn vị tính thì lấy gì sửa',
            // 'unit_price.required' => 'Chưa nhập đơn giá thì lấy gì sửa',
            // 'unit_promotion.required' => 'Chưa nhập giá khuyến mãi thì lấy gì sửa',
            'descriptions.min' => 'Mô tả sản phẩm Ít nhất là 3 kí tự,Nhiều nhất là 1500 kí tự',
            'descriptions.max' => 'Mô tả sản phẩm nhiều nhất là 1500 kí tự'
        ]);
        $time=time();
        $productName=$req -> input('productname');
        $description = $req -> input('descriptions');
        $id_type = $req ->input('category');
        $unit=$req->input('unit');
        $pronew = $req ->input('pronew');
        $unit_price=$req->input('unit_price');
        $promotion_price=$req->input('unit_promotion');
        

        $insertArr = [
            'ProName'=>$productName,
            'ProDescription'=>$description,
            'id_type'=>$id_type,
            'ProUnit'=>$unit,
            'ProNew' =>$pronew,
            'promotion_price'=>$promotion_price,
            'unit_price'=>$unit_price,
            'updated_at'=>date("Y-m-d",$time)
        ];
// --------------------------------------------------------------------------------------------
        // process file
        
        // info('aaaaaaaaaaaaa');
        // info($hasFile);
        $hasFile = $req->hasFile('img');
        if ($hasFile) {
            $file = $req->file('img');
        
            $newImageURL= UploadFile::uploadFile('upload',$file);
            // echo $newImageURL;
            $insertArr['ProImage'] = $newImageURL;
        }
        // return $insertArr;

        // DB::table('products')
        //    ->insert($insertArr);
           DB::table('products')
              ->where('id', $id)
              ->update($insertArr);
        return redirect('/admin/products/editproducts/'.$id)->with('thongbao','Đã sữa thành công');
    }
    public function getAddproduct() {
        $categorys = ProductType::all();
        return view('admin.products.addproduct',compact('categorys'));
    }
    public function postAddproduct(Request $req) {
        // -------------------------------------------------------------
        // extract data from input
        $this->validate($req,
        [
            // 'productname'=>'required|productname|unique:products,ProName',
            // 'productname'=>'required|ProName|unique:products,ProName',
            'descriptions' => 'required|min:3|max:255',
            'img' => 'required',
            'unit' => 'required',
            'unit_price' => 'required',
            'unit_promotion' => 'required'
        ],
        [
            'productname.required' => 'Chưa nhập tên sản phẩm thì lấy gì add',
            'descriptions.required' => 'Chưa nhập tên thể loại thì lấy gì add',
            'img.required' => 'Chưa nhập hình thì lấy gì add',
            'unit.required' => 'Chưa nhập đơn vị tính thì lấy gì add',
            'unit_price.required' => 'Chưa nhập đơn giá thì lấy gì add',
            'unit_promotion.required' => 'Chưa nhập giá khuyến mãi thì lấy gì add',
            'descriptions.min' => 'Mô tả sản phẩm Ít nhất là 3 kí tự,Nhiều nhất là 255 kí tự',
            'descriptions.max' => 'Mô tả sản phẩm nhiều nhất là 255 kí tự'
        ]);
        $productName=$req -> input('productname');
        $description = $req -> input('descriptions');
        $id_type = $req ->input('category');
        $unit=$req->input('unit');
        $unit_price=$req->input('unit_price');
        $promotion_price=$req->input('unit_promotion');
        

        $insertArr = [
            'ProName'=>$productName,
            'ProDescription'=>$description,
            'id_type'=>$id_type,
            'ProUnit'=>$unit,
            'promotion_price'=>$promotion_price,
            'unit_price'=>$unit_price
        ];
// --------------------------------------------------------------------------------------------
        // process file
        
        // info('aaaaaaaaaaaaa');
        // info($hasFile);
        $hasFile = $req->hasFile('img');
        if ($hasFile) {
            $file = $req->file('img');
        
            $newImageURL= UploadFile::uploadFile('upload',$file);
            // echo $newImageURL;
            $insertArr['ProImage'] = $newImageURL;
        }
        // return $insertArr;

        DB::table('products')
           ->insert($insertArr);
        return redirect('admin/products/addproducts')->with('thongbao','Đã thêm thành công');
        // return redirect('/admin/products/addproducts');
        // -------------------
        // $this->validate($req,
        // [
        //     'productname'=>'required|productname|unique:products,ProName',
        //     'descriptions' => 'required|min:3|max:255',
        // ],
        // [
        //     'productname.required' => 'Chưa nhập tên sản phẩm thì lấy gì add',
        //     'descriptions.required' => 'Chưa nhập tên thể loại thì lấy gì add',
        //     'descriptions.min' => 'Mô tả sản phẩm Ít nhất là 3 kí tự,Nhiều nhất là 255 kí tự',
        //     'descriptions.max' => 'Mô tả sản phẩm nhiều nhất là 255 kí tự'
        // ]);

        // $product = new Products;
        // $product -> ProName = $req -> productname;
        // $product -> description = $req -> descriptions;
        // $product -> id_type = $req -> $_POST['category'];
        // $product -> ProUnit = $req -> unit;
        // $product -> unit_price = $req -> unit_price;
        // $product -> promotion_price = $req -> unit_promotion;      
        // -------------------------------
        // // kiểm tra có files sẽ xử lý
		// if($req->hasFile('img')) {
        //     echo '10';
		// 	$allowedfileExtension=['jpg','png'];
		// 	$files = $req->file('img');
        //     // flag xem có thực hiện lưu DB không. Mặc định là có
        //     $exe_flg = true;
        //     echo '2';
		// 	// kiểm tra tất cả các files xem có đuôi mở rộng đúng không
		// 	foreach($files as $file) {
		// 		$extension = $file->getClientOriginalExtension();
		// 		$check=in_array($extension,$allowedfileExtension);
        //         echo '3';
		// 		if(!$check) {
        //             // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
		// 			$exe_flg = false;
        //             break;
        //             echo '4';
		// 		}
        //     } 
        //     echo '5';
		// 	// nếu không có file nào vi phạm validate thì tiến hành lưu DB
		// 	if($exe_flg) {
        //         echo '6';
        //         // lưu product
		// 		// $products= Product::create($request->all());
        //         // duyệt từng ảnh và thực hiện lưu
		// 		// foreach ($request->photos as $photo) {
        //             $filename = $photo->store('img');
        //             echo '7';
		// 			// ProductDetails::create([
		// 			// 	'product_id' => $products->id,
		// 			// 	'filename' => $filename
        //             // ]);
        //             echo $filename;
        //         // }
        //     }
        // }
        //-------------------------------
        // $product -> ProImage = $req -> hasFile('img');
        // echo $req -> productname;
        // echo $req -> descriptions;
        // echo $req -> $selected_val; 

        // if (isset($_POST['category']))
        // {
        //     $category = $_POST['category'];
        //     echo "$category";
        // }
        // echo $req -> unit;
        // echo $req -> unit_price;
        // echo $req -> unit_promotion;
        // $product -> save();
        // return redirect('admin/products/addproducts')->with('thongbao','Đã thêm thành công');
    }
    public function deletecate(Request $req) {
        $dcategorys = ProductType::where('id',$req->id)->first();
        return view('admin.products.listproduct',compact('dcategorys'));
    }

    // public function deletepro(Request $req) {
    //     $dproduct = Products::where('id',$req->id)->first();
    //     return view('admin.products.listproduct',compact('dproduct'));
    // }
    public function postDelproduct($id) {
        DB::table('products')
        ->where('id', '=', $id)->delete();
    }
    public function postDelcomment($id) {
        DB::table('comment_product')
        ->where('id', '=', $id)->delete();
    }
} 
