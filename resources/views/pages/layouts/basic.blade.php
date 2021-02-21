@extends('layout.index')
@section('content')
<!-- breadcrumb -->
<div class="breadcrumb-main">    
    <div class="container">        
        <ul class="breadcrumb">
            <li><a href="/">ホームページ</a></li>
            <li><a href="/basic">基本</a></li>
        </ul>
    </div>
</div>
<!-- End breadcrumb -->
 <!--* Services*-->
 <section id="mt_services" class="light-bg services-section section-inner">
    <div class="container">               
        <div class="row">
            @foreach ($lesson as $value)
            <div class="col-md-4 col-sm-6 col-xs-6 item mar-bottom-30">
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
                            <div class="admin-ft pull-right">
                                <ul>
                                    <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>{{$value->comments_count}}</span></a></li>
                                    {{-- <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            @endforeach          
        </div>
    </div>
</section>
{{$lesson->links()}} 

@endsection



        
