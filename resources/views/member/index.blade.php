@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
			  	<div class="row">
                <div class="col-lg-11">  
                <h2>Member</h2>
                <hr>                
                        <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                        <br>
                        <thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Member</th>
					  <th>Email</th>
					  <th colspan="3">Option</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($user as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->name }}</td>
				    	<td>{{ $data->email}}</td>
						<td>
							<form method="post" action="{{ route('daftarmember.destroy',$data->id) }}">
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