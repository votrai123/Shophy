<?php

namespace App\Http\Controllers\Pages\NonAuths;

// use App\Http\Controllers\Controller;
use App\Http\Controllers\Pages\NonAuthController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Models\Products;
use App\Models\Cart;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Mail\SendMail;
use Session;
use Illuminate\Support\Facades\Auth;

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
    function sendCart(Request $req)
    {
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        // $nn=[];
            $this->validate($req,
        [
            'name' => 'required|min:3|max:150',
            'email' => 'required|email',
            'address' => 'required|min:5|max:150',
            'message' => 'max:255'
        ],
        [
            'name.required' => 'Chưa nhập tên bạn ơi!!',
            'name.min' => 'Tên ít nhất là 3 kí tự,Nhiều nhất là 150 kí tự',
            'name.max' => 'Tên nhiều nhất là 150 kí tự',
            'address.required' => 'Chưa nhập địa chỉ bạn ơi!!',
            'email.required' => 'Chưa nhập email bạn ơi!!',
            'address.min' => 'Địa chỉ ít nhất là 3 kí tự,Nhiều nhất là 150 kí tự',
            'address.max' => 'Địa chỉ nhiều nhất là 150 kí tự',
            'email.email' => 'Chưa đúng dạng email',
            'message.max' => 'lời nhắn lớn nhất 255 kí tự'
        ]);
            $data=array(
                    'name' => $req->input('name'),
                    'message' =>$req->input('message'),
                    'email'=>$req->input('email'),
                    'address'=>$req->input('address'),
                    'product_cart' => $cart->items,
                     'totalPrice' =>  $cart->totalPrice,
            );
        
        Mail::to($req->input('email'))->send(new SendMail($data));
        // dd('kamsmhdkjashdkjas');
        Session::forget('cart');
        return redirect('/thanks');
        
    }
    public function CamOn() {
        return view('partials.thanks');
    }

    public function postCart(Request $req) {
        $cart = Session::get('cart');
        // dd($cart);
        $bill = new Bill;
        $bill->id_users = Auth::user()->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->note = $req->message;
        $bill->save();
        foreach ($cart->items as $key => $value) {
            $bill_detail= new BillDetail;
            $bill_detail->id_bill= $bill->id;
            $bill_detail->id_product= $key;
            $bill_detail->quantity=$value['qty'];
            $bill_detail->unit_price=($value['price']/$value['qty']);
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect('/thanks');
    }
}