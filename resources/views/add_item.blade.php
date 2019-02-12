<!DOCTYPE html>
<html>
<head>
	<title>Add item</title>
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
			<h3>Add Items</h3>
			<form method="post" action="{{route('saveItem')}}">
				{{csrf_field()}}
				<div class="form-group">
			    	<label for="status">Category id:</label>
			    	<select name="cat_id">
			    		<option value="1">1</option>
			    		<option value="2">2</option>
			    	</select>
			  	</div>
			  	<div class="form-group">
			    	<label for="status">Item Name:</label>
			    	<input type="text" class="form-control" id="i_name" name="i_name">
			  	</div>
			  	<div class="form-group">
			    	<label for="status">Item Price:</label>
			    	<input type="text" class="form-control" id="i_price" name="i_price">
			  	</div>
			  	<div class="form-group">
			    	<label for="status">Item Description:</label>
			    	<textarea name="desc" class="form-control" id="desc" rows="4"></textarea>
			  	</div>
			  	<button type="submit" class="btnreg">Submit</button>
			</form>

		</div>
		<div class="col-md-3"></div>
	</div>
</div>
</body>
</html>