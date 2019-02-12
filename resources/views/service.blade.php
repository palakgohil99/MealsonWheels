<!DOCTYPE html>
<html>
<head>
	<title>MealsonWheels</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<link rel="stylesheet" href="css/Cart.css" type="text/css" media="all">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
	<link rel="stylesheet" href="http://static.sasongsmat.nu/fonts/vegetarian.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="banner_top" style="">
	<div class="services_banner">
		<div class="container_fluid">
				<nav class=" navigation navbar navbar-default">
					<div class="nav-right navbar-right">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="ul-nav collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar">
								<li><a href="/home">Home</a></li>
								<li><a href="/menu">Menu</a></li>
								<li><a href="/service">Services</a></li>
								<li>
									<form method="post" class="last">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="display" value="1">
										<button class="top_googles_cart" type="submit" name="submit" value="">
											My Cart
											<span class="glyphicon glyphicon-shopping-cart"></span>
										</button>
									</form>
								</li>
								<li>
	        						<button type="button" class="btn-color btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span>Login</button>
	        					</li>
							</ul>
						</div>
					</div>
				</nav>
		</div>
	</div>
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
<div class="clearfix"></div>
<div class="container-fluid footer-content">
	<div class="col-md-4 footer-div">
		<h3>About <span>Us</span></h3>
			<div class="glyph-icon">
				<a href=""><i class="glyphicon glyphicon-map-marker"></i>A-403 Saumya Recidency,A'bad</a>
			</div>
			<div class="glyph-icon">
				<a href=""><i class="glyphicon glyphicon-envelope"></i>palakgohil6792@gmail.com</a>
			</div>
			<div class="glyph-icon">
				<a href=""><i class="glyphicon glyphicon-phone"></i>+91 9978806792</a>
			</div>
	</div>
	<div class="footer-div col-md-4">
		<h3>Our <span>Special</span> Services</h3>
			<div class="special-item">
				<ul>
					<li><a href="#">Tiffin Services</a></li>
					<li><a href="#">Catering Services</a></li>
					<li><a href="#">Home Delivery</a></li>
					<li><a href="#">Variety of Foods</a></li>
				</ul>
			</div>
	</div>
	<div class="col-md-4 footer-div">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29366.458813916095!2d72.65215884261967!3d23.067523385520598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e80d4cb153359%3A0xbc86542ad155c7e2!2sNava+Naroda%2C+Ahmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1537702900484" style="width:400px; margin-top:20px; height:250px; border-radius: 5px;"></iframe>		
	</div>
	<div class="col-md-12 copyright">
		<h4>&copy; 2018-2022, Designed &amp; Devloped by Palak Gohil</h4>
	</div>
</div>
</body>
</html>
<!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close_button" data-dismiss="modal">&times;</button>
          <h3 class="modal-title login-header">Login</h3>
        </div>
	    <div class="row">
	    	<div class="col-md-2">

	    	</div>
	    	<div class="col-md-8">     
		        <div class="modal-body">
		            <form action="">
					  <div class="form-group">
					    <label for="text">Email/Phone Number:</label>
					    <input type="text" pattern="^([_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,5}))|(\d{10})$" class="form-control" id="text">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="pwd">
					  </div>
					  <div class="checkbox">
					    <label><input type="checkbox"> Remember me</label>
					  </div>
					  <button type="submit" class="btn btn-default">Login</button>
					</form>
		        </div>
		    </div>
		    <div class="col-md-2">

	    	</div>
        </div>
        <div class="modal-footer register">
        	<h5>New to Meals on Wheels?&nbsp;<a href="/registration">Register Here</a></h5>
        </div>
      </div>
      
    </div>
  </div>
 <!-- Modal -->