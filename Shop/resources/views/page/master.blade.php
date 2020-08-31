<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Nông Sản </title>
    <base href="{{asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/rate.css">
	<link rel="stylesheet" href="source/assets/dest/css/animate.css">
	<link rel="stylesheet" href="source/assets/dest/css/sweetalert.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>
		.all-browsers {
		  margin: 0;
		  padding: 5px;
		  background-color: lightgray;
		}
		
		.all-browsers > h1, .browser {
		  margin: 10px;
		  padding: 5px;
		}
		
		.browser {
		  background: white;
		}
		
		.browser > h2, p {
		  margin: 4px;
		  font-size: 90%;
		}
		</style>
</head>
<body>

        @include('page.header')
	<div class="rev-slider">
    
        @yield('content')

    </div> <!-- .container -->

        @include('page.footer')
        
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Nhóm 6 - Laravel. (&copy;) 2020</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="source/assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="source/assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="source/assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="source/assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="source/assets/dest/js/jquery.js"></script>
	<script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="source/assets/dest/vendors/animo/Animo.js"></script>
	<script src="source/assets/dest/vendors/dug/dug.js"></script>
	<script src="source/assets/dest/js/scripts.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="source/assets/dest/js/waypoints.min.js"></script>
	<script src="source/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="source/assets/dest/js/custom2.js"></script>
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

	<script src="source/assets/dest/js/sweetalert.min.js"></script>
	
	<script type="text/javascript">
		function AddCart(id){
			$.ajax({
				type: "GET",
				url: "add-to-cart/"+id,
				success: function (response) {
					swal("Đã thêm sản phẩm vào giỏ hàng!");
					
				}
			});
		}
	</script>

	{{-- <script type="text/javascript">
		$(document).ready(function (){
			$('.add-to-cart').click(function(){
				swal("Hello world!");
			});
		});
	</script> --}}


</body>
</html>
