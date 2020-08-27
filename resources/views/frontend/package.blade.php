@extends('frontendtemplate')
@section('contact')

	<div class="container py-5 mt-5">
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
					
					<div class="card-footer">				
					<a href="{{route('detailname',$package->id)}}" class="btn btn-secondary">Detail
					</a>
				</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>


@endsection