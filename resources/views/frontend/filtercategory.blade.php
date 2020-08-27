@extends('frontendtemplate')
@section('sidebar')
	@include('frontend.sidebar')
@endsection
@section('contact')
<div class="col-lg-9 pt-4">
	<h2 class="py-5" id="name"></h2>
	<div id="myItem" class="myItems row">
		@foreach($services as $service)
			<div class="col-md-3">
				<div class="card h-100 border-0">
					<img src="{{asset($service->photo)}}" class="img-fluid">
					<div class="card-title text-center">
						{{-- <h4 class="card-title"> --}}
							<span class="text-center">{{$service->name}}</span>
						{{-- </h4> --}}
						<h5 class="text-center">{{$service->price}}</h5>
						<p class="card-text">{{$service->description}}</p>
					</div>
					<div class="card-footer border-0">
						<a href="#" class="text-decoration-none btn btn-info d-block btn-sm order" data-id="{{$service->id}}" data-name="{{$service->name}}" data-photo="{{$service->photo}}" data-price="{{$service->price}}">Add to Cart</a>
					</div>
				</div>
				
			</div>
		@endforeach
	</div>
</div>
@endsection

@section('script')
	<script type="text/javascript" src="{{asset('frontend/Js/script.js')}}"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			// showItems(0);

			function showItems(id){
			$.post("{{route('getitems')}}",{sid:id},function(res){
				
				var html='';
				$.each(res,function(i,v){
					console.log(v.photo);
					// var url = '/itemdetail/'+v.id;
					html+=`<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<img class="card-img-top" src="../${v.photo}" alt="This is Photo">
				<div class="card-body">
					<h4 class="card-title">
						<a href="#">${v.name}</a>
					</h4>
					<h5>${v.price}</h5>
					<p class="card-text">${v.description}</p>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-info d-block btn-sm order" data-id="${v.id}" data-name="${v.name}" data-photo="${v.photo}" data-price="${v.price}">Add to Cart</a>
				</div>
			</div>
		</div>`
				})
				$("#myItem").html(html);
			})
			}
			$('.filter').click(function(){
				var id = $(this).data('id');
				var name = $(this).data('name');
				$("#name").text(name);
				showItems(id);
			})
		})
	</script>
@endsection