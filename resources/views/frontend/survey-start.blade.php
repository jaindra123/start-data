@extends('layouts.survey')

@section('title','Survey Start')

@section('content')
<div class="survey-wrapper">
    <div class="survey-container">
        <img src="{{asset('assets/img/amazon.svg')}}" class="img-fluid">
    </div>
    <div class="container mt-55">
        <h1>WE WANT TO IMPROVE OUR VISITOR EXPERIENCE</h1>
        <p class="mb-5">Help us to by getting to know you and share how you liked our exhibition</p>
        <p class="mb-3">Choose your Language</p>
        <div class="row">
            <div class="col-md-4">
                <button class="survey-btn">START QUESTIONAIR</button>
            </div>
            <div class="col-md-4">
                <button class="survey-btn">UMFRAGE STARTEN</button>
            </div>
            <div class="col-md-4">
                <button class="survey-btn">인상 상바ㄴR</button>
            </div>
        </div>
    </div>
    <div class="survey-container">
            <h6>Datenschutzerklärung / Dataprivacy</h6>
    </div>
</div>
@endsection