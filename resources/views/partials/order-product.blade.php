@extends('index')
@section('content')
<div class="page-title parallax parallax1">
    <section class="flat-row flat-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section margin_bottom_17">
                        <h2 class="title">
                            Send Email
                        </h2>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            @if(Session::has('cart'))
            <div class="row">
                <div>
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}} <br>
                        @endforeach
                    </div>
                    @endif
                    @if(session('thongbao'))
                    <div class="alert alert-success">{{session('thongbao')}}</div>
                    @endif
                    <table>
                        <tr>
                            <th>PICTURE</th>
                            <th>PRODUCT NAME</th>
                            <th>AMOUNT</th>
                            <th>PRICE</th>
                            <th>DELETE</th>
                        </tr>
                        @foreach($product_cart as $product)
                        <tr>
                            <td>
                                <a class="woocommerce-mini-cart-item mini_cart_item" href=""><img
                                        src="{{$product['item']['ProImage']}}" height="150px" width="150px" alt=""></a>
                            </td>
                            <td><span>{{$product['item']['ProName']}}</span></td>
                            <td><span>{{$product['qty']}}</span></td>
                            <td><span>@if($product['item']['promotion_price']==0)
                                    {{$product['item']['unit_price']}}@else{{$product['item']['promotion_price']}}@endif</span>
                            </td>
                            <td><a href="{{route('del-to-cart',$product['item']['id'])}}">Del</a></td>
                        </tr>

                        @endforeach
                    </table>
                    <ul class="woocommerce-mini-cart cart_list product_list_widget">
                        <div class="product-item">
                            <div class="add-to-cart text-center title">Tổng tiền: <ins><span
                                        class="amount">{{Session('cart')->totalPrice}} đ</span></ins>
                            </div>
                        </div>
                    </ul>


                </div>
            </div>
            @endif
            <div class="row">
                <div class="wrap-contact style2">
                    <form class="contact-form" method="post" action="{{asset('ordercart/send')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-text-wrap clearfix">
                            <div class="contact-name">
                                <label></label>
                                <input type="text" placeholder="Name" aria-required="true" size="30" value=""
                                    name="name" id="name">
                            </div>
                            <div class="contact-email">
                                <label></label>
                                <input type="email" size="30" placeholder="Email" value="" name="email" id="email">
                            </div>
                            <div class="contact-subject">
                                <label></label>
                                <input type="text" placeholder="Address" aria-required="true" size="30" value=""
                                    name="address" id="address">
                            </div>
                        </div>
                        <div class="contact-message clearfix">
                            <label></label>
                            <textarea class="" tabindex="4" placeholder="Message" name="message" required></textarea>
                        </div>
                        <div class="form-submit">
                            <input type="submit" class="contact-submit" value="Order">
                            <!-- <button class="contact-submit">Order</button> -->
                        </div>
                    </form>
                </div><!-- /.wrap-contact -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->
</div>
@endsection