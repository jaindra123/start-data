@extends('layouts.survey')

@section('title','Survey End')

@section('content')
@php
    $questionair = questionair();
@endphp
<div class="survey-wrapper" style="@if(!empty($questionair))background:{{$questionair->base_color}};background-image:url('{{asset('assets/questionair_image/'.$questionair->last_img)}}');@endif">
    <div class="survey-container">
        <img src="{{asset('assets/img/amazon.svg')}}" class="img-fluid">
    </div>
    <div class="container mt-55">
        <h1>@php echo strip_tags($questionair->last_text); @endphp</h1>
        <p class=" mt-4 mb-5">@php echo strip_tags($questionair->last_text); @endphp for helping us improving our museaum.</p>
        <div class="row">
            <div class="col-md-4">
                <a class="survey-btn" href="{{url('survey-start')}}" style="text-decoration: none;@if(!empty($questionair))background-color:{{$questionair->button_background}};color:{{$questionair->button_text}}@endif">NEW QUESTIONAIR</a>
            </div>
        </div>
    </div>
    <div class="survey-container">
            <!-- <h6>Datenschutzerklärung / Dataprivacy</h6> -->
    </div>
</div>
@endsection

@push('js-script')

<script type="text/javascript">
    $(document).ready(function () {
        setInterval(displayHello, {{$questionair->last_page_timer*1000}});
        function displayHello() {
            window.location.href = "{{url('survey-start')}}";
        }
    });
</script>

@endpush