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
      <h3>Question Type => {{$data->title}}</h3> <hr>
      <form action="{{route('survey.save')}}" method="POST" name="exam">
        {{csrf_field()}}
        <div class="col-md-12">
            @foreach($questions as $key=>$ques)
              <input type="hidden" name="questions_id{{$key+1}}" value="{{$ques->id}}">
              <input type="hidden" name="ans{{$key+1}}" value="0">
              <h5> {{$key+1}}. {{$ques->question}}</h5>
              <ol class="ul-list"  style="list-style-type: lower-alpha;" >
                @foreach($ques->optionsdata as $opt)
                <li><input type="radio" name="ans{{$key+1}}" value="{{$opt->option}}" /> {{$opt->option}}   </li>
                @endforeach
              </ol>
            @endforeach
            <input type="hidden" name="index" value="<?php echo $key+1 ?>">
            <input type="hidden" name="question_type_id" value="{{$data->id}}">
        </div>
       <!--  <input type="submit" class="btn btn-sm" value="submit"  > -->
      </form>
    </div>
  </div>


<!--   <script type="text/javascript">
  	$(document).on('click','.quiz-status',function(){
      var id=$(this).attr('data_id');
      var url=("{!!url('/')!!}");
        $.get(url+'/quiz_status/'+id,function(fb){
       	alert('Staus Successfully changed');
       });
  	});
  </script> -->
</body>
</html>