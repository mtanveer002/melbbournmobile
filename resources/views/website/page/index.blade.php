<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Are you looking for your mobile phone repair on your doorstep? We'll Repair Your Phone Wherever And Whenever You Want.We can repair your broken iPhone, iPad, or Samsung Mobile Phone.">
    <meta name="keywords" content="iphone van repair near me ,iphone repair van in hampton park ,Phone repair van in blackburn ,samsung repair van in hampton park">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Best Mobile Phone Repair in Hampton Park | Mobile Repair Shop Blackburn </title>

    @include('website.layout.css')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        margin-left: -20px;  
    }

    .scrollbarWrapper {
        overflow-y: scroll;
        overflow-x: hidden;
    }
    .modal-footer{
        justify-content: center
    }
    .scrollbarWrapper::-webkit-scrollbar {
  width: 10px;
}

/* Track */
.scrollbarWrapper::-webkit-scrollbar-track {
  background: #000; 
  border-radius: 20px 0 0 20px;
  margin: 20px 0 60px 0;
}
 
/* Handle */
.scrollbarWrapper::-webkit-scrollbar-thumb {
  background: #fb6128; 
  /* border-radius: 0 20px 0 20px; */
  border-radius: 20px 0 0 20px;
}

/* Handle on hover */
.scrollbarWrapper::-webkit-scrollbar-thumb:hover {
  background: #fb6128; 
}
element.style {
    padding-bottom: 12px;
    padding-top: 25px;
}
    </style>
    </head>
<body>
    <!-- Body main wrapper start -->
   <div class="wrapper">

<!-- START HEADER AREA -->
<header class="header-area header-wrapper">
   @include('website.layout.topmenu')
</header>
<!-- END HEADER AREA -->
    {{-- @foreach ($counters as $count)
        {{ $count->views }}
    @endforeach --}}
    
    <section class="hero-section" id="goUp">
        <div class="container">
            <div class="row">
                <!-- tablet design -->
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="carousel-background">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="tab-bottom-bar">
                                <a href="{{route('index.home')}}"><i class="fas fa-home"></i></a>
                                <a href="{{route('contact')}}"><i class="fas fa-portrait"></i></a>
                                <a href="{{route('commingSoon')}}"><i class="fas fa-cart-arrow-down"></i></a>
                                <a href="{{route('terms.Condition')}}"><i class="fas fa-shield-alt"></i></a>
                                <a href="#news"><i class="fas fa-question-circle"></i></a>
                            </div>
                            <div class="carousel-inner">

                                <div class="carousel-item active  item-1">

                                    <div class="hero-text">
                                        <h1>Moving Mobile<br> Repairs!</h1>
                                        <p class="h5 aa mb-4 pb-3 pt-1 text-white-50">
                                            Get your phone repaired from the comfort of your home.
                                             We pick up and deliver your fixed phone to your doorstep!
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item item-2">

                                    <div class="hero-text">
                                        <h1>iPhone Screen Replacements</h1>
                                        <p class="h5 aa mb-4 pb-3 pt-1 text-white-50">
                                            For as low as $59, we fix your iPhones in an hour.
                                             <br><br>
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item item-3">
                                    <div class="hero-text">
                                        <h1>Android Repairs</h1>
                                        <p class="h5 aa mb-4 pb-3 pt-2 text-white-50">
                                            Melbourne Mobile Phone Repairs can replace screens of Android 
                                            devices and any other hardware and software issues.
                                        </p><br><br>
                                    </div>
                                </div>
                                {{-- <div class="carousel-item item-4">
                                    <div class="hero-text">
                                        <h1 style="font-size: 26px">iPhone Screen Replacements </h1>
                                        <p class="h5 aa mb-4 pb-3 text-white-50">
                                            For as low as $59, we fix your iPhones in under an hour. Click here to book an appointment.
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item item-4">
                                    <div class="hero-text">
                                        <h1>Introducing Moving Mobile Repairs!</h1>
                                        <p class="h5 aa mb-4 pb-3 text-white-50">
                                            Now get your phone repaired from the comfort of your home. We pick up and deliver your fixed phone to your doorstep! Click here to check it out.
                                        </p>
                                    </div>
                                </div> --}}
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- mobile form -->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="booking-form">
                        <div class="dark">
                            <div class="form form1 scrollbarWrapper">
                                <h5 class="get-quote-button ">Get A Free Quote</h5>
                                
                                <form action="{{ route('saveQuote') }}" method="post" enctype="multipart/form-data" style="padding:20px 8px 9px 3px;">
                                    @csrf
                                        {{-- Device Brand --}}
                                    {{-- <div class="select-option">
                                        <label for="label-title">Brand:</label>
                                        <select name="brand" onchange='CheckColors(this.value);' id="brand_device"> 
                                            <option>Select Brand</option>  
                                            <option value="others">O    thers</option>
                                            @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->brand }}</option>
                                                @endforeach
                                            
                                        </select>
                                        <input type="text" name="other_brand" id="brand" style='display:none;'/>
                                    </div> --}}
                                        {{-- model --}}
                                    {{-- <div class="select-option">
                                    <label for="label-title">Model:</label>
                                    <select name="modal" onchange='CheckModel(this.value);' id="modal_device"> 
                                        <option>Select Model</option>  
                                        <option value="others">Others</option>
                                        
                                        </select>
                                    <input type="text" name="other_model" id="model" style='display:none;'/>
                                    </div> --}}

                                    {{-- ======================Previous select bxo============================= --}}
                                    <div class="select-option">
                                        <label for="label-title">Brand:</label>
                                        <div class="sborder">
                                            <select name="brand" id="brand_device" required>
                                                <option value="">Select Brand</option>
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->brand }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="select-option">
                                        <label for="label-title">Model:</label>
                                        <select name="modal" id="modal_device" required>

                                        </select>
                                    </div>
                                    <div class="select-option">
                                        <label for="label-title">Issue:</label>
                                        <select name="issue" id="issue_device">
                                            <option value="">Select Issue</option>
                                            @foreach ($issues as $item)
                                                <option value="{{$item->issue}}">{{$item->issue}}</option>
                                            @endforeach
                                        </select>
                                        <div class="select-option">
                                            <label for="label-title">Description:</label>
                                            <input type="text" placeholder="Add description" name="description" id="">
                                        </div>
                                    </div>
                                    <div class="select-option">
                                        <label for="label-title">Name:</label>
                                        <input type="text" name="name" placeholder="Enter your name" id="name" required>
                                    </div>
                                    <div class="select-option">
                                        <label for="label-title">Email:</label>
                                        <input type="email" placeholder="Enter your email" name="email" id="email" required>
                                    </div>
                                    <div class="select-option">
                                        <label for="label-title">Phone:</label>
                                        <input type="number" placeholder="Enter your phone number" name="number" id="number"
                                            required>  
                                    </div>
                                    <div class="select-option">
                                        <label for="label-title">Contact Preference:</label>
                                        <select name="contact_preference" class="form-control" >
                                            <option value="" >Choose your preference </option>
                                            <option value="Email">Email</option>
                                            <option value="Phone">Phone</option>
                                        </select> <br>
                                        <!-- <label for="label-title">Choose branch/Van :</label>
                                        <select name="repairing_methods" id="test" onchange="showDiv(this)" class="form-control" >
                                            <option value="shop" >Choose your Service</option>
                                            <option value="Van">Van</option>
                                            <option value="Mail In">Mail In</option>
                                            <optgroup label="Walk In" value="walk In">
                                                <option value="Blackburn">Blackburn Victoria</option>
                                                <option value="Hampton Park">Hampton Park Somerville</option>
                                                </optgroup>
                                        </select> -->
                                    </div>
                                    <div style="width: 100%; ">
                                        <p id="hidden_div" style="text-align: center;display: none;">82 Somerville <br> Hampton Park VIC 3976</p>
                                    </div>
                                    <br><br>
                                       {{-- <h3 class="next" onclick="goBack()" style="cursor: pointer">Go Back <i class="fas fa-arrow-circle-left"></i></h3>  --}}
                                        <button type="submit">SUBMIT</button>

                                        {{-- <h3 class="next" onclick="goNext()" style="cursor: pointer" >Go Next <i class="fas fa-arrow-circle-right"></i></h3> --}}
                                    {{-- <div id="second-form" class="second-form" style="display: none;padding: 10%;">
                                        
                                       <h3 class="next" onclick="goNext1()" style="cursor: pointer">Go Next <i class="fas fa-arrow-circle-right"></i></h3> 
                                    </div> --}}
                                    {{-- <div id="third-form" class="third-form" style="display: none;">
                                        
                                    </div> --}}
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('frontend/assets/img/hero/hero-1.jpg') }}" alt="iphone repair"></div>
            <div class="hs-item set-bg" data-setbg="{{ asset('frontend/assets/img/hero/hero-2.jpg') }}" alt="samsung phone repair"></div>
            <div class="hs-item set-bg" data-setbg="{{ asset('frontend/assets/img/hero/hero-3.jpg') }}" alt="ipad repair melbourne"></div>
        </div>
    </section>

    <!-- START PAGE CONTENT -->
    <section id="page-content" class="page-wrapper section">

        <!-- steps repairing section -->
        <!-- steps repairing section -->
        <div class="tips container-fluid">
            <div class="container">
                <div class="text-center">
                    <h2>Hassle Free Repairs At Your Doorstep!</h2>
                    <p>Get your device fixed in no time with a number of preferences that suit you most.
                    </p>
                    <div class="row process">
                        <div class="col-lg-3">
                            <div class="hasseleBus">
                            <div class="icon"><i class="fas fa-info-circle" data-toggle="modal"
                                    data-target="#van"></i>
                                <span>Van Details</span>
                            </div>
                            <!-- van model -->
                            <div class="modal fade" id="van" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Providing Van Services</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                aria-label="Close" style="font-size: 26px;margin-top: -5%">x</button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('frontend/assets/img/modal/van.gif') }}" alt="iphone repair">
                                            <p>Choose our store pickup option and have your phone picked up and delivered to
                                                your doorstep hassle-free! Check out how here.</p>
                                        </div>
                                        <div class="modal-footer">
                                        <a class="btn btn-primary btn-lg" href="" style="background-color:#fb6128;color:white;border-radius: 15px;border-color:azure;height:30px;width: 34%;padding-top: 6px;text-align: center;font-size: 14px">
                                            <span onclick="document.getElementById('#goUp').style.display='none'"></span><b style="font-size: 1.5rem">Book me</b>
                                        </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#goUp" style="text-decoration: none"><i class="fas fa-shuttle-van repair-icon"></i></a>
                            </div>
                            <div class="hasseleText">
                                <h3>We Come To You</h3>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <!-- <i class="fas fa-ellipsis-h"></i> -->
                        </div>
                        <div class="col-lg-3">
                            <div class="hasseleBus">
                            <div class="icon"><i class="fas fa-info-circle" data-toggle="modal"
                                    data-target="#shop"></i>
                                <span>Shop Details</span>
                            </div>
                            <!-- van model -->
                            <div class="modal fade col-12" id="shop" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Choose Our Branches</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                aria-label="Close" style="font-size: 26px;margin-top: -5%">x</button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('frontend/assets/img/modal/BRANCHES.gif') }}" alt="mobile repair shop blackburn ">
                                            <p>Book an appointment at either our Blackburn or Hampton Park branch and stay
                                                within your 5 mile radius. Stay safe, get your phone fixed!</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-primary btn-lg" href="" style="background-color:#fb6128;color:white;border-radius: 15px;border-color:azure;height:30px;width: 34%;padding-top: 6px;text-align: center;font-size: 14px">
                                                <span onclick="document.getElementById('#goUp').style.display='none'"></span>Book me
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#goUp" style="text-decoration: none"><i class="fas fa-store-alt repair-icon"></i></a>
                            </div>
                            <div class="hasseleText">
                                <h3>In Store</h3>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <!-- <i class="fas fa-ellipsis-h"></i> -->
                        </div>
                        <div class="col-lg-3">
                            <div class="hasseleBus">
                            <div class="icon"><i class="fas fa-info-circle" data-toggle="modal"
                                    data-target="#website"></i>
                                <span>Website Details</span>
                            </div>
                            <!-- van model -->
                            <div class="modal fade" id="website" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Book an appointment with our team!</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                aria-label="Close" style="font-size: 26px;margin-top: -5%">x</button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('frontend/assets/img/modal/website_g.gif') }}" alt="mobile phone repair blackburn">
                                            <p>Just click ‘Book me’ below! 
                                                One of our experienced representatives will contact you and guide you through our mail-in repair service or let us know your issue on this number: <br><a
                                                    href="tel:(03) 8595 6677">tel:(03) 8595 6677</a></p>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-primary btn-lg" href="" style="background-color:#fb6128;color:white;border-radius: 15px;border-color:azure;height:30px;width: 34%;padding-top: 6px;text-align: center;font-size: 14px">
                                                <span onclick="document.getElementById('#goUp').style.display='none'"></span>Book me
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#goUp" style="text-decoration: none"><i class="fas fa-envelope repair-icon"></i></a>
                        </div>
                        <div class="hasseleText">
                            <h3>Mail In </h3>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- end steps repairing section -->
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
                                <a href="#"><img src="{{ asset('frontend/assets/img/banner/2.png') }}" alt="Mobile phone repair hampton park"></a>
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
                                <a href="#"><img src="{{ asset('frontend/assets/img/banner/3.webp') }}" alt="iphone repair"></a>
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
                                <a href="#"><img src="{{ asset('frontend/assets/img/banner/4.jpg') }}" alt="mobile phone repair in hampton park"></a>
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
                                <p class="grey-text" style="color: grey">Is your home button stuck, sunken or just not working? We can
                                    replace home buttons, power buttons, volume buttons, almost any button you can think of,
                                    just not the buttons on your shirt!</p>
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
                                <p class="grey-text" style="color: grey">If your phone feels uncomfortably hot, or warms up more than
                                    usual doing everyday tasks, you might have a battery or motherboard issue. Small short
                                    circuits in the device can cause certain areas of the phone to heat up, our technicians
                                    face these issues every day!</p>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="features-categories row mb-md-0 mb-3">

                            <!-- Grid column -->
                            <div class="col-2">
                                <i class="fas fa-2x fas fa-tint deep-purple-text"></i>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-10">
                                <h5 class="font-weight-bold mb-3">LIQUID DAMAGE</h5>
                                <p class="grey-text mb-md-0" style="color: grey">Recently dropped your phone in the toilet, ocean or the
                                    bathtub? We can fix that! We have over 83% success rate on liquid damage repairs, our
                                    technicians do everything possible to recover your data and repair the phone..</p>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 text-center">
                        <img class="img-fluid" src="{{ asset('frontend/assets/img/product-2/1.png') }}"
                            alt="iphone repair">
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
                                <p class="grey-text" style="color: grey">Distorted speakers? You can’t hear your friends on calls?
                                    Speakers are very fragile and can be clogged or damaged by dust. To save you money we’ll
                                    try to clean and service your speakers before replacing them.</p>
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
                                <p class="grey-text" style="color: grey">Damaged displays can be super annoying! Glass splitters can also
                                    stay stuck inside finger tips! We can replace your LCD, OLED, or just the glass, we’ll
                                    replace your screen the right way and have it looking brand new!.</p>
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
                                <p class="grey-text mb-0" style="color: grey">Tired of your battery not lasting all day? Draining quicker than
                                    it used to? Bring it into any of our branches for a free battery health check up and
                                    have your battery replaced.</p>
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
                                    <img src="{{ asset('frontend/assets/img/up-comming/2.jpg') }}" alt="ipad repair melbourne">
                                </a>
                            </div>
                            <div class="up-comming-pro-info f-left">
                                <div class="up-comming-time-2 clearfix">
                                    <div>
                                        <h3 id="time">Time Expaired</h3>
                                        <br>
                                        <a class="btn btn-primary btn-xlg" href="#goUp" style="background-color:#fb6128;color:white;border-radius: 15px;margin-left: 10%;border-color:azure;height:60px;width: 80%;padding-top: 16px;font-size: 20px">
                                           <span style="text-align: center;font-size: 20px;"></span>Book Now
                                        </a>
                                    </div>
                                    <br>
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
                                <a href="#"><img src="{{ asset('frontend/assets/img/banner/iWatch.png') }}" alt="mobile repair shop hampton park"></a>
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
                    <img id="loading" src="{{ asset('frontend/assets/img/banner/guaranteed.png') }}" alt="samsung repair van in hampton park">
                </div>
                <div class="col-lg-5">
                    <h6>Our Tech Teams are super fast with repairs and stringent with
                         quality. We are confident that our superior quality and service 
                         will win you over. And if you are not happy with our work,
                          we provide a full refund.*
                    </h6>
                </div>
            </div>
        </div>
        <!-- end steps repairing section -->




        <!-- BLOG SECTION START -->
        <!-- <div class="blog-section-2 pt-60 pb-30">
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
                    <div class="row active-blog-2"> -->
                        <!-- blog-item start -->
                        <!-- <div class="col-lg-12">
                            <div class="blog-item-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image">
                                            <a href="single-blog.html"><img
                                                    src="{{ asset('frontend/assets/img/blog/4.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog-desc">
                                            <h5 class="blog-title-2"><a href="#">iPhone 12</a></h5>
                                            <p>We repair all sorts of screen issues for iPhones as well as speaker, mic and other replacements. Battery issues and cracked screens can be fixed the same day.
                                            </p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- blog-item end -->
                        <!-- blog-item start -->
                        <!-- <div class="col-lg-12">
                            <div class="blog-item-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image">
                                            <a href="single-blog.html"><img
                                                    src="{{ asset('frontend/assets/img/blog/5.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog-desc">
                                            <h5 class="blog-title-2"><a href="#">Samsung</a></h5>
                                            <p>Melbourne Mobile Phone Repairs can replace LCDs and glasses of Samsung devices as well as any other hardware and software issues that your phone may be experiencing.
                                            </p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- blog-item end -->
                        <!-- blog-item start -->
                        <!-- <div class="col-lg-12">
                            <div class="blog-item-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image">
                                            <a href="single-blog.html"><img
                                                    src="{{ asset('frontend/assets/img/blog/4.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog-desc">
                                            <h5 class="blog-title-2"><a href="#">iPhone 12</a></h5>
                                            <p>There are many variations of passages of in psum available, but the majority
                                                have sufe ered on in some form...</p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- blog-item end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG SECTION END -->

        <!-- NEWSLETTER SECTION START -->
        <div class="newsletter-section section-bg-tb pt-60 pb-80"id="news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="newsletter" >
                            <div class="newsletter-info text-center">
                                <h2 class="newsletter-title">get a newsletter</h2>
                                <p style="color: grey;">Make sure that you never miss our interesting news <br class="hidden-xs">by joining
                                    our newsletter program.</p>
                            </div>
                            <div class="subcribe clearfix">
                                <form action="#">
                                    <input type="text" name="email" placeholder="Enter your email here..." />
                                    <button class="submit-btn-2 btn-hover-2" type="submit">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- NEWSLETTER SECTION END=== -->
        
    </section>


<!-- FAQs -->
<div class="container ">
    <h2 class="newsletter-title" style="text-align: center;color: #fb6128;">Read FAQ’s</h2>
    <hr>
    <h4 style="color: grey;text-align: center">Your all questions are answered here about our services.</h4>
    <div class="panel-group" id="faqAccordion">
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" style="cursor: pointer;" data-target="#question0">
                 <h4 class="panel-title">
                    <a class="ing">Q: Is It Cheaper To Repair Or Replace A Phone?</a>
              </h4>

            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>
                    <p style="color: black">This varies based on the model of a device, it’s almost always cheaper to get the device repaired. Our Screen Replacements are usually less than 30% of the device’s retail price!
                        </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" style="cursor: pointer;" data-target="#question1">
                 <h4 class="panel-title">
                    <a class="ing">Q: What can I do if my phone won’t turn on?</a>
              </h4>

            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p style="color: black">Many issues such as dead batteries, dirty charge ports, damaged displays and liquid damage can prevent devices from switching on. Bring it in and we’ll happily inspect and quote your device free of charge! </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" style="cursor: pointer;" data-target="#question2">
                 <h4 class="panel-title">
                    <a class="ing">Q: I’m seeing weird lines and black spots on my display, is that repairable?</a>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p style="color: black">Yes! Issues like these are usually caused by damaged LCDs, we can replace the LCD along with the glass. </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" style="cursor: pointer;" data-target="#question3">
                 <h4 class="panel-title">
                    <a class="ing">Q: I’ve dropped my phone in liquid, what should I do?</a>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p style="color: black">We recommend taking the device out of the liquid as soon as possible, turn the device off, remove the battery (if the battery is removable), and dry the device off thoroughly. We DO NOT recommend putting the rice as it can clog up charge ports. Liquid inside devices can take up to 2 weeks to completely dry up by itself. We recommend bringing it in for our trained technicians to disassemble, wash, dry and clean devices to ensure they have the best chance of recovery. </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" style="cursor: pointer;" data-target="#question4">
                 <h4 class="panel-title">
                    <a class="ing">Q: Does my phone need a new battery?</a>
              </h4>

            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p style="color: black">Batteries wear with age and use, phones over 2 years old are likely to have noticeably poorer battery life compared to new phones. If your battery life is significantly worse than when it was new, we recommend bringing it down for a free battery health check.  </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" style="cursor: pointer;" data-target="#question5">
                 <h4 class="panel-title">
                    <a class="ing">Q: Is my data safe?</a>
              </h4>

            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p style="color: black">We understand electronic devices contain sensitive data, which is why every team member is trained and monitored daily to ensure we comply with Australian Privacy Laws. As there’s always a small risk of data loss, we always recommend backing up your device before repair or service. </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" style="cursor: pointer;" data-target="#question6">
                 <h4 class="panel-title">
                    <a class="ing">Q: Why should I back up my device before a repair?</a>
              </h4>

            </div>
            <div id="question6" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p style="color: black">Our team does their best to ensure your data is not lost or modified, but as electronic devices are unpredictable, data can be corrupt, modified or lost during the repair or servicing process. We recommend backing up ALL data on the device prior to repair or service, we are not liable for data loss once the device has entered our locations. </p>
                </div>
            </div>
        </div>
        
    </div>
    <!--/panel-group-->
</div>
    
          <!-- START FOOTER AREA -->
       @include('website.layout.footer')
        <!-- END FOOTER AREA -->

        <!-- START QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product clearfix">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="{{ asset('frontend/assets/img/product-2/1.jpg') }}" alt="samsung repair van in blackburn ">
                                    </div>
                                </div><!-- .product-images -->
                                
                                <div class="product-info">
                                    <h1>Aenean eu tristique</h1>
                                    <div class="price-box-3">
                                        <div class="s-price-box">
                                            <span class="new-price">£160.00</span>
                                            <span class="old-price">£190.00</span>
                                        </div>
                                    </div>
                                    <a href="single-product-left-sidebar.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons clearfix">
                                                <li>
                                                    <a class="facebook" href="#" target="_blank" title="Facebook">
                                                        <i class="zmdi zmdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="google-plus" href="#" target="_blank" title="Google +">
                                                        <i class="zmdi zmdi-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="twitter" href="#" target="_blank" title="Twitter">
                                                        <i class="zmdi zmdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="pinterest" href="#" target="_blank" title="Pinterest">
                                                        <i class="zmdi zmdi-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="rss" href="#" target="_blank" title="RSS">
                                                        <i class="zmdi zmdi-rss"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->    

        <!--style-customizer start -->
        <div class="style-customizer closed">
            <div class="buy-button">
                <a href="index.html" class="customizer-logo"><img src="{{ asset('frontend/assets/img/logo/MMPR_logo.png') }}" alt="phone repair van in hampton park"></a>
                <a class="opener" href="#"><i class="zmdi zmdi-settings"></i></a>
            </div>
            <div class="clearfix content-chooser">
                <h3>Layout Options</h3>
                <p>Which layout option you want to use?</p>
                <ul class="layoutstyle clearfix">
                    <li class="wide-layout selected" data-style="wide" title="wide"> Wide </li>
                    <li class="boxed-layout" data-style="boxed" title="boxed"> Boxed </li>
                </ul>
                <h3>Color Schemes</h3>
                <p>Which theme color you want to use? Select from here.</p>
                <ul class="styleChange clearfix">
                    <li class="skin-default selected" title="skin-default" data-style="skin-default" ></li>
                    <li class="skin-green" title="green" data-style="skin-green"></li>
                    <li class="skin-purple" title="purple" data-style="skin-purple"></li>
                    <li class="skin-blue" title="blue" data-style="skin-blue"></li>
                    <li class="skin-cyan" title="cyan" data-style="skin-cyan"></li>
                    <li class="skin-amber" title="amber" data-style="skin-amber"></li>
                    <li class="skin-blue-grey" title="blue-grey" data-style="skin-blue-grey"></li>
                    <li class="skin-teal" title="teal" data-style="skin-teal"></li>
                </ul>
                <h3>Background Patterns</h3>
                <p>Which background pattern you want to use?</p>
                    <ul class="patternChange clearfix">
                    <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
                    <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
                    <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
                    <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
                    <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
                    <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
                    <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
                    <li class="pattern-8" data-style="pattern-8" title="pattern-8"></li>
                </ul>
                <h3>Background Images</h3>
                <p>Which background image you want to use?</p>
                <ul class="patternChange main-bg-change clearfix">
                    <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/01.jpg') }}" alt="Mobile phone repair hampton park"></li>
                    <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/02.jpg') }}" alt="mobile phone repair blackburn"></li>
                    <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/03.jpg') }}" alt="mobile repair shop hampton park"></li>
                    <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/04.jpg') }}" alt="mobile repair shop blackburn "></li>
                    <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/05.jpg') }}" alt="ipad repair melbourne"></li>
                    <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/06.jpg') }}" alt="samsung phone repair"></li>
                    <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/07.jpg') }}" alt="iphone repair"></li>
                    <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/08.jpg') }}" alt="iphone repair van in blackburn "></li>
                </ul>
                <ul class="resetAll">
                    <li><a class="button button-border button-reset" href="#">Reset All</a></li>
                </ul>
            </div>
        </div>
        <!--style-customizer end -->
    </div>
    <!-- Body main wrapper end -->


    <!-- Placed JS at the end of the document so the pages load faster -->
    @include('admin.layouts.toaster')

    @include('website.layout.js')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    {{-- shop timer --}}

    <script>
      $(function(){
    var calcNewYear = setInterval(function(){
    		
      var datetimezone = new Date().toLocaleString("en-US", {timeZone: "Australia/Sydney"});
      var current_date = new Date(datetimezone);
      date_now = new Date(current_date);
      
      var c_month = current_date.getMonth() + 1;
      var currentDatTime = current_date.getFullYear() +'/'+c_month+'/'+current_date.getDate()+' 17:00:00';
     
      var expiryDate = new Date(currentDatTime); 
    
        date_future = new Date(currentDatTime);
        

        seconds = Math.floor((date_future - (date_now))/1000);
        minutes = Math.floor(seconds/60);
        hours = Math.floor(minutes/60);
        days = Math.floor(hours/24);
        
        hours = hours-(days*24);
        minutes = minutes-(days*24*60)-(hours*60);
        seconds = seconds-(days*24*60*60)-(hours*60*60)-(minutes*60);

        console.log(expiryDate.getHours(), "end time")
        console.log(date_now.getHours(), "current")

        if(date_now.getHours() >= 10 && date_now.getHours() <= 17){
            $("#time").text("Time To Close: " + hours + ":" + minutes + ":" + seconds);
        }
        else{
            $("#time").text("Get your device repaired Tomorrow");
        }
        // else{
        //     $("#time").text("Get your device repair Tomorrow");
        // }
      
    },1000);
});
    </script>


    <script type="text/javascript">
        // auto search from select box
        $("#brand_device").select2({
            placeholder: "Select Brand",
            allowClear: true
        });

        $("#modal_device").select2({
            placeholder: "Select Model",
            allowClear: true,
            language: {
            noResults: function (params) {
            return "Please Select Brand First.";
                }
            }
           
        });

        $("#issue_device").select2({
            placeholder: "Select Issue",
            allowClear: true
        });

        $('#brand_device').on('select2:selecting select2:clear', function(e) {
          var device = document.getElementById('brand_device');
          if(device){
            console.log("show brand", device);  
          }
        });
        //auto slect modal according modal
        $('#brand_device').on('select2:selecting select2:clear', function(e) {
            
            var brand = ((e.params.args || {}).data || {}).id;
            if (brand) {
                $.ajax({
                    url: "{{ url('/admin/modal/ajax') }}/" + brand,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {

                        var d = $('select[name="modal"]').empty();
                        $('select[name="modal"]').append('<option value="">Select Model</option>');
                        $.each(data, function(key, value) {
                            $('select[name="modal"]').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        });
                    },
                });

            } else {
                $('select[name="modal"]').empty();   
            }
        });

        //auto select issues according modals
        $('#modal_device').on('select2:selecting select2:clear', function(e) {
            var modal = ((e.params.args || {}).data || {}).id;
            
            if (modal) {
                $.ajax({
                    url: "{{ url('/issue/modal/ajax') }}/" + modal,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {

                        var d = $('select[name="issue"]').empty();
                        $('select[name="issue"]').append('<option value="">Select Issue</option>');
                        $.each(data, function(key, value) {
                            $('select[name="issue"]').append('<option value="' + value.id +
                                '">' + value.issue + '</option>');
                        });
                    },
                });

            } else {
                var d = $('select[name="issue"]').empty();
                
            }
        });

        //show text
        function getddl(){

        }
    </script>
    <script type="text/javascript">
        function showDiv(select){
           if(select.value== 'Mail In'){
            document.getElementById('hidden_div').style.display = "block";
           } else{
            document.getElementById('hidden_div').style.display = "none";
           }
        } 
        </script>

    {{-- for auto select box --}}
    
  

    {{-- <script type="text/javascript">
        function CheckColors(val){
         var element=document.getElementById('brand');
         if(val=='pick a color'||val=='others')
           element.style.display='block';
         else  
           element.style.display='none';
        }
        
        function CheckModel(val){
         var element=document.getElementById('model');
         if(val=='other modal'||val=='others')
           element.style.display='block';
         else  
           element.style.display='none';
        }
        </script>  --}}
    <script>
        $(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})
        $(".booking-select").each(function() {
      var classes = $(this).attr("class");
         var  id      = $(this).attr("id");
         var  name    = $(this).attr("name");
      var template =  '<div class="' + classes + '">';
          template += '<span class="booking-select-trigger">' + $(this).attr("placeholder") + '</span>';
          template += '<div class="booking-options">';
          $(this).find("option").each(function() {
            template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
          });
      template += '</div></div>';
      
      $(this).wrap('<div class="booking-select-wrapper"></div>');
      $(this).hide();
      $(this).after(template);
    });
    $(".custom-option:first-of-type").hover(function() {
      $(this).parents(".booking-options").addClass("option-hover");
    }, function() {
      $(this).parents(".booking-options").removeClass("option-hover");
    });
    $(".booking-select-trigger").on("click", function() {
      $('html').one('click',function() {
        $(".booking-select").removeClass("opened");
      });
      $(this).parents(".booking-select").toggleClass("opened");
      event.stopPropagation();
    });
    $(".custom-option").on("click", function() {
      $(this).parents(".booking-select-wrapper").find("select").val($(this).data("value"));
      $(this).parents(".booking-options").find(".custom-option").removeClass("selection");
      $(this).addClass("selection");
      $(this).parents(".booking-select").removeClass("opened");
      $(this).parents(".booking-select").find(".booking-select-trigger").text($(this).text());
    });
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
  

        function goNext() {
            document.getElementById("first-form").style.display= "none";
            document.getElementById("second-form").style.display = "unset";
        }

        function goNext1() {
            document.getElementById("second-form").style.display= "none";
            document.getElementById("third-form").style.display = "unset";
        }
        function goBack() {
            document.getElementById("first-form").style.display= "unset";
            document.getElementById("second-form").style.display = "none";
            document.getElementById("third-form").style.display = "none";
        }


    </script>

<script type="text/javascript" id="zsiqchat">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {
    widgetcode: "7aa6606e19c69247846780e9db9a5e9ab6f3e893573db44a1fc837de6eda0774", 
    values:{},
    ready:function(){}};
    var d=document;
    s=d.createElement("script");
    s.type="text/javascript";
    s.id="zsiqscript";
    s.defer=true;
    s.src="https://salesiq.zoho.com/widget";
    t=d.getElementsByTagName("script")[0];
    t.parentNode.insertBefore(s,t);
</script>
</body>
</html>
