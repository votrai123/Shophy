        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget-link">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <!-- <li><a href="#">Online Store</a></li> -->
                                {{-- <li><a href="blog-list.html">Blog</a></li> --}}
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget-link link-login">
                            <ul>
                                <li><a href="{{route('dang-nhap')}}">Login/ Register</a></li>
                                <li><a href="#">Your Cart</a></li>
                                <!-- <li><a href="#">Wishlist items</a></li> -->
                                {{-- <li><a href="#">Your checkout</a></li> --}}
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget-link link-faq">
                            <ul>
                                <li><a href="{{route('faqs')}}">FAQs</a></li>
                                {{-- <li><a href="#">Term of service</a></li> --}}
                                {{-- <li><a href="#">Privacy Policy</a></li> --}}
                                {{-- <li><a href="#">Returns</a></li> --}}
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget-brand">
							<div class="logo logo-footer">
								<a href="{{route('home')}}"><img src="{{asset('images/logo@2x.png')}}" alt="image" width="107" height="24"></a>
							</div>
                            <ul class="flat-contact">
                                <li class="address">785/38 Nguyễn Kiệm , F3 , Quận Gò Vấp , TPHCM</li>
                                <li class="phone">+83 929 376 525</li>
                                <li class="email">17511146@gm.uit.edu.vn</li>
                            </ul><!-- /.flat-contact -->
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </footer><!-- /.footer -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="copyright text-center">Copyright @2019 <a href="{{route('home')}}">Motorcycle | Shop</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Go Top -->
        <a class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a> 
