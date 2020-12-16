<!DOCTYPE html>
<html>
<head>
	<title>Bridal Bliss</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('blog_asset/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="{{ asset('blog_asset/css/style.css')}}">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col text-center">
				<img src="{{ asset('blog_asset/images/logo.png') }}" alt="" class="img-fluid">
			</div>
		</div>
	</div>

	<!-- nav bar -->
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-custom">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ml-lg-5 mr-4">

						<a class="nav-link" href="{{ route('homepage') }}">Home</a>
					</li>
					<li class="nav-item dropdown mr-4">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role
						="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Dress</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="shopping.html">Wedding Dress</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="Accessories.html">Accessories</a>
						</div>
					</li>
					<li class="nav-item mr-4">
						<a class="nav-link" href="HairMakeup.html">Hair&Makeup</a>
					</li>
					<li class="nav-item mr-4">
						<a class="nav-link " href="Photography.html">Photography</a>
					</li>
					<li class="nav-item dropdown mr-4">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role
						="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Venues</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="Hotels.html">Hotels</a>
							<a class="dropdown-item" href="Monasteries.html">Monasteries</a>
							<a class="dropdown-item" href="ReceptionHalls.html">Reception Halls</a>
							<a class="dropdown-item" href="Resturants.html">Resturants</a>
						</div>
					</li>
					<li class="nav-item dropdown mr-4">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role
						="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Package</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="Package.html">Wedding</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="Honeymoon.html">Honeymoon</a>
						</div>
					</li>
					<li class="nav-item mr-4">
						<a class="nav-link" href="{{ route('aboutpage') }}">About</a>
					</li>
					<li class="nav-item mr-4">
						<a class="nav-link" href="{{ route('contactpage') }}">Contact</a>
					</li>
					<li class="nav-item mr-4">
						<a class="nav-link waves-effect waves-light">
							<i class="fab fa-facebook"></i>
						</a>
					</li>
					<li class="nav-item  mr-4">
						<a class="nav-link waves-effect waves-light">
							<i class="fab fa-instagram-square"></i>
						</a>
					</li>
					<li class="nav-item mr-5">
						<a class="nav-link waves-effect waves-light">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	@yield('content');

	

	<!-- footer -->
	<footer class="footer">
  		<p class="text-center mt-5 footer-text">©2020 Bridal Bliss by Sonic | Wedding Planning</p>
	</footer>
	
		

	<script type="text/javascript" src="{{ asset('blog_asset/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('blog_asset/js/bootstrap.bundle.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1500,
				arrows: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});
	</script>
	
</body>
</html>