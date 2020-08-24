<!DOCTYPE html>
<html>
<head>
	<title>Wedding Planner</title>
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
						<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item">
						<div class="dropdown">
							<a class="dropbtn dropdown-toggle text-decoration-none nav-link" id="dLabel" data-toggle="dropdown" >
								Service
							</a>

							<div class="dropdown-menu dropdown-content"  aria-labelledby="dLabel">
								<a class="dropdown-item" href="apple.php">Apple</a>
								<a class="dropdown-item" href="samsung.php">Samsung</a>
								<a class="dropdown-item" href="huawei.php">Huawei</a>
								 <a class="dropdown-item" href="xiaomi.php">Xiaomi</a>
								 <a class="dropdown-item" href="oneplus.php">One plus</a>
							</div>
						</div>
						</li>
						<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link">Login</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link">Register</a></li>
						<li class="nav-item">
							<form action="" class="navbar-form">
							<div class="form-group input-group">
							<input type="text" name="" placeholder="Search Here" class="form-control">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default">
									<i class="fas fa-search form-control-feedback" style="color:white"></i>
								</button>
							</div>
							</div>
						</form>
						</li>
					</ul>
				</div>

			</div>
		</nav>
	</nav>
<!-- end nav bar -->
@yield('contact')

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
		<a href="contact.html" class="btn" style="background-image: linear-gradient(120deg,#aba9a2,#debe50);border-radius: 15px;" >Contact Us</a>
	</div>
</div>
<!-- footer -->
<footer class=" py-4" style="background-image: linear-gradient(120deg,#aba9a2,#debe50);">
	<div class="container text-center text-dark text-monospace">
		<p class="m-0">Copyright &copy; All Rights Reserved | Designed By &hearts;<a href="http://saiwun.com" class="text-decoration-none" style="color: #264685"> Wedding Planner</a></p>
	</div>
</footer>


<script type="text/javascript" src="{{asset('frontend/bootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>


</body>
</html>
