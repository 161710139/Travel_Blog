@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-body">
			  	<h2 class="sub-header">Tambah Artikel yg Belum Terverifikasi<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
			  	<form action="{{ route('komentars.store') }}" method="post">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('user_id') ? 'has error' : '' }}">
			  			<label class="control-label">Penulis</label>
			  			<select name="user_id" class="form-control">
			  				<option>Pilih Nama Penulis</option>
			  				@foreach($user as $data)
			  				<option value="{{ $data->id }}">{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('user'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('user') }}</strong>
			  			</span>
			  			@endif
			  		</div>
			  		<div class="form-group {{ $errors->has('komentar') ? 'has error' : ''}} ">
			  			<label class="control-label">Kolom Komentar</label>
			  			<Textarea name="komentar" class="form-control" required></Textarea>
			  			@if ($errors->has('komentar'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('komentar') }}</strong>
			  			</span>
			  			@endif
			  		</div>
			  		<div class="form-group {{ $errors->has('artikel_id') ? 'has error' : '' }}">
			  			<label class="control-label">Judul Artikel</label>
			  			<select name="artikel_id" class="form-control">
			  				<option>Pilih Judul Artikel</option>
			  				@foreach($artikel as $data)
			  				<option value="{{ $data->id }}">{{ $data->judul_artikel }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('artikel'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('artikel') }}</strong>
			  			</span>
			  			@endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-success">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection