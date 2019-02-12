<!DOCTYPE html>
<html>
<head>
	<title>Add Feedback</title>
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
			<h3>Feedback</h3>
			<form method="post" action="{{route('saveFeed')}}">
				{{csrf_field()}}
				<div class="form-group">
					<label for="uid">User id</label>
					<select name="uid">
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
			    	<label for="comment">Comment:</label>
			    	<textarea name="cmt" class="form-control" id="cmt" rows="4"></textarea>
			  	</div>
			  	<div class="form-group">
			    	<label for="date">Date:</label>
			    	<input type="date" class="form-control" id="date" name="date">
			  	<button type="submit" class="btnreg">Submit</button>
			</form>

		</div>
		<div class="col-md-3"></div>
	</div>	
</div>
</body>
</html>