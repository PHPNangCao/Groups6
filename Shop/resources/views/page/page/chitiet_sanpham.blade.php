@extends('page.master')
@section('content')
<div class="inner-header" >
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản phẩm</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
            <a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

    <div id="content">
<div class="container" action>
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                    <img src="upload/product/{{$sanpham->image}}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            @if ($sanpham->promotion_price != 0)
                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>
                            @endif
                            <p class="single-item-title"><h2>{{$sanpham->name}}</h2></p>
                            {{-- <p class="single-item-price">
                                @if ($sanpham->promotion_price == 0)
                                <span class="flash-sale">{{number_format($sanpham->unit_price)}} VNĐ</span>
                                @else
                                    <span class="flash-del">{{number_format($sanpham->unit_price)}} VNĐ</span>
                                    <span class="flash-sale">{{number_format($sanpham->promotion_price)}} VNĐ</span>
                                @endif
                            </p> --}}
                        </div>
                        <br>
                        <p style="color: red">Liên Hệ:</p>
                        <h5><a href="tel:0349394368">0349.394.368</a></h5>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Mô tả</a></li>
                        <li><a href="#tab-reviews">Reviews (0)</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        <p>{!! $sanpham->description !!}</p>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <form action="{{route('admin.comment.store')}}" method="POST">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="feedback" name="rating" >
                                            <p>Mời bạn chọn sao để đánh giá<span class="text-danger">(*)</p>
                                            @include('page.rate');
                                            @if ($errors->has('rating'))
                                                <div class="text-danger">
                                                    {{$errors->first('rating')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Tên:<span class="text-danger">(*)</label>
                                            <input type="text" name="name" class="form-control" placeholder="Nhập vào họ tên...">
                                            @if ($errors->has('name'))
                                                <div class="text-danger">
                                                    {{$errors->first('name')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại:</label>
                                            <input type="text" name="phone" class="form-control" placeholder="Nhập vào số điện thoại...">
                                            @if ($errors->has('phone'))
                                                <div class="text-danger">
                                                    {{$errors->first('phone')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Gửi đánh giá:<span class="text-danger">(*)</label>
                                            <textarea type="text" name="description" class="form-control" placeholder="Nhập đánh giá..."></textarea>
                                            @if ($errors->has('description'))
                                                <div class="text-danger">
                                                    {{$errors->first('description')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="product_id" class="form-control" value="{{$sanpham->id}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="container">
                            <h6><strong> Đánh giá của khách:</strong></h6>
                        </div>
                        <div class="container">
                            <div class="col-8">
                                <div class="panel-default">
                                    <div class="panel-body">
                                        <div class="border border-dark">
                                            @foreach ($comment as $cmt)
                                            <div>
                                                <span><strong> </strong>{{$cmt->phone}}</span>
                                            </div>
                                            <div>
                                                @if ($user->rating == {{$cmt->rating}
                                                ]]]
                                                ]]]]]
                                                ]]]
                                                    @break
                                                @endif
                                            </div>
                                            <div>
                                                <span>{{$cmt->description}}</span>
                                            </div>
                                            @endforeach
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space50">
                </div>
                <div class="beta-products-list">
                    <h4>Sản phẩm tương tự</h4>

                    <div class="row">
                        @foreach ($sp_tuongtu as $sptt)
                        <div class="col-sm-4">
                            <div class="single-item">
                                {{-- @if ($sptt->promotion_price != 0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                @endif --}}
                                <div class="single-item-header">
                                <a href="{{route('chi-tiet-san-pham',$sptt->id)}}"><img src="upload/product/{{$sptt->image}}" alt="" height="250px"></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$sptt->name}}</p>
                                    {{-- <p class="single-item-price">
                                        @if ($sptt->promotion_price == 0)
                                            <span class="flash-sale">{{number_format($sptt->unit_price)}} VNĐ</span>
                                        @else
                                            <span class="flash-del">{{number_format($sptt->unit_price)}} VNĐ</span>
                                            <span class="flash-sale">{{number_format($sptt->promotion_price)}} VNĐ</span>
                                        @endif
                                    </p> --}}
                                </div>
                                <div class="single-item-caption">
                                    {{-- <a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a> --}}
                                    <a class="beta-btn primary" href="{{route('chi-tiet-san-pham',$sptt->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <br>
                        </div> 
                        @endforeach                     
                    </div>
                <div class="row">{{$sp_tuongtu->links()}}
                </div>
                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside" >
                <div class="widget">
                    <h3 class="widget-title">Sản phẩm khác</h3>
                    <div class="widget-body">
                        @foreach ($product as $pro)
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">  
                                <a class="pull-left" href="{{route('chi-tiet-san-pham',$pro->id)}}"><img src="upload/product/{{$pro->image}}" alt=""></a>
                                <div class="media-body">
                                    {{$pro->name}}
                                    <br>
                                    <a href="{{route('chi-tiet-san-pham',$pro->id)}}" style="color: blue">Chi tiết</a>
                                    {{-- @if ($pro->promotion_price == 0)
                                        <span class="flash-sale">{{number_format($pro->unit_price)}} VNĐ</span>
                                    @else
                                        <span class="flash-del">{{number_format($pro->unit_price)}} VNĐ</span><br>
                                        <span class="flash-sale">{{number_format($pro->promotion_price)}} VNĐ</span>
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                        @endforeach  
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection