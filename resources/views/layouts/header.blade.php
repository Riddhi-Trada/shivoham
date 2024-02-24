<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ridek Online Taxi Booking HTML5 Template">
    <meta name="author" content="DynamicLayers">

    @yield('title') 

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/keyframe-animation.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/elements.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>

    <div class="site-preloader">
        <div class="car">
            <div class="strike"></div>
            <div class="strike strike2"></div>
            <div class="strike strike3"></div>
            <div class="strike strike4"></div>
            <div class="strike strike5"></div>
            <div class="car-detail spoiler"></div>
            <div class="car-detail back"></div>
            <div class="car-detail center"></div>
            <div class="car-detail center1"></div>
            <div class="car-detail front"></div>
            <div class="car-detail wheel"></div>
            <div class="car-detail wheel wheel2"></div>
        </div>
    </div><!--/.site-preloader-->

    <header class="main-header">
       
        <div class="mid-header">
            <div class="container">
                <div class="mid-header-wrap">
                    <div class="site-logo">
                        @foreach($data1 as $logo)
                        <a href=""><img src="{{asset('uploads/white_logo/'.$logo->white_logo)}}" alt="Logo"></a>
                        @endforeach
                    </div><!--/.site-logo-->
                    <ul class="header-info">
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-phone-volume"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Call us now</span><a href="tel:5267214392">{{isset($contact->phone_number) && $contact->phone_number ? $contact->phone_number : ''}}</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-envelope-open"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Email now</span>{{isset($contact->email) && $contact->email ? $contact->email : ''}}</h3>
                            </div>
                        </li>
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-map-marked-alt"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Halk Street</span>{{isset($contact->address) && $contact->address ? $contact->address : ''}}</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--/.mid-header-->
        <div class="nav-menu-wrapper">
            <div class="container">
                <div class="nav-menu-inner">
                    <div class="site-logo">
                        @foreach($data1 as $logo)
                            <a href=""><img src="{{asset('uploads/white_logo/'.$logo->white_logo)}}" alt="Logo"></a>
                        @endforeach
                    </div><!--/.site-logo-->
                    <div class="header-menu-wrap">
                        <ul class="nav-menu">
                            <li class="active"><a href="{{route('index')}}">Home</a></li>
                            <li class="active"><a href="{{route('about')}}">About Us</a></li>
                            <!-- <li class="dropdown_menu">
                                <a href="{{route('service')}}">Service</a>
                                <ul>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="about-company.html">About Company</a></li>
                                    <li><a href="our-services.html">Our Services</a></li>
                                    <li><a href="service-details.html">Services Details</a></li>
                                    <li><a href="book-taxi.html">Book a Ride</a></li>
                                </ul>
                            </li> -->
                            <li class="active"><a href="{{route('service')}}">Service</a></li>
                            <li class="active"><a href="{{route('gallery')}}">Gallery</a></li>
                            <li class="active"><a href="{{route('contact')}}">Contact Us</a></li>
                    </div>
                    <div class="menu-right-item">
                        <div class="sidebox-icon dl-sidebox-icon">
                            <i class="las la-bars"></i>
                        </div>
                        <a href="{{route('service')}}" class="menu-btn">Book a Taxi</a>
                    </div>
                    <div class="mobile-menu-icon">
                        <div class="burger-menu">
                            <div class="line-menu line-half first-line"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu line-half last-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.nav-menu-->
    </header>
    <!--/.main-header-->

    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
                <button id="popup-search-button" type="submit" name="submit">
                    <i class="las la-search"></i>
                </button>
            </form>
            <div class="search-close"><i class="las la-times"></i></div>
        </div>
    </div>
    <!--/.popupsearch-box-->
    <div id="searchbox-overlay"></div>

    <div id="popup-sidebox" class="popup-sidebox">
        <div class="sidebox-content">
            <div class="site-logo">
                <a href=""><img src="{{asset('footerlogo.png')}}" alt="logo"></a>
            </div>
            <p>Everything your taxi business needs is already here! Ridek, a theme
                made for taxi service companies.</p>
            <ul class="sidebox-list">
                <li class="call"><span>Call for ride:</span>5267-214-392</li>
                <li>
                    <span>You can find us at:</span>Halk Street New York, USA - 2386
                </li>
                <li><span>Email now:</span>Info.ridek@mail.com</li>
            </ul>
        </div>
    </div>
    <!--/.popup-sidebox-->
    <div id="sidebox-overlay"></div>
@yield('content') 

    <footer class="footer-section">
        <div class="footer-top-wrap bg-grey">
            <div class="container">
                <div class="footer-top">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="brand">
                                <a class="footer-logo" href="{{route('index')}}">
                                @foreach($data1 as $logo)
                                    <img src="{{asset('uploads/logo/'.$logo->logo_image)}}" alt="logo"></a>
                                @endforeach
                                <p>We successfully cope with tasks of varying complexity, provide long-term guarantees
                                    and regularly master new technologies.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-call">
                                <i class="las la-phone-volume"></i>
                                <p><span>Call For Taxi</span><a href="tel:5267214392">5267-214-392</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.footer-top-wrap-->
        <div class="footer-mid-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <div class="widget-title">
                                <h3>SHIVOHAM</h3>
                            </div>
                            <ul class="footer-contact">
                                <li>We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item footer-list">
                            <div class="widget-title">
                                <h3>Usefull Links</h3>
                            </div>
                            <ul class="footer-links">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('service')}}">Our Services</a></li>
                                <li><a href="{{route('gallery')}}">Gallery</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item footer-list">
                            <div class="widget-title">
                                <h3>Our Services</h3>
                            </div>
                            <ul class="footer-links">
                                <li><a href="">Taxi Booking</a></li>
                                <li><a href="">Taxi Booking</a></li>
                                <li><a href="">Taxi Booking</a></li>
                                <li><a href="">Taxi Booking</a></li>
                                <li><a href="">Taxi Booking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <div class="widget-title">
                                <h3>Contact Us</h3>
                            </div>
                            <ul class="footer-contact">
                                <li><span>Phone Number:</span>145689232</li>
                                <li><span>Email:</span>shivhaminfo@gmail.com</li>
                                <li><span>Address:</span>Rajkot</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="running-taxi">
                <div class="taxi"></div>
                <div class="taxi-2"></div>
                <div class="taxi-3"></div>
            </div>
        </div>
        <!--/.footer-mid-wrap-->
        <div class="copyright-wrap">
            <div class="container">
                <p>© <span id="currentYear"></span> SHIVOHAM All Rights Reserved.</p>
            </div>
        </div>
        <!--/.copyright-wrap-->
    </footer>
    <!--/.footer-section-->

    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top">
            <i class="las la-arrow-up"></i>
        </button>
    </div>
    <!--scrollup-->

    <div class="dl-cursor">
        <div class="cursor-icon-holder"><i class="las la-times"></i></div>
    </div>
    <!--/.dl-cursor-->

    <!--jQuery Lib-->
    <script src="{{asset('assets/js/vendor/jquary-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.datetimepicker.full.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/venobox.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/smooth-scroll.js')}}"></script>
    <script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/book-ride.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>


<!-- Mirrored from html.dynamiclayers.net/dl/ridek/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2024 19:04:38 GMT -->
</html>