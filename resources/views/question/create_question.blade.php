@extends('layouts.main')

@section('title','Access User List')

@section('content')

    <div class="content quereszzz">
        <div class="row">
            <div class="col-md-12">
                <div class="card table-new">
                    <div class="card-body">
                    	<div class="alert alert-success" style="display: none;"><p>Question added Successfully! </p></div>
                        <table class="table">
                     		<form action="{{route('question.save')}}" method="POST"  id="addform">
							{{csrf_field()}}
								<div class="form-group">
									<div class="col-sm-10">
										<select class="form-control" id ="question_type_id" name="question_type_id" required>
											<option value="">-- Select Question Type --</option>
											@if(isset($questiontypes) && $questiontypes != null)
												@foreach ($questiontypes as $questiontype)
													<option value="{{ $questiontype->id }}">  {{ $questiontype->title}}  </option> 
												@endforeach
											@endif
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-10">
										Question Name:<input type="text" placeholder="Enter Question Name" class="form-control" name="question" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="col-sm-9">
											Option 1:<input type="text" placeholder="Option" class="form-control" 
											name="option[]"  required/>
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

								<div class="space-4"></div>
								<div class="clearfix form-actions">
									<div class="col-md-offset-3 col-md-9">
										<button class="btn btn-info" type="submit">
											<i class="ace-icon fa fa-check bigger-110"></i>Add Question</button>
											<!-- &nbsp; &nbsp; &nbsp;
										<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>Reset
										</button> -->
									</div>
								</div>
								<div class="hr hr-24"></div>
							</form>
                        </table> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
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

</script>