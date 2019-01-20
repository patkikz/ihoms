@extends('layouts.app')

@section('content')
<section class="section1">
        <div class="container clearfix">
                <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
                <div class="general-title text-center">
                <h3>ABOUT OUR COMPANY</h3>
                <p>Learn more about us</p>
                <hr>
                </div>
                <div class="divider"></div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="he-wrap tpl2">
                <img src="{{ asset('img/office.png') }}" alt="" class="img-responsive">
                <div class="he-view">
                        <div class="bg a0" data-animate="fadeIn">
                        <div class="center-bar">
                        <a href="#" class="twitter a0" data-animate="elasticInDown"></a>
                        <a href="#" class="facebook a1" data-animate="elasticInDown"></a>
                        <a href="#" class="google a2" data-animate="elasticInDown"></a>
                        </div>
                        </div>
                </div>
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                </div>
                </div>
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
        </section>

@include('inc.footer')

@endsection