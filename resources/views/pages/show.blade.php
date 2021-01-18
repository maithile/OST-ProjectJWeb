
@extends('layout.index')

@section('content')


<section id="mt_services" class="light-bg services-section section-inner">
    <div class="container">
    <div class="course-detail">
    <div class="row">
    <div class="col-md-8 col-sm-12">
    <div class="post_title">
    <h2>{{$lesson->title}}</h2>
    </div>
    <div class="post_img">
        <img src="/storage/images/{{$lesson->image}}"> 
        </div>
    <div class="audio">
        <audio controls>
            <source src="/storage/audioFile/{{$lesson->mp3_file}}" type="audio/mpeg">
        </audio>
    </div>
    <div class="course-tabs">
    <div class="nav-content-c">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Question</a></li>
    <li><a data-toggle="tab" href="#menu1">Vocabulary</a></li>
    <li><a data-toggle="tab" href="#menu2">Script</a></li>
    <li><a data-toggle="tab" href="#menu3">Reviews</a></li>
    </ul>

    <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <div class="post_body">
    <h3>Course Summery</h3>
    <div class="over-view">
  
        @foreach ($questions as $value)

        <form action="UserAnswerCotroller@store">
            <p>{{$value->question}}</p>

            {{$value->id}}
            <input type="radio" id="male" name="gender" value="{{$value->choice1}}"> 
            <label for="male">{{$value->choice1}}</label><br>

            <input type="radio" id="male" name="gender" value="{{$value->choice2}}">
            <label for="male">{{$value->choice2}}</label><br>

            <input type="radio" id="male" name="gender" value="{{$value->choice3}}">
            <label for="male">{{$value->choice3}}</label><br>
       
            <br>  
            @endforeach 
    <div class="button">
    <a href="#" class="mt_btn_yellow mar-top-10">Submit</a>
    </div>
    </div>
    </div>
    </div>

   </form>

  





  
    <div id="menu1" class="tab-pane fade">
    <h3>Scheduled Lectures</h3>
    <div class="panel-group course-accd" id="accordion">
    <div class="panel panel-default">
    <div class="panel-heading">
    <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
    <ul class="accd-titles">
    <li><i class="fa fa-book"></i> Lecture 1</li>
    <li class="let-title">Learn Basic Code</li>
    <li><i class="fa fa-clock-o"></i> 5 hours</li>
    </ul>
    </a>
    </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
    <div class="panel-body"> @foreach ($vocabulary as $value)

        <div> Dictionrty_id: {{$value->dictionary_id}} </div>
        <div> Vocabulary: {{$value->dictionary->vocabulary }}</div>
        <div> Meaning: {{$value->dictionary->meaning }} </div> 
        
        @endforeach 
    </div>
    </div>
    </div>
    <div class="panel panel-default">
    <div class="panel-heading">
    <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
    <ul class="accd-titles">
    <li><i class="fa fa-book"></i> Lecture 2</li>
    <li class="let-title">Learn Basic Code</li>
    <li><i class="fa fa-clock-o"></i> 5 hours</li>
    </ul>
     </a>
    </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
    commodo consequat.
    </div>
    </div>
    </div>
    <div class="panel panel-default">
    <div class="panel-heading">
    <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
    <ul class="accd-titles">
    <li><i class="fa fa-book"></i> Lecture 3</li>
    <li class="let-title">Learn Basic Code</li>
    <li><i class="fa fa-clock-o"></i> 5 hours</li>
    </ul>
    </a>
    </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
    commodo consequat.
    </div>
    </div>
    </div>
    <div class="panel panel-default">
    <div class="panel-heading">
    <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
    <ul class="accd-titles">
    <li><i class="fa fa-book"></i> Lecture 4</li>
    <li class="let-title">Learn Basic Code</li>
    <li><i class="fa fa-clock-o"></i> 5 hours</li>
    </ul>
    </a>
    </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
     commodo consequat.
    </div>
    </div>
    </div>
    </div>
    </div>
    <div id="menu2" class="tab-pane fade">
    <div class="advisor-main">
    <div class="advisor-author">
    <div class="advisor-img">
    <img src="images/team/rmember-4.jpg" alt="Instructor">
    </div>
    <div class="advisor-name">
    <h3>Mark Ronson</h3>
    <span>Senior Web Developer</span>
    <ul class="social">
    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
    </ul>
    </div>
    </div>
    <div class="advisor-description">
    
 @foreach($Array as $key => $values)
        <b>{!! $values  !!}</b> : {!!$key !!} <br>
       @endforeach  </p>  

    </div>
    </div>
    </div>
    <div id="menu3" class="tab-pane fade">
    <div id="review-c">
    <div class="review-wrap">
    <h3 class="review_heading">Reviews (4)</h3>
    <ol class="review-lists">
    <li class="comment">
    <div class="activity_rounded">
    <img src="images/blog/cmnt-1.jpg" alt="image"> </div>
    <div class="comment-body">
    <h4 class="text-left"> NIKLOS DELSON &nbsp;&nbsp;
    <small class="date-posted pull-right">18th Mar, 2018</small>
    </h4>
    <ul class="post-review">
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    </ul>
    <p> Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor. Etiam pellentesque, magna eget lobortis placerat, leo leo consequat ante, non iaculis turpis augue ac ligula. Duis a
    enim vel mauris ultrices, leo. </p>
    <a href="#" class="pull-left mt_btn_yellow">Reply</a>
    <div class="clearfix"></div>
    </div>
    </li>
    <li class="comment">
    <div class="activity_rounded">
    <img src="images/blog/cmnt-3.jpg" alt="image"> </div>
    <div class="comment-body">
    <h4 class="text-left"> NIKLOS DELSON &nbsp;&nbsp;
    <small class="date-posted pull-right">18th Mar, 2018</small>
    </h4>
    <ul class="post-review">
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    </ul>
    <p> Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor. Etiam pellentesque, magna eget lobortis placerat, leo leo consequat ante, non iaculis turpis augue ac ligula. Duis a
    enim vel mauris ultrices, leo. </p>
    <a href="#" class="pull-left mt_btn_yellow">Reply</a>
    <div class="clearfix"></div>
    </div>
    </li>
    <li class="comment">
    <div class="activity_rounded">
    <img src="images/blog/cmnt-2.jpg" alt="image"> </div>
    <div class="comment-body">
    <h4 class="text-left"> NIKLOS DELSON &nbsp;&nbsp;
    <small class="date-posted pull-right">18th Mar, 2018</small>
    </h4>
    <ul class="post-review">
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    <li><i class="fa fa-star"></i></li>
    </ul>
    <p> Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor. Etiam pellentesque, magna eget lobortis placerat, leo leo consequat ante, non iaculis turpis augue ac ligula. Duis a
    enim vel mauris ultrices, leo. </p>
    <a href="#" class="pull-left mt_btn_yellow">Reply</a>
    <div class="clearfix"></div>
    </div>
    </li>
    </ol>




    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <aside class="col-md-4 col-sm-12">
    <div class="widget">
    <form class="search-form" role="search" action="http://markupthemex.com/" method="post">
    <input id="sidebar-search" placeholder="Search Courses" type="text">
    </form>
    </div>
    <div class="widget widget_categories">
    <h3 class="blog_heading_border">Categories </h3>
    <ul>
    <li>
    <a href="#"> Web Design </a>
    <span class="categoryCount">(10)</span>
    </li>
    <li>
    <a href="#"> CSE Engineering </a>
    <span class="categoryCount">(07)</span>
    </li>
     <li>
    <a href="#"> Web Development </a>
    <span class="categoryCount">(18)</span>
    </li>
    <li>
    <a href="#"> Civil Engineering </a>
    <span class="categoryCount">(08)</span>
    </li>
    <li>
    <a href="#"> Banking Management </a>
    <span class="categoryCount">(05)</span>
    </li>
    <li>
    <a href="#"> Busines Studies </a>
    <span class="categoryCount">(02)</span>
    </li>
    </ul>
    </div>
    <div class="widget widget_recent_entries">
    <h3 class="blog_heading_border"> Recent Courses </h3>
    <ul>
    <li>
    <img src="images/blog/r-post-1.jpg" alt="image">
    <h4>
    <a href="#">Basic marketing studies for beginner</a>
    </h4>
    <p>Mon, 04-09-2016 |
    <span> Comment (2)</span>
    </p>
    </li>
    <li>
    <img src="images/blog/r-post-2.jpg" alt="image">
    <h4>
    <a href="#">Basic marketing studies for beginner</a>
    </h4>
    <p>Fri, 06-07-2016 |
    <span> Comment (8)</span>
    </p>
    </li>
    <li>
    <img src="images/blog/r-post-3.jpg" alt="image">
    <h4>
    <a href="#">Basic marketing studies for beginner</a>
    </h4>
    <p>Thu, 08-08-2016 |
    <span> No Comment</span>
    </p>
    </li>
    <li>
    <img src="images/blog/r-post-4.jpg" alt="image">
    <h4>
    <a href="#">Basic marketing studies for beginner</a>
    </h4>
    <p>sat, 08-08-2016 |
    <span> No Comment</span>
    </p>
    </li>
    </ul>
    </div>
    <div class="widget widget_tag_cloud">
    <h3 class="blog_heading_border"> Courses Tags </h3>
    <ul>
    <li>
    <a href="#"> Web Design </a>
    </li>
    <li>
    <a href="#"> Business </a>
    </li>
    <li>
    <a href="#"> English </a>
    </li>
    <li>
    <a href="#"> Teachers </a>
    </li>
    <li>
    <a href="#"> Engineering </a>
     </li>
    <li>
    <a href="#"> Marketing </a>
    </li>
    </ul>
    </div>
    </aside>
    </div>
    </div>
    <div class="related-item">
    <div class="leave_review">
        <h3 class="blog_heading_border"> Leave a Comment </h3>
        <form action="#" method="post">
    
        <div class="row">
    
        <div class="col-sm-6">
        <div class="form-group">
        <input placeholder="Name" class="form-control" type="text" required="">
        </div>
        </div>
    
        <div class="col-sm-6">
        <div class="form-group">
        <input placeholder="Email" class="form-control" type="email" required=""> 
        </div>
        </div>
        </div>
    
        <div class="row">
        <div class="col-sm-12">
        <textarea placeholder="Message" class="form-control" required="">
        </textarea>
        </div>
        </div>
    
        <div class="row">
        <div class="col-md-12">
        <button type="submit" class="mt_btn_yellow">Submit</button>
        </div>
        </div>
    
        </form>
        </div>
    
    <br>
    <div class="inner-heading">
    <h3>Related Courses</h3>
    <h2>There are variations available</h2>
    </div>
    <div class="row inner-detail-p">
    <div class="col-md-4 col-sm-12 item">
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
    <a href="portfolio-detail.html">
    <h4>View Detail</h4>
    </a>
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
    <a href="#"><h3>Marketing Management from start for beginner</h3></a>
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
    <a href="portfolio-detail.html">
    <h4>View Detail</h4>
    </a>
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
    <a href="#"><h3>Marketing Management from start for beginner</h3></a>
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
    <a href="portfolio-detail.html">
    <h4>View Detail</h4>
    </a>
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
    <a href="#"><h3>Marketing Management from start for beginner</h3></a>
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
    </div>
    </div>
    </section>









@endsection
