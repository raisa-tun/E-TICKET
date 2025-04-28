<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" href="libraries\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="libraries\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- radial chart.css -->
    <link rel="stylesheet" href="libraries\assets\pages\chart\radial\css\radial.css" type="text/css" media="all">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="libraries\assets\icon\feather\css\feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="libraries\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="libraries\assets\css\jquery.mCustomScrollbar.css">
    <script type="text/javascript" src="{{asset('libraries\bower_components\jquery\js\jquery.min.js')}}"></script>
    <style>
        @media only screen and(max-width: 745px) {
            .navbar-associate {
                width: 100%;
                max-width: 200px;
                margin: 0 auto;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1176px) {
            .col-lg-2 {
                flex: 0 0 20% !important;
                max-width: 20% !important;

            }

            .col-lg-10 {
                flex: 0 0 80% !important;
                max-width: 80% !important;

            }

        }

        .navbar-associate {

            padding-top: 10px;
        }

        .btn {
            margin-right: 45px;
        }

        img {
            padding-left: 40px;
            height: 35px;
            width: 190px
        }

        #modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* semi-transparent black */
            z-index: 999;
            /* behind modal but above other content */
        }

        .md-modal {
            width:100%;
            background-color: white;
            z-index: 1000;
            display:flex;
            height:800px

            /* modal on top of backdrop */
        }
        .md-content{
            
            width:100%;
            display:flex;
            justify-content:center;
            align-items: center;
            

        }
        
    </style>
</head>
<!-- Menu sidebar static layout -->

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    @include('admin.layouts.components.header_nav')
                    <div class="row section-separator">


                        <div class="col-lg-2 navbar-logo">

                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="feather icon-menu"></i>
                            </a>

                            <a class="navbar-brand page-scroll" href="#main"><img src="{{ asset('assets/images/logo.png') }}" alt="adminity Logo"></a>

                        </div>
                        

                    </div>


                </div>
            </nav>


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('admin.layouts.components.sidenav')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body"> 
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                           
                                            @include('layouts.components.list')
                                        </div>
                                    </div>
                                </div>

                                
                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    

    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
    <script type="text/javascript" src="{{asset('libraries\bower_components\popper.js\js\popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('libraries\bower_components\bootstrap\js\bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('libraries\bower_components\jquery-slimscroll\js\jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('libraries\bower_components\modernizr\js\modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('libraries\bower_components\modernizr\js\css-scrollbars.js')}}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{asset('libraries\bower_components\chart.js\js\Chart.js')}}"></script>
    <!-- Google map js -->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js')}}"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true')}}"></script>
    <script type="text/javascript" src="{{asset('libraries\assets\pages\google-maps\gmaps.js')}}"></script>
    <!-- gauge js -->
    <script src="{{asset('libraries\assets\pages\widget\gauge\gauge.min.js')}}"></script>
    <script src="{{asset('libraries\assets\pages\widget\amchart\amcharts.js')}}"></script>
    <script src="{{asset('libraries\assets\pages\widget\amchart\serial.js')}}"></script>
    <script src="{{asset('libraries\assets\pages\widget\amchart\gauge.js')}}"></script>
    <script src="{{asset('libraries\assets\pages\widget\amchart\pie.js')}}"></script>
    <script src="{{asset('libraries\assets\pages\widget\amchart\light.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('libraries\assets\js\pcoded.min.js')}}"></script>
    <script src="{{asset('libraries\assets\js\vartical-layout.min.js')}}"></script>
    <script src="{{asset('libraries\assets\js\jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('libraries\assets\pages\dashboard\crm-dashboard.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('libraries\assets\js\script.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


</body>

</html>