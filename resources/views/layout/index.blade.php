
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Janweb">

    <title>Janweb</title>

    <!-- Favicon -->
    {{-- <script src="{{asset('/cdn-cgi/apps/head/aXeeT3C8FEVE2uMUPMMUDxVnKrs.js')}}"></script><link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"> --}}

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

    <!--*Header*-->
    <header id="inner-navigation">
        <!-- top bar -->
        <div class="topbar-section">
            <div class="container">
                <div class="topbar-inner">
                    <div class="top-bar-left pull-left">
                    <ul>
                       <li><i class="fa fa-phone"></i> Phone: +01-123456789</li>
                       <li><i class="fa fa-envelope"></i> Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b9d0d7dfd6f9cad0cddcd7d8d4dc97dad6d4">[email&#160;protected]</a></li>
                    </ul>
                    </div>
              
                    <div class="top-bar-right pull-right">
                        <ul>
                            <li><a href="faq.html"><i class="fa fa-question-circle"></i> Ask a Question</a> </li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
                    <h2><a href="index.html"><!-- <img  class="logo-img" src="images/w-logo.png" alt=""> -->Padhai</a></h2>
                </div>
                
                <div id="navbar" class="navbar-nav-wrapper pull-right">
                    <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                        <li>
                            <a href="#">Home <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li>
                                    <a href="index.html">Home Style 1</a>
                                    <ul>
                                        <li><a href="index.html">Home Slider</a></li>
                                        <li><a href="index-banner.html">Home Banner</a></li>
                                        <li><a href="index-video.html">Home Video</a></li>
                                    </ul>
                                </li>
                                <li><a href="index-2.html">Home Style 2</a></li>
                                <li><a href="index-3.html">Home Style 3</a></li>
                                <li><a href="index-kids.html">Home Kids</a></li>
                                <li><a href="index-drive.html">Home Driving</a></li>
                                <li><a href="index-cook.html">Home Cooking</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="dashboard.html">Dashboard <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="dashboard-my-profile.html">Dashboard Profile</a></li>
                                <li><a href="dashboard-booking.html">Dashboard Bookings</a></li>
                                <li><a href="dashboard-history.html">Dashboard History</a></li>
                                <li><a href="dashboard-list.html">Dashboard Listing</a></li>
                                <li><a href="dashboard-addtour.html">Dashboard Add Tour</a></li>
                                <li><a href="dashboard-reviews.html">Dashboard Reviews</a></li>
                            </ul>    
                        </li>
                        <li>
                            <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li> <a href="about-us.html">About Us</a></li>
                                <li>
                                    <a href="#">Events</a>
                                    <ul>
                                        <li><a href="events.html">Event List One</a></li>
                                        <li><a href="events-2.html">Event List Two</a></li>
                                        <li><a href="events-3.html">Event List Three</a></li>
                                        <li><a href="events-detail.html">Event Detail</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery.html">Gallery One</a></li>
                                        <li><a href="gallery-2.html">Gallery Two</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Teachers</a>
                                    <ul>
                                        <li><a href="teachers.html">Teachers List</a></li>
                                        <li><a href="teachers-slider.html">Teachers Slider</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="faq.html">FAQ's</a></li>
                                <li><a href="membership.html">Membership</a></li>
                                <li><a href="comingsoon.html">Comming Soon</a></li>
                                <li><a href="404.html">404 page</a></li>
                            </ul>
                        </li>                       
                        <li class="active">
                            <a href="#">Courses <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li class="active"><a href="courses.html">Courses Grid</a></li>
                                <li><a href="courses-slider.html">Courses Slider</a></li>
                                <li><a href="courses-detail.html">Courses Detail</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="blog-listing-left.html">Blog left Sidebar</a></li>
                                <li><a href="blog-listing.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-fullwidth.html">Blog Fullwidth</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-details.html">Blog Detail</a></li>
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
            <div class="container">
                <h2>Courses Grid</h2>
            </div>
        </div>
        <div class="black-overlay"></div>
    </div>
    <!-- End banner -->

    <!-- breadcrumb -->
    <div class="breadcrumb-main">    
        <div class="container">        
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li class="active">Courses Grid</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

 <!--* Services*-->
 <section id="mt_services" class="light-bg services-section section-inner">
    <div class="container">               
        <div class="row">
@yield('content')

</div>
</div>
</section>
<!--* End Services*-->
    <!--*Footer*-->
    <footer id="mt_footer">
        <div class="container">

            <section id="newsletter">
                <div class="newsletter-inner">
                    <div class="row">
                    <div class="col-md-7">
                        <div class="news-content">
                            <h2>Like to become an instructor?</h2>
                            <p class="mar-0">Join thousand of instructors and earn money hassle free! Lorem ipsums dolors sit amet consectetur adipiselo elit sed do eiuse.</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mailpoet_form">
                            <form target="_self" method="post" action="email" novalidate="">
                                <input type="email" class="mailpoet_text" name="mail" title="Email" placeholder="Please specify a valid email address.">

                                <div class="button"><input type="submit" class="mailpoet_submit" value="Subscribe!"></div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </section>

            <div class="footer-main">
                <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="follow_us">
                        
                        <h2><a href="index.html">Padhai</a></h2>

                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="textwidget">
                            <p class="white">PO Box 16122 Grasswood Street West<br>
                            Sydney 5217 Australia</p>
                            <p class="white">Mon-Thu: 9:00 – 21:00<br>
                            Fri: 8:00 – 21:00<br>
                            Sat: 10:00 – 15:00</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-12">
                    <div class="footer-right">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="mt_contact_ftr">
                                    <h3>Quick Links</h3>
                                    <ul class="footer-quick-links-4">
                                       <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                                       <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
                                       <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum</a></li>
                                       <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                                       <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                                       <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                                       <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
                                     </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="mt_post_ftr">
                                    <h3>Instagram</h3>
                                    <div class="insta-list">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="images/insta/insta_01.jpg" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="images/insta/insta_02.jpg" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="images/insta/insta_03.jpg" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="images/insta/insta_04.jpg" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="images/insta/insta_05.jpg" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="images/insta/insta_06.jpg" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="images/insta/insta_07.jpg" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="images/insta/insta_08.jpg" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="images/insta/insta_09.jpg" alt="insta">
                                            </div>
                                        </div>
                                    </div>
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
                            <p class="mar-0 white">&copy; Copyright 2018 - Padhai All rights Reserved</p>
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

    <!-- Latest jquery --><script data-cfasync="false" src="{{asset('/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
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

    <!-- div default Jquery --><script src="{{asset('js/main.js')}}" type="d24e5d0efad4614245bc6604-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="d24e5d0efad4614245bc6604-|49" defer=""></script></body>

</html>
