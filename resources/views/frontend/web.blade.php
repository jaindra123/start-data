@extends('layouts.login')

@section('title','Questions')

@section('front')
<div class="wrapper">
    <div class="survey-start">
        <img src="{{asset('assets/img/amazon-black.svg')}}" class="img-fluid">
        <div class="mt-56">
            <h1 class="mb-4">Besucher*innenbefragung Frankfurter Kultureinrichtungen 2021</h1>
            <h6>Personal Questions</h6>
            <div class="br-77"></div>
            <div class="question-box">
                <h5>23. Gender</h5>
                <div class="radio">
                    <input id="radio-1" name="radio" type="radio">
                    <label for="radio-1" class="radio-label">Female</label>
                </div>
                <div class="radio">
                    <input id="radio-2" name="radio" type="radio">
                    <label for="radio-2" class="radio-label">Male</label>
                </div>
                <div class="radio">
                    <input id="radio-3" name="radio" type="radio">
                    <label for="radio-3" class="radio-label">Divers</label>
                </div>
            </div>
            <div class="question-box">
                <h5>23. Age</h5>
                <div class="radio">
                    <input id="radio-31" name="radio" type="radio">
                    <label for="radio-31" class="radio-label">Under 18</label>
                </div>
                <div class="radio">
                    <input id="radio-4" name="radio" type="radio">
                    <label for="radio-4" class="radio-label">18-25</label>
                </div>
                <div class="radio">
                    <input id="radio-5" name="radio" type="radio">
                    <label for="radio-5" class="radio-label">26-35</label>
                </div>
                <div class="radio">
                    <input id="radio-6" name="radio" type="radio">
                    <label for="radio-6" class="radio-label">36-45</label>
                </div>
                <div class="radio">
                    <input id="radio-7" name="radio" type="radio">
                    <label for="radio-7" class="radio-label">46-55</label>
                </div>
                <div class="radio">
                    <input id="radio-8" name="radio" type="radio">
                    <label for="radio-8" class="radio-label">Above 55</label>
                </div>
            </div>
            <div class="question-box">
                <h5>23. Age</h5>
                <div class="radio">
                    <input id="radio-31" name="radio" type="radio">
                    <label for="radio-31" class="radio-label">Under 18</label>
                </div>
                <div class="radio">
                    <input id="radio-4" name="radio" type="radio">
                    <label for="radio-4" class="radio-label">18-25</label>
                </div>
                <div class="radio">
                    <input id="radio-5" name="radio" type="radio">
                    <label for="radio-5" class="radio-label">26-35</label>
                </div>
                <div class="radio">
                    <input id="radio-6" name="radio" type="radio">
                    <label for="radio-6" class="radio-label">36-45</label>
                </div>
                <div class="radio">
                    <input id="radio-7" name="radio" type="radio">
                    <label for="radio-7" class="radio-label">46-55</label>
                </div>
                <div class="radio">
                    <input id="radio-8" name="radio" type="radio">
                    <label for="radio-8" class="radio-label">Above 55</label>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection('front')