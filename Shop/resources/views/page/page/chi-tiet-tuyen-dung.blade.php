@extends('page.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h1 class="inner-title" style="color: green" ><b>Tuyển Dụng Fresh Farm<b></h1>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
            <a href="{{route('trang-chu')}}" style="color: blue">Trang Chủ </a> / <span><a href="{{route('tuyen-dung')}}">Bảng Tin Tuyển Dụng</a></span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div class="row">

        {{-- Bài viết chính --}}
        <div class="col-md-9">
            <img src="source/assets/dest/images/recruitment.jpg" width="100%" alt="">
            <hr>
            <h1>{{$getRecruitment->title}}</h1>
            <br>
            <h6><p>{!!$getRecruitment->description!!}</p></h6>
            <br>
            <p style="font-size: 15px">
                Mọi Thông Tin Chi Tiết Vui Lòng Liên Hệ Trực Tiếp 1800.1090 Để Giải Đáp Thắc Mắc 
            </p>       
            <hr>    
            <div class="fb-like" data-href="{{route('chi-tiet-tuyen-dung',$getRecruitment->url)}}" data-width="300px" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>             
            <div class="fb-comments" data-href="{{route('chi-tiet-tuyen-dung',$getRecruitment->url)}}" data-numposts="10" data-width=""></div>
            <hr>
        </div>
        
        {{-- Bài viết khác --}}
        <div class="col-md-3 aside" >
          <div class="widget">
            <h3 class="widget-title">
                <a href="{{route('tuyen-dung')}}">Vị Trí Khác<a>                    
            </h3>

              <div class="widget-body">
                  @foreach ($recruitment as $recruitment)
                  <div class="beta-sales beta-lists">
                          <a class="pull-left" href="{{route('chi-tiet-tuyen-dung',$recruitment->url)}}">                          
                            <div class="media-body">
                                {!! $recruitment->title !!} 
                            </div>
                            <strong>(Số Lượng Tuyển: 3 người)</strong> 
                            <span style="color: red" >HOT</span>                         
                          </a>
                  </div>
                  @endforeach  
              </div>
          </div> <!-- best sellers widget -->
      </div>
    </div>

</div>

@endsection

