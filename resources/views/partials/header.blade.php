<div id="site-header-wrap">
    <!-- Header -->
    <header id="header" class="header clearfix">
        <div class="container-fluid clearfix container-width-93" id="site-header-inner">
            <div id="logo" class="logo float-left">
                <a href="{{route('home')}}" title="logo">
                    <img src="{{asset('images/logo.png')}}" alt="image" width="214" height="48" data-retina="images/logo@2x.png" data-width="107" data-height="24">
                </a>
            </div><!-- /.logo -->
            <div class="mobile-button"><span></span></div>
            <ul class="menu-extra">
                <li class="box-search">
                    <a class="icon_search header-search-icon" href="#"></a>
                    <form role="search" method="get" class="header-search-form" action="{{route('search')}}">
                        <input type="text" value="" name="sss" class="header-search-field" placeholder="Search...">
                        <button type="submit" class="header-search-submit" title="Search">Search</button>
                    </form>
                </li>
                
                @if(Auth::check()==true)
                
                    <li>
                    Chào!!{{Auth::user()->full_name}}
                    <!-- <ul class="submenu">
                    <li>asdahsgdsahgdgh</li>
                    <li >
                    </li>
                    </ul> -->
                    <a class="submenu" href="{{asset('logout')}}">Logout</a>
                    
                </li>
                    
                @else
                <li class="box-login">
                    <a class="icon_login" href="{{route('dang-nhap')}}"></a>
                </li>
                @endif
                <li class="box-cart nav-top-cart-wrapper">
                    <a class="icon_cart nav-cart-trigger active" href="{{route('ordercard')}}"><span>
                        @if(Session::has('cart')){{Session('cart')->totalQty}}@else 0 @endif</span></a>
                    <div class="nav-shop-cart">
                        <div class="widget_shopping_cart_content">
                            <div class="woocommerce-min-cart-wrap">
                                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                @if(Session::has('cart'))
                                @foreach($product_cart as $cproduct)
                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                        <a href=""><img src="{{$cproduct['item']['ProImage']}}" alt=""></a>
                                    </li>
                                    <li><span>{{$cproduct['item']['ProName']}}</span></li>
                                    <li><span>{{$cproduct['qty']}}*<span>@if($cproduct['item']['promotion_price']==0)
                                        {{$cproduct['item']['unit_price']}}@else{{$cproduct['item']['promotion_price']}}@endif</span></span></li>
                                    <li class="add-to-cart text-center"> <a href="{{route('del-to-cart',$cproduct['item']['id'])}}">X</a></li>
                                @endforeach
                                
                                </ul>
                                <ul class="woocommerce-mini-cart cart_list product_list_widget">
                                    <div class="product-item">
                                    <div>Tổng tiền: <ins><span class="amount">{{Session('cart')->totalPrice}} đ</span></ins></div>
                                    <div class="add-to-cart text-center">
                                            <a href="{{route('ordercard')}}">ORDER</a>
                                        </div>
                                    </div>
                                </ul>
                                @endif
                            </div><!-- /.widget_shopping_cart_content -->
                        </div>
                    </div><!-- /.nav-shop-cart -->
                </li>
            </ul><!-- /.menu-extra -->
            <div class="nav-wrap">
                <nav id="mainnav" class="mainnav">
                    <ul class="menu">
                        <li class="active">
                            <a href="{{route('home')}}" class="submenu">HOME</a>
                            {{-- <ul class="submenu">
                                <li><a href="index.html">Homepage Style 1</a></li>
                                <li><a href="index-v2.html">Homepage Style 2</a></li>
                                <li><a href="index-v3.html">Homepage Style 3</a></li>
                                <li class="active"><a href="index-v4.html">Homepage Style 4</a></li>
                                <li><a href="index-v5.html">Homepage Style 5</a></li>
                                <li><a href="index-v6.html">Homepage Style 6</a></li>
                                <li><a href="index-v7.html">Homepage Style 7</a></li>
                                <li><a href="index-v8.html">Homepage Style 8</a></li>
                                <li><a href="index-v9.html">Homepage Style 9</a></li>
                                <li><a href="index-v10.html">Homepage Style 10</a></li>   
                            </ul> --}}
                        </li>
                        <li>
                            <a href="" class="submenu" >Product List</a>
                             <!-- <ul class="submenu"> -->
                                <!-- <li>
                                    <a href="shop-3col.html">Shop Layouts</a>
                                    <ul class="submenu">
                                        <li><a href="shop-3col.html">Three Columns</a></li>
                                        <li><a href="shop-4col.html">Four Columns</a></li>
                                        <li><a href="shop-5col.html">Five Columns</a></li>
                                        <li><a href="shop-3col-slide.html">Slidebar Three Columns</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li> -->
                                    <!-- <a href="shop-detail-des.html">Shop Details</a> -->
                                    <ul class="submenu">
                                        @foreach($typeproduct as $tproduct)
                                            <li><a href="{{route('productlist',$tproduct->id)}}">{{$tproduct->name}}</a></li>
                                        @endforeach
                                        
                                        <!-- <li><a href="shop-detail-exter.html">Details External</a></li>
                                        <li><a href="shop-detail-option.html">Details Options</a></li>
                                        <li><a href="shop-detail-fix.html">Details Fix</a></li>
                                        <li><a href="shop-detail-zoom.html">Details Zoom</a></li>
                                        <li><a href="shop-detail-group.html">Details Grouped</a></li>
                                        <li><a href="shop-detail-video.html">Details Video</a></li>                                                -->
                                    </ul>
                                <!-- </li> -->
                            <!-- </ul> -->
                        </li>
                        <li>
                            <a href="coming-soon.html">PAGE</a>
                            <ul class="submenu">                                        
                                <li><a href="{{route('coming-soon')}}">Coming Soon</a></li>
                                <li><a href="404.html"> Error 404</a></li>
                                {{-- <li><a href="faqs.html">FAQs</a></li> --}}
                            </ul>
                        </li>
                        <li >
                            <a href="{{route('faqs')}}" class="submenu" >FAQs</a>
                            {{-- <ul class="submenu">
                                <li ><a href="blog-list.html">Blog List Full</a></li>
                                <li><a href="blog-list-1.html">Blog list Slide 1</a></li>
                                <li><a href="blog-list-2.html">Blog list Slide 2</a></li>
                                <li><a href="blog-grid.html">Blog Gird Full</a></li>
                                <li><a href="blog-grid-1.html">Blog Gird Slide</a></li>
                                <li><a href="blog-detail.html">Blog Details</a></li>
                            </ul><!-- /.submenu --> --}}
                        </li>
                        <li>
                            <a href="{{route('contact')}}" class="submenu right-submenu">CONTACT</a>
                            {{-- <ul class="submenu right-submenu">
                                <li><a href="contact.html">Contact Style 1</a></li>
                                <li><a href="contact-v2.html">Contact Style 2</a></li>
                            </ul> --}}
                        </li>
                    </ul>
                </nav><!-- /.mainnav -->
            </div><!-- /.nav-wrap -->
        </div><!-- /.container-fluid -->
    </header><!-- /header -->
</div><!-- /.flat-header-wrap -->