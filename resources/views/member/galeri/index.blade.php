@extends('layouts.member')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
				  	<thead>
			  		  <th>No</th>
					  <th>Judul Artikel</th>
					  <th>Foto</th>
					  <th colspan="3">Option</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($galeri as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->Artikel->judul_artikel }}</td>
				    	<td>
                        <a href="" class="thumbnail">
                            <img src="../img/{{ $data->foto, $data->nama }}" style="max-height:150px;max-width:150px;margin-top:7px;" ></a>
                        </td>
				    	<td>
							<a class="btn btn-warning" href="{{ route('galeri.edit',$data->id) }}">Edit</a>
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
@endsection