<!DOCTYPE html>
<html>
<head>
	<title>Add order</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link href="https:tps://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="ht//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"></script>
</head>
<body>
<div class="backbg container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 register">
			<h3>Order</h3>
			<form method="post" action="{{route('saveOrder')}}">
				{{csrf_field()}}
				<div class="form-group">
					<label for="uid">User id</label>
					<select name="uid">
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>
				<div class="form-group">
					<label for="del_boy_id">Deliveryboy id</label>
					<select name="del_boy_id">
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>
				<div class="form-group">
			    	<label for="status">Status:</label>
			    	<input type="text" class="form-control" name="status" id="status">
			  	<div class="form-group">
			    	<label for="date">Date:</label>
			    	<input type="date" class="form-control" id="date" name="date">
			    </div>
			    <div class="form-group">
			    	<label for="address">Addredd:</label>
			    	<input type="text" class="form-control" id="add" name="add">
			    </div>
			  	<button type="submit" class="btnreg">Submit</button>
			</form>

		</div>
		<div class="col-md-3"></div>
	</div>	
</div>
</body>
</html>