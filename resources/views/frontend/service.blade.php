@extends('frontendtemplate')
@section('contact')

	<div class="container mt-5">
		<div class="row">
			@foreach($categories as $category)
			<div class="col-md-3 my-1 px-0">
				<div class="card border-0 px-0">
					<img src="{{asset($category->photo)}}" width="200" height="150">
					<div class="card-body">
						<h4 class="card-title"> 
							{{$category->name}}
						</h4>
						<h5>{{$category->price}}</h5>
					</div>
					
					<form method="POST" action="{{route('customname',$category->id)}}">
						@csrf
						<button class="btn btn-secondary" type="submit">Detail
					</button>
					</form>				
					
				
				</div>
			</div>
			@endforeach
		</div>
	</div>

@endsection