@extends('layouts.admin')
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
                    <a href="{{ route('komentars.create') }}" class="btn btn-primary">Create</a>
                        <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                        <br>
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>Email</th>
					  <th>Komentar</th>
					  <th>Artikel</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($komentar as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->User->name}}</td>
				    	<td>{{ $data->User->email}}</td>
				    	<td>{{ $data->komentar}}</td>
						<td>{{$data->Artikel->judul_artikel}}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('komentars.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('komentars.destroy',$data->id) }}">
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