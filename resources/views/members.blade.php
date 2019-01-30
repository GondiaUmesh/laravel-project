@extends('form')

@section('content')

<div class="row">
	<div class="col-md-12">
		<br />
		<h3 align="center">User List</h3>
		<br />
		<table class="table table-bordered">
			
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
			</tr>
			@foreach($users as $row)
			<tr>
				<td>{{$row['id']}}</td>
				<td>{{$row['name']}}</td>
				<td>{{$row['email']}}</td>				
			</tr>
			@endforeach 
		</table>

	</div>
</div>
@endsection