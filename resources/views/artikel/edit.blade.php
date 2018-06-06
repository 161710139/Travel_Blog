@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-body">
			  	<h2 class="sub-header">Edit Artikel yang Belum Terverifikasi<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
			  	<form action="{{ route('verifikasis.update',$verifikasi->id) }}" method="post">
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('judul_artikel') ? ' has-error' : '' }}">
			  			<label class="control-label">judul_artikel</label>	
			  			<input type="text" name="judul_artikel" class="form-control"  value="{{ $verifikasi->judul_artikel }}" required>
			  			@if ($errors->has('judul_artikel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul_artikel') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('isi_artikel') ? ' has-error' : '' }}">
			  			<label class="control-label">isi_artikel</label>	
			  			<input type="text" name="isi_artikel" class="form-control"  value="{{ $verifikasi->isi_artikel }}" required>
			  			@if ($errors->has('isi_artikel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('isi_artikel') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('user_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Destinasi</label>	
			  			<select name="user_id" class="form-control">
			  				@foreach($user as $data)
			  				<option value="{{ $data->id }}" {{ $userselect == $data->id ? 'selected=="selected"' : '' }}>{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('user_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('user_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('destinasi_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Destinasi</label>	
			  			<select name="destinasi_id" class="form-control">
			  				@foreach($destinasi as $data)
			  				<option value="{{ $data->id }}" {{ $destinasiselect == $data->id ? 'selected=="selected"' : '' }}>{{ $data->nama_destinasi }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('destinasi_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('destinasi_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Update</button>
			  		</div>
			  	</form>
			  </div>
			</div>
		
	</div>
</div>
@endsection