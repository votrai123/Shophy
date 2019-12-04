@extends('index')

@section('content')

<div class="page-title parallax parallax1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="page-title-heading">
                    <h1 class="title">Find products</h1>
                </div><!-- /.page-title-heading -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<section class="flat-row main-shop shop-slidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="filter-shop clearfix">
                    <p class="showing-product float-right">
                        Find {{count($productss)}} Products
                    </p>
                </div><!-- /.filte-shop -->
                <div class="product-content product-threecolumn product-slidebar clearfix">
                    <ul class="product style2 sd1">

                        @foreach($productss as $plist)
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
                    <div class="flat-pagination">{{$productss->links()}}</div>
                </div>
            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-row -->


@endsection