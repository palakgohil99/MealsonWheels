<!DOCTYPE html>
<html>
<head>
	<title>MealsonWheels</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link href="https:tps://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="ht//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table" style="margin-top: 25px;">
				<thead>
					<tr>
						<th scope="col">User id</th>
						<th scope="col">User Name</th>
						<th scope="col">Emial</th>
						<th scope="col">Password</th>
						<th scope="col">Contact</th>
						<th scope="col">House Number/Building Name</th>
						<th scope="col">Landmark</th>
						<th scope="col">Gender</th>
						<th scope="col">Pincode</th>
						<th scope="col">Delete</th>
						<th scope="col">Update</th>
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
						<th scope="row">{{$post->uid}}</th>
						<td>{{$post->name}}</td>
						<td>{{$post->email}}</td>
						<td>{{$post->password}}</td>
						<td>{{$post->contact}}</td>
						<td>{{$post->address}}</td>
						<td>{{$post->address2}}</td>
						<td>{{$post->gender}}</td>
						<td>{{$post->pincode}}</td>
						<td><a href="{{route('deletePost',['uid'=>$post->uid])}}">Delete</a></td>
						<td><a href="{{route('updatePost',['uid'=>$post->uid])}}">Update</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div> 
</div>
</body>
</html>