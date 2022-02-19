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
        @yield('title')
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
</head>

<body class="">
    @if(View::hasSection('front'))
        @yield('front')
    @elseif(View::hasSection('register'))
        @yield('register')
    @else
        @yield('content')
    @endif
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
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <!-- <script src="{{asset('assets/js/core/jquery-3.4.1.min.js')}}"></script> --> <!-- comment for running rank Question -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#forget").on("click", function () {
                var email = $("#email_address").val();
                if (email == '') 
                {
                    $("#mailSent").html('<h6>Please enter your email.</h6>');
                    $("#mailSent").addClass('alert-danger');
                    exit();
                } 
                else 
                {
                    var url = "{{route('mail.forget')}}";
                    $.ajax({
                        type: "get",
                        url: url,
                        data: {
                            email: email
                        },
                        dataType: 'json',
                        success: function (res) {
                            if (res.msg == 'sent') {
                                $("#mailSent").removeClass('alert-danger');
                                $("#mailSent").html('<h6>Your request has been send to the Admin</h6>');
                                $("#mailSent").addClass('alert-success');
                            } else {
                                $("#mailSent").html('<h6>Mail Sending Error</h6>');
                                $("#mailSent").addClass('alert-danger');
                            }
                        }
                    })
                }
            });
        });
    </script>
    @stack('js-script')
</body>

</html>
