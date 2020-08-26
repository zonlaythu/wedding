@extends('frontendtemplate')
@section('contact')

<!-- carosel slide -->
{{-- <div class="container"> --}}
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="{{asset('frontend/images/banner1.jpeg')}}" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="{{asset('frontend/images/banner4.jpg')}}" class="d-block w-100" alt="...">
			
		</div>
		<div class="carousel-item">
			<img src="{{asset('frontend/images/banner1.jpeg')}}" class="d-block w-100" alt="...">

		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

</div>
<!-- end carousel -->

<div class="container py-5">
	<div class="row">
		@foreach($packages as $package)
		<div class="col-md-3 my-1 px-0">
			<div class="card border-0 px-0">
				<img src="{{asset($package->photo)}}" width="150" height="100">
				<div class="card-body">

					<a href="">{{$package->name}}</a>
					<h5>{{$package->price}}</h5>
				</div>

				<div class="card-footer">				
					<a href="{{route('detailname',$package->id)}}" class="btn btn-secondary">Detail
					</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>


	{{-- <div class="jumbotron">
		<div class="container">
			<h4 class="d-inline">Get Our Services && Ideas</h4>
			<button class="btn btn-light float-right">View More</button>
			<div class="row mt-5">
				
			@foreach($services as $service)
				<div class="col-md-3">
					<div class="card">
						<img src="{{asset($service->photo)}}" width="200" height="250" class="card-img-top">
					</div>
				</div>
			@endforeach
		</div>
		</div>
	</div> --}}

	@endsection