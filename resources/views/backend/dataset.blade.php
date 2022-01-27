
@extends('layouts.main')

@section('title','Select a Dataset')

@section('content')

{{--
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn-magnify" href="javascript:;">
                            <p class=" d-md-block">Leonid Monastyrski</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-magnify" href="javascript:;">
                            <i class="nc-icon nc-globe"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Stats</span>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn-rotate" href="javascript:;">
                            <i class="nc-icon nc-settings-gear-65"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Account</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}
    <!-- End Navbar -->
    <div class="content quereszz">
        <div class="row">
            <div class="col-md-12">
                <h1>Select a Dataset</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card table-new">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>File Name </th>
                                    <th>Last Date </th>
                                    <th>Datasets </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-1" name="radio" type="radio" class="individual">
                                            <label for="che-1" class="radio-label">Dataset Name 1</label>
                                        </div>
                                    </td>
                                    <td>2020-02-02</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-2" name="radio" type="radio" class="individual">
                                            <label for="che-2" class="radio-label">Dataset Name 2</label>
                                        </div>
                                    </td>
                                    <td>2020-03-05</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-3" name="radio" type="radio" class="individual">
                                            <label for="che-3" class="radio-label">Dataset Name 3</label>
                                        </div>
                                    </td>
                                    <td>2020-09-04</td>
                                    <td> 326</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="radiodd">
                                            <input id="che-4" name="radio" type="radio" class="individual">
                                            <label for="che-4" class="radio-label">Dataset Name 4</label>
                                        </div>
                                    </td>
                                    <td>2019-01-02</td>
                                    <td> 326</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="date_range_slider" class="w-100"></div>
            </div>
            <div class="col-md-3">
                <button class="custom-button"><img src="{{asset('assets/img/8.svg')}}">Download PDF</button>
            </div>
            <div class="col-md-3">
                <button class="custom-button"><img src="{{asset('assets/img/7.svg')}}"> Download Excel</button>
            </div>
        </div>

    </div>

</div>
@endsection