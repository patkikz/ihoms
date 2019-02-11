@extends('layouts.app')

@section('content')

<div class="py-2 mt-2 clearfix"></div>

<section class="section1 mt-5">
    <div class="container clearfix">
        <div class="row">
            <div class="content col-lg-12 col-md-12 col-sm-12 clearfix my-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-5 offset-lg-3">
                        <h4 class="title text-center">CONTACT FORM</h4>
                        <hr>
                        <div id="message"></div>
                        <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">
            
                        <div class="form-group">
                            <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        </div>
            
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                        </div>
            
                        <div class="form-send">
                            <button type="submit" class="btn btn-primary primary-bg rounded-0">Send Message</button>
                        </div>
            
                        </form>
                        <hr>
                    </div>
            
                    <div class="clearfix"></div>
                    <div class="divider"></div>
            
                    {{-- <h4 class="title">Social Media</h4>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="servicebox text-center">
                        <div class="service-icon">
                            <div class="dm-icon-effect-1" data-effect="slide-bottom">
                            <a href="#" class=""> <i class="dm-icon fa fa-facebook fa-3x"></i> </a>
                            </div>
                            <div class="servicetitle">
                            <h4>Facebook</h4>
                            </div>
                        </div>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="servicebox text-center">
                        <div class="service-icon">
                            <div class="dm-icon-effect-1" data-effect="slide-bottom">
                            <a href="#" class=""> <i class="dm-icon fa fa-twitter fa-3x"></i> </a>
                            </div>
                            <div class="servicetitle">
                            <h4>Twitter</h4>
                            </div>
                        </div>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="servicebox text-center">
                        <div class="service-icon">
                            <div class="dm-icon-effect-1" data-effect="slide-bottom">
                            <a href="#" class=""> <i class="dm-icon fa fa-google-plus fa-3x"></i> </a>
                            </div>
                            <div class="servicetitle">
                            <h4>Google Plus</h4>
                            </div>
                        </div>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="servicebox text-center">
                        <div class="service-icon">
                            <div class="dm-icon-effect-1" data-effect="slide-bottom">
                            <a href="#" class=""> <i class="dm-icon fa fa-instagram fa-3x"></i> </a>
                            </div>
                            <div class="servicetitle">
                            <h4>Instagram</h4>
                            </div>
                        </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

@include('inc.footer')

@endsection