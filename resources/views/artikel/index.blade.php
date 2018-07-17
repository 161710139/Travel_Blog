@extends('layouts.admin')
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
			  		<tr>
			  		  <th>No</th>
					  <th>Judul Artikel</th>
					  <th>Penulis</th>
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
				    	<td>{{ $data->judul_artikel}}</td>
				    	<td>{{ $data->User->name}}</td>
						<td>{{$data->Destinasi->nama_destinasi}}</td>
						<td>{{ $data->created_at->diffForHumans() }}</td>
						<td> @if($data->status == 1)
                                <form action="{{ route('artikel.publish',$data->id) }}" method="post">
                                    @csrf
                                <button type="submit" class="btn btn-danger">Jangan Publish</button>
                                </form>
                                @elseif($data->status == 0)
                                <form action="{{ route('artikel.publish',$data->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-info" type="submit">Publish</button>
                                </form>
                                </td>
                                @endif
						<td>
							<a class="btn btn-warning" href="{{ route('artikels.edit',$data->id) }}">Ubah</a>
						</td>
						<td>
							<a class="btn btn-success" href="{{ route('show',$data->id) }}">Lihat</a>
						</td>
						<td>
							<form method="post" action="{{ route('artikels.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="btn btn-danger">Hapus</button>
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
                <!-- END DATA TABLE-->
            </div>
        </div>
        
    </div>
</div>


@endsection