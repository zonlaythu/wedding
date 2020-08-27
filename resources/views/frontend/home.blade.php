@extends('frontendtemplate')
@section('contact')

<!-- carosel slide -->
<div class="container-fluid">
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
		<div class="offset-4 col-md-4">
			<img src="{{asset('frontend/images/2020.png')}}" class="img-fluid award">
			<span class="text-center">
			<b>2020 Best Choice Packages</b>	
			{{-- <p>Explore winners in your area</p> --}}
			</span>
		</div>
	</div>
</div>

	{{-- card --}}
<div class="container" style="margin-left: 180px;">
	<div class="row">
		
			@foreach($packages as $package)
			<div class="offset-1 col-md-2 my-1 mx-3 align-center">
				<div class="card" style="width: 200px;">
					<img src="{{asset($package->photo)}}" width="200" height="150">
					<div class="card-body">

						<a href="" class="text-decoration-none">{{$package->name}}</a>
						<h5>${{$package->price}}</h5>
						{{-- <hr>
						{{$package->description}} --}}
					</div>
				</div>
			</div>
			@endforeach		
	</div>
</div>

<div class="container mt-4">
	<p class="text-dark">More Wedding Services</p>
	<hr>
	<div class="row">
		<div class="col-md-3">
			<img src="{{asset('frontend\images\dress.jpeg')}}" class="img-fluid">
			<a href="" class="text-decoration-none text-muted">Wedding Dress Shopping</a>
		</div>

		<div class="col-md-3">
			<img src="{{asset('frontend\images\ve.jpeg')}}" class="img-fluid">
			<a href="" class="text-decoration-none text-muted">Wedding Venues </a>
		</div>

		<div class="col-md-3">
			<img src="{{asset('frontend\images\food.jpeg')}}" class="img-fluid">
			<a href="" class="text-decoration-none text-muted">Wedding Foods</a>
		</div>

		<div class="col-md-3">
			<img src="{{asset('frontend\images\f.jpeg')}}" class="img-fluid">
			<a href="" class="text-decoration-none text-muted">Wedding Flowers</a>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-3">
			<img src="{{asset('frontend\images\j.jpeg')}}" class="img-fluid">
			<a href="" class="text-decoration-none text-muted">Jewelers</a>
		</div>

		<div class="col-md-3">
			<img src="{{asset('frontend\images\s1.jpeg')}}" class="img-fluid">
			<a href="" class="text-decoration-none text-muted">Photogaraphers</a>
		</div>

		<div class="col-md-3">
			<img src="{{asset('frontend\images\make.h')}}" class="img-fluid">
			<a href="" class="text-decoration-none text-muted">Beauty Slons</a>
		</div>

		<div class="col-md-3">
			<img src="{{asset('frontend\images\in.jpeg')}}" class="img-fluid">
			<a href="" class="text-decoration-none text-muted">Wedding Invitations</a>
		</div>
			
	</div>
	
</div>

<div class="container my-5">
	<p class="text-dark text-center">
		Planning a wedding is no easy task. First step: settle on a budget, then get started on planning with our tools, tips and articles to help you every step of the way. We have advice for finding the perfect venue, hiring a photographer, settling on a wedding style, shopping for your dream gown, finalizing your guest list, determining catering and bar costs, and a host of other details. Start your wedding planning here!
	</p>
	{{-- <hr> --}}
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