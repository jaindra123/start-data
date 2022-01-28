<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="page-header"><h1>All Question Types
		<small><i class="ace-icon fa fa-angle-double-right"></i></small>
		<br/><a href="http://localhost/start-data/public/create-question">Add new Question </a>
		</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered tale-hover" id="datatables">
				<thead>
					<tr>
						<th>SL</th>
						<th>Question Type</th>
						<th>View Questions</th>
						<!-- <th>Active</th> -->
					</tr>
				</thead>
				<tbody>
					@foreach($questiontypes as $key=>$qus)
			            <tr>
			            	<td>{{++$key}}</td>
			            	<td> {{$qus->title}} </td>
			            	<td><a href="http://localhost/start-data/survey/{{$qus->id}}">Survey</a></td>
			            	<td>
			               <!--  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this?')">Delete</button> -->
			            	</td>
			            </tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>