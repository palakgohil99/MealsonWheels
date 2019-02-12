<!DOCTYPE html>
<html>
<head>
	<title>MealsonWheels</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery 3.1.0.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<body>
<div data-vide-bg="video/tr" style="position: relative;">
	<div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; background-image: none;">
		<video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; width: auto; height: 783px;">
			<source src="media\food.mp4" type="video/mp4">
			<source src="media\food.mp4" type="video/webm">
			<source src="media\food.mp4" type="video/ogg">
		</video>
	</div>
	<div class="banner">
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
							<li><a href="index.php">Home</a></li>
							<li><a href="menu.php">Menu</a></li>
							<li><a href="services.php">Services</a></li>
							<li>
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="top_googles_cart" type="submit" name="submit" value="">
										My Cart
										<span class="glyphicon glyphicon-shopping-cart"></span>
									</button>
								</form>
							</li>
        					<li>
        						<button type="button" class="btn-color btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</button>
        					</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="banner_info">
				<h2>Welcome to Meals on Wheels</h2>
				<h3>A Great Destination for Food Lovers</h3>
				<p>
					We are Providing the tiffin service at your door step, Let's Join us to have healthy food, We also provide the Catering Services across ahmedabad.
					We have a expert chef team who cooks healthy foods for you.
				</p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="title">
		<h2> Our Best Quality Tiffin</h2>
	</div>
	<div class="row">
		<div class="col-md-4 tiffin_cat" >
			<img src="images/thal.jpg">
			<img src="images/tiffin.png">
			<img src="images/thali.png">
		</div>
	</div>
</div>
</body> 	
</html>