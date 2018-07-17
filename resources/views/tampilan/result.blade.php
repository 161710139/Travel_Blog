@extends('layouts.userall')
@section('content')
	<div class="single">
		<div class="container">
			<h2 class="page-header page-header icon-subheading">Hasil Pencarian</h2>	
			@if(count($artikel)>0)
			@foreach($artikel as $data)
			@if($data->status == 0)
    		@else
			<div class="w3-welcome-grids">
				<div class="col-md-7 w3-welcome-left">
					<h5>{{ $data->judul_artikel }}</h5>
					<div class="agileinfo-single-icons">
					<ul>
						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>{{$data->User->name}}</span></a></li>
						<li><i class="fa fa-calendar" aria-hidden="true"></i><span>{{$data->created_at->diffForHumans()}}</span></li>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><span>{{$data->Destinasi->nama_destinasi}}</span></li>
					</ul>				
				    </div><!-- 
					<p>{!!substr($data['isi_artikel'],0,500)!!}...Baca Selengkapnya</p> -->
					<div class="w3l-button">
						<a href="{{  route('show',$data->id) }}">More</a>
					</div>
				</div>
				<div class="col-md-5 w3ls-welcome-img1">
					<img src="../img/{{ $data->foto, $data->nama }}" style="width: 400px;height: 250px" />
				</div>
				<div class="clearfix"></div>
			</div>
			<br>
			<hr>
			<br>
			@endif
			@endforeach
			<div class="text-center">
				{!! $artikel->links(); !!}
			</div>
			@else
			<h3><b><i>Maaf Tidak ada artikel yang ditemukan</i></b><</h3>
			@endif
		</div>
	</div>
@endsection