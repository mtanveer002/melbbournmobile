@extends('website.master')
@section('web_content')
 <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80 section">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">About</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.html">Home</a></li>
                                    <li>About</li>
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

    <!-- ABOUT SECTION START -->
    <div class="about-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left ">
                        <h2 class="">ABOUT MELBOURNE <br>MOBILE PHONE REPAIRS</h2>
                        <h6 class="mb-40">WHY CHOOSE US!</h6>
                    </div>
                </div>
            </div>                    
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-photo p-20 bg-img-1">
                        <img src="{{ asset('frontend/assets/img/others/about.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-description mt-50">
                        <p><strong>We take pride in providing our customers with the highest quality of service repairs and after purchase support.If you’re not happy with our repair or the parts used bring it back within a week for a full refund *Conditions apply*.</strong></p>

                        <ul>
                            <li><i class="fas fa-hand-point-right"></i>
                                We ensure there’s always an experienced technician at each location so there’s always an expert to handle anything you throw at them!</li>
                                <li><i class="fas fa-hand-point-right"></i>
                                    We’re partnered with Australia’s largest mobile phone and tablet parts suppliers. If the part is available in Australia, we’ll have it!</li>
                                    <li><i class="fas fa-hand-point-right"></i>
                                        Most repairs done On-Spot, you’ll never have to wait too long to get your device back!</li>
                                        <li><i class="fas fa-hand-point-right"></i>
                                            We’ve worked on 25,000+ devices, encountered the most difficult problems and we’re prepared to face even more.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION END --> 

    <!-- TEAM SECTION START -->
    <div class="team-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left ">
                        <h2 class="uppercase">team member</h2>
                        <h6 class="mb-40">We have a best and professional repairing staff.</h6>
                    </div>
                    <div class="active-team-member section" style="margin: 0 auto !important">
                        <!-- team-member start -->
                        <div class="team-member-item  col-md-4 col-sm-12 ">
                            <div class="team-member box-shadow bg-shape">
                                <div class="team-member-photo">
                                    <img src="{{ asset('frontend/assets/img/team/1.png') }}" alt="">
                                </div>
                                <div class="team-member-info pt-20">
                                    <h5 class="member-name"><a href="#">Waqar Hafeez</a></h5>
                                    <p class="member-position">CEO</p>
                                    <p class="mb-20">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                    <ul class="footer-social">
                                        <li>
                                            <a class="facebook" href="" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a class="google-plus" href="" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="rss" href="" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                        </li>
                                    </ul>                                     
                                </div>
                            </div>
                        </div>
                        <!-- team-member end -->
                        <!-- team-member start -->
                        <div class="team-member-item col-md-4 col-sm-12">
                            <div class="team-member box-shadow bg-shape">
                                <div class="team-member-photo">
                                    <img src="{{ asset('frontend/assets/img/team/1.png') }}" alt="">
                                </div>
                                <div class="team-member-info pt-20">
                                    <h5 class="member-name"><a href="#">Andy Guan</a></h5>
                                    <p class="member-position">Manager</p>
                                    <p class="mb-20">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                    <ul class="footer-social">
                                        <li>
                                            <a class="facebook" href="" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a class="google-plus" href="" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="rss" href="" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                        </li>
                                    </ul>                                     
                                </div>
                            </div>
                        </div>
                        <!-- team-member end -->
                        <!-- team-member start -->
                        <div class="team-member-item col-md-4 col-sm-12">
                            <div class="team-member box-shadow bg-shape">
                                <div class="team-member-photo">
                                    <img src="{{ asset('frontend/assets/img/team/3.png') }}" alt="">
                                </div>
                                <div class="team-member-info pt-20">
                                    <h5 class="member-name"><a href="#">Usman Khan</a></h5>
                                    <p class="member-position">Head Technician</p>
                                    <p class="mb-20">There are many variations of passage of Lorem Ipsum available, but the in majority have suffered.</p>
                                    <ul class="footer-social">
                                        <li>
                                            <a class="facebook" href="" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a class="google-plus" href="" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="rss" href="" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                        </li>
                                    </ul>                                     
                                </div>
                            </div>
                        </div>
                        <!-- team-member end -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM SECTION END -->             
</section>

@endsection