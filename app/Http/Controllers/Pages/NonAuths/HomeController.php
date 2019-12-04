<?php

namespace App\Http\Controllers\Pages\NonAuths;
use App\Http\Controllers\Pages\NonAuthController;
// use App\Slide;
use Illuminate\Support\Facades\DB;
use App\Models\Slide;
use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends NonAuthController
{
    //
    
    public function getIndex(){
        // $slide1 = Slide::where('id',1,2)->get();
        // $slide2 = Slide::where('id',3,4)->get();
        $slide1 = DB::select('select * from Slide where id in (1,2)');
        $slide2 = DB::select('select * from Slide where id in (3,4)');
        $allproduct = DB::select('select * from Products');
        $new_product = DB::select('select * from Products where ProNew in (1)');
        $sale_product = DB::select('select * from Products where promotion_price <> 0');
        // dd($new_product);
        // print_r($slide);
        // exit;
        // return $this->view('partials.home',['slide'=>$slide]);
        return $this->view('partials.home',compact('slide1','slide2','new_product','allproduct','sale_product'));
        // return $this->view('partials.home');
    }

    public function getHomeNew() {
        
        $new_product = DB::select('select * from Products where ProNew in (1)');
        foreach ($new_product as  $nproduct) {
            echo "<li class='product-item man'>
                                    <div class='product-thumb clearfix'>
                                        <a href='{{route('detailproduct',".$nproduct->id.")}}'>
                                            <img src='{{asset(".$nproduct->ProImage.")}}' height='218px' alt='image'>
                                        </a>
                                        <span class='new'>New</span>
                                    </div>
                                    <br>
                                    <div class='product-info clearfix'>
                                        <span class='product-title'>".$nproduct->ProName."</span>
                                        <div class='price'>
                                        @if(".$nproduct->promotion_price."==0)
                                            <ins>
                                                <span class='amount'>".$nproduct->unit_price."đ</span>
                                            </ins>
                                        @else
                                            <del>
                                                <span class='regular'>".$nproduct->unit_price."đ</span>
                                            </del>
                                            <ins>
                                                <span class='amount'>".$nproduct->promotion_price."đ</span>
                                            </ins>
                                        @endif
                                        </div>
                                    </div>
                                    <div class='add-to-cart text-center'>
                                        <a href='route('add-to-cart',".$nproduct->id.")'>ADD TO CART</a>
                                    </div>
                                    <a href='#' class='like'><i class='fa fa-heart-o'></i></a>
                                </li>";
        }
    }



    //search
    public function getSearch(Request $req) {
        $productss = Products::where('ProName','like','%'.$req->sss.'%')
                        ->orwhere('unit_price', $req->sss)
                        ->paginate(6);
        return view('partials.search',compact('productss'));
    }
}