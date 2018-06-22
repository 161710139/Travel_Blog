@extends('layouts.userall')
@section('content')
<div class="codes icons main-grid-border">
	<div class="container"> 
		<div class="w3-welcome-grids w3-welcome-bottom">
				<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
					<img src="images/3.jpg" alt="" />
				</div>
					<div class="col-md-7 w3-welcome-left">
						<h5>Lorem ipsum dolor sit amet</h5>
							<p>Ut fringilla euismod sagittis. Cras semper ante sapien, in ornare nisi euismod eu. Morbi dapibus est non leo vestibulum aliquet. Sed viverra nisi pharetra, scelerisque nisi eu, tempus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In pellentesque, lectus at auctor luctus, lacus nibh dignissim ante, sed maximus arcu odio vitae lectus. <span>Phasellus vestibulum velit sed nisi ultricies scelerisque. Vivamus ligula mauris, euismod in dictum id, tempus ac odio. Etiam tristique felis eros, tincidunt interdum elit gravida et. Donec porttitor vehicula tortor, malesuada aliquet nibh finibus ac. Maecenas consectetur nisi ipsum, blandit finibus quam tristique vitae.</span></p>
						<div class="w3l-button">
						<a href="single.html">More</a>
						</div>
					</div>
							<div class="clearfix"> </div>
					</div>
<script src="{{ ('assets/user/js/responsiveslides.min.js') }}"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
		auto: true,
		pager:true,
		nav:true,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });

	});
 </script>
</div>
</div>
<!--banner Slider starts Here-->
@endsection