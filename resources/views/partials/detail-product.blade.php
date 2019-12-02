@extends('index')
@section('content')
<!-- Page title -->
    	<div class="page-title parallax parallax1">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<div class="page-title-heading">
                            <br>
    						<h1 class="title">{{$product->ProName}}</h1>
    					</div><!-- /.page-title-heading -->
    					<div class="breadcrumbs">
    						<ul>
    							<li><a href="{{route('home')}}">Home</a></li>
    							<li><a href="">Shop</a></li>
                                <li><a href="shop-detail-zoom.html">{{$product->ProName}}</a></li>
    						</ul>
    					</div><!-- /.breadcrumbs -->
    				</div><!-- /.col-md-12 -->
    			</div><!-- /.row -->
    		</div><!-- /.container -->
    	</div><!-- /.page-title -->

    	<section class="flat-row main-shop shop-detail style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    	<div class="wrap-flexslider">
                            <div class="inner padding-top-5">
                                <div class="flexslider style-2 has-relative">
                                    <ul class="slides">
                                        @foreach($iproduct as $ip)
                                        <li data-thumb="{{$ip->image}}">
                                            <img src="{{$ip->image}}" alt="Image">
                                            <div class="flat-icon style-1">
                                                <a href="{{$ip->image}}"  class="zoom-popup"><span class="fa fa-search-plus"></span></a>
                                            </div>                                            
                                        </li>
                                        @endforeach
                                        <!-- <li data-thumb="images/shop/sh-detail/thumb-detail-11.jpg">
                                            <img src="images/shop/sh-detail/detail-07.jpg" alt="Image">
                                            <div class="flat-icon style-1">
                                                <a href="images/shop/sh-detail/detail-07.jpg" class="zoom-popup"><span class="fa fa-search-plus"></span></a>
                                            </div>
                                        </li>
                                        <li data-thumb="images/shop/sh-detail/thumb-detail-10.jpg">
                                            <img src="images/shop/sh-detail/detail-07.jpg" alt="Image">
                                            <div class="flat-icon style-1">
                                                <a href="images/shop/sh-detail/detail-07.jpg" class="zoom-popup"><span class="fa fa-search-plus"></span></a>
                                            </div>
                                        </li>                                         -->
                                    </ul>                           
                                </div><!-- /.flexslider -->
                            </div>
                        </div>                      
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="divider h0"></div>
                        <div class="product-detail">
                            <div class="inner">
                                <div class="content-detail">
                                    <h2 class="product-title">{{$product->ProName}}</h2>
                                    <div class="flat-star style-1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <span>(1)</span>
                                    </div>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>  -->
                                    <div class="price margin-top-30">
                                        <!-- <ins class="no-padding"><span class="amount">{{$product->unit_price}}</span></ins> -->

                                        <div class="price">
                                        @if($product->promotion_price==0)
                                            <ins>
                                                <span class="amount">{{$product->unit_price}}đ</span>
                                            </ins>
                                        @else
                                            <del>
                                                <span class="regular">{{$product->unit_price}}đ</span>
                                            </del>
                                            <ins>
                                                <span  class="no-padding" class="amount">{{$product->promotion_price}}đ</span>
                                            </ins>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="product-quantity margin-top-44">
                                        <div class="quantity">
                                            <input type="text" value="1" name="quantity-number" class="quantity-number">
                                            <span class="inc quantity-button">+</span>
                                            <span class="dec quantity-button">-</span>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#">ADD TO CART</a>
                                        </div>
                                        <div class="box-like">
                                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>                                   
                                    <!-- <ul class="product-infor style-1 margin-top-32">
                                        <li><span>100% cotton</span></li>
                                        <li><span>6 months warranty</span></li>
                                        <li><span>Free Shipping</span></li>
                                        <li><span>High Quality</span></li>
                                    </ul> -->
                                    <div class="product-categories margin-top-22">
                                    <span>Categories: </span>
                                        @foreach($typeproduct as $tproduct)
                                        <a href="{{route('productlist',$tproduct->id)}}">{{$tproduct->name}},</a>
                                        @endforeach
                                    </div>
                                    <!-- <div class="product-tags">
                                        <span>Tags: </span><a href="#">Dress,</a> <a href="#">Fashion,</a> <a href="#">Furniture,</a> <a href="#">Lookbok</a>
                                    </div>                                                                      -->
                                    <ul class="flat-socials margin-top-15">
                                        <li><a href="https://www.facebook.com/nguyen.votrai"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/nguyen-trai-698a87195/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.pinterest.com/nguyntrii/"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="https://twitter.com/Tri58104282"><i class="fa fa-linkedin"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /.product-detail -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.flat-row -->

        <section class="flat-row shop-detail-content">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="flat-tabs style-1 has-border">
        					<div class="inner">
        						<ul class="menu-tab">
        							<li class="active">Description</li>
        							<!-- <li>Additional information</li> -->
        							<li>Reviews</li>
        						</ul>
        						<div class="content-tab">
        							<div class="content-inner">
    									<div class="inner max-width-77 padding-top-33 padding-left-7">
                                            <p>{{$product->ProDescription}}</p> 
                                        </div>	        								
        							</div><!-- /.content-inner -->
        							<!-- <div class="content-inner">
                                        <div class="inner max-width-40">
                                            <table>
                                                <tr>
                                                    <td>Weight</td>
                                                    <td>1.73 kg</td>
                                                </tr>
                                                <tr>
                                                    <td>Dimensions</td>
                                                    <td>100 x 37 x 100 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Materials</td>
                                                    <td>80% cotton, 20% linen</td>
                                                </tr>
                                                <tr>
                                                    <td>Size</td>
                                                    <td>One Size, XL, L, M, S</td>
                                                </tr>                       
                                            </table>
                                        </div>        								
                                    </div> -->
                                    <!-- /.content-inner -->
        							<div class="content-inner">
                                        <div class="inner max-width-83 padding-top-33">
                                            <ol class="review-list">
                                                <li class="review">
                                                    <!-- <div class="thumb">
                                                        <img src="images/avatar-1.png" alt="Image">
                                                    </div> -->
                                                    <div class="text-wrap">
                                                        <div class="review-meta">
                                                            <h5 class="name">Sophia Rosla</h5>
                                                            <!-- <div class="flat-star style-1">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </div> -->
                                                        </div>
                                                        <div class="review-text">
                                                            <p>I wanted to thank you so much for the rug we have received it really is beautiful and expertly made. I will be recommending you to all our friends.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- <li class="review">
                                                    <div class="thumb">
                                                        <img src="images/avatar.png" alt="Image">
                                                    </div>
                                                    <div class="text-wrap">
                                                        <div class="review-meta">
                                                            <h5 class="name">Jayne Haughton</h5>
                                                            <div class="flat-star style-1">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-text">
                                                            <p class="line-height-28">Customer service is very important part of the buying experience to us and we must say that we have found Utility's to be impressive - we will certainly look to buy again in future.</p>
                                                        </div>
                                                    </div>
                                                </li>               -->
                                            </ol>
                                           
                                            <div class="comment-respond review-respond" id="respond">
                                                <div class="comment-reply-title margin-bottom-14">
                                                    <h5>Write a review</h5>
                                                    <p>Your email address will not be published. Required fields are marked *</p>
                                                </div>
                                                <form novalidate="" class="comment-form review-form" id="commentform" method="post" action="#">
                                                    <!-- <p class="flat-star style-2">
                                                        <label>Rating*:</label> 
                                                         <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </p> -->
                                                    <p class="comment-form-comment">
                                                        <label>Review*</label>
                                                        <textarea class="" tabindex="4"  name="comment" required> </textarea>                          
                                                    </p>
                                                    <!-- <p class="comment-name">
                                                        <label>Name*</label>                                  
                                                        <input type="text" aria-required="true" size="30" value="" name="name" id="name">
                                                    </p> -->
                                                    <!-- <p class="comment-email"> 
                                                        <label>Email*</label>                                       
                                                        <input type="email" size="30" value="" name="email" id="email">
                                                    </p> -->
                                                    <!-- <p class="comment-form-notify clearfix">
                                                        <input type="checkbox" name="check-notify" id="check-notify"> <label for="check-notify">Notify me of new posts by email</label>
                                                    </p>                                                         -->
                                                    <p class="form-submit">                 
                                                        <button class="comment-submit">Submit</button>
                                                    </p>
                                                </form>
                                            </div>
                                                                                     
                                        </div>        								
                                    </div>
                                    <!-- /.content-inner -->
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section><!-- /.shop-detail-content -->

        <section class="flat-row shop-related">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="title-section margin-bottom-55">
        					<h2 class="title">Related Products</h2>
        				</div>

        				<div class="product-content product-fourcolumn clearfix">
                            <ul class="product style2">
                                @foreach($relateproduct as $reproduct)
                                <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="{{route('detailproduct',$reproduct->id)}}">
                                            <img src="{{asset($reproduct->ProImage)}}" height="218px" alt="image">
                                        </a>
                                        @if($reproduct->promotion_price<>0)
                                        <span class="new sale">Sale</span>
                                        @endif
                                    </div>
                                    <div class="product-info clearfix">
                                        <br>
                                        <span class="product-title">{{$reproduct->ProName}}</span>
                                        <div class="price">
                                        @if($reproduct->promotion_price==0)
                                            <ins>
                                                <span class="amount">{{$reproduct->unit_price}}đ</span>
                                            </ins>
                                        @else
                                            <del>
                                                <span class="regular">{{$reproduct->unit_price}}đ</span>
                                            </del>
                                            <ins>
                                                <span class="amount">{{$reproduct->promotion_price}}đ</span>
                                            </ins>
                                        @endif
                                        </div>
                                        <!-- <ul class="flat-color-list">
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
                                <!-- <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="#">
                                            <img src="images/shop/sh-4/2.jpg" alt="image">
                                        </a>
                                        <span class="new">New</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$10.00</span>
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
                                            <img src="images/shop/sh-4/3.jpg" alt="image">
                                        </a>
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
                                </li>
                                <li class="product-item">
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
                                </li>                                 -->
                            </ul><!-- /.product -->
                        </div><!-- /.product-content -->
        			</div>
        		</div><!-- /.row -->
        	</div>
        </section>

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