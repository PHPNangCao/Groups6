@extends('page.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title" style="color: green" ><b>DANH SÁCH MÓN NGON<b></h6>
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
        <div class="col-md-10">
            <img src="upload/food/{{$getfood->image}}" width="30%" height="30%" alt="">
            <h1>{{$getfood->title}}</h1>
            <h6><p>{!!$getfood->content!!}</p></h6>
            <hr>
        </div>
        <div class="col-md-2">
            <div id="content" class="space-top-none">
                <div class="main-content">
                  <article class="all-browsers">
                    @foreach ($food as $food)
                    <article class="browser row">
                      <div class="col-md-3">
                        <img src="upload/food/{{$food->image}}" width="100%" height="180" alt="">
                      </div>
                      <div class="col-md-9">
                        <span style="font-size: 11px">
                            <a href="{{route('chi-tiet-mon-ngon', $food->id)}}">
                              <h3><b>{{$food->title}}<b></h3>
                              </a>
                        </span>
                        <span style="font-size: 6px">
                            <p>{!! Str::limit($food->note,250,'...') !!}</p>
                        </span>
                      </div>
                    </article>
                    @endforeach
                  </article>
                </div>
            </div>        </div>
    </div>

</div>

@endsection

