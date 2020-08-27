@extends('frontendtemplate')
@section('contact')

<div class="container mt-5 pt-5">

		<h2 class="text-center my-5">Package Detail</h2>

		<div class="row">
			<div class="col-md-4">
				<img src="{{asset($package->photo)}}" class="img-fluid w-75">
			</div>

			<div class="col-md-8 table-responsive">
				<table class="table">
					<tbody>
						<tr> 
							<td>Name</td>
							<td>{{$package->name}}</td>		
						</tr>

						<tr>
							<td>Price</td>
							<td>{{$package->price}}</td>
						</tr>

						@foreach($package->services as $service)
						<tr>
							<td>Servic</td>
							<td>{{ $service->name}}</td>
						</tr>					
						@endforeach

						<tr>
							<td>
								@role('customer')
								<a href="{{route('index')}}" id="addtocart" class="btn btn-info "
								data-id="{{$package->id}}"
								data-name="{{$package->name}}"
								data-price="{{$package->price}}"
								data-photo="{{$package->photo}}">Book Now</a>
								@else
								<a href="{{route('login')}}" class="btn btn-secondary buy_now">Login to Book</a>
								@endrole	
							</td>

						</tr>
					</tbody>
				</table> 
			</div>
	</div>
</div>
@endsection


@section('script')
{{-- <script type="text/javascript" src="{{asset('frontend/Js/script.js')}}"></script> --}}

<script type="text/javascript">
	$(document).ready(function(){

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$("#addtocart").click(function(){
		// alert("hi");
		var id= $(this).data('id');
		var name = $(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
		// alert(name);
		$.post('/orders',{id:id,name:name,photo,price:price},function(response)
		{
      	alert(response);
      	swal("Good job!", "You clicked the button!", "success")

      });


	})
	})

</script>

@endsection