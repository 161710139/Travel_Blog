@extends('layouts.admin')	
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-body">
			  	<h2 class="sub-header">Masukan Gambar<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
			  	<form action="{{route('creategaleri.store', $artikel->id)}}" method="post" enctype="multipart/form-data">
        		{!! csrf_field() !!}
        		@if ($message = Session::get('success'))
	  				<div class="alert alert-success alert-block">
		  			<strong>{{ $message }}</strong>
	  				</div>
				@endif
 
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
 
                <input class="btn btn-primary" type="submit" value="Upload">
                <a href="{{route('artikels.index')}}"><input class="btn btn-success" type="submit" name="finish" value="Finish"></a>
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
			  	<hr>
			  	<h5><i>*jika setelah memasukan gambar kembali ke halaman ini , maka teruslah menambah gambar</i></h5>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection