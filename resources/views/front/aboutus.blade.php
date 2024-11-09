@extends('layouts.frontlayout')
@section('content')
<!-- Begin Page Content -->

@php
@endphp
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-primary">About</li>
        </ol>
    </div>
</div>

<!-- Header End -->
<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <h3><span class="text-dark">WHO WE </span><span class="text-primary">ARE</span></h3>

                <p class="text ps-4 mb-4">The SAAGGIFO GROUP is committed to enhance the standard of experiencing your
                    journey of life through their quality products, services and solutions in various segments. We are
                    here to provide high level of efficient professional support in fields like media and entertainment,
                    chemical solutions and pharmaceutical drugs, travel and hospitality, interiors and buildings and
                    technological services and solutions.
                    SAAGGIFO boasts of a group of highly skilled and passionate professionals who are eager and
                    enthusiastic to set new goals in client satisfaction and achieve excellence with panache. The group
                    conducts all of its business activities within the stringent parameters of sustainable business
                    practices and hence is attuned to GENERATE and not simply EARN revenues at the cost of the society,
                    people and the planet at large
                </p>

                <div class="row g-4 justify-content-between mb-5">
                    <div class="col-xl-5"><a href="#" class="btn btn-primary rounded-pill py-3 px-5"> Discover
                            More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-img">
                    <img src="{{ URL::to('front') . "/img/" . 'about-2.jpg' }}" class="img-fluid w-100 rounded-bottom"
                        alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection