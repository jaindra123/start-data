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
    <title>
        @yield("title")
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
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
                    <li class="active ">
                        <a href="./dashboard.html">
                            <p>DASHBOARD</p>
                        </a>
                    </li>
                    <li>
                        <a href="./icons.html">
                            <p>ANALYSIS AND REPORTS</p>
                        </a>
                    </li>
                    <li>
                        <a href="./map.html">
                            <p>NEWSLETTER LIST</p>
                        </a>
                    </li>
                    <li>
                        <a href="./map.html">
                            <p>ADD NEW USER</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        @yield('content')
    </div>
    @include('backend.model')
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
        var input = document.getElementById('file-upload');
        var infoArea = document.getElementById('file-upload-filename');

        input.addEventListener('change', showFileName);

        function showFileName(event) {

            // the change event gives us the input it occurred in 
            var input = event.srcElement;

            // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
            var fileName = input.files[0].name;

            // use fileName however fits your app best, i.e. add it into a div
            infoArea.textContent = 'File name: ' + fileName;
        }

    </script>
</body>

</html>
