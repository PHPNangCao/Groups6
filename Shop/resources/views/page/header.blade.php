<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a target="_blank" href="https://goo.gl/maps/zmjoNziTVwZwMCpP9" class="viewstreet"><i class="fa fa-home"></i> Công viên phần mềm Quang Trung</a></li>
                    <li><a href="tel:0349394368"><i class="fa fa-phone"></i> 034 939 4368 </a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
                    <li><a href="#">Đăng kí</a></li>
                    <li><a href="#">Đăng nhập</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="/trang-chu/" id="logo"><img src="source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                <form role="search" method="get" id="searchform" action="{{route('tim-kiem')}}">
                        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>
                    
                <div class="beta-comp">
                    
                    {{-- <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng  <i class="fa fa-chevron-down"></i></div>
                        <div class="beta-dropdown cart-body">

                                
                                    <div class="cart-item">
                                        <div class="media">
                                        <a class="pull-left" href="#"><img src="source/image/product/" alt=""></a>
                                            <div class="media-body">
                                                <span class="cart-item-title">aaa</span>
                                                <span class="cart-item-amount">1*<span>100.000</span></span>
                                            </div>
                                        </div>
                                    </div>
                                
                            

                        </div> --}}
                        {{-- <div class="cart-caption">
                        <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value"></span></div>
                            <div class="clearfix"></div>

                            <div class="center">
                                <div class="space10">&nbsp;</div>
                                <a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div> --}}

                    </div> <!-- .cart -->
                    
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: seagreen;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                <li><a href="{{route('loai-san-pham',1)}}">Loại Sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach ($loai_sp as $loai)
                                <li><a href="{{route('loai-san-pham',$loai->id)}}">{{$loai->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('gioi-thieu')}}">Giới thiệu</a></li>
                    <li><a href="{{route('lien-he')}}">Liên hệ</a></li>
                    <li><a href="{{route('tin-tuc')}}">Tin tức</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->