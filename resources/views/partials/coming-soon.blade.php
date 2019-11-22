@extends('index')
@section('content')
    

<section class="flat-row flat-coming-soon parallax parallax2">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap-coming-soon text-center">
                    <div class="header-coming-soon">
                        <h2 class="sup-title">New Collection</h2>
                        <div class="title">Coming Soon</div>
                    </div>
                    <div class="wrap-countdown">
                        <div class="countdown"></div>
                    </div>
                    <div class="button flat-button">
                        <button type="button" class="bg-white">BACK TO HOME</button>
                        <button type="button">CONTINUE SHOPING</button>
                    </div>
                </div><!-- /.wrap-coming-soon -->
            </div><!-- /.col-md-12 -->
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