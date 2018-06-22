@extends('layouts.user')
@section('content')
<div class="w3layouts-banner-slider">
			<div class="container">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li>
								<div class="agileits-banner-info">
									<h6>Welcome To</h6>
									<h3>Share Travel</h3>
									<p>Terdiri dari artikel-artikel pengalaman para traveller blogger Baik mancanegara ataupun Nasional.</p>
									<div class="w3-button">
										<a href="destinasi">Mulai dari Sini!</a>
									</div>
								</div>
							</li>
						</ul>
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
					<!--banner Slider starts Here-->
				</div>
			</div>
		</div>
	</div>
	<div class="welcome">
		<div class="container">
			<div class="w3l-heading">
				<h2>Welcome</h2>
			</div>
			<div class="w3-welcome-grids">
				@foreach($artikel as $data)
				<div class="col-md-7 w3-welcome-left">
					<h5>{{$data->judul_artikel}}</h5>
					<p>Ut fringilla euismod sagittis. Cras semper ante sapien, in ornare nisi euismod eu. Morbi dapibus est non leo vestibulum aliquet. Sed viverra nisi pharetra, scelerisque nisi eu, tempus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In pellentesque, lectus at auctor luctus, lacus nibh dignissim ante, sed maximus arcu odio vitae lectus. <span>Phasellus vestibulum velit sed nisi ultricies scelerisque. Vivamus ligula mauris, euismod in dictum id, tempus ac odio. Etiam tristique felis eros, tincidunt interdum elit gravida et. Donec porttitor vehicula tortor, malesuada aliquet nibh finibus ac. Maecenas consectetur nisi ipsum, blandit finibus quam tristique vitae.</span></p>
					<div class="w3l-button">
						<a href="single.html">More</a>
					</div>
				</div>
				<div class="col-md-5 w3ls-welcome-img1">
					<img src="images/2.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
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
		</div>
	</div>
@endsection