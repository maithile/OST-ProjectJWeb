@extends('layout.index')
@section('content')

@foreach ($lesson as $value)
<!-- breadcrumb -->
<div class="breadcrumb-main">    
    <div class="container">        
        <ul class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="/inter">{{$value->level->level}}</a></li>
            <li class="active">Listening</li>
        </ul>
    </div>
</div>
<!-- End breadcrumb -->

<!--* Services*-->
<section id="mt_services" class="light-bg services-section section-inner">
<div class="container">               
    <div class="row">


          <div class="col-md-4 col-sm-6 col-xs-6 item">
              <div class="featured-item">
                  <div class="feat-img">

                    <img src = "/storage/images/{{$value->image}}"  width="360" height="230">
                      <div class="th-name">
                          <a href="/show/{{$value->id}}">
                            <h4>Listen</h4>
                        </a>
                      </div>
                      <div class="overlayPort">
                          <ul class="info text-center list-inline">
                              <li>
                                  <a href="/show/{{$value->id}}">
                                      <h4>Listen</h4>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="feat-inn">
                    
                      <a href="/show/{{$value->id}}"><h3>{{$value->title}}</h3> </a>
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
        {{$lesson->links()}}
       

@endsection



        
