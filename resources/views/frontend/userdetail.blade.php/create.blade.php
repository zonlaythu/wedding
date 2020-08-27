
@extends('frontendtemplate')
@section('contact')
<div class="container">
	{{-- <div class="offset-md-2 col-md-8"> --}}

			<div class="row">

				<div class="col-lg-9">
					<div class="container mt-5 pt-5">		
						<div class="card o-hidden border-0 shadow-md my-5">
							<div class="card-body p-0">
								<div class="row">
									<div class="offset-md-2 col-md-8">
										<h2 class="text-center">Fill Your Information</h2>

										<form method="" action="" enctype="multipart/form-data">

											<div class=form-group>
												<label>Photo</label>
												<input type="file" name="" value="" class="form-control-file">
												<img src="">
											</div>

											{{-- <div class=form-group>
												<label>Name</label>
												<input type="text" name="" value="{{Auth::user()->name}}" class="form-control">
											</div> --}}

											<div class=form-group>
												<label for="ph">Enter Your Phone Number</label>
												<input type="number" name="phone" id="ph" class="form-control">
											</div>

											<div class="form-group">
												<label for="add"><strong>Enter Your Address</strong></label>
												<textarea class="form-control" id="add" name="address"></textarea>
											</div>
											<div>
												<a href="{{route('index')}}" class="btn btn-primary" type="submit">Save</a>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			</form>

		</div>


		@error('description')
		<p class="text-danger">Your description is required!</p>
		@enderror

		@endsection