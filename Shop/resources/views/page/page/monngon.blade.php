@extends('page.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Danh sách Món Ngon</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
            <a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Bài Viết</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
  <div id="content" class="space-top-none">
      <div class="main-content">
        <article class="all-browsers">
          @foreach ($food as $food)
          <article class="browser row">
          <div class="col-md-2"><img src="upload/product/{{$food->image}}" alt="" width="100px"></div>
            <div class="col-md-10">
            <h5>{{$food->title}}</h5>
            <h5>{{$food->note}}</h5>
            <p>\{!!$food->content!!}</p>
              <span style="float: right"><a href="" style="color: blue">Chi tiết</a></span>
            </div>
          </article>
          @endforeach
        </article>
      </div>
  </div>
</div>

@endsection