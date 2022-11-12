<!--=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="/frontend/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/frontend/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        Mediato
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/css/now-ui-kit.css?v=1.3.0" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/frontend/demo/demo.css" rel="stylesheet">
</head>

<body class="index-page sidebar-collapse">

<!-- Navbar -->
@include('layouts.nav')
<!-- End Navbar -->
<div class="wrapper">
@yield('content')



    @include('layouts.footer')
</div>

    <!-- Sart Modal -->
{{--    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header justify-content-center">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">--}}
{{--                        <i class="now-ui-icons ui-1_simple-remove"></i>--}}
{{--                    </button>--}}
{{--                    <h4 class="title title-up">Modal title</h4>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-default">Nice Button</button>--}}
{{--                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--  End Modal -->--}}
{{--    <!-- Mini Modal -->--}}
{{--    <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header justify-content-center">--}}
{{--                    <div class="modal-profile">--}}
{{--                        <i class="now-ui-icons users_circle-08"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <p>Always have an access to your profile</p>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-link btn-neutral">Back</button>--}}
{{--                    <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--  End Modal -->


<!--   Core JS Files   -->
<script src="/frontend/js/core/jquery.min.js" type="text/javascript"></script>
<script src="/frontend/js/core/popper.min.js" type="text/javascript"></script>
<script src="/frontend/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/frontend/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/frontend/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="/frontend/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="/frontend/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        // the body of this function is in frontend/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>


</body></html>
