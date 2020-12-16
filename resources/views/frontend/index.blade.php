@extends('master')
@section('content')

	<!-- AboutUs -->
	<h3 class="text-center my-5">About Us</h3>

	<div class="container">

		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6 my-2">
				<img class="aboutus" src="{{ asset('blog_asset/images/About.jpg') }}">
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 my-5">
				<h5>Everything you need to plan a wedding</h5>
				<p class="about-text">Our website is a professional who assists with the design, planning and management of a client's wedding. Weddings are significant events in people's lives and as such, couples are often willing to spend considerable amount of money to ensure that their weddings are well-organized.</p>
				<p>It can also be one of the most stressful. A wedding planner is someone who helps couples with the planning, organization, and management of their wedding.</p>
			</div>
		</div>
		<!-- end -->

		<!-- Services -->	
		<div class="container my-5">
			<h3 class="text my-5">Our services</h3>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4 item-one">
					<div class="service-item my-3">
						<div class="img-circle">
							<img src="{{ asset('blog_asset/images/dress.png') }}" alt="service_img" />
						</div>
						<div class="service-info my-3">
							<h4>Dress</h4>
							<p>
								A wedding dress or bridal gown is the dress worn by the bride during a wedding ceremony.Stunning Wedding Dresses with Gorgeous Details.
							</p>
						</div>
						<div class="service-btn my-3">
							<a href="shopping.html">read more</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4 item-two">
					<div class="service-item my-3">
						<div class="img-circle">
							<img src="{{ asset('blog_asset/images/hairmakeup.jpg') }}" alt="service_img" />
						</div>
						<div class="service-info my-3">
							<h4>Hair&Makeup</h4>
							<p>
								Browse wedding hair and makeup artists on The Knot. Search for a wedding makeup artist that gets your style and fits your budget, then contact your favorites.
							</p>
						</div>
						<div class="service-btn my-3">
							<a href="HairMakeup.html">read more</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4 item-three">
					<div class="service-item my-3">
						<div class="img-circle">
							<img src="{{ asset('blog_asset/images/photography.png') }}" alt="service_img" />
						</div>
						<div class="service-info my-3">
							<h4>Photography</h4>
							<p>
								Photography is the art, application and practice of creating durable images by recording light, either electronically by means of an image sensor.
							</p>
						</div>
						<div class="service-btn my-3">
							<a href="Photography.html">read more</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4 item-four">
					<div class="service-item my-3">
						<div class="img-circle">
							<img src="{{ asset('blog_asset/images/venue.png') }}" alt="service_img" />
						</div>
						<div class="service-info my-3">
							<h4>Venues</h4>
							<p>
								Plan your Wedding, Party, Meeting with Eventective. Find the Perfect Event Venues and Vendors on Eventective.com.
							</p>
						</div>
						<div class="service-btn my-3">
							<a href="Hotels.html">read more</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4 item-five">
					<div class="service-item my-3">
						<div class="img-circle">
							<img src="{{ asset('blog_asset/images/honeymoon.png') }}" alt="service_img" />
						</div>
						<div class="service-info my-3">
							<h4>Honeymoon</h4>
							<p>
								A honeymoon is a holiday taken after their wedding, to celebrate their marriage. Today, honeymoons are often celebrated in romantic destinations.
							</p>
						</div>
						<div class="service-btn my-3">
							<a href="Honeymoon.html">read more</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4 item-six ">
					<div class="service-item my-3">
						<div class="img-circle">
							<img src="{{ asset('blog_asset/images/advice.png') }}" alt="service_img" />
						</div>
						<div class="service-info my-3">
							<h4>Best Advice</h4>
							<p>
								Love, gratitude, compassion, because sometimes every man or every woman will drive their partner crazy. Family. Fun. Laughs. Sex.
							</p>
						</div>

						<div class="service-btn my-3">
							<a href="About.html">read more</a>
						</div>
					</div>
				</div>

			</div>
		


		<!-- Pricing -->
		<div class="container my-5">
			<h3 class="text my-5">Our Pricing</h3>
			<div class="row">

				<div class="col-sm-12 col-md-6 offset-lg-1 col-lg-5 offset-lg-1">
					<div class="pricing-item">
						<h3>5,890,000</h3>
						<div class="title">
							<span>Diamond</span>
						</div>
						<ul class="pricing-plan-list">
							<li><span>6 hours of coverage</span></li>
							<li><span>Bridal sessions</span></li>
							<li><span>Engagement sessions</span></li>
							<li><span>Flower Decoration</span></li>
							<li><span>Photographer</span></li>
							<li><span>Service Assistant</span></li>
						</ul>
						<a href="Package.html" class="choose-plan-btn">Choose plan</a>
					</div>
				</div>


				<div class="col-sm-12 col-md-6 offset-lg-1 col-lg-5 offset-lg-1">
					<div class="pricing-item">
						<h3>5,800,000</h3>
						<div class="title">
							<span>Platinum</span>
						</div>
						<ul class="pricing-plan-list">
							<li><span>6 hours of coverage</span></li>
							<li><span>Bridal sessions</span></li>
							<li><span>Engagement sessions</span></li>
							<li><span>4k video resolution</span></li>
							<li><span>Flower Decoration</span></li>
							<li><span><del>Maintenance Support</del></span></li>
						</ul>
						<a href="Package.html" class="choose-plan-btn">Choose plan</a>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 offset-lg-1 col-lg-5 offset-lg-1">
					<div class="pricing-item">
						<h3>4,500,000</h3>
						<div class="title">
							<span>Gold</span>
						</div>
						<ul class="pricing-plan-list">
							<li><span>4 hours of coverage</span></li>
							<li><span>Bridal sessions</span></li>
							<li><span>Engagement sessions</span></li>
							<li><span>12 photos of disc</span></li>
							<li><span><del>Service Assistant</del></span></li>
							<li><span><del>Flower Decoration</del></span></li>
						</ul>
						<a href="Package.html" class="choose-plan-btn">Choose plan</a>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 offset-lg-1 col-lg-5 offset-lg-1">
					<div class="pricing-item">
						<h3>3,000,000</h3>
						<div class="title">
							<span>Silver</span>
						</div>
						<ul class="pricing-plan-list">
							<li><span>2 hours of coverage</span></li>
							<li><span>Bridal sessions</span></li>
							<li><span>Engagement sessions</span></li>
							<li><span>Food</span></li>
							<li><span><del>Service Assistant</del></span></li>
							<li><span><del>Photographer</del></span></li>
						</ul>
						<a href="Package.html" class="choose-plan-btn">Choose plan</a>
					</div>
				</div>
		</div>
	</div>



	<!-- Contact -->
	<h3 class="text-center my-5">Contact Us</h3>
	<section id="contact" class="std-section">
		<div class="container mt-2">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="contact-item">
						<h5 class="contact-title">Information</h5>
						<p>
							Have a new project? Let's work on it together. We’re always looking to collaborate with local sponsors who align with our values. Connect with us at hello@email.com or drop us a line in the form!

						</p>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="contact-item">
						<h5 class="contact-title">Useful Link</h5>
						<ul class="useful-link">
							<li>Accessibility</li>
							<li>FAQ</li>
							<li>Privacy</li>
							<li>Terms Of Use</li>
							<li>Terms & Conditions</li>
							<li>Help Center</li>
						</ul>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="contact-item">
						<h5 class="contact-title">Address</h5>
						<p>	No.10, Room 1/B,</p>
						<p>Than Rd Hlaing, Yangon.</p>
						<p>+95 997 646 944</p>
						<p>email@youraddress.com</p>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="contact-item">
						<h5 class="contact-title">Connect with Us</h5>
						<div class="social-icon my-3">
							<a href="http://www.facebook.com" target="blank">
								<i class="fab fa-facebook-f"></i>
								<span>Facebook</span>
							</a>
						</div>

						<div class="social-icon my-3">
							<a href="http://www.twitter.com" target="blank">
								<i class="fab fa-twitter"></i>
								<span>Twitter</span>
							</a>
						</div>

						<div class="social-icon my-3">
							<a href="http://www.instagram.com" target="blank">
								<i class="fab fa-instagram"></i>
								<span>Instagram</span>
							</a>
						</div>


					</div>
				</div>
			</div>
		</div>
	</section>
@endsection