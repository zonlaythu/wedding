<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3">

			<h1 class="my-4">Shop Name</h1>
			<div class="list-group border-0">
				@foreach($categories as $category)
				<a href="#c" class="list-group-item filter" data-id="{{$category->id}}" data-name="{{$category->name}}">{{$category->name}}</a>
				@endforeach
			</div>

		</div>
		<div class="col-lg-9 c">
			<h2>Hello</h2>
		</div>
      </div>
</div>