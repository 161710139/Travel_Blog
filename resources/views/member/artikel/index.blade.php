@extends('layouts.member')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/datatables/css/jquery.dataTables.css') }}"/>
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('assets/admin/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
			  	<div class="row">
                <div class="col-lg-11">
                    <h2 class="title-1 m-b-25">Earnings By Items</h2>
                    <a href="{{ route('artikels.create') }}" class="btn btn-primary">Create</a>
                        <div class="table-responsive table--no-card m-b-40">
                        <table id="example" class="table display table-borderless table-striped table-earning" style="width:100%">
                        <br>
				  	<thead>
			  		<tr>
			  		  <th>No</th>
			  		  <th>Sampul</th>
					  <th>Judul Artikel</th>
					  <th>Penulis</th>
					  <th>Destinasi</th>
					  <th>Created At</th>
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
                        </td>
				    	<td>{{ $data->judul_artikel}}</td>
				    	<td>{{ $data->User->name}}</td>
						<td>{{$data->Destinasi->nama_destinasi}}</td>
						<td>{{ $data->created_at->diffForHumans() }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('artikels.edit',$data->id) }}">Edit</a>
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
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection