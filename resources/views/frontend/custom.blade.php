@extends('frontendtemplate')
@section('contact')
	
		<div class="container py-5">
			<div class="row">
				<div class="col-md-3 my-1 px-0">
					<div class="card border-0 px-0">
						<img src="{{asset($service->photo)}}" width="200" height="150">
						<div class="card-body">
							<h4 class="card-title"> 
								{{$service->name}}
							</h4>
							<h5>{{$service->price}}</h5>
						</div>
					{{-- <div class="card-footer">				
					<a href="{{route('detailname',$service->id)}}" class="btn btn-secondary">Detail
					</a>
				</div> --}}
			</div>
		</div>
	</div>	
	</div>
{{-- </div>
</div>
</form>  --}}
@endsection

