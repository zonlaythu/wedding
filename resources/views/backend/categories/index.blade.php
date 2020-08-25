@extends('backendtemplate')
@section('content')
<div class="container">
<div class="row">
	<div class="offset-md-2 col-md-8">
		<h2 class="d-inline-block pb-4">Categories List</h2>
	<a href="{{route('categories.create')}}" class="btn btn-primary float-right">Add item</a>
	<table class="table table-bordered">
		<thead>
			<th>No</th>
			<th>Name</th>
			<th>Photo</th>
			<th>Actions</th>
		</thead>

		<tbody>
			@php $j=1; @endphp
			@foreach($categories as $category)
			<tr>
				<td>{{$j++}}</td>
				<td>{{$category->name}}</td>
				<td><img src="{{asset($category->photo)}}" width="100" height="100"></td>
				<td>
					<a href="{{route('categories.edit',$category->id)}}" class="btn btn-secondary btn-sm">Edit</a>

					<form method="POST" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger btn-sm">

					</form>
				</td>
					
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>
	
</div>
@endsection