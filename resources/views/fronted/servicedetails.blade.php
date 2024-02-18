@extends('layouts.header')
@section('title')
<title>SHIVOHAM-Services</title>
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>Services</h4>
                <h2>Feel your journey <br> with <span>SHIVOHAM</span></h2>
            </div>
        </div>
    </section>

    <section class="service-details bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 sm-padding">
                    <div class="service-details-info">
                        <img src="assets/img/post-2.jpg" alt="img">
                        <h2>Comfortable Business Transport Services!</h2>
                        <p>Financial experts support or help you to to find out which way you can raise your funds more. Arkit a trusted name for providing assistants. Initially their main objective was to ensure the service they provide these people are loyal to their industry.</p>
                        <p>Unless you are the one who really cares about this, it is not terribly important. What all matters are how your hybrid mobile application development is going to work in the long run as no one will care about how it was built.</p>
                        <p>There are some big shifts taking place in the field of construction equipment mathematics. Starting with the integration of mathematics devices in vehicles right from manufacturers, to the standardization and integration of mathematics data across various business functions, the future of mathematics.</p>
                     
                    </div>
                </div>
                <div class="col-lg-4 sm-padding">
                    <div class="service-sidebar sidebar-widget">
                        <div class="widget-title service-widget">
                            <h3>Other Services</h3>
                        </div>
                        <ul>
                            <li><a href="#">Regular Transport</a><i class="las la-arrow-right"></i></li>
                            <li><a href="#">City Transport</a><i class="las la-arrow-right"></i></li>
                            <li><a href="#">Airport Transport</a><i class="las la-arrow-right"></i></li>
                            <li><a href="#">Long Journey</a><i class="las la-arrow-right"></i></li>
                            <li><a href="#">Luggage Transport</a><i class="las la-arrow-right"></i></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget banner">
                        <div class="banner-info">
                            <a href="#"><img class="logo" src="{{asset('footerlogo.png')}}" alt="logo"></a>
                            <h3>Feel your journey with <span>SHIVOHAM</span></h3>
                            <button type="button" class="default-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                        </div>
                    </div>
       
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <form action="https://html.dynamiclayers.net/dl/ridek/book-ride.php" id="book-taxi-ride">
                        <div class="taxi-booking-form">
                            <div class="form-field">
                                <i class="las la-user-tie"></i>
                                <input type="text" id="full-name" name="full-name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-envelope-open"></i>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-tags"></i>
                                <select name="package-type" id="package-type" class="niceSelect">
                                    <option value="standard">Standard</option>
                                    <option value="business">Business</option>
                                    <option value="economy">Economy</option>
                                    <option value="vip-spacial">VIP Spacial</option>
                                    <option value="comfort">Comfort</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <i class="las la-user-friends"></i>
                                <select name="passengers" id="passengers" class="niceSelect">
                                    <option value="1">1 Person</option>
                                    <option value="2">2 Person</option>
                                    <option value="3">3 Person</option>
                                    <option value="4">4 Person</option>
                                    <option value="5">5 Person</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <i class="las la-map-marker"></i>
                                <input type="text" id="start-dest" name="start-dest" class="form-control" placeholder="Start Destination" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-map-marker"></i>
                                <input type="text" id="end-dest" name="end-dest" class="form-control" placeholder="End Destination" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-calendar"></i>
                                <input type="text" id="ride-date" name="ride-date" class="form-control date-picker" placeholder="Select Date" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-clock"></i>
                                <input type="text" id="ride-time" name="ride-time" class="form-control time-picker" placeholder="Select Time" required>
                            </div>
                            <div class="form-field">
                                <button id="submit" class="default-btn" type="submit">Book Your Taxi</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form><!-- Booking Form -->
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

<!-- Button trigger modal -->


