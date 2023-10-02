
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" type="image" href="./images/Favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="{{asset('css/fontawesome-stars.css')}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{asset('css/venobox.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="{{asset('css/helper.css')}}">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{asset('style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <!-- Modernizr js -->
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body style="background-color: gray;">
    <div class="page-section">
                <div class="container">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mx-auto" style="margin-top: 10%;">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </div>
                    @endif
                            <!-- Login Form s-->
                            <form action="{{route('makelogin')}}" method="post" >
                                <div class="login-form">
                                    <h4 class="login-title">Login</h4>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input class="mb-0" type="email" name="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Password</label>
                                            <input class="mb-0" type="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="Login-button" value="Login">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

        

              
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- Popper js -->
        <script src="{{asset('js/vendor/popper.min.js')}}"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Ajax Mail js -->
        <script src="{{asset('js/ajax-mail.js')}}"></script>
        <!-- Meanmenu js -->
        <script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
        <!-- Wow.min js -->
        <script src="{{asset('js/wow.min.js')}}"></script>
        <!-- Slick Carousel js -->
        <script src="{{asset('js/slick.min.js')}}"></script>
        <!-- Owl Carousel-2 js -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <!-- Magnific popup js -->
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Isotope js -->
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
        <!-- Imagesloaded js -->
        <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- Mixitup js -->
        <script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
        <!-- Countdown -->
        <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
        <!-- Counterup -->
        <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{asset('js/waypoints.min.js')}}"></script>
        <!-- Barrating -->
        <script src="{{asset('js/jquery.barrating.min.js')}}"></script>
        <!-- Jquery-ui -->
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
        <!-- Venobox -->
        <script src="{{asset('js/venobox.min.js')}}"></script>
        <!-- Nice Select js -->
        <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
        <!-- ScrollUp js -->
        <script src="{{asset('js/scrollUp.min.js')}}"></script>
        <!-- Main/Activator js -->
        <script src="{{asset('js/main.js')}}"></script>
    </body>

<!-- index30:23-->
</html>
