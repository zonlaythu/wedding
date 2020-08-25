@extends('backendtemplate')
@section('content')
<div class="container">
	<h2 class="text-center pb-4">Package Create</h2>

	{{-- <div class="offset-md-2 col-md-8"> --}}

		<form method="POST" action="{{route('packages.store')}}" enctype="multipart/form-data">
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
						<p class="text-danger">Your name is required!</p>
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

				<div class="offset-md-3 col-md-1">
					<label for="price">
						<strong>Price</strong>
					</label>		
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<input type="number" name="price" class="form-control" id="price">
						@error('name')
						<p class="text-danger">Your price is required!</p>
						@enderror
					</div>
				</div>

				<div class="offset-md-3 col-md-1">
					<label for="photo1">
						<strong>Services</strong>
					</label>		
				</div>
				<div class="col-md-5 mt-2">
					<select name="services[]" class="sel form-control" multiple="multiple">

						@foreach($services as $service)
						<option value="{{$service->id}}">
							{{$service->name}}
						</option>
						@endforeach
					</select>
				</div>
				<div class="offset-md-3 col-md-2 mt-3">
					<button class="btn btn-primary float-right" type="submit" name="btnsubmit">Save</button>
				</div>
				
			</div>
		</form>
	</div>

@endsection

@section('script')
<script type="text/javascript">

$(document).ready(function(){
 $(".sel").select2({
 	tags:true,	
 });
  })
	
</script>
@endsection
