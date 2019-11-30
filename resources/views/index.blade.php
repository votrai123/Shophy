<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Motorcycle | Shop</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/bootstrap.css')}}" >
    <!-- CSS login -->
    
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/responsive.css')}}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/colors/color1.css')}}" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/animate.css')}}">


    <!-- Favicon and touch icons  -->
    <link href="{{asset('icon/logoM.png')}}" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head> 
<body class="header_sticky header-style-2 header-absolute has-menu-extra">
	<!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>

    <!-- Boxed -->
    <div class="boxed">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
         

    </div>
    
    <!-- Javascript -->
    <script src="{{asset('javascript/jquery.min.js')}}"></script>
    <script src="{{asset('javascript/tether.min.js')}}"></script>
    <script src="{{asset('javascript/bootstrap.min.js')}}"></script> 
    <script src="{{asset('javascript/jquery.easing.js')}}"></script>    
    <script src="{{asset('javascript/parallax.js')}}"></script>
    <script src="{{asset('javascript/jquery-waypoints.js')}}"></script>
    <script src="{{asset('javascript/jquery-countTo.js')}}"></script>
    <script src="{{asset('javascript/jquery.countdown.js')}}"></script>
    <script src="{{asset('javascript/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('javascript/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('javascript/magnific.popup.min.js')}}"></script>
    <script src="{{asset('javascript/jquery.hoverdir.js')}}"></script>
    <script src="{{asset('javascript/owl.carousel.min.js')}}"></script>
    <script src="{{asset('javascript/equalize.min.js')}}"></script>
    <script src="{{asset('javascript/gmap3.min.js')}}"></script>
    <!-- <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB')}}"></script> -->
    <script src="{{asset('javascript/jquery-ui.js')}}"></script>
    
    <script src="{{asset('javascript/jquery.cookie.js')}}"></script>
    

    <!-- Revolution Slider -->
    <script src="{{asset('rev-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('javascript/rev-slider.js')}}"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
    <script src="{{asset('rev-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('rev-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('rev-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('rev-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('rev-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('rev-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('rev-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('rev-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('rev-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('javascript/main.js')}}"></script>


    <script>
        // validate email
        $('#regEmail').on('input', function (e) {
            var inputEmail = $('#regEmail').val();
            
            $.get(`/api/validateEmail/${inputEmail}`, (data, status) => {
                $result = data;
                
                if ($result != 0) {
                    $('#existedEmail').show();
                }
                else {
                    $('#existedEmail').hide();
                }
            });
        });

        // validte password
            $('#regPassword').on('input', function (e) {
                var inputPassword = $('#regPassword').val();
                if (inputPassword.length < 6) {
                    $('#errorLablePassword').show();
                }
                else {
                    $('#errorLablePassword').hide();
                }

            });
            // // Kiểm tra password nhập lại
            // if(id == 'rpass' && value != pass){span.innerHTML ='Password nhập lại chưa đúng';}
            // // Kiểm tra số điện thoại
            // if(id == 'iphone' && isNaN(value) == true){span.innerHTML ='Số điện thoại phải là kiểu số';}
            
    </script>
    @yield("scripts")
</body> 
</html>                               