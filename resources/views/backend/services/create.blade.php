@extends('backendtemplate')
@section('content')
<div class="container">
	<h2 class="text-center pb-4">Services Create</h2>

	{{-- <div class="offset-md-2 col-md-8"> --}}

		<form method="POST" action="{{route('services.store')}}" enctype="multipart/form-data">
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
					<label for="type1">
						<strong>Type</strong>
					</label>		
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<input type="text" name="type" class="form-control" id="type1">
						{{-- @error('name')
						<p class="text-danger">Your Type is required!</p>
						@enderror --}}
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
						@error('photo')
						<p class="text-danger">Your photo is required!</p>
						@enderror
					</div>
				</div>

				<div class="offset-md-3 col-md-1 mt-2">
					<label for="price1">
						<strong>Price</strong>
					</label>		
				</div>
				<div class="col-md-5 mt-2">
					<div class="form-group">
						<input type="text" name="price" class="form-control" id="price1">
						@error('price')
						<p class="text-danger">Your price is required!</p>
						@enderror
					</div>
				</div>

				<div class="offset-md-3 col-md-1 mt-2">
					<label for="des">
						<strong>Description</strong>
					</label>		
				</div>
				<div class="col-md-5 mt-2">
					<div class="form-group">
						<textarea type="text" name="description" class="form-control" id="des"></textarea>
						@error('description')
						<p class="text-danger">Your description is required!</p>
						@enderror
					</div>
				</div>

				<div class="offset-md-3 col-md-1 mt-2">
					<label>
						<strong>Category</strong>
					</label>		
				</div>
				<div class="col-md-5 mt-2">
					<select name="category" class="form-control">				
						@foreach($categories as $category)
						<option value="{{$category->id}}">
							{{$category->name}}
						</option>
						@endforeach
					</select>
					{{-- @error('brand')
					<p class="text-danger">Your Brand require!</p>
					@enderror --}}
				</div>
				

				<div class="offset-md-3 col-md-2 mt-3">
					<button class="btn btn-primary float-right" type="submit" name="btnsubmit">Save</button>
				</div>
				
			</div>

		</form>

	</div>


@endsection