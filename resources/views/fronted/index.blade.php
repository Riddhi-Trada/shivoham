@extends('layouts.header')
@section('content')

    <div class="slider-section">
        <div class="main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-img"><img src="assets/img/slider-bg.jpg" alt="img" class="kenburns"
                            style="animation-duration: 12000ms; "></div>
                    <div class="car-holder">
                        <img src="assets/img/car-1.png" alt="car" data-animation="car-animation" data-duration="1.5s">
                        <div class="shape">
                            <div data-animation="slide-in-bottom" data-duration="1.5s" data-delay="0.3s"></div>
                            <div data-animation="fade-in" data-duration="1.5s" data-delay="0.2s"></div>
                            <div data-animation="slide-in-top" data-duration="1.5s" data-delay="0.5s"></div>
                        </div>
                    </div>
                    <div class="slider-content-wrap d-flex align-items-center text-left">
                        @if(isset($homepage_slider) && $homepage_slider->count())
                            @foreach($homepage_slider as $value)
                                <div class="container">
                                    <div class="slider-content">
                                        <div class="slider-caption medium">
                                            <div class="inner-layer">
                                                <div data-animation="fade-in-bottom" data-delay="0.3s">Travel securely with us!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider-caption big">
                                            <div class="inner-layer">
                                                <div data-animation="fade-in-bottom" data-delay="0.5s">{{$value->title}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider-caption small">
                                            <div class="inner-layer">
                                                <div data-animation="fade-in-bottom" data-delay="0.7s" data-duration="1s">
                                                    {{$value->description}}</div>
                                            </div>
                                        </div>
                                        <div class="slider-btn">
                                            <a href="{{route('service')}}" class="default-btn" data-animation="fade-in-bottom"
                                                data-delay="0.9s">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- <div class="swiper-slide">
                    <div class="slider-img"><img src="assets/img/slider-bg.jpg" alt="img" class="kenburns"
                            style="animation-duration: 12000ms; "></div>
                    <div class="car-holder">
                        <img src="assets/img/car-1.png" alt="car" data-animation="car-animation" data-duration="1.5s">
                        <div class="shape">
                            <div data-animation="slide-in-bottom" data-duration="1.5s" data-delay="0.3s"></div>
                            <div data-animation="fade-in" data-duration="1.5s" data-delay="0.2s"></div>
                            <div data-animation="slide-in-top" data-duration="1.5s" data-delay="0.5s"></div>
                        </div>
                    </div>
                    <div class="slider-content-wrap d-flex align-items-center text-left">
                        <div class="container">
                            <div class="slider-content">
                                <div class="slider-caption medium">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.3s">Travel securely with us!
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-caption big">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.5s">Book your taxi from
                                            <br>anywhare today!
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-caption small">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.7s" data-duration="1s">
                                            Everything your taxi business needs is already here! <br>Ridek made for taxi
                                            service companies!</div>
                                    </div>
                                </div>
                                <div class="slider-btn">
                                    <a href="book-taxi.html" class="default-btn" data-animation="fade-in-bottom"
                                        data-delay="0.9s">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Slider navigation buttons -->
            <div class="slider-controls">
                <div class="slider-control slider-button-prev"><span><i
                            class="las la-long-arrow-alt-left"></i></span>Prev</div>
                <div class="slider-pagination"></div>
                <div class="slider-control slider-button-next">Next<span><i
                            class="las la-long-arrow-alt-right"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!--/.slider-section-->

    <section class="about-section padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-img">
                        @if(isset($about->image) && $about->image !='')
                            <img class="about-img1 wow fade-in-left" data-wow-delay="200ms" src="{{asset('uploads/about_us/'.$about->image)}}" alt="img">
                        @endif                        
                        <!-- <img class="about-img2 wow fade-in-bottom" data-wow-delay="400ms" src="assets/img/about-2.png" alt="img">
                        <figure class="round-text"><img src="assets/img/experience-text-round.png" alt="img"></figure> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-heading mb-40 wow fade-in-right" data-wow-delay="200ms">
                        <h4><span></span>About Our Company</h4>
                        <h2>{{isset($about->title) && $about->title ? $about->title : ''}}</h2>
                        <p>{{isset($about->description) && $about->description ? $about->description : ''}}</p>
                    </div>
                    <!--/.section-heading-->
                    <ul class="about-info wow fade-in-right" data-wow-delay="400ms">
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

    <section class="service-section bg-grey padding">
        <div class="bg-half"></div>
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h4><span></span>What We Offer</h4>
                <h2 class="white">Start your journey with<br>Ridek Taxi Company!</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly
                    master new technologies.</p>
            </div>
            <!--/.section-heading-->
            <div class="swiper-outside">
                <div class="service-carousel">
                    <div class="swiper-wrapper">
                        @if(isset($offer) && $offer->count())
                            @foreach($offer as $value)
                                <div class="swiper-slide">
                                    <div class="service-item wow fade-in-bottom" data-wow-delay="200ms">
                                        <div class="service-thumb">
                                            <img src="{{asset('uploads/offer/'.$value->image)}}" alt="img">
                                            <!-- <div class="service-shape-wrap">
                                                <div class="service-shape"></div>
                                            </div> -->
                                            <!-- <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div> -->
                                        </div>
                                        <div class="service-content">
                                            <h3><a href="service-details.html">{{$value->title}}</a></h3>
                                            <p>{{$value->description}}</p>
                                            <a class="read-more" href="service-details.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
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
                        <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and
                            regularly master technologies.</p>
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
                                                        <div class="author-thumb">
                                                        @if($value->image !='' && $value->image)
                                                            <img src="{{asset('uploads/testimonial/'.$value->image)}}" alt="author">
                                                        @endif
                                                        </div>
                                                    
                                                    <div class="author-info">
                                                        <h3>{{$value->name}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="swiper-pagination"></div><!-- Carousel Dots -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-wrap">
                        <div class="section-heading mb-30 wow fade-in-right" data-wow-delay="200ms">
                            <h4 class="white"><span></span>Why Choose Us!</h4>
                            <h2 class="white">Why Ride with Ridek?</h2>
                            <p class="white">We successfully cope with tasks of varying complexity, provide long-term
                                guarantees and regularly master technologies.</p>
                        </div>
                        <!--/.section-heading-->
                        <ul class="ridek-features">
                            <li class="wow fade-in-right" data-wow-delay="300ms">
                                <div class="feature-icon">
                                    <i class="las la-gem"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Safe Guarantee</h3>
                                    <p>We successfully cope with tasks of <br> varying complexity!</p>
                                </div>
                            </li>
                            <li class="wow fade-in-right" data-wow-delay="400ms">
                                <div class="feature-icon">
                                    <i class="las la-taxi"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Fast Pickups</h3>
                                    <p>We successfully cope with tasks of <br> varying complexity!</p>
                                </div>
                            </li>
                            <li class="wow fade-in-right" data-wow-delay="500ms">
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

    <section class="cta-section padding mb-5">
        <div class="cta-men wow fade-in-bottom" data-wow-delay="200ms"></div>
        <div class="container">
            <div class="cta-content">
                <h2>Call Us Now <span>Book Your Taxi</span> <br> For Your Next Ride!</h2>
                <p>We successfully cope with tasks of varying complexity,<br>guarantees and regularly master new
                    technologies.</p>
                <div class="cta-call">
                    <i class="las la-phone-volume"></i>
                    <p><span>Call For Taxi</span><a href="tel:5267214392">5267-214-392</a></p>
                </div>
            </div>
        </div>
    </section>
    <!--/.cta-section-->

@endsection