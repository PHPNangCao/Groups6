@extends('api-admin.master')
@section('title','Trang quản trị')
@section('content')
<div class="row ">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-primary"><i class="ion ion-ios-people-outline"></i></span>
          <div class="info-box-content">
            <span class="info-box-text"><h3>User</h3></span>
            <span class="info-box-number">TOTAL : {{count($user)}}</span>
            {{-- <p class="card-text"><small class="text-muted">Số lượng: {{count($user)}}</small></p> --}}
            {{-- <p class="card-text"><small class="text-muted">{{$count['SanPham']}}</small></p> --}}
            <br>
            <a _ngcontent-ldw-c121="" class="small text-primary stretched-link" href="{{route('admin.user.index')}}">Xem chi tiết</a>
          </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-success"><i class="fa fa-icons"></i></span>
          <div class="info-box-content">
            <span class="info-box-text"><h3>Danh mục</h3></span>
            <span class="info-box-number">TOTAL : {{count($category)}}</span>
            {{-- <p class="card-text"><small class="text-muted">Số lượng: {{count($user)}}</small></p> --}}
            {{-- <p class="card-text"><small class="text-muted">{{$count['SanPham']}}</small></p> --}}
            <br>
            <a _ngcontent-ldw-c121="" class="small text-primary stretched-link" href="{{route('admin.product.index')}}">Xem chi tiết</a>
          </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-success"><i class="fa fa-i-cursor"></i></span>
          <div class="info-box-content">
            <span class="info-box-text"><h3>Sản Phẩm</h3></span>
            <span class="info-box-number">TOTAL : {{count($product)}}</span>
            <br>
            {{-- <p class="card-text"><small class="text-muted">Số lượng: {{count($user)}}</small></p> --}}
            {{-- <p class="card-text"><small class="text-muted">{{$count['SanPham']}}</small></p> --}}
            <a _ngcontent-ldw-c121="" class="small text-primary stretched-link" href="{{route('admin.product.index')}}">Xem chi tiết</a>
          </div>
        </div>
    </div>
</div>
@endsection