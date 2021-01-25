
<!DOCTYPE html>
{{-- <html xmlns="http://www.w3.org/1999/xhtml" lang="zxx"> --}}

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Janweb') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="description" content="janweb">

    <title>Padhai - Education HTML Template</title>
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
    <!--*Header*-->
    <header id="inner-navigation">

        <!-- top bar -->
        <div class="topbar-section">
            <div class="container">
                <div class="topbar-inner">
                    <div class="top-bar-left pull-left">
                    <ul>
                       <li><i class="fa fa-phone"></i> Phone: +01-123456789</li>
                       <li><i class="fa fa-envelope"></i> Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ce5e2eae3ccffe5f8e9e2ede1e9a2efe3e1">[email&#160;protected]</a></li>
                    </ul>
                    </div>
              
                    <div class="top-bar-right pull-right">
                        <ul>
                            <li><a href="faq.html"><i class="fa fa-question-circle"></i> Ask a Question</a> </li>
                            @guest
                            <li class="nav-item">
                                <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>

        <!-- navbar start -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

            <div class="container">

                <div class="logo pull-left">
                    <h2><a href="index.html"><!-- <img  class="logo-img" src="images/w-logo.png" alt=""> -->Janweb</a></h2>
                </div>
                
                <div id="navbar" class="navbar-nav-wrapper pull-right">
                    <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                        <li class="active">
                            <a rel ="icon" href="#">Home<i class="fas fa-ambulance"></i></i></a> 
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
                        <li>
                            <a href="#">Courses <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="courses.html">Courses Grid</a></li>
                                <li><a href="courses-slider.html">Courses Slider</a></li>
                                <li class="active"><a href="courses-detail.html">Courses Detail</a></li>
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

    <!-- Slider -->
    <div id="home-banner" class="carousel slide ps_indicators_l  ps_control_rotate_f kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- First Slide -->
            <div class="item ">
                <!-- Slide Background -->
                <img src="{{asset('img/website.jpg') }}" alt="slider_01" />
                <!-- Left Slide Text Layer -->
                <div class="caption_slide1 fadeInRight" data-animation="animated fadeInRight">
                    <h3>Welcome To Padhai</h3>
                    <h1>Explore the World of Our Graduates</h1>
                    <a class="mt_btn_white-bor" href="">Read More</a>
                    <a class="mt_btn_yellow" href="">Contact Us</a>
                </div><!-- /Left Slide Text Layer -->
            </div><!-- /item -->
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">
                <!-- Slide Background -->
                <img src="{{asset('img/website.jpg') }}" alt="slider_02" />
                <!-- Right Slide Text Layer -->
                <div class="caption_slide1 caption_slide1_right wow fadeInLeft" data-animation="animated fadeInLeft">
                     <h3>Welcome To Padhai</h3>
                     <h1>Better education for a better world</h1>
                     <a class="mt_btn_white-bor" href="">Read More</a>
                     <a class="mt_btn_yellow" href="">Contact Us</a>
                </div><!-- /Right Slide Text Layer -->
            </div><!-- /item -->
            <!-- End of Slide -->

            <!-- Third Slide -->
            <div class="item active">
                <!-- Slide Background -->
                <img src="{{asset('img/website.jpg') }}" alt="slider_04" />
                <!-- Center Slide Text Layer -->
                <div class="caption_slide1 caption_slide1_center cap-new wow fadeInDown" data-animation="animated fadeInDown">
                     <h3>Welcome To Padhai</h3>
                     <h1>Exceptional People, Exceptional Care</h1>
                     <a class="mt_btn_white-bor" href="">Read More</a>
                     <a class="mt_btn_yellow" href="">Contact Us</a>
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
                            <i class="fa fa-laptop mar-bottom-20"></i>
                             <a href="/basic"><h3>Basic</h3></a>
                        </div>
                        <div class="courses-content">
                            <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="/basic" class="mt_btn_yellow">View List</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-grid text-center">                        
                        <div class="text-courses">
                            <i class="fa fa-users mar-bottom-20"></i>
                            <a href="/inter"><h3>Intermediate</h3></a>
                        </div>
                        <div class="courses-content">
                            <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="/inter" class="mt_btn_yellow">View List</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-grid text-center">                        
                        <div class="text-courses">
                            <i class="fa fa-users mar-bottom-20"></i>
                            <a href="/advance"><h3>Advance</h3></a>
                        </div>
                        <div class="courses-content">
                            <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="/advance" class="mt_btn_yellow">View List</a>
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
                                <h3>About Padhai</h3>
                                <h2 class="mar-0">Know more about Padhai</h2>
                            </div>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh  id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br><br>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-edu-bg">
                            <img src="images/education/about.png" alt="About">
                        </div>
                        
                    </div>
                    <div class="col-xs-12">
                        <div class="about-form">
                            <div class="col-sm-9">
                                <div class="about-sch-form">
                                    <div class="event-title">
                                        <h2>Apply for Scholarship</h2>
                                        <h3 class="white">Fall 2019 applications are now open</h3>
                                        <p>We don’t just give students an education and experiences that set them up for success in a career. We help them succeed in their career—to discover a field they’re passionate about and dare to lead it.</p>
                                    </div> <!-- event title -->                                    
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="smt-items mar-top-70">
                                    <a class="mt_btn_yellow" href="">Apply Here</a>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*EndAbout*-->

    <!-- Find Courses -->
    <section class="selected-course">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="find-course">
                        <h3>Find your course</h3>
                        <p>Fill in below form to find your courses</p>
                        <form>
                            <div class="form-group">
                              <input type="text" class="form-control" id="usr" placeholder="Course Name">
                            </div>
                            <div class="form-group">
                              <select id="sel1">
                                <option>Category</option>
                                <option>Computer</option>
                                <option>Science</option>
                                <option>History</option>
                                <option>Economics</option>
                              </select>
                            </div>
                            <button type="submit" class="mt_btn_yellow">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="all-courses">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item mar-bottom-30">
                                    <i class="fa fa-male"></i>
                                    <p>Socioligy</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item mar-bottom-30">
                                    <i class="fa fa-suitcase"></i>
                                    <p>Business</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item mar-bottom-30">
                                    <i class="fa fa-code"></i>
                                    <p>Web Dev</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item mar-bottom-30">
                                    <i class="fa fa-flask"></i>
                                    <p>Science</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item">
                                    <i class="fa fa-money"></i>
                                    <p>Ecomomics</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item">
                                    <i class="fa fa-gg"></i>
                                    <p>Biology</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item">
                                    <i class="fa fa-desktop"></i>
                                    <p>Computing</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item">
                                    <i class="fa fa-mouse-pointer"></i>
                                    <p>Web Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Find Courses -->

    <!--*Features-one*-->
    <section class="features-one">
		<div class="container">
            <div class="inner-heading">
                <h3>Featured courses</h3>
                <h2>Various courses to choose from</h2>
            </div>
            <div class="row  slider slider-ft-course">
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="featured-item">
                        <div class="feat-img">
                            <img src="images/education/ft-1.jpg" alt="">
                            <div class="th-name">
                                <img src="images/blog/cmnt-1.jpg" alt="">
                                <h5>Mark Ronson</h5>
                            </div>
                            <div class="overlayPort">
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="courses-detail.html">View Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="feat-inn">
                            <span>(20 Reviws)</span>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <a href="#"><h3>Economy from start for beginner</h3></a>
                            <div class="course-feat">
                                <div class="price-ft pull-left">
                                    <span>$90</span>
                                </div>
                                <div class="admin-ft pull-right">
                                    <ul>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="featured-item">
                        <div class="feat-img">
                            <img src="images/education/ft-2.jpg" alt="">
                            <div class="th-name">
                                <img src="images/blog/cmnt-2.jpg" alt="">
                                <h5>Mark Ronson</h5>
                            </div>
                            <div class="overlayPort">
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="courses-detail.html">View Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="feat-inn">
                            <span>(20 Reviws)</span>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <a href="#"><h3>Economy from start for beginner</h3></a>
                            <div class="course-feat">
                                <div class="price-ft pull-left">
                                    <span>$90</span>
                                </div>
                                <div class="admin-ft pull-right">
                                    <ul>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="featured-item">
                        <div class="feat-img">
                            <img src="images/education/ft-3.jpg" alt="">
                            <div class="th-name">
                                <img src="images/blog/cmnt-3.jpg" alt="">
                                <h5>Mark Ronson</h5>
                            </div>
                            <div class="overlayPort">
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="courses-detail.html">View Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="feat-inn">
                            <span>(20 Reviws)</span>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <a href="#"><h3>Economy from start for beginner</h3></a>
                            <div class="course-feat">
                                <div class="price-ft pull-left">
                                    <span>$90</span>
                                </div>
                                <div class="admin-ft pull-right">
                                    <ul>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="featured-item">
                        <div class="feat-img">
                            <img src="images/education/ft-4.jpg" alt="">
                            <div class="th-name">
                                <img src="images/blog/cmnt-1.jpg" alt="">
                                <h5>Mark Ronson</h5>
                            </div>
                            <div class="overlayPort">
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="courses-detail.html">View Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="feat-inn">
                            <span>(20 Reviws)</span>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <a href="#"><h3>Economy from start for beginner</h3></a>
                            <div class="course-feat">
                                <div class="price-ft pull-left">
                                    <span>$90</span>
                                </div>
                                <div class="admin-ft pull-right">
                                    <ul>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="featured-item">
                        <div class="feat-img">
                            <img src="images/education/ft-1.jpg" alt="">
                            <div class="th-name">
                                <img src="images/blog/cmnt-1.jpg" alt="">
                                <h5>Mark Ronson</h5>
                            </div>
                            <div class="overlayPort">
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="courses-detail.html">View Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="feat-inn">
                            <span>(20 Reviws)</span>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <a href="#"><h3>Economy from start for beginner</h3></a>
                            <div class="course-feat">
                                <div class="price-ft pull-left">
                                    <span>$90</span>
                                </div>
                                <div class="admin-ft pull-right">
                                    <ul>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
		</div><!-- /.container -->
	</section>
	<!--*EndFeatures-one*-->

    <!--* Fun And Facts*-->
    <section id="mt_fun">
        <div class="container">
            <div class="mt-statts">
                <div class="inner-heading">
                    <h3>Why choose us</h3>
                    <h2>Various courses to choose from</h2>
                </div>
                <div class="row facts_row">
                    <div class="col-md-8 col-sm-8 col-xs-12 facts_col">
                        <div class="fun-facts-main">
                            <div class="fun-facts_wrapper">
                                <i class="fa fa-trophy"></i>
                                <p class="fun-facts_figure timer" data-to="275" data-speed="3000"></p>
                                <span class="fun-facts_title"> AWARDS </span>
                            </div>
                            <div class="fun-facts_wrapper">
                                <i class="fa fa-graduation-cap"></i>
                                <p class="fun-facts_figure timer" data-to="3282" data-speed="3000"></p>
                                <span class="fun-facts_title"> STUDENTS </span>
                            </div>
                            <div class="fun-facts_wrapper">
                                <i class="fa fa-university"></i>
                                <p class="fun-facts_figure timer" data-to="120" data-speed="3000"></p>
                                <span class="fun-facts_title"> YEARS OF HISTORY </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="nets-facts">
                            <h2>Take a tour</h2>
                            <div class="pulses">
                                <button type="button" class="play-btn js-video-button" data-video-id='176543782' data-channel="vimeo"><i class="fa fa-play"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--* End Fun And Facts*-->

    <!--Education Event-->
	<section class="edu-events">
		<div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Upcomming Events</h3>
                <h2>Reserve your seats now</h2>
            </div>
			<div class="row">
				<div class="col-md-6 col-sm-12">
                    <div class="event-left">
                        <img src="images/places/01.jpg" alt="">
                        <div class="event-donation">
                            <h2>Donation helps us</h2>  
                            <p>The Campaign for the Padhai University is the <strong>largest fundraising campaign in history</strong>. With a historic $1 billion goal, the campaign is expanding U of T’s global leadership capacity.World Largest books and library center is here where you can study the latest trends of the education</p>
                            <a href="#" class="mt_btn_yellow">Become a Donor</a>                                                           
                        </div>
                    </div>
				</div>	
				<div class="col-md-6 col-sm-12">
                    <div class="event-main">
                        <h2>Upcoming Events</h2>
                        <div class="event-item">
                            <div class="event-date text-center text-uppercase">
                                <h4 class="mar-0">10 <span>Jan</span></h4>                                
                            </div> 
                            <div class="event-details">
                                <h3 class="mar-bottom-10"><a href="#">Reunion Event : Padhai’s Alumni Golf Tour</a></h3>
                                <ul class="event-time">
                                    <li><i class="fa fa-clock-o"></i>11:00 AM - 3:00 PM</li>
                                    <li><i class="fa fa-map-marker"></i>Royal National Park, Sydney</li>
                                </ul>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date text-center text-uppercase">
                                <h4 class="mar-0">14 <span>Feb</span></h4>                                
                            </div> 
                            <div class="event-details">
                                <h3 class="mar-bottom-10"><a href="#">Padhai’s Alumni Hot Air Ballon Trip in Turkey</a></h3>
                                <ul class="event-time">
                                    <li><i class="fa fa-clock-o"></i>11:00 AM - 3:00 PM</li>
                                    <li><i class="fa fa-map-marker"></i>Royal National Park, Sydney</li>
                                </ul>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date text-center text-uppercase">
                                <h4 class="mar-0">21 <span>Mar</span></h4>                                
                            </div> 
                            <div class="event-details">
                                <h3 class="mar-bottom-10"><a href="#">Fintech & Key Investment Conference</a></h3>
                                <ul class="event-time">
                                    <li><i class="fa fa-clock-o"></i>11:00 AM - 3:00 PM</li>
                                    <li><i class="fa fa-map-marker"></i>Royal National Park, Sydney</li>
                                </ul>
                            </div>
                        </div>

                        <a href="mt_btn_yellow">View All Events <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>  
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<!--End Education Event-->

    <section id="mt_get_started" class="front-get">
        <div class="container">
            <div class="start-theme">
                <div class="started-rg">
                    <div class="watch_content">
                        <h2 class="white">GET STARTED TODAY</h2>
                        <p class="white">Lorem ipsums dolors sit amet consectetur adipiselo elit sed do eiused tempor the incididunt ut labore et. Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit.</p>
                        <a href="#" class="mt_btn_yellow">PURCAHSE THEME</a>
                    </div>
                </div>
                <div class="get_stt_img">
                    <img src="images/education/student-01.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--*Team*-->
    <section id="educate-team">
        <div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Our Teachers</h3>
                <h2>Meet our expert teachers</h2>
            </div>
            <div class="row edu_team_slider slider-educteam">
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="team_member">
                        <figure class="effect-julia">
                            <img src="images/team/rmember-1.jpg" alt="team"> 
                                <div class="team-overlay">
                                <div class="about-tech">
                                    <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
                                    <ul class="socialicons">
                                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                      <li><a href="#"><i class="fa fa-google"></i></a></li>
                                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>                            
                            </div>                           
                        </figure>
                        <div class="member_name">
                            <h3>Adam Smith</h3>
                            <span>Language Teacher</span>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="team_member">
                        <figure class="effect-julia">
                            <img src="images/team/rmember-2.jpg" alt="team">   
                            <div class="team-overlay">                            
                                <div class="about-tech">
                                    <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
                                    <ul class="socialicons">
                                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                      <li><a href="#"><i class="fa fa-google"></i></a></li>
                                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                 </div>                             
                            </div>                         
                        </figure>  
                        <div class="member_name">
                            <h3>Adam Smith</h3>
                            <span>Language Teacher</span>
                        </div>                      
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="team_member">
                        <figure class="effect-julia">
                            <img src="images/team/rmember-3.jpg" alt="team">   
                            <div class="team-overlay">                            
                                <div class="about-tech">
                                    <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
                                    <ul class="socialicons">
                                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                      <li><a href="#"><i class="fa fa-google"></i></a></li>
                                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                 </div>                             
                            </div>                          
                        </figure>
                        <div class="member_name">
                            <h3>Adam Smith</h3>
                            <span>Language Teacher</span>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="team_member">
                        <figure class="effect-julia">
                            <img src="images/team/rmember-4.jpg" alt="team">  
                            <div class="team-overlay">                            
                                <div class="about-tech">
                                    <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
                                    <ul class="socialicons">
                                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                      <li><a href="#"><i class="fa fa-google"></i></a></li>
                                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                 </div>                             
                            </div>                           
                        </figure>                   
                        <div class="member_name">
                            <h3>Adam Smith</h3>
                            <span>Language Teacher</span>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--* End Team*-->

    <!--* Testimonial*-->
    <section id="const-testi" class="edu-testimonial">
        <div class="container">      
            <div class="row">
                <div class="col-sm-6">
                    <!-- section title -->
                    <div class="inner-heading">
                        <h3 class="white">Testimonials</h3>
                        <h2 class="white">Hear what our students have to say</h2>
                        <div class="testimonial-abt">
                            <p class="white">Lorem ipsums dolors sit amet consectetur adipiselo elit sed do eiused tempor the incididunt ut labore et. Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row slider-eductestimo">
                        <div class="col-sm-4">
                            <div class="item">
                            <div class="testimonial_main">
                                <div class="client-pic"><img src="images/team/member-1.jpg" alt=""></div>
                                <h4>
                                    <a href="#" class="text-uppercase">Christ Daniel</a>
                                    <span>Biology</span>
                                </h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                
                            </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="item">
                                <div class="testimonial_main">
                                    <div class="client-pic"><img src="images/team/member-2.jpg" alt=""></div>
                                    <h4>
                                        <a href="#" class="text-uppercase">John Wakson</a>
                                        <span>Science & Arts</span>
                                    </h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="item">
                                <div class="testimonial_main">
                                    <div class="client-pic"><img src="images/team/member-3.jpg" alt=""></div>
                                    <h4>
                                        <a href="#" class="text-uppercase">Tim Loran</a>
                                        <span>Web Developer</span>
                                    </h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </section>
    <!--* EndTestimonial*-->

    <!--* Blog*-->
    <section id="mt_blog" class="light-bg">
        <div class="container">
            <div class="blog_post_sec blog_post_inner">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item-a">
                        <!-- section title -->
                        <div class="inner-heading">
                            <h3>Our Blog</h3>
                            <h2>Follow our latest news</h2>
                        </div>
                        <div class="blog-post_wrapper front-wrapper">
                            <div class="blog-post-image">
                                <div class="clearfix">
                                    <div class="img detail-im">
                                        <img src="images/blog-listing/blog_02.jpg" alt="image" class="img-responsive center-block post_img" />
                                    </div>
                                </div>
                            </div>
                            <div class="post-detail_container">
                                <div class="post-content">
                                    <div class="post-date">
                                        <p>August 2019</p>
                                    </div>
                                    <h3 class="post-title entry-title">
                                        <a href="blog-details.html">Beginner Guideline of UI/UX</a>
                                    </h3>
                                    <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae. </p>
                                    <div class="post_bottom">
                                        <div class="bottom_list user_info_base">
                                            <img src="images/blog/cmnt-2.jpg" alt="">
                                            <p>John Wakson</p>
                                        </div>	          
                                        <div class="bottom_list user_post_cmt">
                                            <a href="#"><i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                            Comments (5)</a>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item-b">                            
                        <div class="blog-post_wrapper front-wrapper">
                            <div class="blog-post-image">
                                <div class="clearfix">
                                    <div class="img detail-im">
                                        <img src="images/blog-listing/blog_04.jpg" alt="image" class="img-responsive center-block post_img" />
                                    </div>
                                </div>
                            </div>
                            <div class="post-detail_container">
                                <div class="post-content">
                                    <div class="post-date">
                                        <p>August 2019</p>
                                    </div>
                                    <h3 class="post-title entry-title">
                                        <a href="blog-details.html">Beginner Guideline of UI/UX</a>
                                    </h3>
                                    <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae. </p>
                                    <div class="post_bottom">
                                        <div class="bottom_list user_info_base">
                                            <img src="images/blog/cmnt-2.jpg" alt="">
                                            <p>John Wakson</p>
                                        </div>            
                                        <div class="bottom_list user_post_cmt">
                                            <a href="#"><i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                            Comments (5)</a>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post_wrapper front-wrapper bl_small_img">
                            <div class="blog-post-image post-img-only">
                                <div class="clearfix">
                                    <div class="img">
                                        <img src="images/blog-listing/blog_03.jpg" alt="image" class="img-responsive center-block post_img" /> 
                                        <div class="on-img-info">
                                            <h3><a href="#">Our Students</a></h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(2)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item-c">
                        <div class="post-detail_container detail-single">
                            <div class="post-content">
                                <div class="post-date">
                                    <p>August 2019</p>
                                </div>
                                <h3 class="post-title entry-title">
                                    <a href="blog-details.html">Beginner Guideline of UI/UX</a>
                                </h3>
                                <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae. </p>
                                <div class="post_bottom">
                                    <div class="bottom_list user_info_base">
                                        <img src="images/blog/cmnt-2.jpg" alt="">
                                        <p>John Wakson</p>
                                    </div>            
                                    <div class="bottom_list user_post_cmt">
                                        <a href="#"><i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                        Comments (5)</a>
                                    </div>                                  
                                </div>
                            </div>
                        </div>
                        <div class="blog-post_wrapper front-wrapper blog_full_image">
                            <div class="blog-post-image post-img-only">
                                <div class="clearfix">
                                    <div class="img">
                                        <img src="images/blog-listing/bl-01.jpg" alt="image" class="img-responsive center-block post_img" />
                                        <div class="on-img-info">
                                            <h3><a href="#">Course Registration</a></h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 22rd April, 2019&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments (10)</a>
                                                </li>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>
    <!--* End Blog*-->

    <!-- l-instructor -->
    <section id="l-instructor">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="widget-cta">
                        <div class="item">
                            <h2 class="widget-title">
                                <span class="white">Become an Instructor</span>
                            </h2>
                            <div class="description">
                                <p class="white">Teach what you love. Edumy gives you the tools to create an<br>online course.</p> 
                            </div>
                        </div>
                        <div class="action">
                            <a class="mt_btn_yellow" href="#">Start Teaching</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="widget-cta cta-style1">
                        <div class="item">
                            <h2 class="widget-title">
                                <span class="white">Dove School For Business</span>
                            </h2>
                            <div class="description">
                            <p class="white">Get unlimited access to 2,500 of Udemy’s top courses for <br>
                                your team. </p>
                            </div>
                        </div>
                        <div class="action">
                            <a class="mt_btn_white-bor" href="#">Start Teaching</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End l-instructor -->

    <!-- Gallery -->
    <section id="the-gallery" class="wide-gallery">
        <div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Gallery</h3>
                <h2>See and feel it</h2>
            </div>
            <div class="row">
                <div class="col-sm-4 mix">
                    <div class="item port-popup">
                        <a href="images/gallery/gl-02.jpg" title="">
                            <img src="images/gallery/gl-02.jpg" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    <div class="item port-popup">
                        <a href="images/gallery/gl-01.jpg" title="">
                            <img src="images/gallery/gl-01.jpg" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 mix">
                    <div class="item port-popup">
                        <a href="images/gallery/gl-s1.jpg" title="">
                            <img src="images/gallery/gl-s1.jpg" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 mix">
                    <div class="item port-popup">
                        <a href="images/gallery/gl-03.jpg" title="">
                            <img src="images/gallery/gl-03.jpg" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    <div class="item port-popup">
                        <a href="images/gallery/gl-04.jpg" title="">
                            <img src="images/gallery/gl-04.jpg" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 mix">
                    <div class="last-item-g">
                        <div class="item port-popup">
                            <a href="images/gallery/gl-c1.jpg" title="">
                                <img src="images/gallery/gl-c1.jpg" alt="">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery -->

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
<script src="{{asset('https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="6f99da5b342d2d8567d36aeb-|49" defer=""></script></body>

</html>
