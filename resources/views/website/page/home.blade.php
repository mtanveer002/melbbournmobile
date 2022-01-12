@extends('website.master')
@section('web_content')
    
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<section class="hero-section">
    <div class="container">
        <div class="row">
            <!-- tablet design -->
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <div class="carousel-background">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="tab-bottom-bar">
                            <a href="#"><i class="fas fa-home"></i></a>
                            <a href="/contact.html"><i class="fas fa-portrait"></i></a>
                            <a href="/shop.html"><i class="fas fa-cart-arrow-down"></i></a>
                            <a href="#"><i class="fas fa-shield-alt"></i></a>
                            <a href="#"><i class="fas fa-question-circle"></i></a>
                        </div>
                        <div class="carousel-inner">
                            
                          <div class="carousel-item active  item-1">
                            
                            <div class="hero-text">
                                <h1>PROVIDING</h1>
                                <h2>VAN SERVICES</h2>
                            <p class="h5 aa mb-4 pb-3 text-white-50">
                                Choose our store pickup option and have your phone picked up and delivered to your doorstep hassle-free! Check out how here.
                        </p>
                            </div>
                          </div>
                          <div class="carousel-item item-2">
                            
                            <div class="hero-text">
                                <h1>PROVIDING</h1>
                                <h2>SHOP SERVICES</h2>
                            <p class="h5 aa mb-4 pb-3 text-white-50">
                                Book an appointment at either our Blackburn or Hampton Park branch and stay within your 5 mile radius. Stay safe, get your phone fixed!
                        </p>
                            </div>
                          </div>
                          <div class="carousel-item item-3">
                            <div class="hero-text">
                                <h1>PROVIDING</h1>
                                <h2>WEB SERVICES</h2>
                            <p class="h5 aa mb-4 pb-3 text-white-50">
                                Get your phone fixed in no time by booking at your convenient timeframe. Contact us and let us know on <a href="tel:(03) 8595 6677">(03) 8595 6677</a>
                        </p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
            <!-- mobile form -->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="booking-form" >
                    <div class="dark">
                        <div class="form form1">
                            <h5 class="get-quote-button ">Get Free Quote</h5>
                            <form action="{{route('saveQuote')}}"  method="post" enctype="multipart/form-data">
                                @csrf
                                <div id="first-form" class="first-form">
                                    <div class="select-option">
                                        <label for="label-title">Device:</label>
                                        <select name="brand"  id="brand_device">
                                           <option value="">Select Brand</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->brand}}</option>
                                            @endforeach                                                                              
                                        </select>
                                    </div>
                                    <div class="select-option">
                                        <label for="label-title">Model:</label>
                                        <select name="modal" id="modal_device">
                                                                                                       
                                        </select>
                                    </div>
                                    <div class="select-option">
                                        <label for="label-title">Device Issue:</label>
                                        <select name="issue" id="issue_device">
                                            <option value="">Select Issue</option>
                                        </select>
                                        <div class="select-option">
                                            <label for="label-title">Description:</label>
                                                <input type="text" placeholder="Description" name="description" id="">
                                        </div>
                                    </div>

                                    <h3 class="next" onclick="goNext()">Go Next <i class="fas fa-arrow-circle-right" style="margin: 3%;"></i></h3>
                                </div>
                                <div id="second-form" class="second-form" style="display: none;" >
                                        <div class="select-option s">
                                            <label for="name">Name:</label>
                                            <input type="text" name="name" placeholder="Name" id="name" required>
                                        </div>
                                        <div class="select-option s">
                                            <label for="email">Email:</label>
                                            <input type="email" placeholder="Email" name="email" id="email" required>
                                        </div>
                                        <div class="select-option s">
                                            <label for="number">Phone:</label>
                                            <input type="number" placeholder="Phone Number" name="number" id="number" required>
                                        </div>
                                        <div class="select-option op">
                                        <label for="label-title">Our branches:</label>
                                        <select name="brand"  id="brand_device">
                                           <option value="">Select Shop</option>
                                            <option value="">Hampton Park</option>
                                            <option value="">Blackburn</option>
                                                                                                                        
                                        </select>
                                        </div>
                                        <!-- <h3 class="next" onclick="goBack()">Go Back <i class="fas fa-arrow-circle-right"></i></h3> -->
                                        <button type="submit">SUBMIT</button>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{ asset('frontend/assets/img/hero/hero-1.jpg') }}"></div>
        <div class="hs-item set-bg" data-setbg="{{ asset('frontend/assets/img/hero/hero-2.jpg') }}"></div>
        <div class="hs-item set-bg" data-setbg="{{ asset('frontend/assets/img/hero/hero-3.jpg') }}"></div>
    </div>
</section>

    <!-- START PAGE CONTENT -->
    <section id="page-content" class="page-wrapper section">

        <!-- steps repairing section -->
        <div class="tips container-fluid">
            <div class="container">
                <div class="text-center">
                    <h2>WE COME TO YOU</h2>
                        <p>Mobile repairing usually takes longer than expected but here at MMPR, We repair your mobile device in three easy steps:</p>
                       <div class="row process">
                           <div class="col-lg-3">
                            <div class="icon"><i class="fas fa-info-circle" data-toggle="modal" data-target="#van"></i>
                                <span>Van Details</span></div>
                                <!-- van model -->
                            <div class="modal fade" id="van" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Providing Van Services</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('frontend/assets/img/modal/van.gif') }}" alt="">
                                      <p>Choose our store pickup option and have your phone picked up and delivered to your doorstep hassle-free! Check out how here.</p>
                                    </div>
                                    <div class="modal-footer">
                                      
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <i class="fas fa-shuttle-van repair-icon"></i>
                            <p>Providing van services to you</p>
                            </div>
                            <div class="col-lg-1">
                                <i class="fas fa-ellipsis-h"></i>
                            </div>
                           <div class="col-lg-3">
                            <div class="icon"><i class="fas fa-info-circle" data-toggle="modal" data-target="#shop"></i>
                                <span>Shop Details</span></div>
                                <!-- van model -->
                            <div class="modal fade col-12" id="shop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Choose Our Branches</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('frontend/assets/img/modal/BRANCHES.gif') }}" alt="">
                                      <p>Book an appointment at either our Blackburn or Hampton Park branch and stay within your 5 mile radius. Stay safe, get your phone fixed!</p>
                                    </div>
                                    <div class="modal-footer">
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <i class="fas fa-store-alt repair-icon"></i>
                            <p>Choose Our Nearest Shop</p>
                           </div>
                           <div class="col-lg-1">
                            <i class="fas fa-ellipsis-h"></i>
                           </div>
                           <div class="col-lg-3">
                            <div class="icon"><i class="fas fa-info-circle" data-toggle="modal" data-target="#website"></i>
                                <span>Website Details</span></div>
                                <!-- van model -->
                            <div class="modal fade" id="website" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Book an appointment with our team!</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('frontend/assets/img/modal/website_g.gif') }}" alt="">
                                      <p>Get your phone fixed in no time by booking at your convenient timeframe. Contact us and let us know your issue on this number: <br><a href="tel:(03) 8595 6677">tel:(03) 8595 6677</a></p>
                                    </div>
                                    <div class="modal-footer">
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <i class="fas fa-globe repair-icon"></i>
                            <p>Registered on the website</p>
                        </div>
                           </div>
                       </div>
                </div>
            
        </div>
        <!-- end steps repairing section -->y
        <!-- BANNER-SECTION START -->
        <div class="banner-section ptb-60">
            <div class="container">
                <h2>DEVICES WE FIX</h2>
                <hr>
                <div class="row">
                    <!-- banner-item start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-item banner-3">
                            <div class="banner-img">
                                <a href="#"><img src="{{ asset('frontend/assets/img/banner/2.png') }}" alt=""></a>
                            </div>
                            <div class="banner-opacity">
                                <div class="banner-info">
                                    <h3 class="banner-title-2"><a href="#">iPad &amp; Tablets</a></h3>
                                    <ul class="banner-featured-list">
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>Battery Replacement</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>Screen Replacement</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>Camera Replacement</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>speaker Replacement</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>Charging Port ...</span>
                                        </li>
                                    </ul>
                                    <!-- <div class="banner-button">
                                       <a href="#">Discover <i class="zmdi zmdi-long-arrow-right"></i></a> 
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- banner-item end -->
                    <!-- banner-item start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-item banner-3">
                            <div class="banner-img">
                                <a href="#"><img src="{{ asset('frontend/assets/img/banner/3.webp') }}" alt=""></a>
                            </div>
                            <div class="banner-opacity">
                            <div class="banner-info ">
                                <h3 class="banner-title-2"><a href="#">Macbook &amp; Laptops</a></h3>
                                <ul class="banner-featured-list">
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Charging Port Replacement</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Battery Replacement</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Water Damage</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Screen Replacement</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Speaker Replacement ...</span>
                                    </li>
                                </ul>
                                <!-- <div class="banner-button">
                                   <a href="#">Discover <i class="zmdi zmdi-long-arrow-right"></i></a> 
                                </div> -->
                            </div>
                            </div>
                        </div>
                    </div> 
                    <!-- banner-item end -->
                    <!-- banner-item start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-item banner-3">
                            <div class="banner-img">
                                <a href="#"><img src="{{ asset('frontend/assets/img/banner/4.jpg') }}" alt=""></a>
                            </div>
                            <div class="banner-opacity">
                            <div class="banner-info">
                                <h3 class="banner-title-2"><a href="#">iPhone &amp; Android</a></h3>
                                <ul class="banner-featured-list">
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Screen Replacement</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Home Button Replacement</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Battery Replacement</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Speaker Replacement</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Charging Port Replacement ...</span>
                                    </li>
                                </ul>
                                <!-- <div class="banner-button">
                                   <a href="#">Discover <i class="zmdi zmdi-long-arrow-right"></i></a> 
                                </div> -->
                            </div>
                            </div>
                        </div>
                    </div> 
                    <!-- banner-item end -->
                </div>
            </div>
        </div> 
        <!-- BANNER-SECTION END --> 

        
        <!-- Section: Features v.4 -->
        <div class="banner-section container">
            <section class="my-5">

                <!-- Section heading -->
                <h2 class="  font-weight-bold text-center my-5">DEVICE ISSUES WE FIX</h2>
                <!-- Section description -->
                <p class="lead grey-text text-center w-responsive mx-auto mb-5">BEST SERVICES AT DISCOUNTED PRICES</p>
            
                <!-- Grid row -->
                <div class="features row">
            
                <!-- Grid column -->
                <div class="col-md-4">
            
                    <!-- Grid row -->
                    <div class="features-categories row mb-3">
            
                    <!-- Grid column -->
                    <div class="col-2">
                        <i class="fas fa-2x fa-home deep-purple-text"></i>
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-10">
                        <h5 class="font-weight-bold mb-3">HOME BUTTON ISSUES</h5>
                        <p class="grey-text">Is your home button stuck, sunken or just not working? We can replace home buttons, power buttons, volume buttons, almost any button you can think of, just not the buttons on your shirt!</p>
                    </div>
                    <!-- Grid column -->
            
                    </div>
                    <!-- Grid row -->
            
                    <!-- Grid row -->
                    <div class="features-categories row mb-3">
            
                    <!-- Grid column -->
                    <div class="col-2">
                        <i class="fas fa-2x fa-thermometer-full deep-purple-text"></i>
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-10">
                        <h5 class="font-weight-bold mb-3">OVERHEATING ISSUES</h5>
                        <p class="grey-text">If your phone feels uncomfortably hot, or warms up more than usual doing everyday tasks, you might have a battery or motherboard issue. Small short circuits in the device can cause certain areas of the phone to heat up, our technicians face these issues every day!</p>
                    </div>
                    <!-- Grid column -->
            
                    </div>
                    <!-- Grid row -->
            
                    <!-- Grid row -->
                    <div class="features-categories row mb-md-0 mb-3">
            
                    <!-- Grid column -->
                    <div class="col-2">
                        <i class="fas fa-2x fa-water deep-purple-text"></i>
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-10">
                        <h5 class="font-weight-bold mb-3">LIQUID DAMAGE</h5>
                        <p class="grey-text mb-md-0">Recently dropped your phone in the toilet, ocean or the bathtub? We can fix that! We have over 83% success rate on liquid damage repairs, our technicians do everything possible to recover your data and repair the phone..</p>
                    </div>
                    <!-- Grid column -->
            
                    </div>
                    <!-- Grid row -->
            
                </div>
                <!-- Grid column -->
            
                <!-- Grid column -->
                <div class="col-md-4 text-center">
                    <img class="img-fluid" src="{{ asset('frontend/assets/img/product-2/1.png') }}"
                    alt="Sample image">
                </div>
                <!-- Grid column -->
            
                <!-- Grid column -->
                <div class="col-md-4">
            
                    <!-- Grid row -->
                    <div class="features-categories row mb-3">
            
                    <!-- Grid column -->
                    <div class="col-2">
                        <i class="fas far fa-2x fa-volume-up deep-purple-text"></i>
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-10">
                        <h5 class="font-weight-bold mb-3">SPEAKER ISSUES</h5>
                        <p class="grey-text">Distorted speakers? You can’t hear your friends on calls? Speakers are very fragile and can be clogged or damaged by dust. To save you money we’ll try to clean and service your speakers before replacing them.</p>
                    </div>
                    <!-- Grid column -->
            
                    </div>
                    <!-- Grid row -->
            
                    <!-- Grid row -->
                    <div class="features-categories row mb-3">
            
                    <!-- Grid column -->
                    <div class="col-2">
                        <i class="fas fa-2x fa-tablet-alt deep-purple-text"></i>
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-10">
                        <h5 class="font-weight-bold mb-3">CRACKED LCD/SCREEN REPAIRS</h5>
                        <p class="grey-text">Damaged displays can be super annoying! Glass splitters can also stay stuck inside finger tips! We can replace your LCD, OLED, or just the glass, we’ll replace your screen the right way and have it looking brand new!.</p>
                    </div>
                    <!-- Grid column -->
            
                    </div>
                    <!-- Grid row -->
            
                    <!-- Grid row -->
                    <div class="features-categories row">
            
                    <!-- Grid column -->
                    <div class="col-2">
                        <i class="fas fa-2x fa-battery-full deep-purple-text"></i>
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-10">
                        <h5 class="font-weight-bold mb-3">PHONE BATTERY REPLACEMENTS</h5>
                        <p class="grey-text mb-0">Tired of your battery not lasting all day? Draining quicker than it used to? Bring it into any of our branches for a free battery health check up and have your battery replaced.</p>
                    </div>
                    <!-- Grid column -->
            
                    </div>
                    <!-- Grid row -->
            
                </div>
                <!-- Grid column -->
            
                </div>
                <!-- Grid row -->
            
            </section>
        </div>
        <!-- Section: Features v.4 -->



        <!-- UP COMMING PRODUCT SECTION START -->
        <div class="up-comming-product-section ptb-60">
            <div class="container">
                <div class="row">
                    <!-- up-comming-pro -->
                    <div class="col-lg-8">
                        <div class="up-comming-pro gray-bg up-comming-pro-2 clearfix">
                            <div class="up-comming-pro-img f-left">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/img/up-comming/2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="up-comming-pro-info f-left">
                                <h3><a href="#">Apple Repairs</a></h3>
                                <p>We provide facility to repair every part of iWatches including all internal and external damages. We do the best in a very short period of time within 10 - 20 mins. </p>
                                <div class="up-comming-time-2 clearfix">
                                    <div data-countdown="2019/01/15"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-block d-md-none d-lg-block">
                        <div class="banner-item banner-1">
                            <div class="ribbon-price">
                                <span>FIX IT</span>
                            </div>
                            <div class="banner-img">
                                <a href="#"><img src="{{ asset('frontend/assets/img/banner/iWatch.png') }}" alt=""></a>
                            </div>
                            <!-- <div class="banner-info">
                                <h3><a href="#">Product Name</a></h3>
                                <ul class="banner-featured-list">
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Lorem ipsum dolor</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>amet, consectetur</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>adipisicing elitest,</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>eiusmod tempor</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>labore et dolore.</span>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- UP COMMING PRODUCT SECTION END -->


        

        <!-- warranty section -->
        <div class="warranty container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h2>1 YEAR</h2>
                    <h2 class="heading-2">WARRANTY</h2>
                </div>
                <div class="col-lg-3">
                    <img id="loading" src="{{ asset('frontend/assets/img/banner/guaranteed.png') }}" alt="">
                </div>
                <div class="col-lg-5">
                    <h6>We take pride in providing our customers with the highest quality of service repairs and after purchase support.If you’re not happy with our repair or the parts used bring it back within a week for a full refund *Conditions apply*.</h6>
                </div>
            </div>
        </div>
        <!-- end steps repairing section -->




        <!-- BLOG SECTION START -->
        <div class="blog-section-2 pt-60 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left mb-40">
                            <h2 class="uppercase">Latest Updates</h2>
                            <h6>There are many variations of passages of brands available.</h6>
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="row active-blog-2">
                        <!-- blog-item start -->
                        <div class="col-lg-12">
                            <div class="blog-item-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image">
                                            <a href="single-blog.html"><img src="{{ asset('frontend/assets/img/blog/4.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog-desc">
                                            <h5 class="blog-title-2"><a href="#">iPhone 12</a></h5>
                                            <p>There are many variations of passages of in psum available, but the majority have sufe ered on in some form...</p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                        <!-- blog-item start -->
                        <div class="col-lg-12">
                            <div class="blog-item-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image">
                                            <a href="single-blog.html"><img src="{{ asset('frontend/assets/img/blog/5.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog-desc">
                                            <h5 class="blog-title-2"><a href="#">iPhone 12</a></h5>
                                            <p>There are many variations of passages of in psum available, but the majority have sufe ered on in some form...</p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                        <!-- blog-item start -->
                        <div class="col-lg-12">
                            <div class="blog-item-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image">
                                            <a href="single-blog.html"><img src="{{ asset('frontend/assets/img/blog/4.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog-desc">
                                            <h5 class="blog-title-2"><a href="#">iPhone 12</a></h5>
                                            <p>There are many variations of passages of in psum available, but the majority have sufe ered on in some form...</p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                    </div>
                </div>
            </div>
        </div>   
        <!-- BLOG SECTION END -->   
         
        <!-- NEWSLETTER SECTION START -->
        <div class="newsletter-section section-bg-tb pt-60 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="newsletter">
                            <div class="newsletter-info text-center">
                                <h2 class="newsletter-title">get a newsletter</h2>
                                <p>Make sure that you never miss our interesting news <br class="hidden-xs">by joining our newsletter program.</p>
                            </div>
                            <div class="subcribe clearfix">
                                <form action="#">
                                    <input type="text" name="email" placeholder="Enter your email here..."/>
                                    <button class="submit-btn-2 btn-hover-2" type="submit">subcribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- NEWSLETTER SECTION END=== -->            
    </section>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

 

<script type="text/javascript">
// auto search from select box
    $("#brand_device").select2({
          placeholder: "Select Brand",
          allowClear: true
      });

      $("#modal_device").select2({
          placeholder: "Select Modal",
          allowClear: true
      });

      $("#issue_device").select2({
          placeholder: "Select Issue",
          allowClear: true
      });

//auto slect modal according modal
      $('#brand_device').on('select2:selecting', function(e){
        var brand = e.params.args.data.id;
          if(brand) {
              $.ajax({
                  url: "{{  url('/admin/modal/ajax') }}/"+brand,
                  type:"GET",
                  dataType:"json",
                  success:function(data) {
                    
                     var d =$('select[name="modal"]').empty();
                     $('select[name="modal"]').append('<option value="">Select Model</option>');
                        $.each(data, function(key, value){
                            $('select[name="modal"]').append('<option value="'+ value.id +'">' + value.name + '</option>');
                        });
                  },
              });
             
          } else {
              alert('danger');
          }
      });

//auto select issues according modals
$('#modal_device').on('select2:selecting', function(e){
   
        var modal = e.params.args.data.id;
       console.log(modal)
          if(modal) {
              $.ajax({
                  url: "{{  url('/issue/modal/ajax') }}/"+modal,
                  type:"GET",
                  dataType:"json",
                  success:function(data) {
                   
                     var d =$('select[name="issue"]').empty();
                     $('select[name="issue"]').append('<option value="">Select Issue</option>');
                        $.each(data, function(key, value){
                            $('select[name="issue"]').append('<option value="'+ value.id +'">' + value.issue + '</option>');
                        });
                  },
              });
              
          } else {
              alert('danger');
          }
      });
</script>

{{-- for auto select box --}}

    @endsection