@extends('backendtemplate')
@section('content')
<div class="container">
	<h2 class="text-center pb-4">Package Edit</h2>

	{{-- <div class="offset-md-2 col-md-8"> --}}

		<form method="POST" action="{{route('packages.update',$package->id)}}" enctype="multipart/form-data">
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
						<input type="text" name="name" class="form-control" id="name1" value="{{$package->name}}">
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
						<img src="{{asset($package->photo)}}" class="img-fluid w-25 h-25">
						<input type="hidden" name="oldphoto" value="{{$package->photo}}">
						@error('name')
						<p class="text-danger">Your photo is required!</p>
						@enderror
					</div>
				</div>	

				

				<div class="offset-md-3 col-md-1">
					<label for="price">
						<strong>Price</strong>
					</label>		
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<input type="number" name="price" class="form-control" id="price" value="{{$package->price}}">
						@error('name')
						<p class="text-danger">Your Price is required!</p>
						@enderror
					</div>
				</div>			

				<div class="offset-md-3 col-md-2 mt-3">
					<button class="btn btn-primary float-right" type="submit" name="btnsubmit">Save</button>
				</div>
				
			</div>

		</form>

	</div>


@endsection