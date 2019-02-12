@extends('layout.app')
@section("main-content")
<div data-vide-bg="video/tr" style="position: relative;">
	<div style="position: absolute; z-index: -1; top: -296px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; background-image: none;">
		<video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; width: auto; height: 700px;">
			<source src="media\food.mp4" type="video/mp4">
			<source src="media\food.mp4" type="video/webm">
			<source src="media\food.mp4" type="video/ogg">
		</video>
	</div>
	<div class="banner_info">
		<h2>Welcome to Meals on Wheels</h2>
		<h3>A Great Destination for Food Lovers</h3>
		<p>
			We are Providing the tiffin service at your door step, Let's Join us to have healthy food, We also provide the Catering Services across ahmedabad.
			We have a expert chef team who cooks healthy foods for you.
		</p>
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
				<form action="{{route('saveCheck')}}" method='post'>
          {{csrf_field()}}
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
				<form action="{{route('saveCheck')}}" method='post'>
          {{csrf_field()}}
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
				<form action="{{route('saveCheck')}}" method='post'>
          {{csrf_field()}}
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

<!-- <div class="clearfix"></div> -->
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
@endsection