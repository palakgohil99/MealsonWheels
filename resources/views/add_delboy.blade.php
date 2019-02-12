<!DOCTYPE html>
<html>
<head>
	<title>Add deliveryboy</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link href="https:tps://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="ht//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"></script>
<body>
<div class="backbg container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 register">
			<h3>Deliveryboy</h3>
			<form method="post" action="{{route('saveDB')}}">
				{{csrf_field()}}
				<div class="form-group">
					<label for="aid">Admin ID</label>
					<select name="aid">
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>
				<div class="form-group">
			    	<label for="email">Email:</label>
			    	<input type="text" class="form-control" id="email" name="email">
			  	</div>
			  	<div class="form-group">
			    	<label for="password">Password:</label>
			    	<input type="Password" class="form-control" id="pwd" name="pwd">
			  	</div>
			  	<div class="form-group">
			    	<label for="name">Name:</label>
			    	<input type="text" class="form-control" id="name" name="name">
			  	</div>
			  	<div class="form-group">
			    	<label for="contact">Contact:</label>
			    	<input type="text" class="form-control" id="contact" name="contact">
			  	</div>
			  	<button type="submit" class="btnreg">Submit</button>
			</form>

		</div>
		<div class="col-md-3"></div>
	</div>	
</div>
</body>
</html>