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

    <section class="service-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row">
                @if(isset($services) && $services->count())
                    @foreach($services as $value)
                        <div class="col-lg-4 col-sm-6 padding-15">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/img/service-1.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="{{asset('uploads/service/'.$value->image)}}" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="{{route('servicedetails')}}">{{$value->name}}</a></h3>
                                    <p>{{$value->description}}</p>
                                    <a class="read-more" href="{{route('servicedetails')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <!-- <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="assets/img/service-1.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="{{route('servicedetails')}}">Regular Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                            <a class="read-more" href="{{route('servicedetails')}}">Read More</a>
                        </div>
                    </div>
                </div>
                     <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="assets/img/service-1.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="{{route('servicedetails')}}">Regular Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                            <a class="read-more" href="{{route('servicedetails')}}">Read More</a>
                        </div>
                    </div>
                </div>
                     <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="assets/img/service-1.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="{{route('servicedetails')}}">Regular Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                            <a class="read-more" href="{{route('servicedetails')}}">Read More</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
@endsection