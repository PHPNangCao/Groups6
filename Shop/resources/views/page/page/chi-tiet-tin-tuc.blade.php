@extends('page.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title" style="color: green" ><b>Chuyên mục tin tức<b></h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
            <a href="{{route('trang-chu')}}" style="color: blue">Trang Chủ </a> / <span><a href="{{route('tin-tuc')}}">Bài Viết</a></span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div class="row">

        {{-- Bài viết chính --}}
        <div class="col-md-8">
            <img src="upload/news/{{$getnews->image}}" width="30%" height="30%" alt="">
            <br>
            <h1>{{$getnews->title}}</h1>
            <hr>
            <div class="fb-like" data-href="{{route('chi-tiet-tin-tuc',$getnews->url)}}" data-width="300px" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>             
            <hr>
            <h6><p>{!!$getnews->content!!}</p></h6>
            <hr>
            <div class="fb-comments" data-href="{{route('chi-tiet-tin-tuc',$getnews->url)}}" data-numposts="10" data-width=""></div>
            <hr>
        </div>
        
        {{-- Bài viết khác --}}
        <div class="col-md-4 aside" >
          <div class="widget">
            <h3 class="widget-title">
                <a href="{{route('tin-tuc')}}">Bài viết khác<a>                    
            </h3>

              <div class="widget-body">
                  @foreach ($news as $news)
                  <div class="beta-sales beta-lists">
                      <div class="media beta-sales-item">  
                          <a class="pull-left" href="{{route('chi-tiet-tin-tuc',$news->url)}}"><img src="upload/news/{{$news->image}}"  alt=""></a>
                          <div class="media-body">
                              {!! $news->title !!}

                          </div>
                      </div>
                  </div>
                  @endforeach  
              </div>
          </div> <!-- best sellers widget -->
      </div>
    </div>

</div>

@endsection

