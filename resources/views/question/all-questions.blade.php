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
    <h3><a href="http://localhost/start-data/question-type">Questions View</a></h3>
  </div>
  <div class="row">
    <div class="col-xs-12">
		<form action="{{route('survey.save')}}" method="POST" name="exam">
        {{csrf_field()}}
        <div class="col-md-12">
            @foreach($questions as $key=>$ques)
				<hr>
				<h6 style="color:red">Question Type : {{$ques->questiontype->title}}</h6>
				@if ($ques->question_type_id == 2)
					<h5> {{$key+1}}. {{$ques->question}}</h5>
					<ol class="ul-list"  style="list-style-type: lower-alpha;" >
					@foreach($ques->option as $opt)
						<li><input type="radio" name="ans{{$key+1}}" value="{{$opt->option}}" /> {{$opt->option}}   </li>
					@endforeach
					</ol> 
				@endif

				@if ($ques->question_type_id == 1)
					<h5> {{$key+1}}. {{$ques->question}}</h5>
					<ol class="ul-list"  style="list-style-type: lower-alpha;" >
					@foreach($ques->option as $opt)
						<li><input type="checkbox" class="select-answer" name="ans{{$key+1}}" value="{{$opt->option}}" /> {{$opt->option}}
						</li> 
					@endforeach
					</ol> 
				@endif
				
				<div class="col-md-12 mt-1 mb-2" style="@if ($ques->question_type_id == 2) display: none; @endif  ">
					<b>Note => </b>If none of these answer,click here & submit your answer:
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add</button> 
				</div>
				
				 <div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>Add More Answer
						<div class="modal-body">
						  <form action="" id="addEditMoreAns" name="addEditMoreAns" class="form-horizontal" method="POST" >
							  <input type="hidden" name="id" id="id">
							  <div class="form-group">
								<div class="col-sm-12">
								  <input type="text" class="form-control" id="add_more_ans" name="add_more_ans" value="" autocomplete="off">
								  <input type="hidden"  class="form-control" id="question_type_id" name="question_type_id" value="{{$ques->question_type_id}}" />
								</div>
							  </div>  
							  <div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary" id="btn-save" value="AddMoreAns">Add More Ans
								</button>
							  </div>
							</form>
						</div>
					  </div>
					</div>
				  </div>	
				@endforeach
			</div>
		</form>
    </div>
  </div>

	</body>
</html>

<script type="text/javascript">
<!---------------- Multiple choice Checkbox ans select limit --------------------->
var max_limit = 3; 
$(document).ready(function (){
    $(".select-answer:input:checkbox").each(function (index){
        this.checked = (".select-answer:input:checkbox" < max_limit);
    }).change(function (){
        if ($(".select-answer:input:checkbox:checked").length > max_limit){
			alert("You can select maximum of " + max_limit );	
            this.checked = false;
        }
    });
});

<!---------------- Save Add More Answer --------------------->
 $(document).ready(function($){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('body').on('click', '#btn-save', function (event) {
		var id = $("#id").val();
		var add_more_ans = $("#add_more_ans").val();
		var question_type_id = $("#question_type_id").val();
		$('#ajax-add-more-model').modal('hide');
		$.ajax({
			type:"POST",
			url: "{{ url('add-more-answer') }}",
			data: {id:id, question_type_id:question_type_id, add_more_ans:add_more_ans},
			dataType: 'json',
			success: function(response){
			  if (response.success == true) {
				alert(response.message);
				window.location.reload();
			  }else{
				alert("Error")
			  }
			}
		});
    });

});
</script>
