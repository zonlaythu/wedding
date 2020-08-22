@extends('backendtemplate')
@section('content')
<div class="container">
<div class="row">
	<div class="offset-md-2 col-md-8">
		<h2 class="d-inline-block pb-4">Services List</h2>
	<a href="{{route('packages.create')}}" class="btn btn-warning float-right">Add item</a>
	<table class="table table-bordered">
		<thead>
			<th>No</th>
			<th>Name</th>
			<th>Photo</th>
			<th>Category</th>
			<th>Service</th>
			<th>Action</th>
		</thead>

		<tbody>
			@php $j=1; @endphp
			@foreach($packages as $package)
			<tr>
				<td>{{$j++}}</td>
				<td>{{$package->name}}</td>
				<td><img src="{{$service->photo}}" class="img-fluid" width="75px;"></td>

				<td>{{$categories->name}}</td>
				<td>{{$services->name}}</td>

				<td>
					<a href="{{route('packages.edit',$package->id)}}" class="btn btn-secondary btn-sm">Edit</a>

					<form method="POST" action="{{route('packages.destroy',$package->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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