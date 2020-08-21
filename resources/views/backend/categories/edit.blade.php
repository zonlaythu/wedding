@extends('backendtemplate')
@section('content')
<div class="container">
	<h2>Categories Edit</h2>
	<div class="row">
		<div class="offset-md-2 col-md-8">
			<form method="POST" action="{{route('categories.update',$categories->id)}}">
				@csrf
				@method('PUT')
					
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" value="{{$categories->name}}">
				</div>

				<button class="btn btn-primary" type="submit" name="btnsubmit">Update</button>
			</form>

		</div>
	</div>
</div>
@endsection