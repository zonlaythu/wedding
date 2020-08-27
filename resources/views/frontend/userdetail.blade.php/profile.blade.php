
@extends('frontendtemplate')
@section('contact')
<div class="container">

		<form enctype="multipart/form-data">
			<div class="row">
				{{-- @csrf --}}
				<div class="col-lg-9">
					<div class="container mt-5 pt-5">		
						<div class="card o-hidden border-0 shadow-md my-5">
							<div class="card-body p-0">
								<div class="row">
									<div class="offset-md-2 col-md-8">
										<h2 class="text-center">Fill Your Information</h2>
			
											<div class=form-group>
												<label>Photo</label>
												<input type="file" id="photo" class="form-control-file">
										
											</div>

											<div class=form-group>
												<label>Enter Your Phone Number</label>
												<input type="number" id="phone" class="form-control">
											</div>

											<div class="form-group">
												<label><strong>Enter Your Address</strong></label>
												<textarea class="form-control" id="address"></textarea>
											</div>

											<div>
												<input type="submit" value="Save" class="btn-outline-secondary save">
											</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
		@endsection

	@section('script')
<script type="text/javascript">
	$(document).ready(function(){

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$(".save").click(function(){
		alert("hi");
		// var id= $(this).data('id');
		var photo = $('#photo').val();
		var phone = $('#phone').val();
		var address = $('#address').val();
		
		// alert(name);
		$.post('/userdetails',{photo:photo,phone:phone,address:address},function(response)
		{
      	// alert(response);
      	// swal("Good job!", "You clicked the button!", "success")

      });


	})
	})

</script>

@endsection