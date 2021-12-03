@extends('website.master')
@section('web_content')
    
  

     <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80 section">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">Contact</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper section">

            <!-- ADDRESS SECTION START -->
            <div class="address-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-address box-shadow">
                                <i class="zmdi zmdi-pin"></i>
                                <h6>82 Somerville Hampton Park VIC 3976</h6>
                                <h6>3 Lawrence Street, Blackburn South VIC 3130</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-address box-shadow">
                                <i class="zmdi zmdi-phone"></i>
                                <h6><a href="tel:(03) 8595 6677">(03) 8595 6677</a></h6>
                                <h6><a href="tel:(03) 8595 6677">(03) 8595 6677</a></h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-address box-shadow">
                                <i class="zmdi zmdi-email"></i>
                                <h6><a href="mailto:mmpr.tech@gmail.com">mmpr.tech@gmail.com</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ADDRESS SECTION END -->

            <!-- GOOGLE MAP SECTION START -->
            <div class="google-map-section">
                <div class="container-fluid">

                    <div class="google-map plr-185">
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ujkVrdpCvXNnSr8O0PraOkRSENEpyxBA" width="100%" height="480"></iframe>
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
            <!-- GOOGLE MAP SECTION END -->

            <!-- MESSAGE BOX SECTION START -->
            <div class="message-box-section mt--50 mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="message-box box-shadow white-bg">
                                <form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="blog-section-title border-left mb-30">get in touch</h4>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="con_name" placeholder="Your name here">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="con_email" placeholder="Your email here">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="con_subject" placeholder="Subject here">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="con_phone" placeholder="Your phone here">
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea class="custom-textarea" name="con_message"
                                                placeholder="Message"></textarea>
                                            <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">submit
                                                message</button>
                                        </div>
                                    </div>
                                    <p class="form-message"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MESSAGE BOX SECTION END -->
        </section>
        <!-- End page content -->
@endsection