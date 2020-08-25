@extends('page.master')
@section('content')
<section class="bg-gray">
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Page Not Found</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="#">Pages</a> / <span>Page 404</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content" class="space-top-none space-bottom-none">
			<div class="abs-fullwidth bg-gray">
				<div class="space100">&nbsp;</div>
				<div class="space80">&nbsp;</div>
				<div class="container text-center">
					<h2>Oops! That Page Can’t Be Found!</h2>
					<div class="space40">&nbsp;</div>
					<img src="assets/dest/images/404.jpg" alt="">
					<div class="space30">&nbsp;</div>
					<p>It looks like nothing was found at this location. Maybe try to use a search?</p>
					<form role="search" method="get" id="searchform" action="/">
				        <input type="text" value="" name="s" id="s" placeholder="Search entire store here..." />
				        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
					</form>
				</div>
				<div class="space100">&nbsp;</div>
				<div class="space30">&nbsp;</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
</section>
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Instagram Feed</h4>
						<div id="beta-instagram-feed"><div></div></div>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="widget">
						<h4 class="widget-title">Information</h4>
						<div>
							<ul>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web Design</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web development</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Illustrations</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
				<div class="col-sm-10">
					<div class="widget">
						<h4 class="widget-title">Contact Us</h4>
						<div>
							<div class="contact-info">
								<i class="fa fa-map-marker"></i>
								<p>30 South Park Avenue San Francisco, CA 94108 Phone: +78 123 456 78</p>
								<p>Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Newsletter Subscribe</h4>
						<form action="#" method="post">
							<input type="email" name="your_email">
							<button class="pull-right" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
						</form>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
@endsection