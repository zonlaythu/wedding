
<div class="col-lg-3">
	<h1 class="my-4">Shop Name</h1>
	<div class="list-group border-0">
		@foreach($categories as $category)
		<a href="#" class="list-group-item filter" data-id="{{$category->id}}" data-name="{{$category->name}}">{{$category->name}}</a>
		@endforeach
	</div>

</div>