<!DOCTYPE html>
<html>
<head>
	<title>MealsonWheels</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link href="https:tps://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="ht//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"></script>
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
			<nav class="navigation navbar">
				<div class="nav-right navbar-right">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="ul-nav collapse navbar-collapse" id="myNavbar">
						<ul class="nav-custom navbar">
							<li><a href="/home">Home</a></li>
							<li><a href="/menu">Menu</a></li>
							<li><a href="/service">Services</a></li>
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
<div class="clearfix"></div>
<div class="container">
	<div class="title">
		<h2>Our best quality tiffins</h2>
	</div>
	<div class="row">
		<div class="col-md-4 tiffin-category">
			<div class="img-resize">
				<div class="view view-eighth">
					<img src="images/Gujarati.png">		
					<div class="mask">
		                <h2>Standard Tiffin</h2>
		                    <p>1 Sabji, 4 Roti, Dal fry, Rice, Butter Milk</p>
					</div>
				</div>
			</div>
			<div class="cart-button hvr-sweep-to-top">
				<form action='#' method='post'>
					<input type='hidden' name='cmd' value='_cart'>
					<input type='hidden' name='add' value='1'>
					<input type='hidden' name='w3l_item' value='Striped Top '>
					<input type='hidden' name='amount' value='80.00'>
					<input type='hidden' name='item_name' value='Standard Tiffin'/>
					<button type='submit' class='button w3l-cart' data-id='cart-1'>₹.80</button>
				</form>
			</div>
		</div>
		<div class="col-md-4 tiffin-category">
			<div class="img-resize">
				<div class="view view-eighth">
					<img src="images/tiffin.png">
					<div class="mask">
		                <h2>Executive Tiffin</h2>
		                    <p>2 Sabji, 4 Roti, Rice, Dal Fry/Dal Tadka, Butter Milk, Papad, Sweet</p>
					</div>
				</div>
			</div>
			<div class="cart-button hvr-sweep-to-top">
				<form action='#' method='post'>
					<input type='hidden' name='cmd' value='_cart'>
					<input type='hidden' name='add' value='1'>
					<input type='hidden' name='w3l_item' value='Striped Top '>
					<input type='hidden' name='amount' value='120.00'>
					<input type='hidden' name='item_name' value='Executive Tiffin'/>
					<button type='submit' class='button w3l-cart' data-id='cart-1'>₹.120</button>
				</form>
			</div>
		</div>
		<div class="col-md-4 tiffin-category">
			<div class="img-resize">
				<div class="view view-eighth">
					<img src="images/thali.png">
					<div class="mask">
		                <h2>Premium Tiffin</h2>
		                    <p>Satrter Soup,Chinees,2 Sabji,6 Roti,Jira Rice,Dal Fry/Dal Tadka/Rajma,Butter Milk,Papad, DesertIce-Cream,Chocolate Pan</p>
					</div>
				</div>
			</div>
			<div class="cart-button hvr-sweep-to-top">
				<form action='#' method='post'>
					<input type='hidden' name='cmd' value='_cart'>
					<input type='hidden' name='add' value='1'>
					<input type='hidden' name='w3l_item' value='Striped Top '>
					<input type='hidden' name='amount' value='200.00'>
					<input type='hidden' name='item_name' value='Premium Tiffin'/>
					<button type='submit' class='button w3l-cart' data-id='cart-1'>₹.200</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="clearfix"></div>
<div class="portfolio-section">
    <div class="container">
      	<div class="portfolio-title">
        	<h3>Popular Dishes</h3>
        </div>
        <div class="carousel">
            <ul class="slides">
                <li>
                  <div class="portfolio-box">
                    <div class="box-img">
                      <img src="images/pav-baaji.jpg" />
                    </div>
                    <div class="box-text">
                      <h6>Pav Bhaji</h6>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="portfolio-box">
                    <div class="box-img">
                      <img src="images/dhokla.jpg" />
                    </div>
                    <div class="box-text">
                      <h6>Dhokla</h6>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="portfolio-box">
                    <div class="box-img">
                      <img src="images/Khandvi.png" />
                    </div>
                    <div class="box-text">
                      <h6>Khandvi</h6>  
                    </div>
                  </div>
                </li>
                <li>
                   <div class="portfolio-box">
                    <div class="box-img">
                      <img src="images/gota.jpg" />
                    </div>
                    <div class="box-text">
                      <h6>Batata Vada</h6>
                    </div>
                  </div>
                </li>            
                <li>
                   <div class="portfolio-box">
                    <div class="box-img">
                      <img src="images/Daabeli.JPG" />
                    </div>
                    <div class="box-text">
                      <h6>Dabeli</h6>
                    </div>
                  </div>
                </li>  
                <li>
                   <div class="portfolio-box">
                    <div class="box-img">
                      <img src="images/Chana-Bhatura.jpg" />
                    </div>
                    <div class="box-text">
                      <h6>Chhole Bhature</h6>
                    </div>
                  </div>
                </li>         
                <li>
                   <div class="portfolio-box">
                    <div class="box-img">
                      <img src="images/samosa.png" />
                    </div>
                    <div class="box-text">
                      <h6>Samosa</h6>
                    </div>
                  </div>
                </li>
                <li>
                   <div class="portfolio-box">
                    <div class="box-img">
                      <img src="images/vada-pav.jpg" />
                    </div>
                    <div class="box-text">
                      <h6>Vada Pav</h6>
                    </div>
                  </div>
                </li>          
                <li>
                   <div class="portfolio-box">
                    <div class="box-img">
                      <img src="images/pulav.png" />
                    </div>
                    <div class="box-text">
                      <h6>Pulav</h6>
                    </div>
                  </div>
                </li>
                <li>
                   <div class="portfolio-box">
                    <div class="box-img">
                      <img src="images/wrap.jpg" />
                    </div>
                    <div class="box-text">
                      <h6>Wrap Roll</h6>
                    </div>
                  </div>
                </li>
                <li>
                   <div class="portfolio-box">
                    <div class="box-img">
                      <img src="images/alu-paratha.jpg" />
                    </div>
                    <div class="box-text">
                      <h6>Alu Paratha</h6>
                    </div>
                  </div>
                </li>  
                <li>
                   <div class="portfolio-box">
                    <div class="box-img">
                      <img src="images/punjabi-food.jpg" />
                    </div>
                    <div class="box-text">
                      <h6>Punjabi Food</h6>
                    </div>
                  </div>
                </li>
            </ul> 
        </div>
    </div>
</div>
<div class="count">
	<img src="images/canvas.png">
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
		action: '/check_out'
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