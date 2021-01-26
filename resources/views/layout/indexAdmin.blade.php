
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to our Admin">

    <title>Janweb - Template</title>
    <!-- Favicon -->
    {{-- <script src="cdn-cgi/apps/head/aXeeT3C8FEVE2uMUPMMUDxVnKrs.js"></script><link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"> --}}
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!--Default CSS-->
    <link href="{{ asset('css/default.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/select2.min.css')}}" rel="stylesheet" type="text/css">

    {{-- <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"> --}}

    <link href="node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="{{ asset('css/select2.min.css')}}" type="text/css">
    <!--Plugin CSS-->
    <link href="{{ asset('css/plugin.css')}}" rel="stylesheet" type="text/css">
    <!--Dashboard CSS-->
    <link href="{{ asset('css/dashboard.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons.css')}}" rel="stylesheet" type="text/css">

</head>
<body>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>  

            <div class="dashboard-sticky-nav">
                <div class="content-left pull-left">
                    <h2><a href="index.html" class="white">Padhai</a></h2>
                </div>
                <div class="content-right pull-right">
                    <div class="search-bar">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Search Now">
                                <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="profile-sec">
                                <div class="dash-image">
                                    <img src="images/comment.jpg" alt="">
                                </div>
                                <div class="dash-content">
        <h4> {{ Auth::user()->name }}</h4>
        <span> Admin</span>
        </div>
        </div>
        </a>
        <ul class="dropdown-menu">
        <li><a href="#"><i class="sl sl-icon-settings"></i>Settings</a></li>
        <li><a href="#"><i class="sl sl-icon-user"></i>Profile</a></li>
        <li><a href="#"><i class="sl sl-icon-lock"></i>Change Password</a></li>

        
        <li><a href="{{ route('logout') }}"><i class="sl sl-icon-power"></i>Logout</a></li>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </ul>
        </div>
        <div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">
        <div class="dropdown-item">
        <i class="sl sl-icon-envelope-open"></i>
        <span class="notify">3</span>
        </div>
        </a>
        <div class="dropdown-menu notification-menu">
        <h4> 23 Messages</h4>
        <ul>
        <li>
        <a href="#">
        <div class="notification-item">
        <div class="notification-image">
        <img src="images/comment.jpg" alt="">
        </div>
        <div class="notification-content">
         <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
        </div>
        </div>
        </a>
        </li>
        <li>
        <a href="#">
        <div class="notification-item">
        <div class="notification-image">
        <img src="images/comment.jpg" alt="">
        </div>
        <div class="notification-content">
        <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
        </div>
        </div>
        </a>
        </li>
        <li>
        <a href="#">
        <div class="notification-item">
        <div class="notification-image">
        <img src="images/comment.jpg" alt="">
        </div>
        <div class="notification-content">
        <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
        </div>
        </div>
        </a>
        </li>
        </ul>
        <p class="all-noti"><a href="#">See all messages</a></p>
        </div>
        </div>
        <div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">
        <div class="dropdown-item">
        <i class="sl sl-icon-bell"></i>
        <span class="notify">3</span>
        </div>
        </a>
        <div class="dropdown-menu notification-menu">
        <h4> 599 Notifications</h4>
        <ul>
        <li>
        <a href="#">
        <div class="notification-item">
        <div class="notification-image">
        <img src="images/comment.jpg" alt="">
        </div>
        <div class="notification-content">
        <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
        </div>
        </div>
        </a>
        </li>
        <li>
        <a href="#">
        <div class="notification-item">
        <div class="notification-image">
        <img src="images/comment.jpg" alt="">
        </div>
        <div class="notification-content">
        <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
        </div>
        </div>
        </a>
        </li>
        <li>
        <a href="#">
        <div class="notification-item">
         <div class="notification-image">
        <img src="images/comment.jpg" alt="">
        </div>
        <div class="notification-content">
        <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
        </div>
        </div>
        </a>
        </li>
        </ul>
        <p class="all-noti"><a href="#">See all notifications</a></p>
        </div>
        </div>
        </div>
        </div>
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">
                    <ul>
                        <li class="active"><a href="dashboard.html">Dashboard</a></li>
                        <li>
                            <a>Lesson</a>
                            <ul> 
                                <li><a href="{{route('post.index')}}">Lesson Overview</span></a></li>
                                <li><a href="{{route('post.create')}}">Create Lesson</span></a></li>
                                
                            </ul>   
                            
                        </li>
                     <li>
                            <a>Dictionary </a>
                            <ul>
                                <li><a href="{{route('dictionary.index')}}">All Vocabulary</span></a></li>
                                <li><a href="{{route('dictionary.create')}}">Add New Vocabulary</span></a></li>
                            </ul>   
                            
                        </li>
                        <li><a href="index.html">Logout</a></li>
                    </ul>
                </div>
            </div>


            <div class="dashboard-content">
                <div class="row">
               
                  @yield('content')
                
            <!-- Content / End -->

            <!-- Copyrights -->
            <div class="copyrights">
                <p> 2021/2/1 <i class="fa fa-copyright" aria-hidden="true"></i><a href="https://www.cyclonethemes.com" target="_blank">Janteam</a></p>
            </div>
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->


    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="https://use.fontawesome.com/f315f446db.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/f315f446db.js"></script>

    <script src="/node_modules/select2/dist/js/select2.min.js'" type="8c7c28a0a27045965419e5b0-text/javascript"></script>
    <script src="{{ asset('js/select2.min.js')}}" type="text/javascript"></script>

    <script src="{{ asset('js/jquery-3.2.1.min.js')}}" type="8c7c28a0a27045965419e5b0-text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}" type="8c7c28a0a27045965419e5b0-text/javascript"></script>
    <script src="{{ asset('js/jquery.easing.min.js')}}" type="8c7c28a0a27045965419e5b0-text/javascript"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js" type="8c7c28a0a27045965419e5b0-text/javascript"></script>
    <script src="{{ asset('js/chart.js')}}" type="8c7c28a0a27045965419e5b0-text/javascript"></script>
    <script src="{{ asset('js/counterup.min.js')}}" type="8c7c28a0a27045965419e5b0-text/javascript"></script>
    <script src="{{ asset('js/dashboard-custom.js')}}" type="8c7c28a0a27045965419e5b0-text/javascript"></script>
    <script src="{{ asset('js/jpanelmenu.min.js')}}" type="8c7c28a0a27045965419e5b0-text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="8c7c28a0a27045965419e5b0-|49" defer=""></script></body>
</html>