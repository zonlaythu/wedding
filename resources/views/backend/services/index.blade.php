@extends('backendtemplate')
@section('content')
<div class="container">

		<h2 class="d-inline-block pb-4">Services List</h2>
	<a href="{{route('services.create')}}" class="btn btn-primary float-right">Add item</a>
	<table class="table table-bordered">
		<thead>
			<th>No</th>
			<th>Name</th>
			<th>Category</th>
			<th>Type</th>
			<th>Photo</th>
			<th>Price</th>
			<th>Description</th>
			<th>Actions</th>
		</thead>

		<tbody>
			@php $j=1; @endphp
			@foreach($services as $service)
			<tr>
				<td>{{$j++}}</td>
				<td>{{$service->name}}</td>
				<td>{{$service->category->name}}</td>
				<td>{{$service->type}}</td>
				<td><img src="{{$service->photo}}" class="img-fluid" width="75px;"></td>

				<td>{{$service->price}}</td>
				<td>{{$service->description}}</td>

				<td>
					<a href="{{route('services.edit',$service->id)}}" class="btn btn-secondary btn-sm">Edit</a>

					<form method="POST" action="{{route('services.destroy',$service->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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
@endsection