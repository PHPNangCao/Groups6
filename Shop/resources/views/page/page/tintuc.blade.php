@extends('page.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Tin tức</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
            <a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Tin tức</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
  <div id="content" class="space-top-none">
      <div class="main-content">
        <article class="all-browsers">
          @foreach ($news as $new)
          <article class="browser row">
          <div class="col-md-2"><img src="upload/news/{{$new->image}}" alt="" width="100px"></div>
            <div class="col-md-10">
            <h5>{{$new->title}}</h5>
            <p style="text-overflow: ellipsis">{!! Str::limit($new->content,250,'...') !!}</p>
            <span style="float: right"><a href="{{route('chi-tiet-tin-tuc', $new->url)}}" style="color: blue">Chi tiết</a></span>
            </div>
          </article>
          @endforeach
        </article>
      </div>
  </div>
</div>

{{-- <div class="container">
  <div id="content" class="space-top-none">
      <div class="main-content">
        <article class="all-browsers">
          @foreach ($news as $new)
          <article class="browser row">
            <div class="col-md-3">
              <img src="upload/news/{{$new->image}}" width="100%" height="200" alt="">
            </div>
            <div class="col-md-9">
              <span style="font-size: 15px">
                  <a href="{{route('chi-tiet-mon-ngon', $news->id)}}">
                    <h3><b>{{$news->title}}<b></h3>
                    </a>
              </span>
              <span>
                  <p>{!! Str::limit($news->content,250,'...') !!}</p>
              </span>
            </div>
          </article>
          @endforeach
        </article>
      </div>
  </div>
</div> --}}


@endsection