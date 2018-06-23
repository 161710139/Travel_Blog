@extends('layouts.userall')
@section('content')
<div class="single">
		<div class="container">
			<div class="agileits-single-img">
				<center><img src="../img/{{ $artikel->foto, $artikel->nama }}" style="max-height:400px;max-width:800px;" />
				</center><br><br>
				<h4>{{ $artikel->judul_artikel }}</h4>
				<hr>
				<div class="agileinfo-single-icons">
					<ul>
						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>{{$artikel->User->name}}</span></a></li>
						<li><i class="fa fa-calendar" aria-hidden="true"></i><span>{{$artikel->created_at->diffForHumans()}}</span></li>
					</ul>				
				</div>
				<p>{!!$artikel->isi_artikel!!}</p>
				<br>
				<hr>
			</div>
			<h3>Comments</h3>
				@foreach($artikel->Komentar()->get() as $komen)
				<div class="agileits_three_comment_grid">
					<div class="agileits_tom_right">
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
							<div class="form-group {{ $errors->has('user_id') ? 'has error' : '' }}">
			  				<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
			  			<!-- </select> -->
			  				@if ($errors->has('user_id'))
			  					<span class="help-block">
			  						<strong>{{ $errors->first('user_id') }}</strong>
			  					</span>
			  				@endif
			  				</div>
			  				<div class="form-group {{ $errors->has('artikel_id') ? 'has error' : '' }}">
			  				<input type="hidden" name="artikel_id" value="{{ $artikel->id }}">
			  			<!-- </select> -->
			  				@if ($errors->has('user_id'))
			  					<span class="help-block">
			  						<strong>{{ $errors->first('user_id') }}</strong>
			  					</span>
			  				@endif
			  				</div>
							<textarea placeholder="Masukan Komentar" name="komentar" required></textarea>
							<input type="submit" value="Send">
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
<!--banner Slider starts Here-->
@endsection