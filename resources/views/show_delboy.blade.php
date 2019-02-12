<!DOCTYPE html>
<html>
<head>
	<title>Deliveryboy details</title>
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
				<h3 style="text-align: center; color: #FD6239">Deliveryboy details</h3>
					<table class="table">
						<thead>
							<tr>
								<th>Deliveryboy Id</th>
								<th>Admin id</th>
								<th>Email</th>
								<th>Password</th>
								<th>Name</th>
								<th>Contact</th>
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
								<th scope="row">{{$post->del_boy_id}}</th>
								<td>{{$post->a_id}}</td>
								<td>{{$post->email}}</td>
								<td>{{$post->password}}</td>
								<td>{{$post->name}}</td>
								<td>{{$post->contact}}</td>
								<td><a href="{{route('deleteDb',['del_boy_id'=>$post->del_boy_id])}}">Delete</a></td>
								<td><a href="{{route('updateDb',['del_boy_id'=>$post->del_boy_id])}}">Update</a></td>
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