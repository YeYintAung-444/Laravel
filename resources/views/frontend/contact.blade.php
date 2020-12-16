@extends('master')
@section('content')

<h3 class="text-center my-5">Contact us</h3>


	<div class="container">
		<div class="row my-5">

			<div class="col-sm-12 col-md-6 col-lg-6 my-3" >
				Office 1 <br><br>
				<img src="{{ asset('blog_asset/images/phone.png') }}">&nbsp;&nbsp;&nbsp;&nbsp;+95-1-500582~3 (Ext : 101, 102), 534961,+95-9-785010789 <br> <br><br>
				<img src="images/mail.png">&nbsp;&nbsp;&nbsp;&nbsp;
				info@mgjmyanmar.com
			</div>

			<div class="col-sm-12 col-md-6 col-lg-6 my-3">
				Office 2<br><br>
				<img src="{{ asset('blog_asset/images/phone.png') }}">&nbsp;&nbsp;&nbsp;&nbsp;+95-1-500582~3 (Ext : 201, 202), 534961, +95-9-5132360,<br><br><br>
				<img src="images/location.png">&nbsp;&nbsp;&nbsp;&nbsp;No. 132, 1st floor (left), 29th Street (Middle Block), Pabedan, Yangon.
			</div>
		
			<div class="container text-center my-5">
  				<iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.031973601992!2d96.15417871439965!3d16.775084788448243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed929355a803%3A0x8a9d9824d1f1dc43!2sMG%26J%20Jewelry!5e0!3m2!1sen!2smm!4v1604102801452!5m2!1sen!2smm" frameborder="0" width="450px" height="400px" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			
		</div>
	</div>	
		

	<div class="container">
		<h3 class="text-center">Keep in touch with us</h3>
		<h4 class="text-center">Let’s fill out the above information to contact with us to solve your problems.</h4>
		
		<div class="row">
			<div class="offset-md-4 col-md-4">
				<form action="" method="" enctype="">

					<div class="form-group mt-5">
						<label>Name</label>
						<input type="text" name="" class="form-control">
					</div>
					<div class="form-group">
						<label>Subject</label>
						<input type="text" name="" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="" name="" class="form-control">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="number" name="" class="form-control" id="phone">
					</div>

					<div class="form-group my-3">
						<label>Message</label>
						<textarea class="form-control"></textarea>
					</div>

					<input type="submit" name="" class="btn btn-danger float-right" value="Submit">

				</form>
			</div>
		</div>
	</div>

@endsection