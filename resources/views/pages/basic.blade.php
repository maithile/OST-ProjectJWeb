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
                          <a href="/{{$value->id}}">
                            <h4>Listen</h4>
                        </a>
                      </div>
                      <div class="overlayPort">
                          <ul class="info text-center list-inline">
                              <li>
                                  <a href="/{{$value->id}}">
                                      <h4>Listen</h4>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="feat-inn">
                    
                      <a href="/{{$value->id}}"><h3>{{$value->title}}</h3> </a>
                      <div class="course-feat">
                          <div class="price-ft pull-left">
                             
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
          <div class="col-xs-12">
            <div class="pagination-div pg-services text-center">
            
            <ul class="pagination">
                    <li class="prev">
                        <a href="#"> &lt;&lt; </a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li class="active">
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">...</a>
                    </li>
                    <li>
                        <a href="#">10</a>
                    </li>
                    <li class="next">
                        <a href="#"> &gt;&gt; </a>
                    </li>
                </ul> 
            </div> 

        {{$lesson->links()}}
       

@endsection



        
