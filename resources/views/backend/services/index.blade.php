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
			{{-- <th>Type</th> --}}
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
				{{-- <td>{{$service->type}}</td> --}}
				<td><img src="{{$service->photo}}" class="img-fluid" width="75px;"></td>

				<td>{{$service->price}}</td>
				<td>{{$service->description}}</td>


				{{-- <td>{{$service->price}}</td> --}}
				{{-- <td>{{$service->description}}</td> --}}

				<td>
					<a href="#" class="box btn btn-warning btn-sm" data-id="{{$service->id}}" data-name="{{$service->name}}"data-photo="{{$service->photo}}" data-price="{{$service->price}}" data-desc="{{$service->description}}">
						Detail
					</a>

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

<div class="modal fade" id="mymodal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal_title"></h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<img src="" class="img-fluid w25" id="photo">
						</div>
						<div class="col-md-6">
							
							<strong > Price:$</strong> <span id="price"></span><br>
							<strong> Description:</strong> <p id="desc"></p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.box').click(function(){
				// alert('Box');
				var name = $(this).data('name');
				var photo = $(this).data('photo');
				var price = $(this).data('price');
				var des = $(this).data('desc');
				console.log(name);
				
				$('.modal_title').text(name);
				$('#photo').attr('src',photo)
				
				$('#price').text(price);
				$('#desc').text(des);
				$('#mymodal').modal('show');
			})
		})
	</script>
@endsection