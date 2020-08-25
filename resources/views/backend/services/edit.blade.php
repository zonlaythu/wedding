@extends('backendtemplate')
@section('content')
<div class="container">
	<h2 class="text-center pb-4">Services Edit</h2>

	{{-- <div class="offset-md-2 col-md-8"> --}}

		<form method="POST" action="{{route('services.update',$service->id)}}" enctype="multipart/form-data">
			<div class="row">
				@csrf
				@method('PUT')

				<div class="offset-md-3 col-md-1">
					<label for="name1">
						<strong>Name</strong>
					</label>		
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<input type="text" name="name" class="form-control" id="name1" value="{{$service->name}}">
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
						<input type="text" name="type" class="form-control" id="type1" value="{{$service->type}}">
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
						<img src="{{asset($service->photo)}}" class="img-fluid w-25 h-25">
						<input type="hidden" name="oldphoto" value="{{$service->photo}}">
						@error('name')
						<p class="text-danger">Your photo is required!</p>
						@enderror
					</div>
				</div>

				<div class="offset-md-3 col-md-1">
					<label for="photo1">
						<strong>Photo two</strong>
					</label>		
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<input type="file" name="photo2" class="form-control-file" id="photo1">
						<img src="{{asset($service->phototwo)}}" class="img-fluid w-25 h-25">
						<input type="hidden" name="oldphoto" value="{{$service->phototwo}}">
						@error('name')
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
						<input type="number" name="price" class="form-control" id="price1" value="{{$service->price}}">
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
						<input type="text" name="description" class="form-control" id="des" value="{{$service->description}}">
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
						<option value="{{$category->id}}" 
							@if($category->id==$service->category_id)
							{{'selected'}}
							@endif>
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