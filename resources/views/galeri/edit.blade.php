@extends('layouts.admin')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Edit Galeri</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">GALERI</h3>
                        </div>
                        <hr>
			  	<form action="{{ route('galeri.update',$galeri->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">Gambar</label>	
			  			<input type="file" name="foto" class="form-control" value="{{ $galeri->foto }}"  required>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
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
			  			<button type="submit" class="btn btn-success">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>
		</div>
	</div>
	</div>
</div>
@endsection