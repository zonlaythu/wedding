<!DOCTYPE html>
<html>
<head>
	<title>Wedding Planner</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">
	<link rel="icon" type="text/css" href="images/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	<!-- nav bar -->
	<nav>
		<nav class="navbar navbar-expand-md navbar-light menu py-2 fixed-top smartz">
			<div class="container">
				<a href="index.php" class="navbar-brand"><span style="color: gold">Wedding Planner</span></a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#mainmenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="mainmenu">
					<ul class="navbar-nav ml-auto pt-3">
						<li class="nav-item"><a href="{{route('index')}}" class="nav-link">Home</a></li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="dropbtn dropdown-toggle text-decoration-none nav-link" id="dLabel" data-toggle="dropdown" >
									Service
								</a>

								<div class="dropdown-menu dropdown-content"  aria-labelledby="dLabel">
									<a class="dropdown-item" href="{{route('packagename')}}">Package</a>
									<a class="dropdown-item" href="service">Custom</a>
								</div>
							</div>
						</li>

						<li class="nav-item"><a href="#" class="nav-link">About</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
						
						<li class="nav-item">
							<a class="nav-link" href="{{route('checkoutname')}}">Cart<span id="item_count"></span></a>
						</li>
						@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login')}}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register')}}">{{ __('Register') }}</a>
						</li>
						@endif
						@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="">
									{{ __('Profile') }}
								</a>

								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</li>
					@endguest
				</ul>
			</div>

		</div>
	</nav>
</nav>
<!-- end nav bar -->
<div class="row">

@yield('sidebar')
@yield('contact')

</div>

<div class="container-fluid" style="background-color: white">
		<div class="container py-3 mt-5">
			 <div class="row">
			 	<div class="col-lg-3">
			 		<i class="far fa-heart fa-2x py-2" style="color: grey" ></i>
			 		<h5 style="color: #debe50;font-family: offline">Wedding Vision</h5>
			 		<p style="color: grey">Define your wedding style and get matched with local vendors.</p>
			 	</div>
			 	<div class="col-lg-3">
			 		<i class="fas fa-comments-dollar fa-2x py-2" style="color: grey"></i>
			 		<h5 style="color: #debe50;font-family: offline">Budgeter</h5>
			 		<p style="color: grey">Get a personalized spending plan based on your unique budget.</p>
			 	</div>
			 	<div class="col-lg-3">
			 		<i class="fas fa-list fa-2x py-2" style="color: grey"></i>
			 		<h5 style="color: #debe50;font-family: offline">Checklist</h5>
			 		<p style="color: grey">Always know what to do, when, with your 24/7 wedding planner.</p>
			 	</div>
			 	<div class="col-lg-3">
			 		<i class="fas fa-gift fa-2x py-2" style="color: grey"></i>
			 		<h5 style="color: #debe50;font-family: offline">Registry</h5>
			 		<p style="color: grey">Your retail, cash,experience, all in one place.</p>
			 	</div>
			 </div>
		</div>
		</div>	


<!-- contact us -->
<div class="contact-block">
	<div class="container text-center text-light py-5">
		<h2 style="font-family:offline;color: #debe50">Contact Us</h2>
		<hr class="divider">
		<p class="pt-4"><i class="fas fa-home text-warning"></i>40th Street,70x71,Mandalay,Mandalay,05032
		</p>
		<p><i class="fas fa-phone-alt text-warning"></i>(+95) 09 430 115 559</p>
		<p><i class="fab fa-viber text-warning"></i> viber/WhatsApp: +9543075559</p>
		<p><i class="far fa-envelope text-warning"></i>intel@gmail.com<br>Info@intelmyanmartravel.com<br>weddingplan@gmail.com</p>
	{{-- 	<a href="contact.html" class="btn" style="background-image: linear-gradient(120deg,#aba9a2,#debe50);border-radius: 15px;" >Contact Us</a>
	</div> --}}
</div>
<!-- footer -->
<footer class=" py-4" style="background-image: linear-gradient(120deg,#aba9a2,#debe50);">
	<div class="container text-center text-dark text-monospace">
		<p class="m-0">Copyright &copy; All Rights Reserved | Designed By &hearts;<a href="http://saiwun.com" class="text-decoration-none" style="color: #264685"> Wedding Planner</a></p>
	</div>
</footer>


<script type="text/javascript" src="{{asset('frontend/bootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@yield('script')

</body>
</html>


