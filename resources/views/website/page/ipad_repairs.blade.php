<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MMPR offers affordable iPad Repairs in Melbourne. Our Apple iPad Repair specialists can fix broken screens, replace batteries & more. ">
    <meta name="keywords" content="Apple iPad repair, Apple iPad repair in melbourne">
    <title>Apple Ipad Repair Melbourne | Battery & Screen Replacement | MMPR</title>

    @include('website.layout.css')

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '234056100877624');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=234056100877624&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
  
</head>
<style>
    .zsiq_theme1.zsiq_floatmain {
    margin-right: 50px !important;
}
</style>

<body>
    
   <!-- Body main wrapper start -->
   <div class="wrapper">

    <!-- START HEADER AREA -->
    <header class="header-area header-wrapper">
       @include('website.layout.topmenu')
    </header>
    <!-- END HEADER AREA -->

    <!-- START MOBILE MENU AREA -->
   
<div class="jumbotron">
    <div class="container">
        <div class="row" style="text-align: center">
            <div class="col-md-6">
                <h1 style="font-size:33px;text-align: justify">iPad Repairs</h1>
                <h2 style="font-size:18px;text-align: justify">Melbourne Mobile Phone Repair has solutions and fixes available for all types of phones. We offer trusted mobile screen replacement services. Our clients and customers trusts our world-class services which makes us to move forward gracefully. </h2>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/pages/img/works/iPad.png')}}" style="height: 200px" />
            </div>
        </div>
      </div>
      <br>
</div>
<div class="container">
    <div class="row mt-2 g-4">
        @foreach($models as $model)
                <div class="col-md-3">
                    <a href="{{ route('ipad') }}">
                    <div class="card p-1">
                        <div class="d-flex justify-content-between align-items-center p-2">
                            <div class="flex-column lh-1 imagename"> 
        
                            <span>{{ $model->name }}</span>
                            
                        </div>
                            <div> <img src="{{ asset('assets/pages/img/works/ipad.jpg') }}" height="100" width="100" /> </div>
                        </div>
                    </div>
                    </a>
                </div>
        @endforeach
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
                                        <img alt="mobile repair shop hampton park" src="{{ asset('frontend/assets/img/product-2/1.jpg') }}">
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
