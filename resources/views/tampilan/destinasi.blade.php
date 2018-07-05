@extends('layouts.userall')
@section('content')
<div class="codes icons main-grid-border">
	<div class="container"> 
		<div class="grid_3 grid_4 w3_agileits_icons_page">
			<div class="icons">
				<section id="new">
					<h3 class="page-header page-header icon-subheading">Pilih Destinasi Yang Kamu Inginkan</h3>						  
					<div class="row fontawesome-icon-list">
						<div class="form-group {{ $errors->has('nama_destinasi') ? 'has error' : '' }}">
							@foreach($destinasi as $data)
							<div class="icon-box col-md-3 col-sm-4">
								<a href="{{  route('destinasi.daftarartikel',$data->id) }}" value="{{$data->id}}"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>{{ $data->nama_destinasi }}</a>
							</div>
							@endforeach
						</div> 
					</div>
				</section>
			</div>
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