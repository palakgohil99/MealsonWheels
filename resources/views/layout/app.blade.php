<!DOCTYPE html>
<html>
<head>
	<title>MealsonWheels</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<link rel="stylesheet" href="css/Cart.css" type="text/css" media="all">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link href="https:tps://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
	<script src="ht//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"></script>
	<link rel="stylesheet" href="http://static.sasongsmat.nu/fonts/vegetarian.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.min.js"></script>
	<script type="text/javascript"> // Can also be used with $(document).ready()
		$( document ).ready(function() {
		  $('.flexslider').flexslider({
		    	animation: "slide",
				controlNav: true
		  });
  		$('.carousel').flexslider({
    		animation: "slide",
    		animationLoop: false,
		    itemWidth: 310,
		    itemMargin: 5,
		    move:1,
  		});
	  $('.carousel2').flexslider({
	    animation: "slide",
	    animationLoop: false,
	    itemWidth: 200,
	    itemMargin: 5,
		move:1,
	  });    
});
</script>
</head>
<!-- <head>
	<title>MealsonWheels</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery 3.1.0.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script> -->
<body>
<div class="banner" style="z-index: 0">
	<div class="container_fluid">
		<nav class="navigation navbar">
			<div class="nav-right navbar-right">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="ul-nav collapse navbar-collapse" id="myNavbar">
					<ul class="nav-custom navbar">
						<li><a href="/examp">Home</a></li>
						<li><a href="/examp_menu">Menu</a></li>
						<li><a href="/examp_service">Services</a></li>
						<li>
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="btn-color btn-lg" type="submit" name="submit" value="">
										My Cart
									<span class="glyphicon glyphicon-shopping-cart"></span>
								</button>
							</form>
						</li>
						<li>
        					<button type="button" class="btn-color btn-lg" 
        						data-toggle="modal" data-target="#login_modal"><span class="glyphicon glyphicon-log-in"></span> Login</button>
        				</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</div>


@yield("main-content")


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
					<li><a href="menu">Variety of Foods</a></li>
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
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal1.minicart1.render({ //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js
		action: '{{route("saveCheck")}}'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal1.minicart1.reset();
	}
</script>
<!-- //cart-js -->
</body> 	
</html>
<!-- Modal -->
 <div class="modal fade" id="login_modal" role="dialog">
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