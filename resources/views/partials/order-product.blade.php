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
                    @foreach($product_cart as $product)
                    <ul>

                        <a class="woocommerce-mini-cart-item mini_cart_item" href=""><img
                                src="{{$product['item']['ProImage']}}" height="150px" alt=""></a>

                        <span>{{$product['item']['ProName']}}------</span>
                        <span>---- Số lượng {{$product['qty']}}*<span>@if($product['item']['promotion_price']==0)
                                -------{{$product['item']['unit_price']}}@else---------{{$product['item']['promotion_price']}}@endif</span></span>
                        <a href="{{route('del-to-cart',$product['item']['id'])}}">Del</a>

                    </ul>

                    @endforeach
                    <ul class="woocommerce-mini-cart cart_list product_list_widget">
                        <div class="product-item">
                            <div class="add-to-cart text-center">Tổng tiền: <ins><span
                                        class="amount">{{Session('cart')->totalPrice}} đ</span></ins>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="wrap-contact style2">
                    <form novalidate="" class="contact-form" id="contactform" method="post" action="#">
                        <div class="form-text-wrap clearfix">
                            <div class="contact-name">
                                <label></label>
                                <input type="text" placeholder="Name" aria-required="true" size="30" value=""
                                    name="author" id="author">
                            </div>
                            <div class="contact-email">
                                <label></label>
                                <input type="email" size="30" placeholder="Email" value="" name="email" id="email">
                            </div>
                            <div class="contact-subject">
                                <label></label>
                                <input type="text" placeholder="Address" aria-required="true" size="30" value=""
                                    name="subject" id="subject">
                            </div>
                        </div>
                        <div class="contact-message clearfix">
                            <label></label>
                            <textarea class="" tabindex="4" placeholder="Message" name="message" required></textarea>
                        </div>
                        <div class="form-submit">
                            <button class="contact-submit">Order</button>
                        </div>
                    </form>
                </div><!-- /.wrap-contact -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->
</div>
@endsection