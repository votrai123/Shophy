<?php

namespace App\Http\Controllers\Pages\NonAuths;

// use App\Http\Controllers\Controller;
use App\Http\Controllers\Pages\NonAuthController;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;
use Session;

class CartController extends NonAuthController
{
    //
    public function getAddtoCart(Request $req, $id) {
        $product = Products::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart -> add($product,$id);
        $req ->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getDeltoCart($id) {
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart ->removeItem($id);
        if(count($cart->items)>0){
            Session()->put('cart',$cart);
        }
        else {
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function getCart() {
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        return view('partials.order-product',['product_cart' => $cart->items, 'totalPrice' =>
        $cart->totalPrice]);
    }
}
