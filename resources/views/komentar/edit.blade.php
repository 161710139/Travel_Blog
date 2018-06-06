@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-body">
			  	<h2 class="sub-header">Edit Artikel yang Belum Terartikel<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
			  	<form action="{{ route('komentars.update',$komentar->id) }}" method="post">
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}
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
			  		<div class="form-group {{ $errors->has('komentar') ? ' has-error' : '' }}">
			  			<label class="control-label">komentar</label>	
			  			<Textarea name="komentar" class="form-control"  value="{{ $komentar->komentar }}" required></Textarea>
			  			@if ($errors->has('komentar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('komentar') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('artikel_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul Artikel</label>	
			  			<select name="artikel_id" class="form-control">
			  				@foreach($artikel as $data)
			  				<option value="{{ $data->id }}"  {{ $artikelselect == $data->id ? 'selected="selected"' : '' }}>{{ $data->judul_artikel }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('artikel_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('artikel_id') }}</strong>
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