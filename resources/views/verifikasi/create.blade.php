@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-body">
			  	<h2 class="sub-header">Tambah Destinasi<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
			  	<form action="{{ route('destinasis.store') }}" method="post">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_destinasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Destinasi</label>	
			  			<input type="text" name="nama_destinasi" class="form-control" required>
			  			@if ($errors->has('nama_destinasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_destinasi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		div class="form-group {{ $errors->has('isi_Artikel') ? 'has error' : ''}} ">
			  			<label class="control-label">isi_Artikel</label>
			  			<input type="text" name="isi_Artikel" class="form-control" required>
			  			@if ($errors->has('isi_Artikel'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('isi_Artikel') }}</strong>
			  			</span>
			  			@endif
			  		</div>
			  		<div class="form-group {{ $errors->has('penulis') ? 'has error' : ''}} ">
			  			<label class="control-label">penulis</label>
			  			<input type="text" name="penulis" class="form-control" required>
			  			@if ($errors->has('penulis'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('penulis') }}</strong>
			  			</span>
			  			@endif
			  		</div>
			  		<div class="form-group {{ $errors->has('destinasi_id') ? 'has error' : '' }}">
			  			<label class="control-label">Arsitek</label>
			  			<select name="destinasi_id" class="form-control">
			  				<option>Pilih Destinasi</option>
			  				@foreach($Destinasi as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_destinasi }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('destinasi_id'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('arsitek') }}</strong>
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