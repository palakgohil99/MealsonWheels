<!DOCTYPE html>
<html>
<head>
	<title>Add catrgoey</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"></script>
</head>
<body>
<div class="backbg container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 register">
			<h3>Add category</h3>
			<form method="post" action="{{route('saveUpdateCat')}}">
				{{csrf_field()}}
				<input type="hidden" name="cat_id" value="{{$post->cat_id}}">
				<div class="form-group">
			    	<label for="status">Category name:</label>
			    	<input type="text" class="form-control" id="c_name" name="c_name" value="{{$post->cat_name}}">
			  	</div>
			  	<button type="submit" class="btnreg">Update</button>
			</form>

		</div>
		<div class="col-md-3"></div>
	</div>
</div>
</body>
</html>