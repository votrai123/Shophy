@extends('index')
@section("content")
<!-- SLIDER -->
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev-slider4" class="rev_slider fullwidthabanner">
                <ul>
                    @foreach($slide1 as $sl1)
                    <!-- Slide 1 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <img src="images/slider/{{$sl1->image}}" alt="" data-bgposition="center center" data-no-retina>
                       
                        <!-- Layers -->
                        <div class="tp-caption tp-resizeme text-333 letter-spacing-3 text-center font-weight-300"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                            data-fontsize="['30','30','30','25']"
                            data-lineheight="['36','36','36','36']"
                            data-width="full"
                            data-height="none"
                            data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];" 
                            data-mask_out="x:inherit;y:inherit;" 
                            data-start="700" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on">
                            <span class="text-line left"></span>WellCome To Shop<span class="text-line right"></span>
                        </div>

                        <div class="tp-caption tp-resizeme font-weight-300 letter-spacing-12 text-center"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['37','37','37','0']"
                            data-fontsize="['130','130','130','80']"
                            data-lineheight="['130','130','130','130']"
                            data-width="full"
                            data-height="none"
                            data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];" 
                            data-mask_out="x:inherit;y:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on">
                            <span class="text-accent">WINTER</span>
                        </div>

                        <div class="tp-caption text-center"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['155','155','155','80']"
                            data-width="full"
                            data-height="none"
                            data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];" 
                            data-mask_out="x:inherit;y:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on">
                            <a href="#" class="themesflat-button has-padding-36 bg-accent has-shadow"><span>SHOP NOW</span></a>
                        </div>
                    </li>
                   @endforeach
                    <!-- /End Slide 1 -->
                    @foreach($slide2 as $sl2)
                    <!-- Slide 2 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <img src="images/slider/{{$sl2->image}}" alt="" data-bgposition="center center" data-no-retina>
                       
                        <!-- Layers -->
                        <div class="tp-caption tp-resizeme text-accent letter-spacing-7 text-center font-weight-600"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-82,'-82','-82','-82']"
                            data-fontsize="['72','72','72','30']"
                            data-lineheight="['72','72','72','36']"
                            data-width="full"
                            data-height="none"
                            data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];" 
                            data-mask_out="x:inherit;y:inherit;" 
                            data-start="700" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on">
                            Summer Collections
                        </div>

                        <div class="tp-caption tp-resizeme text-333 font-weight-400 letter-spacing-3-6 text-center"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','-10','-10']"
                            data-fontsize="['18','18','18','16']"
                            data-lineheight="['72','72','72','26']"
                            data-width="full"
                            data-height="none"
                            data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];" 
                            data-mask_out="x:inherit;y:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on">
                            SALE OFF 30% TO ALL PRODUCTS
                        </div>

                        <div class="tp-caption text-center"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['69','69','69','69']"
                            data-width="full"
                            data-height="none"
                            data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];" 
                            data-mask_out="x:inherit;y:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on">
                            <a href="#" class="themesflat-button has-padding-36 bg-accent has-shadow"><span>SHOP NOW</span></a>
                        </div>
                    </li>
                    @endforeach
                    <!-- /End Slide 2 -->
                </ul>
            </div> 
        </div>
        <!-- END SLIDER -->

  <!-- PRODUCT -->  
  <section class="flat-row main-shop style1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-top-menu margin-bottom-58">
                            <ul class="flat-filter style-2">
                                <li class="active"><a href="#" data-filter="*">All Products</a></li>
                                <li><a href="#" data-filter=".kid">Best Sellers </a></li>
                                <li><a href="#" data-filter=".man">New Products</a></li>
                                <li><a href="#" data-filter=".woman">Sales Products</a></li>
                            </ul>
                            <div class="filter-shop icon-right">
                                <ul class="flat-filter-search">
                                    <li class="filter-list">
                                        <a class="show-filter">Filters</a>
                                    </li>
                                </ul>
                            </div><!-- /.filte-shop -->
                        </div>
                        <div class="box-filter slidebar-shop clearfix">
                            <div class="btn-close"><a><i class="fa fa-times"></i></a></div>
                            <div class="widget widget-sort-by">
                                <h5 class="widget-title">
                                    Sort By
                                </h5>
                                <ul>
                                    <li><a href="#" class="active">Default</a></li>
                                    <li><a href="#">Popularity</a></li>
                                    <li><a href="#">Average rating</a></li>
                                    <li><a href="#">Newness</a></li>
                                    <li><a href="#">Price: low to high</a></li>
                                    <li><a href="#">Price: high to low</a></li>
                                </ul>
                            </div><!-- /.widget-sort-by -->
                            <div class="widget widget-price">
                                <h5 class="widget-title">Price</h5>
                                <ul>
                                    <li><a href="#" class="active">$0.00 - $50.00</a></li>
                                    <li><a href="#">$50.00 - $100.00</a></li>
                                    <li><a href="#">$100.00 - $150.00</a></li>
                                    <li><a href="#">$150.00 - $200.00</a></li>
                                    <li><a href="#">$200.00 - 250.00</a></li>
                                    <li><a href="#">250.00+</a></li>
                                </ul>
                            </div>
                            <!-- /.widget -->
                            <!-- <div class="widget widget-color">
                                <h5 class="widget-title">
                                   Colors
                                </h5>
                                <ul class="flat-color-list icon-left">
                                    <li><a href="#" class="yellow"></a><span>Yellow</span></li>
                                    <li><a href="#" class="pink"> </a><span>White</span></li>
                                    <li><a href="#" class="red active"></a><span>Red</span> </li>
                                    <li><a href="#" class="black"></a><span>Black</span></li>
                                    <li><a href="#" class="blue"></a><span>Green</span></li>
                                    <li><a href="#" class="khaki"></a><span>Orange</span></li>
                                </ul>
                            </div> -->
                            <!-- /.widget-color -->
                            <!-- <div class="widget widget-size">
                                <h5 class="widget-title">Size</h5>
                                <ul>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                    <li><a href="#">Over Size</a></li>
                                </ul>
                            </div> -->
                            <!-- /.widget -->
                            <div class="widget widget_tag">
                                <h5 class="widget-title">
                                    Tags
                                </h5>
                                <div class="tag-list">
                                    <a href="#">All products</a>
                                    <a href="#" class="active">Bags</a>
                                    <a href="#">Chair</a>
                                    <a href="#">Decoration</a>
                                    <a href="#">Fashion</a> 
                                    <a href="#">Tie</a>
                                    <a href="#">Furniture</a>
                                    <a href="#">Accesories</a> 
                                </div>
                            </div><!-- /.widget -->
                        </div><!-- /.box-filter -->
                        <div class="product-content product-fourcolumn clearfix">
                            <ul class="product style2 isotope-product clearfix">
                            @foreach($allproduct as $aproduct)
                                <li class="product-item kid">
                                    <div class="product-thumb clearfix">
                                        <a href="{{route('detailproduct',$aproduct->id)}}">
                                            <img src="{{asset($aproduct->ProImage)}}" height="218px" alt="image error">
                                        </a>
                                        @if($aproduct->promotion_price!=0)
                                        <span class="new sale">Sale</span>
                                        @endif
                                        <!-- <span class="new">New</span> -->
                                    </div>
                                    <br>
                                    <div class="product-info clearfix">
                                        <span class="product-title">{{$aproduct->ProName}}</span>
                                        <div class="price">
                                        @if($aproduct->promotion_price==0)
                                            <ins>
                                                <span class="amount">{{$aproduct->unit_price}}đ</span>
                                            </ins>
                                        @else
                                            <del>
                                                <span class="regular">{{$aproduct->unit_price}}đ</span>
                                            </del>
                                            <ins>
                                                <span class="amount">{{$aproduct->promotion_price}}đ</span>
                                            </ins>
                                        @endif
                                        </div>
                                        <!-- <ul class="flat-color-list width-14">
                                            <li>
                                                <a href="#" class="red"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="blue"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="black"></a>
                                            </li>
                                        </ul> -->
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                            @endforeach
                            @foreach($new_product as $nproduct)
                                <li class="product-item man">
                                    <div class="product-thumb clearfix">
                                        <a href="{{route('detailproduct',$nproduct->id)}}">
                                            <img src="{{asset($nproduct->ProImage)}}" height="218px" alt="image">
                                        </a>
                                        <span class="new">New</span>
                                    </div>
                                    <br>
                                    <div class="product-info clearfix">
                                        <span class="product-title">{{$nproduct->ProName}}</span>
                                        <div class="price">
                                        @if($nproduct->promotion_price==0)
                                            <ins>
                                                <span class="amount">{{$nproduct->unit_price}}đ</span>
                                            </ins>
                                        @else
                                            <del>
                                                <span class="regular">{{$nproduct->unit_price}}đ</span>
                                            </del>
                                            <ins>
                                                <span class="amount">{{$nproduct->promotion_price}}đ</span>
                                            </ins>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                            @endforeach
                            @foreach($sale_product as $sproduct)
                                <li class="product-item woman">
                                    <div class="product-thumb clearfix">
                                        <a href="{{route('detailproduct',$sproduct->id)}}" class="product-thumb">
                                            <img src="{{asset($sproduct->ProImage)}}" height="218px" alt="image">
                                        </a>
                                        <span class="new sale">Sale</span>
                                    </div>
                                    <br>
                                    <div class="product-info clearfix">
                                        <span class="product-title">{{$sproduct->ProName}}</span>
                                        <div class="price">
                                        <del>
                                                <span class="regular">{{$sproduct->unit_price}}đ</span>
                                            </del>
                                            <ins>
                                                <span class="amount">{{$sproduct->promotion_price}}đ</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                            @endforeach
                                <!-- <li class="product-item man accessories">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/4.jpg" alt="image">
                                        </a>
                                        <span class="new sale">Sale</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <del>
                                                <span class="regular">$90.00</span>
                                            </del>
                                            <ins>
                                                <span class="amount">$60.00</span>
                                            </ins>
                                        </div>
                                        <ul class="flat-color-list width-14">
                                            <li>
                                                <a href="#" class="red"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="blue"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="black"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item kid woman">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/5.jpg" alt="image">
                                        </a>
                                        <span class="new">New</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$139.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item man accessories">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/6.jpg" alt="image">
                                        </a>
                                        <span class="new sale">Sale</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <del>
                                                <span class="regular">$150.00</span>
                                            </del>
                                            <ins>
                                                <span class="amount">$120.00</span>
                                            </ins>
                                        </div>
                                        <ul class="flat-color-list width-14">
                                            <li>
                                                <a href="#" class="red"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="blue"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="black"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item kid woman">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/7.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$110.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item man accessories">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/8.jpg" alt="image">
                                        </a>
                                        <span class="new">New</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$90.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/9.jpg" alt="image">
                                        </a>
                                        <span class="new">New</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$79.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/10.jpg" alt="image">
                                        </a>
                                        <span class="new sale">Sale</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <del>
                                                <span class="regular">$150.00</span>
                                            </del>
                                            <ins>
                                                <span class="amount">$120.00</span>
                                            </ins>
                                        </div>
                                        <ul class="flat-color-list">
                                            <li>
                                                <a href="#" class="red"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="blue"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="black"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/11.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$66.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/12.jpg" alt="image">
                                        </a>
                                        <span class="new">New</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$20.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li> -->
                            </ul>
                            <div class="elm-btn text-center">
                                <a href="#" class="themesflat-button outline ol-accent margin-top-40">LOAD MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PRODUCT --> 
             
        <section class="flat-row mail-chimp">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text">
                            <h3>Sign up for Send Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="subscribe clearfix">
                            <form action="#" method="post" accept-charset="utf-8" id="subscribe-form">
                                <div class="subscribe-content">
                                    <div class="input">
                                        <input type="email" name="subscribe-email" placeholder="Your Email">
                                    </div>
                                    <div class="button">
                                        <button type="button">SUBCRIBE</button>
                                    </div>
                                </div>
                            </form>
                            <ul class="flat-social">
                                <li><a href="https://www.facebook.com/nguyen.votrai"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Tri58104282"><i class="fa fa-twitter"></i></a></li>
                                {{-- <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li> --}}
                                <li><a href="https://www.linkedin.com/in/nguyen-trai-698a87195/"><i class="fa fa-linkedin"></i></a></li>
                            </ul><!-- /.flat-social -->
                        </div><!-- /.subscribe -->
                    </div>
                </div>
            </div>
        </section><!-- /.mail-chimp -->
@endsection