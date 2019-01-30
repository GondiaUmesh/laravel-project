@extends('form')

@section('content')

<div class="row">
	<div class="col-md-12">
		<br  />
		<h3 align="center">Borrow Section</h3>
		<br  />
		@if(count($errors) > 0)
		<div class="alert alert-danger">
			
			<ul>
				@foreach($errors->all as $error)
				<li>{{error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		@if(Session::has('success'))
		<div class="alert alert-danger">
			<p>{{\Session::get('success')}}</p>
		</div>
		@endif
		<form class="form-group" method="POST"  action=""  enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<h4>
					Book Title
				</h4>
				
				
				

				
			</div>
			<br>
			<div class="form-group">
				<h4>
					Author Name
				</h4>
				
								
			
							
			</div>
			<br>
			<div class="form-group">
				<h4>
					Borrow Date
				</h4>
				
				
				@php
				echo date('m-d-Y');
				@endphp
			
			<br>
			<br>

			
				<h4>
					Return  Date
				</h4>
				
				@php
				echo date('m-d-Y', strtotime("+25 days"));
				@endphp
					
			</div>
			<br>

			
			
            </div>
      </div>
      
     
	</div>
</div>
@endsection