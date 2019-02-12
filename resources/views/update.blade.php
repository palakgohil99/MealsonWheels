<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>MealsonWheels</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link href="https:tps://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="ht//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"></script>

<style type="text/css">
.backbg
{

	background: url('images/regback.jpg');
	height: 770px;
	background-size:cover;
}
</style>
</head>
<body>
<div class="backbg container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 register">
			<h3>Registration</h3>
			<form method="post" action="{{route('saveUpdatePost')}}">
				<!-- add csrf field in every form -->
				{{csrf_field()}}
				<input type="hidden" name="uid" value="{{$post->uid}}"/>
				<div class="form-group">
			    	<label for="name">Name:</label>
			    	<input type="text" class="form-control" id="name" name="name" value="{{$post->name}}"/>
			  	</div>
  				<div class="form-group">
			    	<label for="email">Email address:</label>
			    	<input type="text" class="form-control" id="email" name="email" value="{{$post->email}}"/>
			  	</div>
			  	<div class="form-group">
			    	<label for="pwd">Password:</label>
			    	<input type="password" class="form-control" id="pwd" name="pwd" value="{{$post->password}}"/>
			  	</div>
			  	<div class="form-group">
			    	<label for="contact">Contact:</label>
			    	<input type="number" class="form-control" id="contact" name="contact" value="{{$post->contact}}"/>
			  	</div>
			  	<div class="form-group">
			  		<label>Gender:</label>&nbsp;
			    	<label for="Gender"><input type="radio" id="gender" value="{{$post->gender}}" name="gender_m"/> Male</label>&nbsp;
			    	<label for="Gender"><input type="radio" id="gender" value="{{$post->gender}}" name="gender_m"/> Female</label>
			  	</div>
			  	<div class="form-group">
			    	<label for="add">Building/House Name:</label>
			    	<input type="text" class="form-control" id="add1" name="add1" value="{{$post->address}}"/>
			  	</div>
			  	<div class="form-group">
			    	<label for="add">Landmark:</label>
			    	<input type="text" class="form-control" id="add2" name="add2" value="{{$post->address2}}"/>
			  	</div>
			  	<div class="form-group">
			    	<label for="add">Pincode:</label>
			    	<input type="text" class="form-control" id="p_code" name="p_code" value="{{$post->pincode}}"/>
			  	</div>
			  	<button type="submit" class="btnreg">Update</button>
			</form>

		</div>		
		<div class="col-md-3">
			
		</div>
	</div>
</div>
</body>
</html>