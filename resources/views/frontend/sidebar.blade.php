
<div class="col-lg-3 mt-5">
	<h1 class="my-4 text-center">Our Services</h1>
	<div>
		@foreach($categories as $category)
		<i class="far fa-star"></i><a href="#" class="list-group filter text-decoration-none d-inline-block" data-id="{{$category->id}}" data-name="{{$category->name}}">{{$category->name}}</a>
		@endforeach
	</div>

</div>