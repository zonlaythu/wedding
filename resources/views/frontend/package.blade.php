@extends('frontendtemplate')
@section('contact')

	<div class="container py-5">
		<h2 class="text-center">Choose Package</h2>
		<div class="row">
			@foreach($packages as $package)
			<div class="col-md-3 my-1 px-0">
				<div class="card border-0 px-0">
					<img src="{{asset($package->photo)}}" width="200" height="150">
					<div class="card-body">
						<h4 class="card-title"> 
							<a href="">{{$package->name}}</a>
						</h4>
						<h5>{{$package->price}}</h5>
					</div>
					<a href="url" class="btn btn-primary">Detail</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>


@endsection