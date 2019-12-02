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
}
