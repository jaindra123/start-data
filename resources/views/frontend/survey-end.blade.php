@extends('layouts.survey')

@section('title','Survey End')

@section('content')
<div class="survey-wrapper">
    <div class="survey-container">
        <img src="{{asset('assets/img/amazon.svg')}}" class="img-fluid">
    </div>
    <div class="container mt-55">
        <h1>Thank you!</h1>
        <p class=" mt-4 mb-5">Thank you for helping us improving our museaum.</p>
        <div class="row">
            <div class="col-md-4">
                <button class="survey-btn">NEW QUESTIONAIR</button>
            </div>
        </div>
    </div>
    <div class="survey-container">
            <h6>Datenschutzerklärung / Dataprivacy</h6>
    </div>
</div>
@endsection