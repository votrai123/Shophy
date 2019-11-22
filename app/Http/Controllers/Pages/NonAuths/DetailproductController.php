<?php


namespace App\Http\Controllers\Pages\NonAuths;
use App\Http\Controllers\Pages\NonAuthController;
use App\Models\Products;
use App\Models\ImagesProduct;
use Illuminate\Http\Request;
use App\Models\ProductType;
use Illuminate\Support\Facades\DB;

class DetailproductController extends NonAuthController
{
    public function __construct()
    {
        parent::__construct();
    }
    //
    public function getDetailproduct(Request $req){
        $product = Products::where('id',$req->id)->first();
        $relateproduct = Products::where('id_type',$product->id_type)->paginate(4);
        $iproduct = DB::table('products')
                                        ->join('image_product','products.id','=','image_product.id_image')
                                        ->select('image')
                                        ->where('products.id',$req->id)
                                        ->get();
                                        // print_r($iproduct);
                                        // exit();
        $typeproduct = ProductType::all();
        return $this->view('partials.detail-product',compact('product','iproduct','typeproduct','relateproduct'));
    }
}
