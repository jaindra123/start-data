<div class="question-box">
    <h5>{{$key+1}}. {{$ques->question}}</h5>
    <!-- <input type="hidden" name="ques_{{$ques->id}}" value="{{$ques->id}}" > -->
    @foreach($ques->option as $opt)
        <div class="checkbox">
            <input type="checkbox" class="select-answer" id="ans_{{$ques->id}}" name="{{$ques->id}}[]" value="{{$opt->option}}"/> 
            <label for="ans_{{$ques->id}}" class="radio-label">{{$opt->option}}</label>
        </div>
    @endforeach
</div>