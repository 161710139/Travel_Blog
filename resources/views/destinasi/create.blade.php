@extends('layouts.admin')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Tambah Destinasi</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Destinasi</h3>
                        </div>
                        <hr>
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