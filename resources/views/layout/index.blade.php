
<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="img/favicon.png" type="image/png">
<title>Courses</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{ asset('vendors/linericon/style.css')}}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendors/lightbox/simpleLightbox.css')}}">
<link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css')}}">
<link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css')}}">

<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header_area">
<div class="header-top">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-sm-6 col-4 header-top-left">
<a href="tel:+9530123654896">
<span class="lnr lnr-phone"></span>
<span class="text">
<span class="text">+953012 3654 896</span>
</span>
</a>
<a href="{{ asset('/cdn-cgi/l/email-protection#becdcbceced1cccafeddd1d2d1ccd2d7dc90ddd1d3')}}">
<span class="lnr lnr-envelope"></span>
<span class="text">
<span class="text"><span class="__cf_email__" data-cfemail="66151316160914122605090a09140a0f044805090b">[email&#160;protected]</span></span>
</span>
</a>
</div>
<div class="col-lg-6 col-sm-6 col-8 header-top-right">
<a href="#" class="text-uppercase">Login</a>
</div>
</div>
</div>
</div>
<div class="main_menu">
<div class="search_input" id="search_input_box">
<div class="container">
<form class="d-flex justify-content-between" method="" action="">
<input type="text" class="form-control" id="search_input" placeholder="Search Here">
<button type="submit" class="btn"></button>
<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
</form>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">

<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
<ul class="nav navbar-nav menu_nav ml-auto">
<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
<li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
<li class="nav-item submenu dropdown active">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
<ul class="dropdown-menu">
<li class="nav-item"><a class="nav-link" href="courses.html">Courses</a></li>
<li class="nav-item"><a class="nav-link" href="course-details.html">Course Details</a></li>
<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
</ul>
</li>
<li class="nav-item submenu dropdown">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
<ul class="dropdown-menu">
<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
</ul>
</li>
<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
<li class="nav-item">
<a href="#" class="nav-link search" id="search">
<i class="lnr lnr-magnifier"></i>
</a>
</li>
</ul>
</div>
</div>
</nav>
</div>
</header>


<section class="banner_area">
<div class="banner_inner d-flex align-items-center">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="banner_content text-center">
<h2>Courses</h2>
<p>In the history of modern astronomy, there is probably no one greater leap forward than
the
building and launch of the space telescope known as the Hubble.</p>
<div class="page_link">
<a href="index.html">Home</a>
<a href="courses.html">Courses</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="popular_courses lite_bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="main_title">
<h2>Popular Courses</h2>
<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
telescope. It’s
exciting to think about setting up your own viewing station.</p>
</div>
</div>
</div>
<div class="row">
    @yield('content')

<div class="col-lg-3 col-md-6">
<div class="single_course">
<div class="course_head overlay">
<img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
<div class="authr_meta">
<img src="img/author1.png" alt="">
<span>Mart Taylor</span>
</div>
</div>
<div class="course_content">
<h4>
<a href="course-details.html">Learn React js beginners</a>
</h4>
<p>When television was young, there was a huge popular show based on the still popular
fictional character of
Superman.</p>
<div class="course_meta d-flex justify-content-between">
<div>
<span class="meta_info">
<a href="#"><i class="lnr lnr-user"></i>355</a>
</span>
<span class="meta_info">
<a href="#">
<i class="lnr lnr-bubble"></i>35
</a>
</span>
</div>
<div>
<span class="price">$150</span>
</div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="single_course">
<div class="course_head overlay">
<img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
<div class="authr_meta">
<img src="img/author1.png" alt="">
<span>Mart Taylor</span>
</div>
</div>
<div class="course_content">
<h4>
<a href="course-details.html">Learn React js beginners</a>
</h4>
<p>When television was young, there was a huge popular show based on the still popular
fictional character of
Superman.</p>
<div class="course_meta d-flex justify-content-between">
<div>
<span class="meta_info">
<a href="#">
<i class="lnr lnr-user"></i>355
</a>
</span>
<span class="meta_info"><a href="#">
<i class="lnr lnr-bubble"></i>35
</a></span>
</div>
<div>
<span class="price df_color1">$150</span>
</div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="single_course">
<div class="course_head overlay">
<img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
<div class="authr_meta">
<img src="img/author1.png" alt="">
<span>Mart Taylor</span>
</div>
</div>
<div class="course_content">
<h4>
<a href="course-details.html">Learn React js beginners</a>
</h4>
<p>When television was young, there was a huge popular show based on the still popular
fictional character of
Superman.</p>
<div class="course_meta d-flex justify-content-between">
<div>
<span class="meta_info">
<a href="#">
<i class="lnr lnr-user"></i>355
</a>
</span>
<span class="meta_info"><a href="#">
<i class="lnr lnr-bubble"></i>35
</a></span>
</div>
<div>
<span class="price">$150</span>
</div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="single_course">
<div class="course_head overlay">
<img class="img-fluid w-100" src="img/courses/trainer1.jpg" alt="">
<div class="authr_meta">
<img src="img/author1.png" alt="">
<span>Mart Taylor</span>
</div>
</div>
<div class="course_content">
<h4>
<a href="course-details.html">Learn React js beginners</a>
</h4>
<p>When television was young, there was a huge popular show based on the still popular
fictional character of
Superman.</p>
<div class="course_meta d-flex justify-content-between">
<div>
<span class="meta_info">
<a href="#">
<i class="lnr lnr-user"></i>355
</a>
</span>
<span class="meta_info"><a href="#">
<i class="lnr lnr-bubble"></i>35
</a></span>
</div>
<div>
<span class="price df_color2">$150</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<footer class="footer-area section_gap">
<div class="container">
<div class="row">
<div class="col-lg-2 col-md-6 single-footer-widget">
<h4>Top Products</h4>
<ul>
<li><a href="#">Managed Website</a></li>
<li><a href="#">Manage Reputation</a></li>
<li><a href="#">Power Tools</a></li>
<li><a href="#">Marketing Service</a></li>
</ul>
</div>
<div class="col-lg-2 col-md-6 single-footer-widget">
<h4>Quick Links</h4>
<ul>
<li><a href="#">Jobs</a></li>
<li><a href="#">Brand Assets</a></li>
<li><a href="#">Investor Relations</a></li>
<li><a href="#">Terms of Service</a></li>
</ul>
</div>
<div class="col-lg-2 col-md-6 single-footer-widget">
<h4>Features</h4>
<ul>
<li><a href="#">Jobs</a></li>
<li><a href="#">Brand Assets</a></li>
<li><a href="#">Investor Relations</a></li>
<li><a href="#">Terms of Service</a></li>
</ul>
</div>
<div class="col-lg-2 col-md-6 single-footer-widget">
<h4>Resources</h4>
<ul>
<li><a href="#">Guides</a></li>
<li><a href="#">Research</a></li>
<li><a href="#">Experts</a></li>
<li><a href="#">Agencies</a></li>
</ul>
</div>
<div class="col-lg-4 col-md-6 single-footer-widget">
<h4>Newsletter</h4>
<p>You can trust us. we only send promo offers,</p>
<div class="form-wrap" id="mc_embed_signup">
<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
<input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
<button class="click-btn btn btn-default">
<span>subscribe</span>
</button>
<div style="position: absolute; left: -5000px;">
<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
</div>
<div class="info"></div>
</form>
</div>
</div>
</div>
<div class="row footer-bottom d-flex justify-content-between">
<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2018 All rights reserved | This
template is
made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a></p>
<div class="col-lg-4 col-sm-12 footer-social">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-behance"></i></a>
</div>
</div>
</div>
</footer>



<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.2.1.min.js"></script>
<script src="{{ asset('js/popper.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/stellar.js')}}"></script>
<script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/owl-carousel-thumb.min.js')}}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ asset('vendors/counter-up/jquery.counterup.js')}}"></script>
<script src="{{ asset('js/mail-script.js')}}"></script>

<script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE')}}"></script>
<script src="{{ asset('js/gmaps.min.js')}}"></script>
<script src="{{ asset('js/theme.js')}}"></script>

<script async src="{{ asset('https://www.googletagmanager.com/gtag/js?id=UA-23581568-13')}}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>