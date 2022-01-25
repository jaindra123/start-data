@extends('layouts.main')

@section('title','Admin Dashboard')

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
    <div class="content quereszzz">
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="box-dash">
                    <div class="icondd"> <img src="{{asset('assets/img/1.svg')}}"> </div>
                    <div class="box-conrt">
                        <h3>Active Questionairs</h3>
                        <h4>3</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-dash">
                    <div class="icondd"> <img src="{{asset('assets/img/2.svg')}}"> </div>
                    <div class="box-conrt">
                        <h3>Inactive Questionairss</h3>
                        <h4>35</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-dash">
                    <div class="icondd"> <img src="{{asset('assets/img/3.svg')}}"> </div>
                    <div class="box-conrt">
                        <h3>Drafts</h3>
                        <h4>2</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Drafts</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card table-new">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>Your Questionairs </th>
                                    <th>Last Edit </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Questionair Name 1 (Hyperlink)</td>
                                    <td>2020-02-02 </td>
                                </tr>
                                <tr>
                                    <td>Questionair Name 2 (Hyperlink)</td>
                                    <td>2020-03-05 </td>
                                </tr>
                                <tr>
                                    <td>Questionair Name 3 (Hyperlink)</td>
                                    <td>2020-09-04 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Inactive Questionairs</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card table-new">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>Your Questionairs </th>
                                    <th>Password </th>
                                    <th>Last Date</th>
                                    <th>Datasets</th>
                                    <th>Copy Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Questionair Name 1 (Hyperlink) (No Data can be submitted anymore)</td>
                                    <td>asd23gD4a </td>
                                    <td>2020-02-02</td>
                                    <td>326</td>
                                    <td class="text-left"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Questionair Name 2 (Hyperlink) (No Data can be submitted anymore)</td>
                                    <td>das83d44 </td>
                                    <td>2020-02-02</td>
                                    <td>1530</td>
                                    <td class="text-left"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Questionair Name 3 (Hyperlink) (No Data can be submitted anymore)</td>
                                    <td>asd23gD4a </td>
                                    <td>2020-09-04</td>
                                    <td>896</td>
                                    <td class="text-left"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Active Questionairs</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card table-new">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>Your Questionairs </th>
                                    <th>Password </th>
                                    <th>Last Date</th>
                                    <th>Datasets</th>
                                    <th>Copy Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Questionair Name 1 (Hyperlink)</td>
                                    <td>asd23gD4a </td>
                                    <td>2020-02-02</td>
                                    <td>326</td>
                                    <td class="text-left"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Questionair Name 2 (Hyperlink)</td>
                                    <td>das83d44 </td>
                                    <td>2020-02-02</td>
                                    <td>1530</td>
                                    <td class="text-left"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>Questionair Name 3 (Hyperlink) </td>
                                    <td>asd23gD4a </td>
                                    <td>2020-09-04</td>
                                    <td>896</td>
                                    <td class="text-left"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection
