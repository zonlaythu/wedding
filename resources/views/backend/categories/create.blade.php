@extends('backendtemplate')
@section('content')
<div class="container">
	<h2>Categories Create</h2>

	<div class="row">
		<div class="offset-md-2 col-md-8">
			<form method="POST" action="{{route('categories.store')}}">
				@csrf
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
					@error('name')
					<p class="text-danger">Your Name is required!</p>
					@enderror
				</div>

				<button class="btn btn-primary" type="submit" name="btnsubmit">Save</button>
			</form>

		</div>
	</div>

</div>
@endsection