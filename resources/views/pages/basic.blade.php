@extends('layout.index')

@section('content')

   
@foreach ($lesson as $value)
          <div class="col-md-4 col-sm-6 col-xs-6 item">
              <div class="featured-item">
                  <div class="feat-img">

                    <img src = "/storage/images/{{$value->image}}"  width="360" height="230">
                      {{-- <img src="images/education/ft-1.jpg" alt=""> --}}
                      <div class="th-name">
                          <img src="images/blog/cmnt-1.jpg" alt="">
                          <h5>Japan</h5>
                      </div>
                      <div class="overlayPort">
                          <ul class="info text-center list-inline">
                              <li>
                                  <a href="courses-detail.html">
                                      <h4>View Detail</h4>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="feat-inn">
                    
                      <a href="courses-detail.html"><h3>{{$value->title}}</h3></a>
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
          @endforeach









 {{-- <div class="course_content">
  <h4>
  <a href="basic/{{$value->id}}">{{$value->title}}</a>
  
    <img src="/storage/images/{{$value->image}}" width="230" height="138" alt="">
  
  </h4>
  <p>{{$value->script}}</p>
  <div class="course_meta d-flex justify-content-between">
  <div>
 

 
  </div>
  <div>

  <span class="meta_info">$150</span>
  </div>
  </div>  --}}



 


@endsection



        
