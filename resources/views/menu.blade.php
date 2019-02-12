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
</head>
<body>
<div class="banner_top" style="position: relative;">
	<div class="menu_banner">
		<img src="images/menubanner.jpg">
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
							<li><a href="/menu.">Menu</a></li>
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
        						<button type="button" class="btn-color btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</button>
        					</li>
							</ul>
						</div>
					</div>
				</nav>
				<div class="bann_menu_service"></div>
			</div> 
		</div>
	</div>
</div>
<div class="container">
	<ul class="nav nav-tabs">
	  <li class="active"><a data-toggle="tab" href="#rcmndbox">Recommended</a></li>
	  <li><a data-toggle="tab" href="#combobox">Combos</a></li>
	  <li><a data-toggle="tab" href="#gujaratibox">Gujarati</a></li>
	  <li><a data-toggle="tab" href="#punjabibox">Punjabi</a></li>
	  <li><a data-toggle="tab" href="#sindianbox">South Indian</a></li> 
	</ul>
	<div class="tab-content">
		  <!--Recommended Start-->
		<div id="rcmndbox" class="tab-pane fade in active">
		    <h3>Recommended</h3>
		    <div class="container">
		    	<div class="row">
		    		<div class="col-md-4 rcd_item">
		    			<img src="images/Gujarati.png">
		    			<div class="veg-icon">
							<span>Standard Tiffin</span>
							<!-- <div class="item-price"> -->	
								<i class=" fa fa-inr">80</i>
								<button type="submit">ADD+</button>
							<!-- </div> -->
							<!-- <div class="menu_add"> -->
								
							<!-- </div> -->
						</div>
		    		</div>
		    		<div class="col-md-4 rcd_item">
		    			<img src="images/tiffin.png">
		    			<div class="veg-icon">
							<span>Executive Tiffin</span>
							<!-- <div class="item-price"> -->	
								<i class=" fa fa-inr">120</i>
								<button type="submit">ADD+</button>
							<!-- </div> -->
							<!-- <div class="menu_add"> -->
								
							<!-- </div> -->
						</div>
		    		</div>
		    		<div class="col-md-4 rcd_item">
		    			<img src="images/thali.png">
		    			<div class="veg-icon">
							<span>Premium Tiffin</span>
							<!-- <div class="item-price"> -->	
								<i class=" fa fa-inr">200</i>
								<button type="submit">ADD+</button>
							<!-- </div> -->
							<!-- <div class="menu_add"> -->
								
							<!-- </div> -->
						</div>
		    		</div>
		    	</div>
		    </div>
		 </div>
		 <!-- gujarati start -->
		 <div class="tab-pane fad" id="gujaratibox">
		 	<h3>Gujarati</h3>
		 	<div class="container">
		 		<div class="row">
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Sev Tomato</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>49
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Aloo Mutter</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>49
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Mix Vegitable</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>59
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Masala Bhindi</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>59
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Plane Bhindi</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>50
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Baingan Bharta</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>59
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Dum Aloo</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>59
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Aloo Methi</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>50
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Puri Bhaji</span><br>
								<p style="font-size: 16px;">4 Puri, 1 Plate bhaji</p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>80
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Bread Totha</span>
								<p style="font-size: 16px;">4 Bread, 1 Plate Totha</p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>69
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp; Chhole Kulcha</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>69
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Jira Rice</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>40
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Plan Rice</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>30
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Dal Fry/Tadaka</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>30
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Plain Roti</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>12
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Butter Roti</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>15
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Butter Milk</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>12
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Rosted Papad</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>10
								</div>
							</div>
		 				</div>
		 			</div>
		 			<div class="col-md-6">
		 				<div class="listmenu-cover">
		 					<div class="combo_item">
		 						<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Masala Papad</span>
								<p></p>
		 					</div>
		 					<div class="addcombo-icon">
								<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
								<div class="combo-price">	
									<i class="fa fa-inr"></i>20
								</div>
							</div>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 </div>
		 <!-- Punjabi starts -->
		 	<div class="tab-pane fad" id="punjabibox">
		 		<h3>Punjabi</h3>
		 		<div class="container">
		 			<div class="row">
		 				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Paneer Tikka Masala</span>
									<p style="font-size: 16px;">Medium/Spicy</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>69
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Palak Paneer</span>
									<p style="font-size: 16px;">Medium/Spicy</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>69
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Cheese Butter Masala</span>
									<p style="font-size: 16px;">Medium/Spicy</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>89
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Veg. Makkhanwala</span>
									<p style="font-size: 16px;">Medium/Spicy</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>79
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Paneer Handi</span>
									<p style="font-size: 16px;">Medium/Spicy</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>69
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Koya Kaju</span>
									<p style="font-size: 16px;">Slight Sweet</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>79
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Veg. Jaipuri</span>
									<p style="font-size: 16px;">Medium/Spicy</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>70
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Paneer Kadai</span>
									<p style="font-size: 16px;">Medium/Spicy</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>69
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Paneer Butter Masala</span>
									<p style="font-size: 16px;">Medium/Spicy</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>89
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Paneer Chilly</span>
									<p style="font-size: 16px;">Spicy</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>79
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Jira Rice</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>40
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Plain Rice</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>30
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Dal Fry/Dal Tadaka</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>40
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Plain Roti</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>12
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Butter Roti</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>15
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Butter Milk</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>12
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Rosted Papad</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>10
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Masala Papad</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>10
										</div>
								</div>
		 					</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- South Indian starts	 -->
		  	<div class="tab-pane fad" id="sindianbox">
		 		<h3>South Indian</h3>
		 		<div class="container">
		 			<div class="row">
		 				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Paper Dosa</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>30
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Masala Dosa</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>50
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Rava Dosa</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>59
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Cheese Massala Dosa</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>79
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Paneer schezwan Dosa</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>70
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Maysore Masala Dosa</span>
									<p style="font-size: 16px;"></p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>69
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Idali Sambhar</span>
									<p style="font-size: 16px;">3 Idali, 1 Sabhar, 1 Coconut Chatni</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>30
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Mendu Vada</span>
									<p style="font-size: 16px;">3 Vada, 1 Sambhar, 1 Coconut Chatni</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>40
										</div>
								</div>
		 					</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- Combo Starts -->
		  	<div class="tab-pane fad" id="combobox">
		 		<h3>Combos</h3>
		 		<div class="container">
		 			<div class="row">
		 				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Pav Bhaji Combo</span>
									<p style="font-size: 16px;">1 Bhaji, 4 Pav, 1Pulav</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>239
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Rajama Combo</span>
									<p style="font-size: 16px;">1 Rajama Rice, 3 Paratha, 2 Buttermilk</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>220
										</div>
								</div>
		 					</div>
		  				</div>
		  				<div class="col-md-6">
		 					<div class="listmenu-cover">
		 						<div class="combo_item">
		 							<span class="veg-indian-vegetarian" style=" font-weight: bold;">&nbsp;Chhole Combo</span>
									<p style="font-size: 16px;">1 Plate Chhole, 2 Puri, 2 Buttermilk</p>
		 						</div>
		 						<div class="addcombo-icon">
									<button style="background-color: transparent;border: 1px solid;border-color:#23940a;font-size:10px; margin-left:5px;font-weight:bold;height: 30px; ">ADD+</button>
										<div class="combo-price">	
										<i class="fa fa-inr"></i>199
										</div>
								</div>
		 					</div>
		  				</div>
		  			</div>
		  		</div>
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
					<li><a href="menu.blade.php">Variety of Foods</a></li>
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