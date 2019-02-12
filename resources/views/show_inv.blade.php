<!DOCTYPE html>
<html>
<head>
	<title>show invoice</title>
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
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<h3 style="text-align: center; color: #FD6239">Invoice</h3>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Invoice Number</th>
								<th scope="col">Order id</th>
								<th scope="col">Order Detail id</th>
								<th scope="col">Amount</th>
								<th scope="col">Payment type id</th>
								<th scope="col">Delete</th>
								<th scope="col">Update</th>
								<div class="inpu-group" style="margin-top: 20px;">
									<input type="text" name="title" class="form-control" placeholder="search" value="{{$searchkey}}">
									<!-- <div class="input-group-btn">
										<button class="btn btn-primary" type="submit">Serach</button>
									</div> -->
								</div>
							</tr>
						</thead>
						<tbody>
							@foreach($postdata as $post)
							<tr>
								<th scope="row">{{$post->inv_no}}</th>
								<td>{{$post->order_id}}</td>
								<td>{{$post->o_d_id}}</td>
								<td>{{$post->amount}}</td>
								<td>{{$post->p_t_id}}</td>
								<td><a href="{{route('deleteInv',['inv_no'=>$post->inv_no])}}">Delete</a></td>
								<td><a href="{{route('updateInv',['inv_no'=>$post->inv_no])}}">Update</a></td>
								
							</tr>
							@endforeach
						</tbody>
					</table>
			</div>
		<div class="col-md-2"></div>
	</div>
</div>
</body>
</html>