@extends('layouts.survey')

@section('title','Survey End')

@section('content')
@php
    $lang_id = Request::segment(3);
    //$questionair = questionair($url_id);
@endphp
<div class="survey-wrapper" style="@if(!empty($questionair))background:{{$questionair->base_color}};background-image:url('{{asset('assets/questionair_image/'.$questionair->last_img)}}');@endif">
    <div class="survey-container">
        <img src="{{asset('assets/img/amazon.svg')}}" class="img-fluid">
    </div>
    <div class="container mt-55">
        
        <h1>@if($questionair->language_id == $lang_id)@php echo strip_tags($questionair->headline);@endphp @else @php echo strip_tags($questionairs[0]->headline); @endphp @endif</h1>

        <p class=" mt-4 mb-5">@if($questionair->language_id == $lang_id)@php echo strip_tags($questionair->last_text);@endphp @else @php echo strip_tags($questionairs[0]->last_text); @endphp @endif for helping us improving our museaum.</p>

        <div class="row">
            <div class="col-md-4">
                <a class="survey-btn" href="{{url('survey-start/'.$questionair->id.'/'.$lang_id)}}" style="text-decoration: none;@if(!empty($questionair))background-color:{{$questionair->button_background}};color:{{$questionair->button_text}}@endif">NEW QUESTIONAIR</a>
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
            window.location.href = "{{url('survey-start/'.$questionair->id.'/'.$lang_id)}}";
        }
    });
</script>

@endpush