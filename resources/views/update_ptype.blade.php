<!DOCTYPE html>
<html>
<head>
	<title>Update payment type</title>
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
			<h3>Payment type</h3>
			<form method="post" action="{{route('saveUpdatePtype')}}">
				{{csrf_field()}}
				<input type="hidden" name="p_t_id" value="{{$post->p_t_id}}">
				<div class="form-group">
			    	<label for="status">Payment Type:</label>
			    	<input type="text" class="form-control" id="p_type" name="p_type" value="{{$post->p_type}}">
			  	</div>
			  	<button type="submit" class="btnreg">Submit</button>
			</form>

		</div>
		<div class="col-md-3"></div>
	</div>
</div>
</body>
</html>