@extends('frontendtemplate')
@section('contact')

<div class="col-lg-9">
	<h2 class="text-center my-5">Package Detail</h2>

	<div class="container">
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
								<a href="#" class="btn btn-info addtocart"
								data-id="{{$package->id}}"
								data-name="{{$package->name}}"
								data-price="{{$package->price}}"
								data-photo="{{$package->photo}}"
								>Add to Cart</a>
							</td>
							<td>
									@role('customer')
									<a href="#" class="btn btn-secondary buy_now">Book Now</a>
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
</div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('frontend/Js/script.js')}}"></script>
@endsection