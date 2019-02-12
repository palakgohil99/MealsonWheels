<!DOCTYPE html>
<html>
<head>
	<title>Add invoice</title>
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
			<h3>Invoice</h3>
			<form method="post" action="{{route('saveInv')}}">
				{{csrf_field()}}
				<div class="form-group">
					<label for="o_id">Order id</label>
					<select name="order_id">
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>
				<div class="form-group">
					<label for="o_d_id">Order detail id</label>
					<select name="o_d_id">
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>
				<div class="form-group">
					<label for="p_t_id">Payment Type id</label>
					<select name="p_t_id">
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>
				
			  	<div class="form-group">
			    	<label for="Amount">Amount:</label>
			    	<input type="text" class="form-control" id="amt" name="amt">
			  	</div>
			  	<button type="submit" class="btnreg">Submit</button>
			</form>

		</div>
		<div class="col-md-3"></div>
	</div>	
</div>
</body>
</html>