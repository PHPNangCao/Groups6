i<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <base href="{{asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontend/css/font-awesome.min.css">
	<link rel="stylesheet" href="fontend/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="fontend/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="fontend/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="fontend/css/style.css">
	<link rel="stylesheet" href="fontend/css/animate.css">
	<link rel="stylesheet" title="style" href="fontend/css/huong-style.css">
</head>
<body>

	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> Địa Chỉ Doanh Nghiệp</a></li>
						<li><a href=""><i class="fa fa-phone"></i> Số Điện Thoại </a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="#"><i class="fa fa-user"></i>Tài Khoản</a></li>
						<li><a href="#">Đăng Ký</a></li>
						<li><a href="#">Đăng Nhập</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="index.html" id="logo"><img src="images/imagesDemo/logo-cake.png" width="120px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/">
					        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="images/imagesDemo/products/cart/2.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Táo mĩ</span>
											<span class="cart-item-options">Size: XS</span>
											<span class="cart-item-amount">1*<span>50.000đ</span></span>
										</div>
									</div>
								</div>


								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="images/imagesDemo/products/cart/3.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Nho Xanh</span>
											<span class="cart-item-options">Size: XS</span>
											<span class="cart-item-amount">1*<span>50.000đ</span></span>
										</div>
									</div>
								</div>


								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">100.000đ</span></div>
									<div class="clearfix"></div>


									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: green;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="index.html">Trang chủ</a></li>
						<li><a href="#">Sản phẩm</a>
							<ul class="sub-menu">
								<li><a href="product_type.html">Danh Mục SP 1</a></li>
								<li><a href="product_type.html">Danh Mục SP 2</a></li>
								<li><a href="product_type.html">Danh Mục SP 3</a></li>
							</ul>
						</li>
                        <li><a href="#">Tin Tức</a></li>
                        <li><a href="#">Khuyến Mãi</a></li>
                        <li><a href="#">Món Ngon</a></li>
						<li><a href="contacts.html">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	<div class="rev-slider">

    @yield('content')

	<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Facebook</h4>
						<div id="beta-instagram-feed"><div></div></div>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="widget">
						<h4 class="widget-title">Sản Phẩm</h4>
						<div>
							<ul>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Sản phẩm 1</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Sản phẩm 2</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Sản phẩm 3</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Sản phẩm 4</a></li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
				 <div class="col-sm-10">
					<div class="widget">
						<h4 class="widget-title">Tuyển Dụng</h4>
						<div>
							<div class="contact-info">
								<i class="fa fa-map-marker"></i>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i>Link Đăng Ký</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i>Thông Tin Việc Làm</a></li>
							</div>
						</div>
					</div>
				  </div>
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Địa Chỉ</h4>
						<form action="#" method="post">
							<h4 class="widget-title">Công Viên Phần Mềm Quang Trung</h4>
						</form>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Đồ Án PHP. (&copy;) Nhóm 6</p>
			<p class="pull-right pay-options">
                {{-- phương thức thanh toán --}}
				<a href="#"><img src="images/imagesDemo/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="images/imagesDemo/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="images/imagesDemo/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="images/imagesDemo/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="fontend/js/jquery.js"></script>
	<script src="fontend/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="fontend/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="fontend/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="fontend/vendors/animo/Animo.js"></script>
	<script src="fontend/vendors/dug/dug.js"></script>
	<script src="fontend/js/scripts.min.js"></script>
	<script src="fontend/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="fontend/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="fontend/js/waypoints.min.js"></script>
	<script src="fontend/js/wow.min.js"></script>
	<!--customjs-->
	<script src="fontend/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
