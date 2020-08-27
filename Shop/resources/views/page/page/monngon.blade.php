@extends('page.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Danh sách Món Ngon</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
            <a href="{{route('trang-chu')}}">Trang Chủ</a> / <span>Bài Viết</span>
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
            <div class="col-md-3">
              <img src="upload/food/{{$food->image}}" width="100%" height="210">
            </div>
            <div class="col-md-9">
              <span style="font-size: 12px">
                  <a><h3><b>{{$food->title}}<b></h3></a>
              </span>
              <span style="font-size: 7px">
                  <p>{!!$food->note!!}</p>
              </span>
              {{-- <span style="float: right">
                <a href="" style="color: blue">
                  Chi tiết
                </a>
              </span> --}} 
            </div>
          </article>
          @endforeach
        </article>
      </div>
  </div>
</div>

@endsection