@extends('frontendtemplate')

@section('contact')
<div class="col-lg-9">
	
	<div class="container mt-5 py-4">

		<div class="card o-hidden border-0 shadow-md my-5">
			<div class="card-body p-0">
				<div class="row">
					<div class="offset-md-2 col-md-8">
						<h2 class="text-center">Fill Your Information</h2>
						
						<form method="post" action="{{route('userdetail')}}" enctype="multipart/form-data">
							@csrf
							<div class=form-group>
								<label>Your Profile</label>
								<input type="file" name="photo" class="form-control-file">
								<img src="">
							</div>

							<div class=form-group>
								<label>Your Phone Number</label>
								<input type="text" name="phone" class="form-control">
							</div>


							<div class="form-group">
								<label>Your Address</label>
								<textarea class="form-control" name="address"></textarea>
							</div>

							<div>
								<button class="btn btn-primary save" type="submit">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
</div>
@endsection

@section('script')

<script type="text/javascript">
	$(document).ready(function (){

		$('#form').on('click','.save',function () {
			swal("Good job!", "You clicked the button!", "success")
			
	});
	})
</script>

@endsection