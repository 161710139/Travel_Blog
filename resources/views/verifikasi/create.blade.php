@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-body">
			  	<h2 class="sub-header">Tambah Destinasi<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
			  	<form action="{{ route('verifikasis.store') }}" method="post">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('judul_Artikel') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul Artikel</label>	
			  			<input type="text" name="judul_Artikel" class="form-control" required>
			  			@if ($errors->has('judul_Artikel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul_Artikel') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('isi_Artikel') ? 'has error' : ''}} ">
			  			<label class="control-label">Isi Artikel</label>
			  			<Textarea name="isi_Artikel" class="form-control" required></Textarea>
			  			@if ($errors->has('isi_Artikel'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('isi_Artikel') }}</strong>
			  			</span>
			  			@endif
			  		</div>
			  		<div class="form-group {{ $errors->has('penulis') ? 'has error' : ''}} ">
			  			<label class="control-label">Penulis</label>
			  			<input type="text" name="penulis" class="form-control" required>
			  			@if ($errors->has('penulis'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('penulis') }}</strong>
			  			</span>
			  			@endif
			  		</div>
			  		<div class="form-group {{ $errors->has('destinasi_id') ? 'has error' : '' }}">
			  			<label class="control-label">Destinasi</label>
			  			<select name="destinasi_id" class="form-control">
			  				<option>Pilih Destinasi</option>
			  				@foreach($destinasi as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_destinasi }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('destinasi_id'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('destinasi_id') }}</strong>
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