@extends('layouts.app')

@section('content')

    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <img class="img-fluid mb-5" src="img/logo2.png">
                    <h2 style="color:#fff">OUR FOCUS</h2>
                    <p>Binding Principle, Call to Action, Binding Principles, Guiding Principles, Basic Foundation</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section1">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="servicebox text-center">
                        <div class="service-icon">
                            {{-- <div class="dm-icon-effect-1" data-effect="slide-left">
                                <a href="#" class=""> <i class="active dm-icon fa fa-rocket fa-3x primary-color"></i> </a>
                            </div> --}}
                            <div class="servicetitle">
                                <h4 class="primary-color">Mission</h4>
                                <hr>
                            </div>
                            <p>To Serve our Community with love Respect and honor to our fellow neighbors.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="servicebox text-center">
                        <div class="service-icon">
                            {{-- <div class="dm-icon-effect-1" data-effect="slide-bottom">
                                <a href="#" class=""> <i class="active dm-icon fa fa-eye fa-3x primary-color"></i> </a>
                            </div> --}}
                            <div class="servicetitle">
                                <h4 class="primary-color">Vision</h4>
                                <hr>
                            </div>
                            <p>We will lead in Delivering Positive Results in Integrated Homeowners Management System.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="servicebox text-center">
                        <div class="service-icon">
                            {{-- <div class="dm-icon-effect-1" data-effect="slide-right">
                                <a href="#" class=""> <i class="active dm-icon fa fa-book fa-3x primary-color"></i> </a>
                            </div> --}}
                            <div class="servicetitle">
                                <h4 class="primary-color">Core Values</h4>
                                <hr>
                            </div>
                            <p>Innovation, Quality, Collaboration, Performance, Integrity, Commitment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 columns">
                    <div class="widget" data-effect="slide-left">
                        <img src="img/res-img.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 columns">
                    <div class="widget clearfix">
                        <div class="services_lists">
                            <div class="services_lists_boxes clearfix">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                                            <a href="#" class=""> <i class="active dm-icon-medium fa fa-key fa-2x"></i> </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="servicetitle">
                                            <h4>HO Account</h4>
                                            <hr>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since..</p>
                                    </div>
                                </div>
                            </div>

                            <div class="services_lists_boxes clearfix">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                                            <a href="#" class=""> <i class="active dm-icon-medium fa fa-car fa-2x"></i> </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="servicetitle">
                                            <h4>Car Stickers</h4>
                                            <hr>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard..</p>
                                    </div>
                                </div>
                            </div>

                            <div class="services_lists_boxes clearfix">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                                            <a href="#" class=""> <i class="active dm-icon-medium fa fa-book fa-2x"></i> </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="servicetitle">
                                            <h4>Reservation</h4>
                                            <hr>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard..</p>
                                    </div>
                                </div>
                            </div>

                            <div class="services_lists_boxes clearfix">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                                            <a href="#" class=""> <i class="active dm-icon-medium fa fa-credit-card fa-2x"></i> </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="servicetitle">
                                            <h4>Payment</h4>
                                            <hr>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section2">
        <div class="container">
            <div class="message text-center">
                <h2 class="big-title">Nothing is <span class="primary-color">better</span> than going home!</h2>
                <p class="small-title">Lorem Ipsum is simply dummy text of the printing and typesetting industy has been the industry"s standard.</p>
                <a class="button large" href="#">ABOUT OUR SERVICES</a> <a class=" dmbutton button large primary-bg" href="#">CONTACT US TODAY</a>
            </div>
        </div>
    </section>

    <section class="section3">
        <div class="container withpadding">
            <div class="message">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
                        <h3>HOMEOWNERS INSURANCE</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s..</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                        <a class="dmbutton button large pull-right primary-bg" href="#"> View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@include('inc.footer')

@endsection