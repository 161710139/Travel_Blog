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
			<h2 class="page-header page-header icon-subheading">Postingan Terbaru</h2>	
			<div class="w3-welcome-grids">
				@foreach($artikel as $data)
				<div class="col-md-7 w3-welcome-left">
					<h5>{{ $data->judul_artikel }}</h5>
					<div class="agileinfo-single-icons">
					<ul>
						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>{{$data->User->name}}</span></a></li>
						<li><i class="fa fa-calendar" aria-hidden="true"></i><span>{{$data->created_at->diffForHumans()}}</span></li>
					</ul>				
				</div>
					<p>{{substr($data['isi_artikel'],0,100)}}...</p>
					<div class="w3l-button">
						<a href="{{  route('show',$data->id) }}">More</a>
					</div>
				</div>
				<div class="col-md-5 w3ls-welcome-img1">
					<img src="../img/{{ $data->foto, $data->nama }}" style="max-height:400px;max-width:400px;margin-top:7px;" />
				</div>
				<div class="clearfix"></div>
			</div>
			<br>
			<hr>
			<br>
			<!-- <div class="w3-welcome-grids w3-welcome-bottom">
				<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
					<img src="../img/{{ $data->foto, $data->nama }}" style="max-height:400px;max-width:400px;margin-top:7px;" />
				</div>
				<div class="col-md-7 w3-welcome-left">
					<h5>{{ $data->judul_artikel }}</h5>
					<p>{{substr($data['isi_artikel'],0,20)}}...</span></p>
					<div class="w3l-button">
						<a href="single.html">More</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div> -->
			@endforeach
		</div>
	</div>
@endsection