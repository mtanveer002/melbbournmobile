
<!-- header-middle-area -->
<div id="sticky-header" class="header-middle-area plr-185" style="height: 80px;">
    <div class="container-fluid">
        <div class="full-width-mega-dropdown"style="margin-top: -10px">
            <div class="row">
                <!-- logo -->
                <div class="col-lg-2 col-md-2 col-sm-4">
                    <div class="logo">
                        <a href="http://dev.melbournemobilephonerepairs.com.au/">
                            <img src="{{ asset('frontend/assets/img/logo/company_logo.png') }}" alt="main logo">
                        </a>
                    </div>
                </div>
                <!-- primary-menu -->
                <div class="col-lg-10 col-md-10 col-sm-8 d-none d-lg-block">
                    <nav id="primary-menu" >
                        <ul class="main-menu text-center">
                            <li><a href="{{route('index.home')}}">Home</a>
                            </li>
                            <li class="mega-parent"><a href="{{route('about.us')}}">About Us</a>
                            </li>
                        
                            <li><a href="{{route('commingSoon')}}">Online Shop</a>
                            <li><a href="{{route('contact')}}">Contact</a>
                                <li>
                                    <a  href="{{route('tickets.index')}}" class="btn btn-warning btn-xlg">TICKET</a>
                                </li>
                            </li>
                            <a class="btn btn-primary btn-xlg" href="tel:713-992-0916" style="background-color:#fb6128;color:white;border-radius: 15px;margin-left: 0;border-color:azure;font-size: 16px">
                                <span class="glyphicon glyphicon-earphone" style="padding-left:10px; padding-right:10px;"></span>&nbsp;(03) 8595 6677
                            </a>
                           
                        </ul>
                    </nav>
                </div>
                <!-- header-search & total-cart -->
                
            </div>
        </div>
    </div>
</div>

{{-- menu bar --}}
<div class="mobile-menu-area d-block d-lg-none section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="index.html">Home</a>
                                
                            </li>
                            <li>
                                <a href="shop.html">Online Shop</a>
                            </li>
                            <li>
                                <a href="{{route('about.us')}}">About us</a>
                            </li>
                                    
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>