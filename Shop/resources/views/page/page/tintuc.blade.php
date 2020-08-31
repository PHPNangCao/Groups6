@extends('page.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title"><b>Tin tức  </b><div class="fb-share-button" data-href="http://localhost:8000/chi-tiet-mon-ngon/" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8000%2Fchi-tiet-mon-ngon%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div></h6>
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
            <div class="col-md-2">
              <img src="upload/news/{{$new->image}}" alt="" width="100%" height="150">
            </div>
            
            <div class="col-md-10">
              <a href="{{route('chi-tiet-tin-tuc', $new->url)}}">
                <h5>{{$new->title}}</h5>
              </a>
              <span style="font-weight: normal">
                <p>{!! Str::limit($new->content,250,'...') !!}</p>
              </span>
            </div>
          </article>
          @endforeach
        </article>
      </div>
  </div>
</div>

@endsection