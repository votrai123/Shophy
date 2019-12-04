@extends('index')
@section('content')

<section class="flat-row flat-error">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-error text-center">
                            <div class="header-error">
                                THANK YOU
                            </div>
                            <div class="content-error">
                                <h2>Cảm ơn bạn!! Đã ghé mua sản phẩm ở shop chúng tôi...</h2>
                                <p>Quay lại!! Tiếp tục mua thôi nào!!. Click <a href="{{route('home')}}" class="btn-error">here</a> to return Homepage</p>
                            </div>
                        </div><!-- /.wrap-error -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.flat-row -->
@endsection