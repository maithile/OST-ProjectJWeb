
<!DOCTYPE html>
{{-- <html xmlns="http://www.w3.org/1999/xhtml" lang="zxx"> --}}

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OST') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="description" content="OST">

    <title>OST</title>
    <!-- Favicon -->
    <script src="cdn-cgi/apps/head/aXeeT3C8FEVE2uMUPMMUDxVnKrs.js"></script><link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!--Default CSS-->
    <link href="{{asset('css/default.css')}}" rel="stylesheet" type="text/css">

    <!--Custom CSS-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/modal-video-min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/plugin.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css">

    <!--Font Icons-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/flaticon1.css')}}" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]> <script src="'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <!--PRELOADER-->
    <div id="preloader">
        <div id="status"></div>
    </div>
    
    <!-- Login/Register modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Welcome</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">ログイン</a></li>
                    <li><a data-toggle="tab" href="#menu1">登録</a></li>
                  </ul>
                  
                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="card" style="border-top: none;">
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember" style="margin-left: 25px;">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
            
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="card" style="border-top: none;">
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
        </div>
    </div>
    
    <!--*Header*-->
    <header id="inner-navigation">

        <!-- top bar -->
        <div class="topbar-section">
            <div class="container">
                <div class="topbar-inner">
                    <div class="top-bar-left pull-left">
                    <ul>
                       <li>Let's Enjoy Japanese With Us!</a></li>
                    </ul>
                    </div>
              
                    <div class="top-bar-right pull-right">
                        <ul>
                            {{-- <li><a href="faq.html">Become a Member </a> </li> --}}
                            @guest
                            <li class="nav-item">
                                <a  href="" data-toggle="modal" data-target="#exampleModal">{{ __('Login') }} / {{ __('Register') }}</a>
                            </li>
                        @else
                            <span >{{ Auth::user()->name }} </span>            
                        <li><a href="{{ route('logout') }}"><i class="sl sl-icon-power"></i>ログアウト</a></li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                                </div>
                            </li>
                        @endguest
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar start -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

            <div class="container">

                <div class="logo pull-left">
                    <h2><a href="index.html"><!-- <img  class="logo-img" src="images/w-logo.png" alt=""> -->OST</a></h2>
                </div>
                
                <div id="navbar" class="navbar-nav-wrapper pull-right">
                    <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                        <li class="active">
                            <a rel ="icon" href="#">ホームページ <i class="fa fa-angle-down"></i></i></a> 
                            <ul>
                                <li><a href="/basic">基本</a></li>
                                <li><a href="/inter">中級</a></li>
                                <li><a href="/advance">上級</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">私たちに関しては<i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="blog-listing.html">連絡</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="header-search">
                                <a href="#" class="search-icon"><i class="fa fa-search"></i></a>
                                <div class="search-box-wrap" style="display: none;">
                                    <div class="searchform" role="search">
                                        <form class="search-form" method="get" action=".">
                                            <input type="text" name="s" id="s" placeholder="Search..." value="" class="search-field">
                                            <input type="submit" class="search-submit" value="Search">
                                        </form>
                                    </div><!-- .searchform -->
                                </div><!-- .search-box-wrap -->
                            </div>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
            
            <div id="slicknav-mobile"></div>
        </nav>
        <!-- navbar end -->
    </header>
    <!--* End Header*-->

    <!-- Slider -->
    <div id="home-banner" class="carousel slide ps_indicators_l  ps_control_rotate_f kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Third Slide -->
            <div class="item active">
                <!-- Slide Background -->
                <img src="{{asset('img/website.jpg') }}" alt="slider_04" />
                <!-- Center Slide Text Layer -->
                <div class="caption_slide1 caption_slide1_center cap-new wow fadeInDown" data-animation="animated fadeInDown">
                    
                     <h2>日本語を聞きましょう</h2>
                     
                </div><!-- /Center Slide Text Layer -->
            </div><!-- /item -->
            <!-- End of Slide -->

        </div><!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#home-banner" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#home-banner" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <!-- End Slider -->

    <!-- About Courses -->
    <div class="edu-courses">
        <div class="container">
            <div class="row panel-grid-banner">
                <div class="col-md-4 col-sm-12">
                    <div class="inner-grid text-center">                        
                        <div class="text-courses">
                            <i class="fa fa-users mar-bottom-20"></i>
                             <a href="/basic"><h2>基本</h2></a>
                        </div>
                        <div class="courses-content">
                            <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="/basic" class="mt_btn_yellow">リスト</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-grid text-center">                        
                        <div class="text-courses">
                            <i class="fa fa-users mar-bottom-20"></i>
                            <a href="/inter"><h2>中級</h2></a>
                        </div>
                        <div class="courses-content">
                            <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="/inter" class="mt_btn_yellow">リスト</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-grid text-center">                        
                        <div class="text-courses">
                            <i class="fa fa-users mar-bottom-20"></i>
                            <a href="/advance"><h2>上級</h2></a>
                        </div>
                        <div class="courses-content">
                            <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="/advance" class="mt_btn_yellow">リスト</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Courses -->

    <!--*About*-->
    <section id="mt_about">
        <div class="container">
            <div class="about_services">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="about-items">
                            <div class="inner-heading">
                                <h3>Listening Tips</h3>
                                <h2 class="mar-0">How to good at Listening</h2>
                            </div>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh  id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br><br>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-edu-bg">
                            <img src="storage/icon/images.jpg" alt="About">
                        </div>
                        
                    </div>
                    <div class="col-xs-12">
                        <div class="about-form">
                            <div class="col-sm-9">
                                <div class="about-sch-form">
                                    <div class="event-title">
                                        <h2>Connect to Facebook</h2>
                                        <h3 class="white">Fall 2019 applications are now open</h3>
                                        
                                    </div> <!-- event title -->                                    
                                </div>
                            </div>
                            
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*EndAbout*-->

   
    
   

  

    
    
    <!--*Footer*-->
    <footer id="mt_footer">
        <div class="container">
   <div class="footer-main">
                <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="follow_us">
                        
                        <h2><a href="index.html">OST</a></h2>

                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br><br>
                        <div class="textwidget">
                            <p class="white">Tokyo Japan</p>
                            <p class="white">Mon-Thu: 9:00 – 21:00<br>
                            Fri: 8:00 – 21:00<br>
                            Sat: 10:00 – 15:00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-12">
                  
                            <div class="col-md-6 col-xs-12">
                                <div class="mt_post_ftr">
                                    <h3>Connect</h3>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="mt_footer_copy">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copy_txt">
                            <p class="mar-0 white">&copy; Copyright 2021 - OST</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="follow_us pull-right">
                            <ul class="social_icons">
                                <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--* End Footer*-->

    <!-- back to top -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="" data-placement="left">
        <span class="fa fa-arrow-up"></span>
    </a>

    <!--*Scripts*-->

        <!-- Latest jquery --><script data-cfasync="false" src="{{asset('/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('js/jquery-3.2.1.min.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- latest Bootstrap --><script src="{{asset('js/bootstrap.min.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- Parallax jquery --><script src="{{asset('js/jquery.parallax-1.1.3.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>
    
    <!-- Fancybox jquery --><script src="{{asset('s/jquery.fancybox.pack.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- Easing Jquery --><script src="{{asset('js/jquery.easing.min.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- wow animated jquery --><script src="{{asset('js/wow.min.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- Navigation jquery --><script src="{{asset('js/jquery.nav.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- Magnific Popup JS --><script src="{{asset('js/jquery.magnific-popup.min.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- custom image popup Jquery --><script src="{{asset('js/custom-magnificpopup.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- Slick jquery --><script src="{{asset('js/slick.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- Slicknav jquery --><script src="{{asset('js/slicknav.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- custom nav jquery --><script src="{{asset('js/custom-nav.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- Owl Carousel Jquery --><script src="{{asset('js/owl.carousel.min.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- Appear Jquery --><script src="{{asset('js/jquery.appear.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- isotope Jquery --><script src="{{asset('js/isotope.min.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- CountTo Jquery --><script src="{{asset('js/jquery.countTo.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- Popup video Jquery --><script src="{{asset('js/jquery-modal-video.min.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- custom Popup video Jquery --><script src="{{asset('js/custom-modalvideo.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>

    <!-- main default Jquery --><script src="{{asset('js/main.js')}}" type="6f99da5b342d2d8567d36aeb-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="6f99da5b342d2d8567d36aeb-|49" defer=""></script></body>

</html>
