
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

    <div class="over-view">  
     <form action="{{ route('answer-submit', $lesson->id) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      
        @foreach ($questions as $value)
           <p><b> {{$value->question}} </b></p>
             @foreach ($value->answer as $item) 
               <input type="radio" id="male" name="mit[{{$item->question_id}}]" value="{{$value->id}}"> 
                <p>{{$item->answer}}</p>
              @endforeach 
            @endforeach
   
      <input  type="submit" name ="submit" value="Submit">
   </form>
</div>
</div>
</div>

                {{-- vocabulary --}}
<div id="menu1" class="tab-pane fade"> 
    <div class="panel-group course-accd" id="accordion">
        @foreach ($vocabulary as $value)
    <div class="panel panel-default">
    <div class="panel-heading">
    <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
    <ul class="accd-titles">
    <li>{{$value->dictionary->vocabulary }}</li>
    <li class="let-title">{{$value->dictionary->meaning }}</li>
    </ul>
    </a>
    </h4>
    </div>
    </div>
    @endforeach
    </div>
    </div>
                             {{-- vocabulary end --}}
       
        {{-- Script --}}

        <div id="menu2" class="tab-pane fade">
                @foreach($Array as $key => $values)
                <b>{!! $values  !!}</b> : {!!$key !!} <br>
            @endforeach  </p> 
            </div>
        {{-- Script  end --}}

        <div id="menu3" class="tab-pane fade">
          cau hoi phu
         </div>


        </div>
         </div>
                           {{-- comment--}}
         <div class="leave_review">
            <h3 class="blog_heading_border"> Leave a Comment </h3>
            <form action="#" method="post">
            <div class="row">
            <div class="col-sm-6">
            <div class="form-group">
            <input placeholder="Name" class="form-control" type="text" required=""> </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
            <input placeholder="Email" class="form-control" type="email" required=""> </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
            <textarea placeholder="Message" class="form-control" required=""></textarea>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
            <button type="submit" class="mt_btn_yellow">Submit</button>
            </div>
            </div>
            </form>
            </div>
                        {{-- end comment--}}

        </div>
    </div>




         {{-- side bar--}}
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
            <h3 class="blog_heading_border"> Recent Lessons</h3>
            <ul>
                @foreach ($lesson_show as $value)  
            <li>
            <img src="/storage/images/{{$value->image}}" alt="image" height="60%" width="22%">
            <h4>
            <a href="#">{{$value->title}}</a>
            </h4>
            <p>{{$value->updated_at}} |
            <span> 5 comment</span>
            </p>
            </li>
            @endforeach
            </ul>
            </div>



            <div class="widget widget_tag_cloud">
            <h3 class="blog_heading_border"> Lesson Tags </h3>
            <ul>
            <li>
            <a href="#">Travel  </a>
            </li>
            <li>
            <a href="#"> Business </a>
            </li>
            <li>
            <a href="#"> Onsen </a>
            </li>
            <li>
            <a href="#"> Teachers </a>
            </li>
            <li>
            <a href="#"> Engineering </a>
             </li>
            <li>
            <a href="#"> Cooking </a>
            </li>
            </ul>
            </div>
            </aside>

                  {{-- side bar end --}}


            </div>
            </div>


            {{-- lesson related to categories(Example Travel)--}}
            <div class="related-item">
            <div class="inner-heading">
            <h3>Related Lessons</h3>
            <h2>There are variations available</h2>
            </div>
            <div class="row inner-detail-p">

           
                @foreach ($lesson_show as $item)
                    
                @endforeach
            
            <div class="col-md-4 col-sm-6 col-xs-12 item">
            <div class="featured-item">


            <div class="feat-img">
            <img src="images/education/ft-3.jpg" alt="">
            <div class="th-name">
            <img src="images/blog/cmnt-3.jpg" alt="">
            <h5>{{$item->title}}</h5>
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
