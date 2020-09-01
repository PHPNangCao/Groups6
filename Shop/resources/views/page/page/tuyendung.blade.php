@extends('page.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
          <h6 class="inner-title" style="color: green" ><b>Bảng Tin Tuyển Dụng Fresh Farm<b><div></a></div></h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
              <a href="{{route('trang-chu')}}" style="color: blue">Trang Chủ </a> / <span>Bảng Tin Tuyển Dụng</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
  <div id="content" class="space-top-none">
      <div class="main-content">
        <article class="all-browsers">
          @foreach ($recruitment as $recruitment)
          <article class="browser row">
            <div class="col-md-10">
              <a href="{{route('chi-tiet-tuyen-dung', $recruitment->url)}}">
                <h5>{{$recruitment->title}}</h5>
              </a>
            </div>
          </article>
          @endforeach
        </article>
      </div>
  </div>
</div>

@endsection