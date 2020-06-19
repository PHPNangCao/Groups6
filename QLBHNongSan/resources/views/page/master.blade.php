i<!doctype html>
<html lang="en">
<head>
    @include('page.TrangChu.block.head')
</head>
<body>

	<div id="header">
		@include('page.TrangChu.block.header')
	</div> <!-- #header -->
	<div class="rev-slider">

    @yield('content')

    @include('page.TrangChu.block.footer')


	<!-- include js files -->
	@include('page.TrangChu.block.script')
</body>
</html>
