@extends('frontendtemplate')
@section('contact')

<!-- carosel slide -->
<div class="container-fluid pt-5">
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
		{{-- <div class="carousel-item">
			<img src="{{asset('frontend/images/banner4.jpg')}}" class="d-block w-100" alt="...">
			
		</div> --}}
		{{-- <div class="carousel-item">
			<img src="{{asset('frontend/images/banner1.jpeg')}}" class="d-block w-100" alt="...">

		</div> --}}
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

	{{--package card --}}
<div class="container">
	<div class="row">
			@foreach($packages as $package)
			<div class="col-md-3 col-sm-6 px-1 align-center">
				<div class="card border-0 mx-5" style="width: 200px;">
					<img src="{{asset($package->photo)}}" width="230" height="200" style="border-radius: 20px;">
					<div class="card-title text-center">
						<a href="" class="text-center mr-auto ml-auto text-decoration-none">{{$package->name}}</a>
						{{-- <h5>${{$package->price}}</h5> --}}
					</div>
				</div>
			</div>
			@endforeach		
	</div>
</div>

<div class="container mt-4">
	<p>Get Started Our Special Services!</p>
	<hr>
	<div class="row">
		@foreach($categories as $category)
		<div class="col-md-3">
			<img src="{{asset($category->photo)}}" class="img-fluid" width="250" height="200">
			<form method="post" class="border-0" action="{{route('fcategory',$category->id)}}">
				@csrf
				<div class="form-group">
					<input type="submit" name="" class="border-0 form-control" value="{{$category->name}}">
				</div>
			</form>
		</div>
		@endforeach	
</div>
</div>
@endsection