<!DOCTYPE html>
<html>
<head>
	<title>Show Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
			<div class="col-md-6">
				<h3 style="text-align: center; color: #FD6239;">Admin Details</h3>
					<table class="table">
						<thead>
							<tr>
								<th>Admin id</th>
								<th>Pasword</th>
								<th>Delete</th>
								<th>Update</th>
								<form class="nabvar-form" role="search" method="GET">
								<div class="inpu-group" style="margin-top: 20px;">
									<input type="text" name="title" class="form-control" placeholder="search" value="{{$searchkey}}">
									<!-- <div class="input-group-btn">
										<button class="btn btn-primary" type="submit">Serach</button>
									</div> -->
								</div>
							</form>
							</tr>
						</thead>
						<tbody>
							@foreach($postdata as $post)
							<tr>
								<th scope="row">{{$post->a_id}}</th>
								<td>{{$post->password}}</td>
								<td><a href="{{route('deleteAdd',['a_id'=>$post->a_id])}}">Delete</a></td>
								<td><a href="{{route('updateAdd',['a_id'=>$post->a_id])}}">Update</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
			</div>
	</div>
</div>
</body>
</html>