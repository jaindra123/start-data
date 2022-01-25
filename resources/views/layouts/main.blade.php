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
    @stack('css-script')
    <style>
    .w-5{
        display:none;
    }
</style>
</head>

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
                    <li class=" {{ request()->is('access-list') || request()->is('registration') || request()->is('access/edit/*') ? 'active' : ''  }} ">
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
                                        <p class=" d-md-block">Admin</p>
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
                            <div class="col-md-6">
                                <form class="bf-67" action="/action_page.php">
                                    <div class="row w-100">
                                        <div class="col-md-12">
                                            <label for="email" class="mb-4">Choose the Color for your Charts
                                                (HEX)</label>
                                        </div>
                                    </div>
                                    <div class="row w-100">
                                        <div class="col-md-3">
                                            <label for="email" class="">Color 1</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control mb-2 " placeholder="#182HH1"
                                                id="email">
                                        </div>
                                    </div>
                                    <div class="row w-100">
                                        <div class="col-md-3">
                                            <label for="email" class="">Color 2</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control mb-2 " placeholder="#2AAAAA"
                                                id="email">
                                        </div>
                                    </div>
                                    <div class="row w-100">
                                        <div class="col-md-3">
                                            <label for="email" class="">Color 3</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control mb-2" placeholder="#FFFF23"
                                                id="email">
                                        </div>
                                    </div>
                                    <div class="row w-100">
                                        <div class="col-md-3">
                                            <label for="email" class=""> Color 4</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control mb-2 " placeholder=" #48KKAS"
                                                id="email">
                                        </div>
                                    </div>
                                    <div class="row w-100">
                                        <div class="col-md-3">
                                            <label for="email" class=""> Color 5</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control mb-2 " placeholder=" #0000000"
                                                id="email">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="row w-100">
                                    <div class="col-md-12">
                                        <label for="email" class="mb-4">Output Language</label>
                                    </div>
                                </div>
                                <div class="row w-100">
                                    <div class="col-md-12">
                                        <select class="form-control mb-3">
                                            <option>English</option>
                                            <option>English</option>
                                            <option>English</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <button class="login100-form-btn33">
                                        German
                                    </button>
                                    <button class="login100-form-btn23">
                                        English
                                    </button>
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
        <script>
            $(document).ready(function () {
                // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
                demo.initChartsPages();
            });
            $(document).ready(function () {

                var html =
                    '<tr><td>1</td><td><input type="text" class="form-control" placeholder=""></td><td><input type="text" class="form-control" placeholder=""></td><td class="text-center"><i class="fa fa-angle-up d-block" aria-hidden="true"></i> <i class="fa fa-angle-down d-block" aria-hidden="true"></i></td><td class="text-center"><p class="remove"><i class="fa fa-trash" aria-hidden="true"></i></p></td><td class="text-center"> <i class="fa fa-link" aria-hidden="true"></i></td><td class="text-center"> <i class="fa fa-star" aria-hidden="true"></i></td></tr>';
                $("#addProduct").click(function () {
                    $('tbody#addee').append(html);
                });
                var html =
                    '<tr><td>1</td><td><input type="text" class="form-control" placeholder=""></td><td><input type="text" class="form-control" placeholder=""></td><td class="text-center"><i class="fa fa-angle-up d-block" aria-hidden="true"></i> <i class="fa fa-angle-down d-block" aria-hidden="true"></i></td><td class="text-center"><p class="remove"><i class="fa fa-trash" aria-hidden="true"></i></p></td><td class="text-center"> <i class="fa fa-link" aria-hidden="true"></i></td><td class="text-center"> <i class="fa fa-star" aria-hidden="true"></i></td></tr>';
                $("#addProducts").click(function () {
                    $('tbody#addeed').append(html);
                });
                $(document).on('click', '.remove', function () {
                    $(this).parents('tr').remove();
                });
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
