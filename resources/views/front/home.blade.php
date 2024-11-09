@extends('layouts.frontlayout')
@section('content')
<!-- Begin Page Content -->

@php
@endphp

<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <div class="header-carousel-item-img-1">
            <img src="{{ URL::to('front') . "/img/" . 'carousel-1.jpg' }}" class="img-fluid w-100" alt="Image">
        </div>
        <div class="carousel-caption">
            <div class="carousel-caption-inner text-center p-3">
                <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated"
                    data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">CARING FOR LIFE
                    GLOBALLY </h1>
                <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                    style="animation-delay: 1.5s;">
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4 fadeInUp animate__animated"
                    data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">TAKE A TOUR
                </a>
            </div>
        </div>
    </div>
    <div class="header-carousel-item mx-auto">
        <div class="header-carousel-item-img-2">
            <img src="{{ URL::to('front') . "/img/" . 'carousel-2.jpg' }}" class="img-fluid w-100" alt="Image">
        </div>
        <div class="carousel-caption">
            <div class="carousel-caption-inner text-center p-3">
                <h1 class="display-1 text-capitalize text-white mb-4">The most prestigious Investments company in
                    worldwide.</h1>
                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4" href="#">Apply Now</a>
                <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="#">Read More</a>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <div class="header-carousel-item-img-3">
            <img src="{{ URL::to('front') . "/img/" . 'carousel-3.jpg' }}" class="img-fluid w-100" alt="Image">
        </div>
        <div class="carousel-caption">
            <div class="carousel-caption-inner text-end p-3">
                <h1 class="display-1 text-capitalize text-white mb-4">The most prestigious Investments company in
                    worldwide.</h1>
                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4" href="#">Apply Now</a>
                <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="#">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- count Start -->
<div class="container-fluid counter bg-dark">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4 text-center align-items-center justify-content-center">
                <div class="col-sm-3">
                    <div class="bg-dark rounded p-4">
                        <div class="d-flex align-items-center justify-content-center"><i
                                class="fa fa-box-open text-30"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value fs-1 text-white" data-toggle="counter-up">500</span>
                            <h4 class="text-white fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            <p class="mb-0">Product Range</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="bg-dark rounded p-4">
                        <div class="d-flex align-items-center justify-content-center"><i
                                class="fa fa-thumbs-up text-30"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value fs-1 text-white" data-toggle="counter-up">10,000</span>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            <p class="mb-0">HAPPY CLIENTS</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="bg-dark rounded p-4">
                        <div class="d-flex align-items-center justify-content-center"><i
                                class="fa fa-handshake text-30"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value fs-1 text-white" data-toggle="counter-up">70</span>
                            <h4 class="text-white fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            <p class="mb-0">DEALERS</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="bg-dark rounded p-4">
                        <div class="d-flex align-items-center justify-content-center"><i
                                class="fa fa-building text-30"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value fs-1 text-white" data-toggle="counter-up">5</span>
                            <h4 class="text-white fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            <p class="mb-0">OUTLETS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                    <div class="col-xl-5"><a href="#" class="btn btn-primary rounded-pill py-3 px-5">Discover
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


<!-- Project Start -->
<div class="container-fluid project overlaybg">
    <div class="container">
        <div class="project-carousel  owl-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="project-item wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-img">
                    <img src="{{ URL::to('front') . "/img/" . 'projects-1.jpg' }}" class="img-fluid w-100 rounded"
                        alt="Image">
                </div>
                <div class="project-content bg-light rounded p-4">
                    <div class="project-content-inner">
                        <p class="text-dark fs-5 mb-3">Our Vision</p>
                        <p class="visionheight">'To serve' is the foremost priority of SAAGGIFO across all its business
                            domains. We strictly adhere to the policy of generating eco-friendly and bio-degradable
                            products for the better health of the planet and its populace. We envisage creating newer
                            opportunities to extend our support to the young and upcoming generation of entrepreneurs in
                            the respective fields of our operation. Our core values and fundamental beliefs define our
                            vision to help people distinguish between ethical and unethical practices.</p>
                        <div class="pt-4">
                            <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-item wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-img">
                    <img src="{{ URL::to('front') . "/img/" . 'projects-1.jpg' }}" class="img-fluid w-100 rounded"
                        alt="Image">
                </div>
                <div class="project-content bg-light rounded p-4">
                    <div class="project-content-inner">
                        <p class="text-dark fs-5 mb-3">Our Mission</p>
                        <p class="visionheight">The SAAGGIFO group of companies aims to achieve global recognition and
                            presence through its uncompromising zeal and unparallel commitment of providing top-notch
                            product, services and solutions in the near future.</p>
                        <div class="pt-4">
                            <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Project End -->

<!-- FAQ Start -->
<div class="container-fluid faq py-5 broucherbg">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="pb-5">
                    <h1 class="text-primary">EXPERIENCE THE</h1>
                    <h1 class="display-4">LUXURY</h1>
                    <a class="faq-btn btn btn-primary rounded-pill text-white py-3 px-5" href="#">DOWNLOAD BROUCHURE <i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="faq-img RotateMoveRight rounded">
                    <img src="{{ URL::to('front') . "/img/" . 'projects-1.jpg' }}" class="img-fluid rounded w-75"
                        alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ End -->

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-4"> Our Brands</h1>
        </div>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="{{ URL::to('front') . "/img/" . 'service-1.jpg' }}"
                            class="img-fluid w-100 rounded-top" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="{{ URL::to('front') . "/img/" . 'service-1.jpg' }}"
                            class="img-fluid w-100 rounded-top" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded">
                    <div class="service-img">
                        <img src="{{ URL::to('front') . "/img/" . 'service-1.jpg' }}"
                            class="img-fluid w-100 rounded-top" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Services End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial bg-light py-5">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="h-100 rounded">
                    <h2 class="text-primary">Featured</h2>
                    <h1 class="display-4 mb-4">Products</h1>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <img src="{{ URL::to('front') . "/img/" . 'service-1.jpg' }}"
                                class="img-fluid w-100 rounded-top" alt="">
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <img src="{{ URL::to('front') . "/img/" . 'service-1.jpg' }}"
                                class="img-fluid w-100 rounded-top" alt="">
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <img src="{{ URL::to('front') . "/img/" . 'service-1.jpg' }}"
                                class="img-fluid w-100 rounded-top" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Team Start -->
<div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-4">Group of Directors</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <div class="team-img">
                        <img src="{{ URL::to('front') . "/img/" . 'team-2.jpg' }}" class="img-fluid w-100 rounded-top"
                            alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <div class="team-icon-share">
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content bg-dark text-center rounded-bottom p-4">
                        <div class="team-content-inner rounded-bottom">
                            <h4 class="text-white">Mr. Kaaushik Kar</h4>
                            <p class="text-muted mb-0">CEO & Founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded">
                    <div class="team-img">
                        <img src="{{ URL::to('front') . "/img/" . 'team-1.jpg' }}" class="img-fluid w-100 rounded-top"
                            alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <div class="team-icon-share">
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content bg-dark text-center rounded-bottom p-4">
                        <div class="team-content-inner rounded-bottom">
                            <h4 class="text-white">Mrs. Papia Kar</h4>
                            <p class="text-muted mb-0">Executive Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial bg-light py-5">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="h-100 rounded">
                    <h2 class="text-primary">Happy </h2>
                    <h1 class="display-4 mb-4">Customers are Talking</h1>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam eos
                                impedit eveniet dolorem culpa ullam incidunt vero quo recusandae nemo? Molestiae
                                doloribus iure,
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Person Name</h5>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="bg-white rounded-circle ms-3">
                                <img src="{{ URL::to('front') . "/img/" . 'testimonial-1.jpg' }}"
                                    class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam eos
                                impedit eveniet dolorem culpa ullam incidunt vero quo recusandae nemo? Molestiae
                                doloribus iure,
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Person Name</h5>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="bg-white rounded-circle ms-3">
                                <img src="{{ URL::to('front') . "/img/" . 'testimonial-2.jpg' }}"
                                    class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam eos
                                impedit eveniet dolorem culpa ullam incidunt vero quo recusandae nemo? Molestiae
                                doloribus iure,
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Person Name</h5>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="bg-white rounded-circle ms-3">
                                <img src="{{ URL::to('front') . "/img/" . 'testimonial-3.jpg' }}"
                                    class="rounded-circle p-2"
                                    style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection