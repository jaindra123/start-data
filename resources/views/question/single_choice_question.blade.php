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

<div class="page-header">
	<h3>Add Question / <small>
	<i class="ace-icon fa fa-angle-double-right"></i>
	</small>&nbsp;<a href="http://localhost/start-data/question-type">Question Type</a>
	</h3>
</div>
<div class="row">
	<div class="col-md-12">
 		<div class="alert alert-danger" style="display: none;"> </div>
		<div class="alert alert-success" style="display: none;"><p>Question added Successfully! </p></div>
			<form action="{{route('question.save')}}" method="POST"  id="addform">
			{{csrf_field()}}
				<div class="form-group">
					<div class="col-sm-10">
						<select class="form-control" id ="question_type_id" name="question_type_id" required>
							<option value="">-- Select Question Type --</option>
							@if(isset($questiontypes) && $questiontypes != null)
								@foreach ($questiontypes as $questiontype)
									 <option value="{{ $questiontype->id }}">  {{ $questiontype->title}}  </option> 

									<!-- <option value="{{ $questiontype->id }}" {{2 == $questiontype->id  ? 'selected' : '' }}>  {{ $questiontype->title}}  </option> -->

								@endforeach
							@endif
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Question </label>
					<div class="col-sm-10">
						<input type="text" placeholder="question" class="form-control" name="question" required />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="col-sm-9">
							Option 1:<input type="text" placeholder="Option" class="form-control" name="option[]"  required/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9">
							Option 2:<input type="text" placeholder="Option" class="form-control" name="option[]" required />
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<div class="col-sm-9">
							Option 3:<input type="text" placeholder="Option" class="form-control" name="option[]" required />
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9">
							Option 4:<input type="text"  placeholder="Option" class="form-control" name="option[]" required/>
						</div>
					</div>
				</div>
	
				<div class="form-group">
					<div class="col-sm-10">
						Right Answer<input type="text" placeholder="Right Answer" class="form-control" name="answer" />
					</div>
				</div>

				<div class="space-4"></div>
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-info" type="submit">
							<i class="ace-icon fa fa-check bigger-110"></i>Submit</button>
							&nbsp; &nbsp; &nbsp;
						<button class="btn" type="reset">
							<i class="ace-icon fa fa-undo bigger-110"></i>Reset
						</button>
					</div>
				</div>
				<div class="hr hr-24"></div>
			</form>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#addform').on('submit',function(e){
			e.preventDefault();
			$.ajax({
				type:"POST",
				url: "{{ url('save-question') }}",
				data:$('#addform').serialize(),
				success:function(response){
					console.log(response)
					$('.alert-success').show()
				},
				/*error:function(response){
					console.log(response)
					if(response.status==422){ 
 						$.each(response.responseJSON.errors, function (key, item) 
          				{
            			$(".alert-danger").append("<li>"+item+"</li>")
          				});
						$('.alert-danger').show()
		 			}
		 			else {
						$('.alert-danger').text(response.responseJSON.error)
						$('.alert-danger').show()
					}
				}*/
			});
		});
	});

	/*$("select").change(function(event) {
	    $(this).val($(this).find("option").first().val());
	});*/


</script>
</body>
</html>


