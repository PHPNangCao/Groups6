@extends('page.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title" style="color: green" ><b>Chuyên mục tin tức<b></h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
            <a href="{{route('trang-chu')}}" style="color: blue">Trang Chủ </a> / <span> Bài Viết</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div class="row">

        {{-- Bài viết chính --}}
        <div class="col-md-10">
            <img src="upload/news/{{$getnews->image}}" width="30%" height="30%" alt="">
            <h1>{{$getnews->title}}</h1>
            <h6><p>{!!$getnews->content!!}</p></h6>
            <hr>
        </div>
        
        {{-- Bài viết khác --}}
        {{-- <div class="col-md-2">
            <div id="content" class="space-top-none">
                <div class="main-content">
                  @foreach ($food as $food)
                  <article class="all-browsers">
                    <article class="browser row">
                      <img src="upload/food/{{$food->image}}" width="100%"  alt="">
                        <span style="font-size: 5px">
                            <a href="{{route('chi-tiet-mon-ngon', $food->id)}}">
                              <h3><b>{{$food->title}}<b></h3>
                              </a>
                        </span>
                      </div>
                    </article>
                  </article>
                  @endforeach

                </div>
            </div>        
          </div> --}}
    </div>

</div>

@endsection

