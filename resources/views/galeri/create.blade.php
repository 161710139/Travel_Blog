@extends('layouts.admin')	
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-body">
			  	<h2 class="sub-header">Tambah Artikel yg Belum Terverifikasi<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
			  	<form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
        		{!! csrf_field() !!}
 
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
                    <label for="foto">Gambar</label>
                    <input type="file" id="foto" name="foto" accept="image/*">
                </div>
 
                <input class="btn btn-primary" type="submit" value="Upload">
            </form>
 
        @if(count($errors) > 0)
            <div class="row">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
            </div>
        @endif
			  	</form>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection