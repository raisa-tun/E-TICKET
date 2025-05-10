<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>e-Ticket</title>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing page template for creative dashboard">
    <meta name="keywords" content="Landing page template">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('assets\logos\favicon.ico')}}" type="image/png" sizes="16x16">
    <!-- Bootstrap -->
    <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets\css\animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets\css\owl.carousel.css">
    <link rel="stylesheet" href="assets\css\owl.theme.css">
    <!-- Magnific Popup --> 
    <link rel="stylesheet" href="assets\css\magnific-popup.css">
    <!-- Full Page Animation -->
    <link rel="stylesheet" href="assets\css\animsition.min.css">
    <!-- Ionic Icons -->
    <link rel="stylesheet" href="assets\css\ionicons.min.css">
    <!-- Main Style css -->
    <link href="assets\css\style.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>

    <div class="wrapper animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">
        <div class="container">
        @include('layouts.components.header')
        </div>
        <div class="main" id="main">
            <!-- Main Section-->
           @include('layouts.components.upper_section')
           @include('layouts.components.services')
           @include('layouts.components.instruction')
          @include('layouts.components.frequent_routes')


            <!--<div class="features-section">
                 Feature section with flex layout -->
              <!--  <div class="f-left">
                    <div class="left-content wow fadeInLeft" data-wow-delay="0s">
                        <h2 class="wow fadeInLeft" data-wow-delay="0.1s">We are available for custom work development</h2>
                        <p class="wow fadeInLeft" data-wow-delay="0.2s">
                            We at Adminty available for custom work development with High end specialized developer.
                        </p>
                        <button class="btn btn-primary btn-action btn-fill wow fadeInLeft" data-wow-delay="0.2s">Click to send query</button>
                    </div>
                </div>
                <div class="f-right">
                </div>
            </div>-->

            <!-- Client Section -->
            @include('layouts.components.payments')
            <!-- Subscribe Form -->
           <!-- @include('layouts.components.contact')-->
            <!-- Footer Section -->
            @include('layouts.components.footer')
            <!-- Scroll To Top -->
            <a id="back-top" class="back-to-top page-scroll" href="#main">
                <i class="ion-ios-arrow-thin-up"></i>
            </a>
            <!-- Scroll To Top Ends-->
        </div>
        <!-- Main Section -->
    </div>
    <!-- Wrapper-->

    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="assets\js\jquery-2.1.1.js"></script>
    <script type="text/javascript" src="assets\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="assets\js\plugins.js"></script>
    <script type="text/javascript" src="assets\js\menu.js"></script>
    <script type="text/javascript" src="assets\js\custom.js"></script>
    @include('user.layouts.components.user_login_modal')
</body>

</html>