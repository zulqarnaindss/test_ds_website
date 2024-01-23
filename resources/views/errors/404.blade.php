<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Page Title -->
    <!-- <title>Dynamics Stream</title> -->
    <title>@yield('title')</title>
    <meta content="@yield('meta_description')" name="description">
    <meta content="@yield('meta_keywords')" name="keywords">
    <link href="{{asset('assets')}}/images/Favicons/newfavicon.png" rel="icon">
    <!-- Compressed Styles -->
    <link href="{{asset('assets')}}/css/slides.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/css/style1.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"  >
  -->
    <!-- Custom Styles -->
    <!-- <link href="css/custom.css" rel="stylesheet" type="text/css"> -->

    <!-- Custom Scripts -->
    <!-- <script src="js/custom.js" type="text/javascript"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts and Material Icons -->
    <link rel="stylesheet" as="font"
        href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700|Material+Icons" />
</head>

<body>


    <!-- ======= Header ======= -->
    <nav class="panel top">
        <div class="sections">

            <div class="right">
                <a href="/dynamics-365-business-central-pricing-plan" class="d365-btn">D365 ONLINE </a>

                <span class="button actionButton sidebarTrigger" data-sidebar-id="1">
                    <img src="{{asset('assets')}}/images/menu-2.png" />
                </span>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->
    <nav class="sidebar" data-sidebar-id="1">
        <div class="close"><img src="{{asset('assets')}}/images/close-icon.png" /></div>
        <div class="content fdd">
            <!-- <a href="#" class="logo"><svg width="37" height="30">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo-icon"></use>
            </svg></a> -->
            <ul class="mainMenu">

                <li><a href="/">Home</a></li>

                <li><a href="https://dynamicsstream.com/about-us">About Us</a></li>
                <li><a name="" href="https://dynamicsstream.com/#solutions">Solutions</a></li>
                <li><a href="https://dynamicsstream.com/#industries">Industries</a></li>
                <li><a href="https://dynamicsstream.com/#services">Services</a></li>
                <li><a href="https://dynamicsstream.com/#blogs">Blogs</a></li>
                <!-- <li><a href="#">Careers</a></li> -->
                <li><a href="#contact-us">Contact Us</a></li>

            </ul>

        </div>
    </nav>

    <section class="slide  kenBurns">
        <div class="content">
            <div class="container">
                <div class="wrapss">


                    <ul class="grid grid-85 equal ae-2 fromCenter err-page-marg" data-equal-collapse-width="767">
                        <li class="col-12-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <h3 style="font-size: 28px;">404 ERROR</h3>
                            <h2>Hey! Looks like you're lost.</h2>
                            <p>We are sorry. The URL may be incorrect or the page you are trying to access doesn't exist
                                anymore.
                            </p>
                            <div style="text-align: -webkit-center;margin-top: 3%;">
                                <a href="/" class="for-full-case-mobile contct-form-btn for-desk ">

                                    <p class="contact-form-heading">Go to Home Page</p>
                                </a>
                            </div>
                        </li>


                    </ul>

                </div>
            </div>
        </div>
        <div class="background" style="background-color:blueviolet;">
        </div>

    </section>

    <!-- End Header -->
    <!-- jQuery 3.3.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Compressed Scripts -->
    <script src="{{asset('assets')}}/js/slides.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- model for contact form -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"
        charset="utf-8">
    </script>
</body>

</html>