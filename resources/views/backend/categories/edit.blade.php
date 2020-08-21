@extends('backendtemplate')
@section('content')
<div class="container">
	<h2 class="text-center pb-3">Categories Edit</h2>
	<div class="row">
		<div class="offset-md-2 col-md-8">
			<form method="POST" action="{{route('categories.update',$categories->id)}}">
				@csrf
				@method('PUT')
					
				<div class="row">
				@csrf

				<div class="offset-md-3 col-md-1">
					<label for="name1">
						<strong>Name</strong>
					</label>		
				</div>

				<div class="col-md-5">
					<div class="form-group">
						<input type="text" name="name" class="form-control" id="name1" value="{{$categories->name}}">
						@error('name')
						<p class="text-danger">Your Name is required!</p>
						@enderror
					</div>
				</div>
				
				<div class="offset-md-3 col-md-2">
					<button class="btn btn-primary float-right" type="submit" name="btnsubmit">Update</button>
				</div>
				
			</div>

			</form>

		</div>
	</div>
</div>
@endsection