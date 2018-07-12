@extends('layouts.member')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row m-t-30">
            <div class="col-md-12">
                <div class="m-b-10">
                    <a href="{{ route('artikels.create') }}" class="btn btn-outline-danger">
                        <i class="fa fa-pencil-square-o"></i>    
                        Tambah Data
                    </a>
                    
                </div>
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
				  	<thead>
			  		  <th>No</th>
			  		  <th>Sampul</th>
					  <th>Judul Artikel</th>
					  <th>Destinasi</th>
					  <th>Created At</th>
					  <th colspan="2">Status</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($artikel as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>
				    	<a href="" class="thumbnail">
                            <img src="../img/{{ $data->foto, $data->nama }}" style="max-height:150px;max-width:150px;margin-top:7px;" >
                        </a>
                        </td>
				    	<td>{{ $data->judul_artikel}}</td>
						<td>{{$data->Destinasi->nama_destinasi}}</td>
						<td>{{ $data->created_at->diffForHumans() }}</td>
						<td> @if($data->status == 1)
                                <input type="button" class="btn btn-info" name="unpublish" value="Sudah Publish">
                                @elseif($data->status == 0)
                                <input type="button" class="btn btn-danger" name="publish" value="Belum Dipublish Oleh Admin">
                            	</td>
                                @endif
						<td>
						<td>
							<a class="btn btn-warning" href="{{ route('artikels.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a class="btn btn-success" href="{{ route('show',$data->id) }}">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('artikels.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach
				      <div class="text-center">
						{!! $artikel->links(); !!}
					</div>		
				  	</tbody>
				  </table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection