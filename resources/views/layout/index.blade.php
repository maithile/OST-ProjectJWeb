
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="OST">

 <!-- Share SNS -->
 <meta property="og:url" content="http://127.0.0.1:8000/show/2" />
 <meta property="og:type" content="website" />
<meta property="og:title"  content="Practice" />
<meta property="og:description" content="Xin chao" />
<meta property="og:image" content="http://127.0.0.1:8000/show/2" />
 <!-- End Share SNS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>OST</title>
    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!--Default CSS-->
    <link href="{{asset('css/default.css')}}" rel="stylesheet" type="text/css">

    <!--Custom CSS-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="{{asset('css/plugin.css')}}" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body class="page">
    <!--PRELOADER-->          
    <div id="preloader">
        <div id="status"></div>
    </div>
    <div id="top"></div>
    
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
                    <li class="active"><a data-toggle="tab" href="#tab-login">Login</a></li>
                    <li><a data-toggle="tab" href="#tab-register">Register</a></li>
                  </ul>
                  
                  <div class="tab-content">
                    <div id="tab-login" class="tab-pane fade in active">
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
                    <div id="tab-register" class="tab-pane fade">
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
              
              
                    <div class="top-bar-right pull-right">
                        <ul>
                            @guest
                            <li class="nav-item">
                                <a  href="" data-toggle="modal" data-target="#exampleModal">{{ __('Login') }} / {{ __('Register') }}</a>
                            </li>
                        @else
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  @if (Auth::check())
                                  {{ Auth::user()->name }} 
                                  @endif  <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
      
        <!-- navbar start -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

            <div class="container">

                <div class="logo pull-left">
                    <h2><a href="/home"><!-- <img  class="logo-img" src="images/w-logo.png" alt=""> -->OST</a></h2>
                </div>
                
                <div id="navbar" class="navbar-nav-wrapper pull-right">
                    <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                        <li >
                            <a rel ="icon" href="/home">ホームページ <i class="fa fa-angle-down"></i></i></a> 
                            <ul>
                                <li class="active"><a href="/basic">基本</a></li>
                                <li><a href="/inter">中級</a></li>
                                <li><a href="/advance">上級</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">テーマ<i class="fa fa-angle-down"></i></a>
                            <ul>
                                @foreach ($category as $value)
                                <li><a href="/displayCate/{{$value->id}}">{{$value->name}}</a></li>   
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="#">私に関しては <i class="fa fa-angle-down"></i></a>
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
 <!-- Banner -->
 <div id="blog_banner">
    <div class="page-title">
    </div>
    <div class="black-overlay"></div>
</div>
<!-- End banner -->
@yield('content')

<!--* End Services*-->

   <!--*Footer*-->
   <footer id="mt_footer">
    <div class="container">

        <div class="footer-main">
            <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="follow_us">
                    
                    <h2><a href="/home">OST</a></h2>
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


    <div id="fb-root"></div>
    <!-- Facebook share--><script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="jMalUWvI"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>

    <!-- latest Bootstrap --><script src="{{asset('js/bootstrap.min.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>

    <!-- Parallax jquery --><script src="{{asset('js/jquery.parallax-1.1.3.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>
    
    <!-- Fancybox jquery --><script src="{{asset('js/jquery.fancybox.pack.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>

    <!-- wow animated jquery --><script src="{{asset('js/wow.min.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>

    <!-- Navigation jquery --><script src="{{asset('js/jquery.nav.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>

    <!-- Slick jquery --><script src="{{asset('js/slick.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>

    <!-- Slicknav jquery --><script src="{{asset('js/slicknav.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>

    <!-- custom nav jquery --><script src="{{asset('js/custom-nav.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>

    <!-- Easing Jquery --><script src="{{asset('js/jquery.easing.min.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>

    <!-- Appear Jquery --><script src="{{asset('js/jquery.appear.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>

    <!-- isotope Jquery --><script src="{{asset('js/isotope.min.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>

    {{-- <!-- check answer Jquery --><script src="{{asset('js/myscript.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script> --}}

    <!-- div default Jquery --><script src="{{asset('js/main.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="d24e5d0efad4614245bc6604-|49" defer=""></script></body>

</html>
