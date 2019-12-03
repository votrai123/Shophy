@extends('index')
@section('content')
<!-- Page title -->
<div class="page-title parallax parallax1">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
                    <br>
    					<div class="page-title-heading">
    						<h1 class="title">{{$viewlist->name}}</h1>
    					</div><!-- /.page-title-heading -->
    					<div class="breadcrumbs">
    						<ul>
    							<li><a href="{{route('home')}}">Home</a></li>
    							<li><a href="">Product List</a></li>
                                <li><a href="">{{$viewlist->name}}</a></li>
    						</ul>
    					</div><!-- /.breadcrumbs -->
    				</div><!-- /.col-md-12 -->
    			</div><!-- /.row -->
    		</div><!-- /.container -->
    	</div><!-- /.page-title -->

    	<section class="flat-row main-shop shop-slidebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sidebar slidebar-shop">
                            <div class="widget widget-search">
                                <form role="search" method="get" class="search-form" action="#">
                                    <label>                                    
                                        <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search">
                                </form>                            
                            </div><!-- /.widget-search -->
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
                            <!-- <div class="widget widget-color">
                                <h5 class="widget-title">
                                   Colors
                                </h5>
                                <ul class="flat-color-list icon-left">
                                    <li><a href="#" class="yellow"></a><span>Yellow</span> <span class="pull-right">25</span></li>
                                    <li><a href="#" class="pink"> </a><span>White</span> <span class="pull-right">16</span></li>
                                    <li><a href="#" class="red active"></a><span>Red</span> <span class="pull-right">28</span></li>
                                    <li><a href="#" class="black"></a><span>Black</span> <span class="pull-right">12</span></li>
                                    <li><a href="#" class="blue"></a><span>Green</span> <span class="pull-right">0</span></li>
                                </ul>
                            </div> -->
                            <!-- /.widget-color -->
                            <!-- <div class="widget widget-size">
                                <h5 class="widget-title">
                                    Size
                                </h5>
                                <ul>
                                    <li class="checkbox">
                                        <input type="checkbox" name="checkbok1" id="checkbox1">
                                        <label for="checkbox1">
                                            <a href="#">L</a>
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <input type="checkbox" name="checkbok2" id="checkbox2">
                                        <label for="checkbox2">
                                            <a href="#">M</a>
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <input type="checkbox" name="checkbok3" id="checkbox3">
                                        <label for="checkbox3">
                                            <a href="#">S</a>
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <input type="checkbox" name="checkbok4" id="checkbox4">
                                        <label for="checkbox4">
                                            <a href="#">X</a>
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <input type="checkbox" name="checkbok5" id="checkbox5">
                                        <label for="checkbox5">
                                            <a href="#">XL</a>
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <input type="checkbox" name="checkbok6" id="checkbox6">
                                        <label for="checkbox6">
                                            <a href="#">XXL</a>
                                        </label>
                                    </li>
                                </ul>
                            </div> -->
                            <!-- /.widget-size -->
                            <div class="widget widget-price">
                                <h5 class="widget-title">Filter by price</h5>
                                <div class="price-filter">
                                    <div id="slide-range"></div>
                                    <p class="amount">
                                      Price: <input type="text" id="amount" disabled="">
                                    </p>
                                </div>
                            </div>
                            <div class="widget widget_tag">
                                <h5 class="widget-title">
                                    Tags
                                </h5>
                                @foreach($typeproduct as $tproduct)
                                <div class="tag-list">
                                    <a href="{{route('productlist',$tproduct->id)}}">{{$tproduct->name}}</a>
                                    <!-- <a href="#" class="active">Bags</a>
                                    <a href="#">Chair</a>
                                    <a href="#">Decoration</a>
                                    <a href="#">Fashion</a> 
                                    <a href="#">Tie</a>
                                    <a href="#">Furniture</a>
                                    <a href="#">Accesories</a>  -->
                                </div>
                                @endforeach
                            </div><!-- /.widget -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-9">
                        <div class="filter-shop clearfix">
                            <p class="showing-product float-right">
                                Find {{count($productlist)}} Products
                            </p>
                        </div><!-- /.filte-shop -->
                        <div class="product-content product-threecolumn product-slidebar clearfix">
                            <ul class="product style2 sd1">
                            
                            @foreach($productlist as $plist)
                            <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="{{route('detailproduct',$plist->id)}}">
                                            <img src="{{asset($plist->ProImage)}}" height="218px" alt="image">
                                        </a>
                                        @if($plist->promotion_price!=0)
                                        <span class="new sale">Sale</span>
                                        @endif
                                    </div>
                                    <div class="product-info clearfix">
                                        <br>
                                        <span class="product-title">{{$plist->ProName}}</span>
                                        <div class="price">
                                        @if($plist->promotion_price==0)
                                            <ins>
                                                <span class="amount">{{$plist->unit_price}}đ</span>
                                            </ins>
                                        @else
                                            <del>
                                                <span class="regular">{{$plist->unit_price}}đ</span>
                                            </del>
                                            <ins>
                                                <span class="amount">{{$plist->promotion_price}}đ</span>
                                            </ins>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="{{route('add-to-cart',$plist->id)}}">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                            @endforeach
</ul>
</div>
                        <div class="product-pagination text-center clearfix">
                            <div class="flat-pagination">{{$productlist->links()}}</div>
                        </div>
                    </div><!-- /.col-md-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.flat-row -->

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
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul><!-- /.flat-social -->
						</div><!-- /.subscribe -->
					</div>
				</div>
			</div>
		</section><!-- /.mail-chimp -->
@endsection