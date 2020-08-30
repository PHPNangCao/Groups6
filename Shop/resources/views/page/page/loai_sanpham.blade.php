@extends('page.master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Danh mục sản phẩm</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
            <a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach ($loai as $l)
                    <li><a href="{{route('loai-san-pham',$l->id)}}">{{$l->name}}</a></li>
                        @endforeach   
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                    <h4>Sản phẩm {{$loai_sp->name}}</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($sp_theoloai)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($sp_theoloai as $sptl)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    @if ($sptl->promotion_price != 0)
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon sale">Sale</div>
                                        </div>
                                    @endif
                                    <div class="single-item-header">
                                    <a href="{{route('chi-tiet-san-pham',$sptl->url)}}"><img src="upload/product/{{$sptl->image}}" alt="" height="250px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$sptl->name}}</p>
                                        {{-- <p class="single-item-title">Giá: <span style="color: red">LIÊN HỆ</span></p> --}}
                                        <p class="single-item-price">
                                            @if ($sptl->promotion_price != 0)
                                            <span class="flash-del">{{number_format($sptl->unit_price)}} VNĐ</span>
                                            <span class="flash-sale">{{number_format($sptl->promotion_price)}} VNĐ</span>
                                            @else
                                            <span class="flash-sale">{{number_format($sptl->unit_price)}} VNĐ</span>
                                            @endif
                                            
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('themgiohang',$sptl->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('chi-tiet-san-pham',$sptl->url)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{$sp_theoloai->links()}}</div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Sản phẩm khác</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($sp_khac)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($sp_khac as $spk)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    @if ($spk->promotion_price != 0)
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon sale">Sale</div>
                                        </div>
                                    @endif
                                    <div class="single-item-header">
                                    <a href="product.html"><img src="upload/product/{{$spk->image}}" alt="" height="250px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$spk->name}}</p>
                                        {{-- <p class="single-item-title">Giá: <span style="color: red">LIÊN HỆ</span></p> --}}
                                        <p class="single-item-price">
                                            @if ($spk->promotion_price != 0)
                                            <span class="flash-del">{{number_format($spk->unit_price)}} VNĐ</span>
                                            <span class="flash-sale">{{number_format($spk->promotion_price)}} VNĐ</span>
                                            @else
                                            <span class="flash-sale">{{number_format($spk->unit_price)}} VNĐ</span>
                                            @endif
                                            
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('themgiohang',$spk->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('chi-tiet-san-pham',$spk->url)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    <div class="row">{{$sp_khac->links()}}</div>
                        <div class="space40">&nbsp;</div>
                        
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection