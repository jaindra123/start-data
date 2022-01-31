<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield("title")
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://jamesmuspratt.com/codepen/css/jqdaterangeslider/classic-min.css">
    @stack('css-script')
    <style>
        .w-5 {
            display: none;
        }

    </style>
</head>
@php
$user = checkUser();
@endphp

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="#323759" data-active-color="danger">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="{{asset('assets/img/new-logo.svg')}}">
                    </div>
                </a>
            </div>
            <div class="sidebar-wrapper">
                @if(!empty($user))
                @if($user->id == 1)
                <ul class="nav">
                    <li class="{{ request()->is('dashboard') ? 'active' : '' }} ">
                        <a href="{{url('dashboard')}}">
                            <p>DASHBOARD</p>
                        </a>
                    </li>
                    <li class="{{ request()->is('add-questionairs') ? 'active' : '' }}">
                        <a href="{{url('add-questionairs')}}">
                            <p>CREATE NEW QUESTIONAIRE</p>
                        </a>
                    </li>

                    <li
                        class=" {{ request()->is('access-list') || request()->is('registration') || request()->is('access/edit/*') ? 'active' : ''  }} ">
                        <a href="{{route('accesslist')}}">
                            <p>ACCESS MANAGEMENT </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>ADD NEW USER</p>
                        </a>
                    </li>
                </ul>
                @else
                <ul class="nav">
                    <li class=" {{ request()->is('customer-dashboard') ? 'active' : '' }}  ">
                        <a href="#">
                            <p>DASHBOARD</p>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <p>Analysis and Report</p>
                        </a>
                    </li>

                    <li class="">
                        <a href="#">
                            <p>Newsletter list</p>
                        </a>
                    </li>
                </ul>
                @endif
                @endif
            </div>
        </div>
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
                                    <p class=" d-md-block">@if(isset($user)){{$user->name}}@endif</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-magnify" data-toggle="modal" data-target="#exampleModal2">
                                    <i class="nc-icon nc-globe"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link btn-rotate" data-toggle="modal" data-target="#exampleModal">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            @yield('content')
        </div>
        @if(!empty($user))
        @if($user->id != 1)
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="mt-4">Settings</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                @php
                                $value = colorData();
                                @endphp
                                <form class="bf-67" action="{{route('add-color')}}" method="POST" id="colorForm">
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="row w-100">
                                            <div class="col-md-12">
                                                <label class="mb-4">Choose the Color for your Charts (HEX)</label>
                                            </div>
                                        </div>
                                        <div class="row w-100">
                                            <div class="col-md-3">
                                                <label for="color1" class="">Color 1</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control mb-2 " placeholder="#182HH1"
                                                    name="color1" id="color1"
                                                    value="@if(isset($value)){{old('color1',$value->color1)}}@endif">
                                            </div>
                                        </div>
                                        <div class="row w-100">
                                            <div class="col-md-3">
                                                <label for="color2" class="">Color 2</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control mb-2 " placeholder="#2AAAAA"
                                                    name="color2" id="color2"
                                                    value="@if(isset($value)){{old('color2',$value->color2)}}@endif">
                                            </div>
                                        </div>
                                        <div class="row w-100">
                                            <div class="col-md-3">
                                                <label for="color3" class="">Color 3</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control mb-2" placeholder="#FFFF23"
                                                    name="color3" id="color3"
                                                    value="@if(isset($value)){{old('color3',$value->color3)}}@endif">
                                            </div>
                                        </div>
                                        <div class="row w-100">
                                            <div class="col-md-3">
                                                <label for="color4" class="">Color 4</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control mb-2 " placeholder=" #48KKAS"
                                                    name="color4" id="color4"
                                                    value="@if(isset($value)){{old('color4',$value->color4)}}@endif">
                                            </div>
                                        </div>
                                        <div class="row w-100">
                                            <div class="col-md-3">
                                                <label for="color5" class="">Color 5</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control mb-2 " placeholder=" #0000000"
                                                    name="color5" id="color5"
                                                    value="@if(isset($value)){{old('color5',$value->color5)}}@endif">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="row w-100">
                                            <div class="col-md-12">
                                                <label for="email" class="mb-4">Output Language</label>
                                            </div>
                                        </div>
                                        <div class="row w-100">
                                            <div class="col-md-12">
                                                <select class="form-control mb-3" name="language" id="language">
                                                    <option value="">Select Language</option>
                                                    @php
                                                    $lang = getAllLanguage();
                                                    foreach($lang as $lan){
                                                    @endphp
                                                    @if(isset($value) && $value->language_id == $lan->id)
                                                    <option value="{{$lan->id}}" selected>{{$lan->language}}</option>
                                                    @else
                                                    <option value="{{$lan->id}}">{{$lan->language}}</option>
                                                    @endif
                                                    @php
                                                    }
                                                    @endphp
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="custom-button" style="width: 16%;" value="SET">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row frwsghjk">
                            <div class="col-md-8">
                                <h5 class="mt-0">Choose the question you want to cross reference:</h5>
                            </div>
                            <div class="col-md-4">
                                <button class="custom-button" data-toggle="modal" data-target="#exampleModal3"><img
                                        src="{{asset('assets/img/6.svg')}}">Cross Reference</button>
                            </div>
                        </div>
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search Question">
                        </div>
                        <div class="row crooss-ref">
                            <div class="col-md-12">
                                <h6>Question</h6>
                                <div class="radiodd mb-3">
                                    <input id="che-11" name="radio" type="radio" class="individual">
                                    <label for="che-11" class="radio-label">Age</label>
                                </div>
                                <div class="radiodd mb-3">
                                    <input id="che-12" name="radio" type="radio" class="individual">
                                    <label for="che-12" class="radio-label">How did you get to know About the
                                        Exhibition?</label>
                                </div>
                                <div class="radiodd mb-3">
                                    <input id="che-13" name="radio" type="radio" class="individual">
                                    <label for="che-13" class="radio-label">How did you like the Exhibition?</label>
                                </div>
                                <div class="radiodd mb-3">
                                    <input id="che-14" name="radio" type="radio" class="individual">
                                    <label for="che-14" class="radio-label">With whome did you come to the
                                        Exhibition?</label>
                                </div>
                                <div class="radiodd mb-3">
                                    <input id="che-15" name="radio" type="radio" class="individual">
                                    <label for="che-15" class="radio-label">How often have you visited us last
                                        year?</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endif
        @endif
        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="mt-4">Language</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center w-100">
                                    @php
                                    $sl = systemLanguage();
                                    if(!empty($sl)){
                                    if($sl->language == 'English'){
                                    $class1 = 'login100-form-btn33';
                                    $class2 = 'login100-form-btn23';
                                    }
                                    else{
                                    $class1 = 'login100-form-btn23';
                                    $class2 = 'login100-form-btn33';
                                    }
                                    }
                                    else{
                                    $class1 = 'login100-form-btn33';
                                    $class2 = 'login100-form-btn33';
                                    }
                                    @endphp
                                    <input type="button" id="German" data-dismiss="modal" class="{{$class1}}"
                                        value="German">
                                    <input type="button" id="English" data-dismiss="modal" class="{{$class2}}"
                                        value="English">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--   Core JS Files   -->
        <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
        <!--  Notifications Plugin    -->
        <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{asset('assets/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script>
        <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{asset('assets/demo/demo.js')}}"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="https://jamesmuspratt.com/codepen/js/jqrangeslider/jQDateRangeSlider-min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#German").click(function () {
                    var value = $("#German").val();
                    ajax(value);
                });
                $("#English").click(function () {
                    var value = $("#English").val();
                    ajax(value);
                });

                function ajax(value) {
                    var url = "{{route('set-language')}}";
                    $.ajax({
                        type: "get",
                        url: url,
                        data: {
                            value: value
                        },
                        dataType: 'json',
                        success: function (res) {}
                    })
                    location.reload();
                }
                // $('input').keypress(function(e) {
                //     // Enter pressed?
                //     if(e.which == 13) {
                //         $('#colorForm').submit();
                //     }
                // });
            });
            // document.getElementById('colorForm').submit();

        </script>
        <script>
            $(document).ready(function () {
                // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
                demo.initChartsPages();
            });
            $(document).ready(function () {
                var html =
                    '<tr><td>1</td><td><input type="text" class="form-control answer" name="answer[]" placeholder=""></td><td><input type="text" class="form-control display_text" name="display_text[]" placeholder=""></td><td class="text-center"><i class="fa fa-angle-up d-block" aria-hidden="true"></i> <i class="fa fa-angle-down d-block" aria-hidden="true"></i></td><td class="text-center"><p class="remove"><i class="fa fa-trash" aria-hidden="true"></i></p></td><td class="text-center"> <i class="fa fa-link" aria-hidden="true"></i></td><td class="text-center"> <i class="fa fa-star" aria-hidden="true"></i></td></tr>';
                $("#addMore").click(function () {
                    $('tbody#add_more').append(html);
                });

               /* var html1 =
                    '<tr><td>1</td><td><input type="text" class="form-control single-ans" name="single_answer[]" placeholder="888" "></td><td><input type="text" class="form-control" placeholder="22"></td><td class="text-center"><i class="fa fa-angle-up d-block" aria-hidden="true"></i> <i class="fa fa-angle-down d-block" aria-hidden="true"></i></td><td class="text-center"><p class="remove"><i class="fa fa-trash" aria-hidden="true"></i></p></td><td class="text-center"> <i class="fa fa-link" aria-hidden="true"></i></td><td class="text-center"> <i class="fa fa-star" aria-hidden="true"></i></td></tr>';
                $("#addSingleChoice").click(function () {
                    $('tbody#single_choice').append(html1);
                });*/
                $(document).on('click', '.remove', function () {
                    $(this).parents('tr').remove();
                });
            });
            $(document).ready(function(){
                $("#date_range_slider").dateRangeSlider();        
            });

        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
        <script>
            $('#che11').click(function () {
        
            $('.individual').prop('checked', !$('.individual').prop('checked'));
            console.log('checked');
            
        });


        var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["M", "T", "W", "T", "F", "S", "S"],
                datasets: [{
                backgroundColor: [
                    "#2ecc71",
                    "#3498db",
                    "#95a5a6",
                    "#9b59b6",
                    "#f1c40f",
                    "#e74c3c",
                    "#34495e"
                ],
                data: [12, 19, 3, 17, 28, 24, 7]
                }]
            }
            });

            var ctx = document.getElementById("barChart").getContext('2d');
            var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sst", "Sun"],
                datasets: [{
                label: 'data-1',
                data: [12, 19, 3, 17, 28, 24, 7],
                backgroundColor: "rgba(255,0,0,1)"
                }, {
                label: 'data-2',
                data: [30, 29, 5, 5, 20, 3, 10],
                backgroundColor: "rgba(0,0,255,1)"
                }]
            }
            });
            

            var ctx = document.getElementById('myChart').getContext("2d");

            var barStroke = ctx.createLinearGradient(700, 0, 120, 0);
            barStroke.addColorStop(0, 'rgba(0, 255, 188, 0.6)');
            barStroke.addColorStop(1, 'rgba(0, 205, 194, 0.6)');

            var barFill = ctx.createLinearGradient(700, 0, 120, 0);
            barFill.addColorStop(0, "rgba(0, 255, 188, 0.6)");
            barFill.addColorStop(1, "rgba(0, 205, 194, 0.6)");

            var barFillHover = ctx.createLinearGradient(700, 0, 120, 0);
            barFillHover.addColorStop(0, "rgba(0, 255, 188, 0.8)");
            barFillHover.addColorStop(1, "rgba(0, 205, 194, 0.6)");

            var myChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels: ["Data Set 1", "Data Set 2", "Data Set 3", "Data Set 4", "Data Set 5"],
                    datasets: [{
                        label: "Data",
                        borderColor: barStroke,
                    borderWidth: 1,
                        fill: true,
                        backgroundColor: barFill,
                    hoverBackgroundColor: barFillHover,
                        data: [100, 50, 60, 80, 70]
                    }]
                },
                options: {
                    animation: {
                        easing: "easeOutQuart"
                    },
                    legend: {
                        position: "bottom",
                    display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontColor: "#000",
                                fontStyle: "bold",
                                beginAtZero: true,
                                padding: 15,
                        //display: false - remove this and commenting to display: false
                            },
                            gridLines: {
                                drawTicks: false,
                                display: false,
                        color: "#ccc",
                        zeroLineColor: "transparent"
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                        display: false,
                        color: "red",
                        zeroLineColor: "transparent"
                            },
                            ticks: {
                                padding: 15,
                        beginAtZero: true,
                                fontColor: "#000",
                                fontStyle: "bold",
                        maxTicksLimit: 20,
                        //display: false - remove this and commenting to display: false
                            }
                        }]
                    }
                }
            });
        </script>
        <script>
            var input = document.getElementById('file-uploads');
            var infoArea = document.getElementById('file-uploads-filename');

            input.addEventListener('change', showFileName);

            function showFileName(event) {

                // the change event gives us the input it occurred in 
                var input = event.srcElement;

                // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                var fileName = input.files[0].name;

                // use fileName however fits your app best, i.e. add it into a div
                infoArea.textContent = 'File name: ' + fileName;
            }


            var input1 = document.getElementById('file-uploads1');
            var infoArea1 = document.getElementById('file-uploads-filename1');

            input1.addEventListener('change', showFileName1);

            function showFileName1(event) {

                // the change event gives us the input it occurred in 
                var input1 = event.srcElement;

                // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                var fileName1 = input1.files[0].name;

                // use fileName however fits your app best, i.e. add it into a div
                infoArea1.textContent = 'File name: ' + fileName1;
            }

        </script>
        @stack('js-script')
</body>

</html>
