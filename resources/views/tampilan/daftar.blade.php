@extends('layouts.userall')
@section('content')
<div class="codes icons main-grid-border">
	<div class="container"> 
		<div class="welcome">
		<div class="container">
			<h2 class="page-header page-header icon-subheading">Postingan Terbaru</h2>	
			@foreach($destinasi->Artikel()->get() as $data)
			<div class="w3-welcome-grids">
				<div class="col-md-7 w3-welcome-left">
					<h5>{{ $data->judul_artikel }}</h5>
					<div class="agileinfo-single-icons">
					<ul>
						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>{{$data->User->name}}</span></a></li>
						<li><i class="fa fa-calendar" aria-hidden="true"></i><span>{{$data->created_at->diffForHumans()}}</span></li>
					</ul>				
				    </div>
					<p>{!!substr($data['isi_artikel'],0,500)!!}...</p>
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
			@endforeach
		</div>
	</div>
</div>
</div>
@endsection