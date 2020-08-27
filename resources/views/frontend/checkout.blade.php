@extends('frontendtemplate')
@section('contact')
<div class="container pt-5">
	<div class="col-lg-9 py-5">
		<div class="container my-5 text-center">
			<div class="row">
				<div class="offset-md-2 col-md-8">
					<h3 class="py-3">Check Out</h3>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>No.</th>
									<th>Product Name</th>
									<th>Photo</th>
									<th>Price</th>
									{{-- <th>Qty</th> --}}
									{{-- <th>Sub Total</th> --}}
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>
				<div class="form-group offset-md-2 col-md-8">
					<textarea class="form-control notes" placeholder="Your note here!"></textarea>
				</div>


				<div class="offset-md-2 col-md-4 text-left">
					<a href="{{route('index')}}" class="btn btn-outline-dark">Continue</a>
				</div>
				{{-- @role('customer') --}}
				<div class="offset-md-2 col-md-4 text-left">
					<a href="#" class="btn btn-outline-dark buy_now">Buy Now</a>
				</div>
				{{-- @else --}}
				{{-- <div class="offset-md-2 col-md-4 text-left">
					<a href="{{route('login')}}" class="btn btn-outline-dark">Login to Buy</a>
				</div> --}}
				{{-- @endrole --}}
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
	<script type="text/javascript" src="frontend/Js/script.js"></script>
@endsection