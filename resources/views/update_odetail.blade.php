<!DOCTYPE html>
<html>
<head>
	<title>add order detail</title>
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
			<h3>Order Details</h3>
			<form method="post" action="{{route('saveUpdateOdetail')}}">
				{{csrf_field()}}
				<input type="hidden" name="o_d_id" id="o_d_id" value="{{$post->o_d_id}}">
				<div class="form-group">
					<label for="order_id">order id</label>
					<select name="order_id">
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>
				<div class="form-group">
					<label for="item_id">Item id</label>
					<select name="item_id">
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>
				<div class="form-group">
			    	<label for="quantity">Quantityt:</label>
			    	<input type="text" class="form-control" name="quant" id="quant" value="{{$post->quantity}}">
			  	</div>
			  	<button type="submit" class="btnreg">Submit</button>
			</form>

		</div>
		<div class="col-md-3"></div>
	</div>	
</div>
</body>
</html>