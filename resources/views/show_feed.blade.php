<!DOCTYPE html>
<html>
<head>
	<title>show Feedback</title>
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
		<div class="col-md-3"></div>
			<div class="col-md-6">
				<h3 style="text-align: center; color: #FD6239;">Feedback Details</h3>
				<table class="table">
					<thead>
						<tr>
							<th>Feedback id</th>
							<th>User id</th>
							<th>Item id</th>
							<th>Comment</th>
							<th>Date</th>
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
							<th scope="row">{{$post->feed_id}}</th>
							<td>{{$post->uid}}</td>
							<td>{{$post->item_id}}</td>
							<td>{{$post->comment}}</td>
							<td>{{$post->date}}</td>
							<td><a href="{{route('deleteFeed',['feed_id'=>$post->feed_id])}}">Delete</a></td>
							<td><a href="{{route('updateFeed',['feed_id'=>$post->feed_id])}}">Update</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

	 </div>
</div>
</body>
</html>