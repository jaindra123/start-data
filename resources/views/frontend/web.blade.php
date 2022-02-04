@extends('layouts.login')

@section('title','Survey Questions')

@section('front')
@php
    $lang_id = Request::segment(3);
    //echo $curreent_page_id = Request::segment(4);
    //$questionair = questionair($lang_id);
    //print_r($questionair);
    //echo '<pre>';
    //print_r($questionairs);
    //die;
    //print_r($question);
    //die;
@endphp
<div class="wrapper">
    <div class="survey-start">
        <img src="{{asset('assets/img/amazon-black.svg')}}" class="img-fluid">
        <div class="mt-56">
            <!-- <h1 class="mb-4">Besucher*innenbefragung Frankfurter Kultureinrichtungen 2021</h1> -->
            <h1 class="mb-4">@if($questionair->language_id == $lang_id){{$questionair->headline}}@else{{$questionairs[0]->headline}}@endif</h1>
            <!-- <h6>Personal Questions </h6> -->
            <div class="br-77"></div> 
            <form action="{{url('question/'.$questionair->id.'/'.$lang_id)}}/{{$nxt}}/{{$customer_id}}" method="POST">
                @csrf
                @if(isset($question) && !empty($question))
                    @foreach($question as $key => $ques)
                        @foreach($ques->questionairAndQuestionTypeModel as $key => $type)
                            @if($type->ques_type_id == 1)
                                @include('question_modal.mcq')
                            @endif
                            @if($type->ques_type_id == 2)
                                @include('question_modal.scq')
                            @endif
                            @if($type->ques_type_id == 3)
                                @include('question_modal.openQuestion')
                            @endif
                            @if($type->ques_type_id == 4)
                                <div class="question-box">

                                </div>
                            @endif
                            @if($type->ques_type_id == 5)
                                <div class="question-box">

                                </div>
                            @endif
                            @if($type->ques_type_id == 6)
                                <div class="question-box">

                                </div>
                            @endif
                            @if($type->ques_type_id == 7)
                                <div class="question-box">

                                </div>
                            @endif
                            @if($type->ques_type_id == 8)
                                <div class="question-box">

                                </div>
                            @endif
                            @if($type->ques_type_id == 9)
                                <div class="question-box">

                                </div>
                            @endif
                            @if($type->ques_type_id == 10)
                                {{--@include('question_modal.annotationQuestion')--}}
                            @endif
                        @endforeach
                        @php $prev = $nxt = $ques->page_id; @endphp
                    @endforeach
                @endif
                @if($ques->page_id > $min)
                <div >
                    <button type="button" id="prev" value="{{--$prev}}">Previous</button>
                </div>
                @endif
                @if($ques->page_id < $max)
                <div >
                    <input type="submit" id="submit" name="Next" value="Next">
                </div>
                @endif
                @if($ques->page_id == $max)
                <div>
                    <input type="submit" id="submit" name="Finish" value="Finish">
                </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection('front')

@push('js-script')

<script type="text/javascript">
    var idleTime = 0;
    $(document).ready(function () {
        let idleInterval = setInterval(timerIncrement, {{$questionair->idle_timer*20}});
        $(this).mousemove(resetTimer);
        $(this).mousedown(resetTimer);
        $(this).click(resetTimer);
        $(this).keypress(resetTimer);
        function resetTimer() {
            console.log("Idle time reset to 0");
            idleTime = 0;
        }
        $("#prev").on('click',function(){
            var page = this.value;
            var url = "{{url('question/'.$questionair->id.'/'.$lang_id)}}/"+page;
            window.location = url;
        });
        function disableBack() {
            window.history.forward()
        }
        window.onload = disableBack();
        window.onpageshow = function(e) {
            if (e.persisted)
                disableBack();
        }
    });
    function timerIncrement() {
        idleTime = idleTime + 1;
        console.log('Sec:' +idleTime+' '+{{$questionair->idle_timer}});
        if (idleTime == {{$questionair->idle_timer}}){
            alert('Time Expired');
            window.location.href = "{{url('survey-start/'.$questionair->id.'/'.$lang_id)}}";
        }
    }
</script>

@endpush