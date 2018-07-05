@extends('layouts.admin')	
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Tambah Gambar</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Galeri</h3>
                        </div>
                        <hr>
			  			<form action="{{route('creategaleri.store', $artikel->id)}}" method="post" enctype="multipart/form-data">
        				{!! csrf_field() !!}
               			<div class="form-group {{ $errors->has('artikel_id') ? 'has error' : '' }}">
			  				<div class="form-group {{ $errors->has('artikel_id') ? 'has error' : '' }}">
			  			<input type="hidden" name="artikel_id" value="{{ $artikel->id }}">
			  			<!-- </select> -->
			  			@if ($errors->has('artikel_id'))
			  				<span class="help-block">
			  					<strong>{{ $errors->first('artikel_id') }}</strong>
			  				</span>
			  				@endif
			  				</div>
			  			</div>
 
                <div class="form-group">
                    <label for="foto">Gambar</label>
                    <input type="file" id="foto" name="foto" accept="image/*" multiple>
                </div>
 				<br>
                <input class="btn btn-primary" type="submit" value="Upload">
                <a href="{{route('artikels.index')}}"><input class="btn btn-success" type="submit" name="finish" value="Finish"></a>
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
			  	<br>
			  	<hr>
			  	 <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Gambar</th>
					  <th>Option</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
							@foreach($artikel->Galeri()->get() as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>
                        <a href="" class="thumbnail">
                            <img src="../img/{{ $data->foto }}" style="max-height:150px;max-width:150px;margin-top:7px;" >
                        </td>
						<td>
							<form method="post" action="{{ route('galeri.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection