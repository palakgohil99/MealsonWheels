@extends('layout.app')
@section("main-content")
<div class="banner_top" style="margin-top: -92px; z-index: -1; position: relative;">
  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      <div class="item active services_img">
	        <img src="images/services_lider1.jpg" alt="" style="width:100%; max-height: 450px;">
	      </div>

	      <div class="item services_img">
	        <img src="images/services_lider2.jpg" alt="" style="width:100%; max-height: 450px;">
	      </div>
	    
	      <div class="item services_img">
	        <img src="images/services_lider3.jpg" alt="" style="width:100%; max-height: 450px;">
	      </div>
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	</div>
</div>
<div class="clearfix"></div>
<div class="container we_serve">
	<h3>Our<span style="color: #FD6239"> Services</span></h3>
	<div class="catering_service">
		
			<div class="col-md-6 catering">
				<img src="images/catering.jpg">	
			</div>
			<div class="col-md-6 catering">
				<h2>Catering Services</h2>
				<p>We are providing catering services for:</p>
				<ul>
					<li><i class="glyphicon glyphicon-ok"></i> Wedding Party</li>
					<li><i class="glyphicon glyphicon-ok"></i> Birthday Party</li>
					<li><i class="glyphicon glyphicon-ok"></i> Bridal Shower</li>
					<li><i class="glyphicon glyphicon-ok"></i> Anniversary</li>
					<li><i class="glyphicon glyphicon-ok"></i> Get to Gether</li>
					<li><i class="glyphicon glyphicon-ok"></i> Reunion</li>
				</ul>
			</div>
	</div>
	<div class="catering_service">
		<div class="col-md-6 catering">
			<img src="images/Premium.png">
		</div>
		<div class="col-md-6 catering">
			<h2>Tiffin Services</h2>
			<p>we are Providing Tiffin Service Across Ahmedabad Location.</p>
			<p>We are Providing Tiffin Service for Lunch and Dinner both:</p>
			<p>We Server our Tiffin Service at: </p>
			<ul>
				<li><i class="glyphicon glyphicon-ok"></i>Home</li>
				<li><i class="glyphicon glyphicon-ok"></i>PGs</li>
				<li><i class="glyphicon glyphicon-ok"></i>Offices</li>
			</ul>
			<p>Tiffin Service is available from Mon to Sat</p>
				<ul>
					<li>For Lunch: 12:00 PM to 03:00 PM</li>
					<li>For Dinner: 07:00 PM to 10:00 PM</li>
				</ul>
		</div>
	</div>
	<div class="catering_service">
		<div class="col-md-6 catering">
			<img src="images/food delivery.png">
		</div>
		<div class="col-md-6 catering">
			<h2>Food Delivery</h2>
			<p>Food Delivery is available from Mon to Sun 07:00 AM to 03:00 AM</p>
			<p style="font-weight: bold; line-height: 30px;">We Delier :</p>
			<ul>
				<li><i class="glyphicon glyphicon-ok"></i>Breakfast</li>
				<li><i class="glyphicon glyphicon-ok"></i>Lunch</li>
				<li><i class="glyphicon glyphicon-ok"></i>Snacks</li>
				<li><i class="glyphicon glyphicon-ok"></i>Dinner</li>
				<li><i class="glyphicon glyphicon-ok"></i>Deserts</li>
			</ul>
		</div>
	</div>
</div>
@endsection