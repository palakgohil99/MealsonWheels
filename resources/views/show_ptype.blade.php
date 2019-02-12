<!DOCTYPE html>
<html>
<head>
	<title>show category</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"></script>
</head>
<body>
	<div class="containner">
		<div class="row">
			<div class="col-md-3"></div>
				<div class="col-md-6">
					<h3 style="text-align: center; color: #FD6239;">Payment type details</h3>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Payment type id</th>
								<th scope="col">Payment type</th>
								<th scope="col">Delete</th>
								<th scope="col">Update</th>
							</tr>
						</thead>
						<tbody>
						@foreach($postdata as $post)
						<tr>
							<th scope="row">{{$post->p_t_id}}</th>
							<td>{{$post->p_type}}</td>
							<td><a href="{{route('deletePtype',['p_t_id'=>$post->p_t_id])}}">Delete</a></td>
							<td><a href="{{route('updatePtype',['p_t_id'=>$post->p_t_id])}}">Update</a></td>
						</tr>
						@endforeach
					</tbody>
					</table>
				</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>