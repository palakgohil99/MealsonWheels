@extends('layout.app')
@section("main-content")

<div class="banner_top" style="position: relative;">
	<div class="menu_banner">
		<img src="images/menubanner.jpg">
	</div>	
</div>
<div class="container">
	<ul class="nav nav-tabs" style="margin-top: 400px;">
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
								<i class=" fa fa-inr">80</i>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3l_item" value="Striped Top ">
									<input type="hidden" name="amount" value="80.00">
									<input type="hidden" name="item_name" value="Standard Tiffin" />
									<button type="submit"data-id="cart-1">ADD+</button>
								</form>
						</div>
		    		</div>
		    		<div class="col-md-4 rcd_item">
		    			<img src="images/tiffin.png">
		    			<div class="veg-icon">
							<span>Executive Tiffin</span>
							<!-- <div class="item-price"> -->	
								<i class=" fa fa-inr">120</i>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3l_item" value="Striped Top ">
									<input type="hidden" name="amount" value="120.00">
									<input type="hidden" name="item_name" value="Executive Tiffin" />
									<button type="submit"data-id="cart-1">ADD+</button>
								</form>
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
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3l_item" value="Striped Top ">
									<input type="hidden" name="amount" value="200.00">
									<input type="hidden" name="item_name" value="Premium Tiffin" />
									<button type="submit"data-id="cart-1">ADD+</button>
								</form>
								
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
									<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3l_item" value="Striped Top ">
									<input type="hidden" name="amount" value="40.00">
									<input type="hidden" name="item_name" value="Sev Tometo" />
									<!-- <button type="submit"data-id="cart-1">ADD+</button> -->
								</form>
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
@endsection