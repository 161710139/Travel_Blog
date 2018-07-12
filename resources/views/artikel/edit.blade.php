@extends('layouts.admin')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Edit Artikel</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Artikel</h3>
                        </div>
                        <hr>
			  	<form action="{{ route('artikels.update',$artikel->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">Sampul</label><br>
			  			<input type="file" id="foto" name="foto" class="validate" value="{{ $artikel->foto }}"  accept="image/*" required>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('judul_artikel') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul Artikel</label>	
			  			<input type="text" name="judul_artikel" class="form-control"  value="{{ $artikel->judul_artikel }}" required>
			  			@if ($errors->has('judul_artikel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul_artikel') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('isi_artikel') ? ' has-error' : '' }}">
			  			<label class="control-label">Isi Artikel</label>	
			  			<textarea name="isi_artikel" class="form-control" required>{{ $artikel->isi_artikel }}</textarea>
			  			@if ($errors->has('isi_artikel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('isi_artikel') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('user_id') ? ' has-error' : '' }}">
			  			<input type="hidden" name="user_id" class="form-control"  value="{{ $artikel->User->name }}" readonly>
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
	</div>
</div>
@endsection