<!DOCTYPE html>
<html>
<head>
	<title>show order detail</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link href="https:tps://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="ht//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"></script>
</head>
<body>
<div class="contaner">
	<div class="row">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<h3 style="text-align: center; color: #FD6239;">Order Details</h3>
					<table class="table">
						<thead>
							<tr>
								<th>Order Detail id</th>
								<th>Order id</th>
								<th>Item Id</th>
								<th>Quantity</th>
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
								<th scope="row">{{$post->o_d_id}}</th>
								<td>{{$post->order_id}}</td>
								<td>{{$post->item_id}}</td>
								<td>{{$post->quantity}}</td>
								<td><a href="{{route('deleteOdetail',['o_d_id'=>$post->o_d_id])}}">Delete</a></td>
								<td><a href="{{route('update_Odetail',['o_d_id'=>$post->o_d_id])}}">Update</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
			</div>
	</div>
</div>
</body>
</html>