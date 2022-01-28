@extends('layouts.survey')

@section('title','Survey Start')

@section('content')
@php
    //echo '<pre>';
    $questionair = questionair();
    $lang = getAllLanguage();
    //print_r($questionair);
    //die;
@endphp
<div class="survey-wrapper" style="@if(!empty($questionair))background:{{$questionair->base_color}};background-image:url('{{asset('assets/questionair_image/'.$questionair->start_img)}}');@endif">
    <div class="survey-container">
        <img src="{{asset('assets/img/amazon.svg')}}" class="img-fluid">
    </div>
    <div class="container mt-55">
        <h1>{{$questionair->name}}</h1>
        <p class="mb-5"></p>
        <div class="row">
            <div class="col-md-8">
                <p class="mb-3">@php echo strip_tags($questionair->start_text); @endphp</p><br>
            </div>
            <div class="col-md-4">
                <p class="mb-3">Choose your Language</p><br>
            </div>
        </div>
        <!-- <h1>WE WANT TO IMPROVE OUR VISITOR EXPERIENCE</h1>
        <p class="mb-5">Help us to by getting to know you and share how you liked our exhibition</p>
        <p class="mb-3">Choose your Language</p> -->
        <div class="row">
            <div class="col-md-4">
                <a class="survey-btn" href="{{url('question')}}" style="text-decoration: none;@if(!empty($questionair))background-color:{{$questionair->button_background}};color:{{$questionair->button_text}}@endif">START QUESTIONAIR</a>
            </div>
            <div class="col-md-4">
                <a class="survey-btn" href="{{url('question')}}" style="text-decoration: none;@if(!empty($questionair))background-color:{{$questionair->button_background}};color:{{$questionair->button_text}}@endif">UMFRAGE STARTEN</a>
            </div>
            <div class="col-md-4" style="margin-top:-13px;">
                <select class="survey-btn" name="lang" id="lang" style="@if(!empty($questionair))background-color:{{$questionair->button_background}};color:{{$questionair->button_text}}@endif">
                    <option value="">Select Language</option>
                    @php
                    $lang = getAllLanguage();
                    foreach($lang as $lan){
                    @endphp
                    <option value="{{$lan->id}}">{{$lan->language}}</option>
                    @php
                    }
                    @endphp
                </select>
                <!-- <a class="survey-btn" href="{{url('question')}}" >인상 상바ㄴR</a> -->
            </div>
        </div>
    </div>
    <div class="survey-container">
            <!-- <h6>Datenschutzerklärung / Dataprivacy</h6> -->
            <h6></h6>
    </div>
</div>
@endsection