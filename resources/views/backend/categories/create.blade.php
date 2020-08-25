@extends('backendtemplate')
@section('content')
<div class="container">
	<h2 class="text-center pb-4">Categories Create</h2>

	{{-- <div class="offset-md-2 col-md-8"> --}}

		<form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
			<div class="row">
				@csrf

				<div class="offset-md-3 col-md-1">
					<label for="name1">
						<strong>Name</strong>
					</label>		
				</div>

				<div class="col-md-5">
					<div class="form-group">
						<input type="text" name="name" class="form-control" id="name1">
						@error('name')
						<p class="text-danger">Your Name is required!</p>
						@enderror
					</div>
				</div>

				<div class="offset-md-3 col-md-1">
					<label for="photo1">
						<strong>Photo</strong>
					</label>		
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<input type="file" name="photo" class="form-control-file" id="photo1">
						@error('name')
						<p class="text-danger">Your photo is required!</p>
						@enderror
					</div>
				</div>
				
				<div class="offset-md-3 col-md-2">
					<button class="btn btn-primary float-right" type="submit" name="btnsubmit">Save</button>
				</div>
				
			</div>

		</form>

	</div>


@endsection