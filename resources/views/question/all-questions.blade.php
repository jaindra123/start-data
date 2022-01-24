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
				
				@if ($ques->question_type_id == 2)
					<h5> {{$key+1}}. {{$ques->question}}</h5>
					<ol class="ul-list"  style="list-style-type: lower-alpha;" >
						@foreach($ques->optionsdata as $opt)
							<li><input type="radio" name="ans{{$key+1}}" value="{{$opt->option}}" /> {{$opt->option}}   </li>
						@endforeach
					</ol>
				@endif
				
				@if ($ques->question_type_id == 1)
					<h5> {{$key+1}}. {{$ques->question}}</h5>
					<ol class="ul-list"  style="list-style-type: lower-alpha;" >
						@foreach($ques->optionsdata as $opt)
						<!--<li><input type="checkbox" name="ans{{$key+1}}" value="{{$opt->option}}" onclick='chkmultichoice(0)'/> {{$opt->option}} </li> -->
							<li><input type="checkbox" name="ans" value="{{$opt->option}}" onclick='chkmultichoice(0)'/> {{$opt->option}} </li>
						@endforeach
					 </ol>
				@endif
            @endforeach
        </div>
      </form>
    </div>
  </div>

</body>
</html>


<script type="text/javascript">
  function chkmultichoice(j) {
    var total=0;
    for(var i=0; i < document.exam.ans.length; i++){
      if(document.exam.ans[i].checked) {
        total =total +1;
      }
      if(total > 3){
        alert("Please Select only three") 
        document.exam.ans[j].checked = false ;
        return false;
      }
    }
  } 
</script>