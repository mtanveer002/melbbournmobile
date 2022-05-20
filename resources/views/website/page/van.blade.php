<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Professional iPhone/Samsung repair van certified specialists. Our custom-built mobile mechanic servicing and inspections van will conveniently come to your home or workplace in one call within selected area and repair your phone.">
    <meta name="keywords" content="iphone repair van near me, iphone repair service provider,iphone repair van near hampton park, iphone repair van in hampton park,iphone repair van in blackburn ,Phone repair van in blackburn ,phone repair van in hampton park, samsung repair van in blackburn, samsung repair van in hampton park">
    <title>High-quality iPhone repair service provider | samsung repair van in hampton park</title>
    @include('website.layout.css')
    <style>
        .how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 h4{
    color: #ffa500;
    font-weight: bold;
    font-size: 30px;
}
.how-section1 .subheading{
    color: #3931af;
    font-size: 20px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
}
.how-img img{
    width: 80%;
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

<!-- START MOBILE MENU AREA -->

<!-- END MOBILE MENU AREA -->
<!-- Hero Section Begin -->
<!-- Preloader -->
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

<div class="wrapperr">
    <div class="overlay">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9">
                <div class="contact-us text-center">
                    <h3 style="font-size: 30px;font-weight: 600;text-transform: capitalize;color: #fb6128;">Phone Repair At Your Door</h3><hr>
                    <p class="mb-5">
                        <!-- If your device was dropped and broken or just stopped working, you may be in full-on panic mode. If you rely on your mobile cell phone to conduct business or accomplish your daily tasks, you don’t have any time to spare. Instead of driving across town, why not call one of our mobile phone repair experts and let us come to you.
At Melbourne Mobile Repairs, our service takes the hassle out of getting your mobile device back in working condition. Simply give us a call, and we will send out a mobile cell phone repair technician to your location at an affordable price. This service is available 24/7, and our fee is based on your distance from our location.</p>
                     -->
                     If you are looking for phone repair vans in Australia or the United Kingdom, MMPR has got your problem solved. With the latest software and hardware tools along with a competent staff, we make sure that your query is addressed and resolved in the shortest possible time. Melbourne Mobile Phone Repairs has its way of making your life easy. No matter what phone you have, with our repair vans, solving the problem will be extremely convenient and easy for you. The motive of MMPR vans is to save you the trouble of going out of the way in order to get your phone fixed. 
Tired of typing “iPhone repair van near me” in your search bar and never getting a satisfactory answer? We are here to save you from this hassle. MMPR is the best iPhone repair service provider, and you can have our word on this. Along with iPhone, MMPR vans also offer their services for Samsung phones. All you have to do is let us know about your phone type and your query and then you can consider your problem solved. You can visit the website and get to know about the van services that are available. For the convenience of the customer, MMPR enables you to get in touch instantly. So, what are you waiting for?

                     <ul>
                        <li style="color: white;font-size: 16px">Melborune Mobile repairs...  Schedule your appointment today. call us at <span style="color: #fb6128;font-weight: bold">(03) 8595 6677
</span></li>
                        <li style="color: white;font-size: 16px">We Travel To You and Repair Your Device On the Spot</li>
                        <li style="color: white;font-size: 16px">Repairs Completed In Under 30 Minutes</li>
                    </ul>
                    <div class="row" style="padding-top: 50px;">
                        <div class="col-md-6">
                            <div class="mt-5 text-center px-3">
                                <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-phone"></i></span>
                                    <div class="address text-left"> <span style="color: #fb6128">Phone</span>
                                        <p>(03) 8595 6677
</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-envelope"></i></span>
                                    <div class="address text-left"> <span style="color: #fb6128">Email</span>
                                        <p>mmpr.sales@gmail.com</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center"> <span class="icons"><i class="fa fa-map-marker"></i></span>
                                    <div class="address text-left"> <span style="color: #fb6128">Address</span>
                                        <p>3 Lawrence Street, Blackburn South VIC 3130</p>
                                        <p>82 Somerville Hampton Park VIC 3976</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center px-1">
                                <div class="forms p-4 py-5 bg-white">
                                @if ($message = Session::get('successs'))
                                <div class="alert alert-success alert-block" style="background-color: #28A745;color: white;">	
                                        <strong>{{ $message }}</strong>
                                </div>
                                @endif
                                <form method="post" action="{{ route('saves.VanInquiry') }}" class="signup-form">
                                    @csrf
                                   <h5 style="font-size: 20px;font-weight: 600;color: #fb6128;">Van Inquiry</h5>
                                    <div class="mt-4 inputs"> 
                                    <input type="text" name="name" class="form-control" placeholder="Name"> 
                                    <input type="email" name="email" class="form-control" placeholder="Email"> 
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone"> 
                                    <input type="text" name="address" class="form-control" placeholder="Address"> 
                                    <textarea class="form-control" name="issue" placeholder="Type your Issue"></textarea>
                                </div>
                                    <div class="button mt-4 text-center"> <button type="submit" class="btn btn-block" style="font-size: 20px;">Send</button> </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Text with image -->
<div class="how-section1">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="{{ asset('assets/pages/img/works/van4.jpg') }}" class=" img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>iPhone Repair Van in Hampton Park</h4>
                                        <!-- <h4 class="subheading">GetLance is a great place to find more clients, and to run and grow your own freelance business.</h4> -->
                        <p class="text-muted">
                        If you are looking for an iPhone repair van near Hampton Park or iPhone repair van in Hampton Park, MMPR is your best option. You can schedule your 
                        appointment by reaching us on our number or through the online appointment system. Instead of driving across town to get your phone fixed, you can 
                        trust us and let our expert staff come to you. Mostly, our staff will repair your phone in an hour, however, if there is a need for intensive care, 
                        we can make sure that your phone is picked up and then dropped back at your home when it gets fixed. Being the most competitive phone repair van in 
                        Hampton Park, MMPR has been able to secure the trust of its customers. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Samsung Repair Van in Hampton Park</h4>
                                        <!-- <h4 class="subheading">GetLance makes it easy to connect with clients and begin doing great work.</h4> -->
                                        <p class="text-muted">Our Samsung repair van in Hampton Park will always save your day if you’re going through the problem of a broken
                                             phone. All you have to do is reach out to us and our team will come to you in the shortest time. Our repair van service aims to
                                              solve any kind of problem within hours. However, if the problem is more complicated and needs extra time, we will take your phone 
                                              with us, get it fixed, and deliver it back to your home in due time.</p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="{{ asset('assets/pages/img/works/van1.jpg') }}" class=" img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="{{ asset('assets/pages/img/works/van2.jpg') }}" class=" img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>iPhone Repair Van in Blackburn</h4>
                                        <!-- <h4 class="subheading">With GetLance, you have the freedom and flexibility to control when, where, and how you work. Each project includes an online workspace shared by you and your client, allowing you to:</h4> -->
                                        <p class="text-muted">If you live somewhere near Blackburn and are looking for an iPhone repair van in Blackburn, MMPR repair vans will be at
                                             your service. At MMPR, we completely understand that lives are dependent on smartphones. Whether you are a student, an employee, or a business
                                              owner, it is difficult to survive a second without your phone and that’s what makes broken phones so intolerable. To fix this problem, 
                                              you can avail our services from the comfort of your home or office. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Samsung Repair Van in Blackburn</h4>
                                        <!-- <h4 class="subheading">All projects include GetLance Payment Protection — helping ensure that you get paid for all work successfully completed through the freelancing website.</h4> -->
                                        <p class="text-muted">Along with iPhone repair services in Blackburn, MMPR also offers a Samsung repair van in Blackburn. Whether it is 
                                            a battery problem or a broken screen, you tell us, and we fix it. A broken phone feels like the biggest burden and we have a solution
                                             for that. Instead of going through the drill of traveling long distances to get your phone fixed, you can get the whole process done
                                              right at your home. We have the appropriate tools and techniques and most importantly, mobile phone experts that will get to the
                                               root of the problem and fix it. Not only this, but we will also guarantee that the parts used to get your phone fixed are top
                                                quality so that you do not face similar situations in the future. 
                                                Whether you own an iPhone or a Samsung phone, our sole focus is on providing you with extraordinary service. Get rid of your 
                                                battery problems, screen issues, or any other troubles that your phone is going through. MMPR has a history of fixing gadgets 
                                                and by providing the best service, it has won the trust of many customers over time. Become one of our valued customers and you 
                                                will find yourself recommending MMPR to your friends and family. 
</p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="{{ asset('assets/pages/img/works/van3.jpg') }}" class=" img-fluid" alt=""/>
                        </div>
                    </div>
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
                                    <img alt="iphone repair" src="{{ asset('frontend/assets/img/product-2/1.jpg') }}">
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
            <a href="index.html" class="customizer-logo"><img src="{{ asset('frontend/assets/img/logo/MMPR_logo.png') }}" alt="mobile repair shop blackburn "></a>
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
                <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/01.jpg') }}" alt="mobile phone repair blackburn"></li>
                <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/02.jpg') }}" alt="Mobile phone repair hampton park"></li>
                <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/03.jpg') }}" alt="mobile repair shop hampton park"></li>
                <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/04.jpg') }}" alt="mobile repair shop blackburn "></li>
                <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/05.jpg') }}" alt="ipad repair melbourne"></li>
                <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/06.jpg') }}" alt="samsung phone repair"></li>
                <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/07.jpg') }}" alt="iphone repair"></li>
                <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/08.jpg') }}" alt="mobile phone repair booking in hampton park"></li>
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

