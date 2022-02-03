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
            <h6>Personal Questions</h6>
            <div class="br-77"></div> 
            <form action="{{url('question/'.$questionair->id.'/'.$lang_id)}}/{{$nxt}}" method="POST">
                @csrf
                <!-- <input type="text" id="questionair" value="{{$questionair->id}}" name="questionair">
                <input type="text" id="lang" value="{{$lang_id}}" name="lang" >
                <input type="text" id="page" value="{{$current}}" name="page" > -->
                @if(isset($question) && !empty($question))
                    @foreach($question as $key => $ques)
                        @if($ques->question_type_id == 1)
                            @include('question_modal.mcq')
                        @endif
                        @if($ques->question_type_id == 2)
                            @include('question_modal.scq')
                        @endif
                        @if($ques->question_type_id == 3)
                            @include('question_modal.openQuestion')
                        @endif
                        @if($ques->question_type_id == 4)
                            <div class="question-box">

                            </div>
                        @endif
                        @if($ques->question_type_id == 5)
                            <div class="question-box">

                            </div>
                        @endif
                        @if($ques->question_type_id == 6)
                            <div class="question-box">

                            </div>
                        @endif
                        @if($ques->question_type_id == 7)
                            <div class="question-box">

                            </div>
                        @endif
                        @if($ques->question_type_id == 8)
                            <div class="question-box">

                            </div>
                        @endif
                        @if($ques->question_type_id == 9)
                            <div class="question-box">

                            </div>
                        @endif
                        @if($ques->question_type_id == 10)
                            <div class="question-box">

                            </div>
                        @endif
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
    $(document).ready(function () {
        // var timer = 5*1000;
        // $(this).mousemove(function(e){
            // timer = 5*1000;
        //     alert('m');
        // });
        // $(this).keypress(function(e){
            // timer = 5*1000;
        //     alert('k');
        // });
        // setInterval(displayHello, timer);
        // function displayHello() {
        //     alert('Time Expired');
        //     window.location.href = "{{url('survey-start/'.$questionair->id.'/'.$lang_id)}}";
        // }
        $("#prev").on('click',function(){
            var page = this.value;
            // alert(page);
            var url = "{{url('question/'.$questionair->id.'/'.$lang_id)}}/"+page;
            window.location = url;
        });/*
        $("#submit").on('click',function(){$questionair->idle_timer
            if(!$('input[type="checkbox"]').is(":checked")){
                alert('please select option');
                return false;
            }
        });*/
    });
</script>

@endpush