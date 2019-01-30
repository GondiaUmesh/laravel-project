@extends('form')

@section('content')

<div class="row">
	<div class="col-md-12">
		<br  />
		<h3 align="center">Add book data</h3>
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
		<form class="form-group" method="POST"  action="{{url('/create')}}"  enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<h4>
					Book Title
				</h4>
				 	 
				<input type="text" name="Book_name" class="form-control" placeholder="Enter Book Title"  />
				
			</div>
			<br>
			<div class="form-group">
				<h4>
					Author Name
				</h4>
				
				<input type="text" name="Author" class="form-control" placeholder="Enter Author Name"  />
				
			</div>
			<br>
			<div class="form-group">
				<h4>
					Book categories
				</h4>
				
				<input type="text" name="categories" class="form-control" placeholder="Enter Book categories"  />
				
			</div>
			<br>

			
			<label for="author"><h4>Cover</h4></label>
      <input type="file" class="form-control" name="bookcover">
            </div>
      </div>
      <div class="form-group">
				<input type="submit" name="btn btn-primary">
				
			</div>
     
	</div>
</div>
@endsection