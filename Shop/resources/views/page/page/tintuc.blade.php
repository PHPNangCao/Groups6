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
          <div class="col-md-2"><img src="upload/product/{{$new->image}}" alt="" width="100px"></div>
            <div class="col-md-10">
            <h5>{{$new->title}}</h5>
            <p>\{!!$new->content!!}</p>
              <span style="float: right"><a href="" style="color: blue">Chi tiết</a></span>
            </div>
          </article>
          @endforeach
        </article>
      </div>
  </div>
</div>

@endsection