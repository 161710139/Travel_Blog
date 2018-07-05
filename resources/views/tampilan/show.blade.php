@extends('layouts.userall')
@section('content')
<div class="single">
		<div class="container">
			<div class="agileits-single-img">
				<center><img src="../img/{{ $artikel->foto, $artikel->nama }}" style="max-height:700px;max-width:700px;" />
				</center><br><br>
				<h4>{{ $artikel->judul_artikel }}</h4>
				<hr>
				<div class="agileinfo-single-icons">
					<ul>
						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>{{$artikel->User->name}}</span></a></li>
						<li><i class="fa fa-calendar" aria-hidden="true"></i><span>{{$artikel->created_at->diffForHumans()}}</span></li>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><span>{{$artikel->Destinasi->nama_destinasi}}</span></li>
					</ul>				
				</div>
				<p>{!!$artikel->isi_artikel!!}</p>
				<br>
				<hr>
			</div>
			<div class="gallery">
				<h3>Galeri</h3>
				<hr>
						<div class="container">
							@foreach($artikel->Galeri()->get() as $data)
							<div class="gallery-grids">
									<div class="col-md-4 gallery-grid">
										<div class="grid">
											<figure class="effect-apollo">
												<a class="example-image-link" href="../img/{{ $data->foto, $data->nama }}">
													<img src="../img/{{ $data->foto }}" alt="" />
													<figcaption>
													</figcaption>	
												</a>
											</figure>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
			<h3>Comments</h3>
				@foreach($artikel->Komentar()->get() as $komen)
				<div class="agileits_three_comment_grid">
					<div class="agileits_tom_right">
						<div class="agileits_tom">
						<img src="{{asset('assets/user/images/user.png')}}" alt=" " class="img-responsive">
						</div>
						<div class="hardy">
							<h4>{{$komen->User->name}}</h4>
							<p>{{$komen->created_at->diffForHumans()}}</p>
						</div>
						<div class="clearfix"> </div>
						<p class="lorem">{{$komen->komentar}}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				@endforeach`
					<div class="w3_leave_comment">
						<h3>Tinggalkan Komentar</h3>
						<form action="{{route('show.komentar.store', $artikel->id)}}" method="post">
							{{csrf_field()}}
			  				<div class="form-group {{ $errors->has('artikel_id') ? 'has error' : '' }}">
			  				<input type="hidden" name="artikel_id" value="{{ $artikel->id }}">
			  			<!-- </select> -->
			  				@if ($errors->has('artikel_id'))
			  					<span class="help-block">
			  						<strong>{{ $errors->first('artikel_id') }}</strong>
			  					</span>
			  				@endif
			  				</div>
							<textarea placeholder="Masukan Komentar" name="komentar" required></textarea>
							@if (Route::has('login'))
                    			@auth
                        			<input type="submit" value="Send">
		                    	@else
		                    	<div class="w3l-button">
									<a href="{{ route('login') }}"><i class="fa fa-unlock-alt"></i>&nbsp&nbspLogin</a></a>
								</div>
		                    	@endauth
		            		@endif
						</form>
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
@endif
<!--banner Slider starts Here-->
@endsection