<?php

namespace App\Http\Controllers\Pages\NonAuths;
use App\Http\Controllers\Pages\NonAuthController;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\ProductType;

class ProductShopController extends NonAuthController
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }
    //
    public function getProduct($type){
        $productlist = Products::where('id_type',$type)->paginate(6);
        $typeproduct = ProductType::all();
        $viewlist = ProductType::where('id',$type)->first();
        return $this->view('partials.product-shop',compact('productlist','typeproduct','viewlist'));
    }
}
