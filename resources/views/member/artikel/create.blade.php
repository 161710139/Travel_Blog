 @extends('layouts.member')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-body">
			  	<h2 class="sub-header">Tambah Artikel<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
			  	<br>
			  	<form action="{{ route('artikels.store') }}" method="post"  enctype="multipart/form-data">
			  		{{ csrf_field() }}
			  		 <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
                    <label class="control-label">Sampul</label><br>
                    <input type="file" id="foto" name="foto" class="validate" accept="image/*" required>
                	@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
                	</div>
			  		<div class="form-group {{ $errors->has('judul_artikel') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul Artikel</label>	
			  			<input type="text" name="judul_artikel" class="form-control" required>
			  			@if ($errors->has('judul_artikel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul_artikel') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('isi_artikel') ? 'has error' : ''}} ">
			  			<label class="control-label">Isi Artikel</label>
			  			<Textarea name="isi_artikel" id="isi_artikel" class="form-control" required></Textarea>
			  			@if ($errors->has('isi_artikel'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('isi_artikel') }}</strong>
			  			</span>
			  			@endif
			  		</div>
			  		<div class="form-group {{ $errors->has('user_id') ? 'has error' : '' }}">
			  			<!-- <select name="user_id" class="form-control">
			  				<option>Pilih Nama Penulis</option> -->
			  				<!-- @foreach($user as $data)
			  				<option value="{{ $data->id }}">{{ $data->name }}</option>
			  				@endforeach -->
			  				<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
			  			<!-- </select> -->
			  			@if ($errors->has('user_id'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('user_id') }}</strong>
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
			  			@if ($errors->has('destinasi'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('destinasi') }}</strong>
			  			</span>
			  			@endif
			  		<div class="form-group">
			  			<br>
			  			<button type="submit" class="btn btn-success">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('js')
<script>
    CKEDITOR.replace( 'isi_artikel' );
</script>
@endsection