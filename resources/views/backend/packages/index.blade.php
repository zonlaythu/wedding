@extends('backendtemplate')
@section('content')
<div class="container">	
	<h2 class="d-inline-block pb-4">Packages List</h2>
	<a href="{{route('packages.create')}}" class="btn btn-primary float-right">Add item</a>
	<table class="table table-bordered">
		<thead>
			<th>No</th>
			<th>Name</th>
			<th>Photo</th>
			<th>Price</th>
			<th>Service</th>
			
			<th>Action</th>
		</thead>

		<tbody>
			@php $j=1; @endphp
			@foreach($packages as $package)
			<tr>
				<td>{{$j++}}</td>
				<td>{{$package->name}}</td>
				<td><img src="{{$package->photo}}" class="img-fluid" width="75px;"></td>
				<td>{{$package->price}}</td>
				<td>
				@foreach($services as $service)							
					<span>{{ $service->name}},</span>
												
					@endforeach
				</td>
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

@endsection