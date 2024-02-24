@extends('layouts.header')
@section('title')
<title>SHIVOHAM-About Us</title>
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>About Us</h4>
                <h2>Feel your journey <br> with <span>SHIVOHAM</span></h2>
            </div>
        </div>
    </section>
    <section class="about-section padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-6">
                    <div class="about-img">
                        <img class="about-img1" src="{{asset('uploads/about_us/'.$about->image)}}" alt="img">
                        <!-- <img class="about-img2" src="assets/img/about-2.png" alt="img"> -->
                        <!-- <figure class="round-text"><img src="assets/img/experience-text-round.png" alt="img"></figure> -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="section-heading mb-40">
                        <h4><span></span>About Our Company</h4>
                        <h2>{{$about->title}}</h2>
                        <p>{!! $about->description !!}</p>
                    </div>
                    <!--/.section-heading-->
                    <ul class="about-info">
                        <li>
                            <img class="owner-thumb" src="assets/img/comment-1.png" alt="thumb">
                            <div class="owner">
                                <h4>Founder - CEO</h4>
                                <img class="signature" src="assets/img/signature.png" alt="signature">
                            </div>
                        </li>
                        <li>
                            <h2><span>Call For Taxi</span><a href="tel:5267214392">5267-214-392</a></h2>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/.about-section-->

    <section class="service-section bg-grey bd-bottom padding">
        <div class="bg-half"></div>
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h4><span></span>What We Offer</h4>
                <h2 class="white">Start your journey with<br>Ridek Taxi Company!</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly master new technologies.</p>
            </div>
            <!--/.section-heading-->
            <div class="swiper-outside">
                <div class="service-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            @if(isset($offer) && $offer->count())
                                @foreach($offer as $value)
                                    <div class="service-item">
                                        <div class="service-thumb">
                                            <img src="{{asset('uploads/offer/'.$value->image)}}" alt="img">
                                            <!-- <div class="service-shape-wrap">
                                                <div class="service-shape"></div>
                                            </div> -->
                                            <!-- <div class="service-car"><img src="" alt="car"></div> -->
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="service-details.html">{{$value->title}}</a></h3>
                                            <p>{{$value->description}}</p>
                                            <a class="read-more" href="service-details.html">Read More</a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <!-- <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/img/service-2.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">Airport Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/img/service-3.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">Luggage Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/img/service-4.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">City Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/img/service-5.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.html">Business Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                                    <a class="read-more" href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="swiper-pagination"></div><!-- Carousel Dots -->
                </div>
                <!-- Carousel Arrows -->
                <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
            </div>
        </div>
    </section>
    <!--/.service-section-->

    <section class="testimonial-section bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading mb-10">
                        <h4><span></span>Clients Testimonial</h4>
                        <h2>Ridek Passenger Reviews...</h2>
                        <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master technologies.</p>
                    </div>
                    <div class="swiper-outside testi-pagination">
                        <div class="testimonial-carousel">
                            <div class="swiper-wrapper">
                                @if(isset($testimonial) && $testimonial->count())
                                    @foreach($testimonial as $value)
                                        <div class="swiper-slide">
                                            <div class="testi-item">
                                                <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                                <p>{{$value->description}}</p>
                                                <div class="testi-author">
                                                    @if($value->image !='' && $value->image)
                                                        <div class="author-thumb"><img src="{{asset('uploads/testimonial/'.$value->image)}}" alt="author"></div>
                                                    @endif
                                                    <div class="author-info">
                                                        <h3>{{$value->name}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <!-- <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>Good to have transportation available in places and times it is otherwise hard to find, but the app has always been a bit difficult to use especially how it works or doesnt with large font phone settings.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/img/comment-1.png" alt="author"></div>
                                            <div class="author-info">
                                                <h3>Eredrik Johanson <span>Financial .INC</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>Good to have transportation available in places and times it is otherwise hard to find, but the app has always been a bit difficult to use especially how it works or doesnt with large font phone settings.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/img/comment-1.png" alt="author"></div>
                                            <div class="author-info">
                                                <h3>Eredrik Johanson <span>Financial .INC</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-pagination"></div><!-- Carousel Dots -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-wrap">
                        <div class="section-heading mb-30">
                            <h4 class="white"><span></span>Why Choose Us!</h4>
                            <h2 class="white">Why Ride with Ridek?</h2>
                            <p class="white">We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master technologies.</p>
                        </div>
                        <!--/.section-heading-->
                        <ul class="ridek-features">
                            <li>
                                <div class="feature-icon">
                                    <i class="las la-gem"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Safe Guarantee</h3>
                                    <p>We successfully cope with tasks of <br> varying complexity!</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-icon">
                                    <i class="las la-taxi"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Fast Pickups</h3>
                                    <p>We successfully cope with tasks of <br> varying complexity!</p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-icon">
                                    <i class="las la-tachometer-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Quick Ride</h3>
                                    <p>We successfully cope with tasks of <br> varying complexity!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.testimonial-section-->


    <section class="cta-section padding">
        <div class="cta-men"></div>
        <div class="container">
            <div class="cta-content">
                <h2>Call Us Now <span>Book Your Taxi</span> <br> For Your Next Ride!</h2>
                <p>We successfully cope with tasks of varying complexity,<br>guarantees and regularly master new technologies.</p>
                <div class="cta-call">
                    <i class="las la-phone-volume"></i>
                    <p><span>Call For Taxi</span><a href="tel:5267214392">5267-214-392</a></p>
                </div>
            </div>
        </div>
    </section>
    <!--/.cta-section-->

@endsection