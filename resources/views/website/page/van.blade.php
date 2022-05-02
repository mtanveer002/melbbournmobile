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
                    <h3 style="font-size: 30px;font-weight: 600;text-transform: capitalize;color: #fb6128;">We come to you</h3><hr>
                    <!-- <p class="mb-5">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p> -->
                    <br><br>
                    <div class="row" style="padding-top: 50px;">
                        <div class="col-md-6">
                            <div class="mt-5 text-center px-3">
                                <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-phone"></i></span>
                                    <div class="address text-left"> <span style="color: #fb6128">Phone</span>
                                        <p>(03) 8595 6677</p>
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
                                    <img alt="" src="{{ asset('frontend/assets/img/product-2/1.jpg') }}">
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
            <a href="index.html" class="customizer-logo"><img src="{{ asset('frontend/assets/img/logo/MMPR_logo.png') }}" alt="Theme Logo"></a>
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
                <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/01.jpg') }}" alt=""></li>
                <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/02.jpg') }}" alt=""></li>
                <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/03.jpg') }}" alt=""></li>
                <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/04.jpg') }}" alt=""></li>
                <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/05.jpg') }}" alt=""></li>
                <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/06.jpg') }}" alt=""></li>
                <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/07.jpg') }}" alt=""></li>
                <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img src="{{ asset('frontend/assets/images/customizer/bodybg/08.jpg') }}" alt=""></li>
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

