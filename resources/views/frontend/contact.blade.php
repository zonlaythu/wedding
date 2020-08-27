@extends('frontendtemplate')
@section('contact')

<div class="container-fluid mt-5 pt-5">
	<h3 class="text text-center pt-5 pb-2" style="font-family: offline">Contact Us</h3>
	<p class="text text-center">Get in touch for general inquiries, press and investor relations information or to contact human resources.</p>
	<div class="container pt-3 pb-4">
		<div class="row">
			<div class="col-lg-6 px-5">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3699.9661769099425!2d96.08597511442342!3d21.974261160204797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d2264fd056f%3A0x26417bfab449950e!2sInnwa%20Computer%20%26%20Mobile!5e0!3m2!1sen!2smm!4v1593594071837!5m2!1sen!2smm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<div class="col-lg-6 px-5" style="background-image: linear-gradient(20deg,#d9d7d8,white);border-radius: 30px">
				<h5 class="text text-center py-3" style="font-family: offline">Send Us A Message</h5>
				<form >
					<div class="form-group">
						<label> Name</label>
						<input type="text" name="" class="form-control"  style="background-image: linear-gradient(120deg,#aba9a2,white);">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="" class="form-control"   style="background-image: linear-gradient(120deg,#aba9a2,white);">
					</div>
					<div class="form-group">
						<label>Message</label>
						 <textarea class="form-control" placeholder="Enter your message" style="background-image: linear-gradient(120deg,#aba9a2,white);line-height: 3;"></textarea>
					</div>
					<a href="#" class="btn offset-5" style="background-image: linear-gradient(20deg,#aba9a2,#debe50);border-radius: 15px;font-family: offline;" >Send Message</a>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection