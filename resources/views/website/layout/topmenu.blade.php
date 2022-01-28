 <!-- header-top-bar -->
 <div class="header-top-bar plr-185">
    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-lg-6 col-md-6 d-none d-md-block">
                <div class="call-us">
                    <p class="mb-0 roboto"><a href="tel:(03) 8595 6677">tel:(03) 8595 6677</a></p>
                </div>
            </div> --}}
            <div class="col-lg-7 col-md-7">
                <div class="top-link clearfix">
                    <ul class="link f-right">
                        <li>
                            <a href="my-account.html">
                                <i class="zmdi zmdi-account"></i>
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html">
                                <i class="zmdi zmdi-favorite"></i>
                                Wish List (0)
                            </a>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="zmdi zmdi-lock"></i>
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-middle-area -->
<div id="sticky-header" class="header-middle-area plr-185" style="height: 80px;">
    <div class="container-fluid">
        <div class="full-width-mega-dropdown"style="margin-top: -10px">
            <div class="row">
                <!-- logo -->
                <div class="col-lg-2 col-md-2 col-sm-4">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('frontend/assets/img/logo/company_logo.png') }}" alt="main logo">
                        </a>
                    </div>
                </div>
                <!-- primary-menu -->
                <div class="col-lg-8 col-md-8 d-none d-lg-block">
                    <nav id="primary-menu" >
                        <ul class="main-menu text-center">
                            <li><a href="{{route('index.home')}}">Home</a>
                            </li>
                            <li class="mega-parent"><a href="{{route('about.us')}}">About Us</a>
                            </li>
                        
                            <li><a href="{{route('commingSoon')}}">Online Shop</a>
                            <li><a href="{{route('contact')}}">Contact</a>
                            </li>
                            <a class="btn btn-primary btn-xlg" href="tel:713-992-0916" style="background-color:#fb6128;color:white;border-radius: 15px;margin-left: 10%;border-color:azure">
                                Click to Call <span class="glyphicon glyphicon-earphone" style="padding-left:10px; padding-right:10px;"></span>(03) 8595 6677
                            </a>
                        </ul>
                    </nav>
                </div>
                <!-- header-search & total-cart -->
                <div class="col-lg-2 col-md-2 col-sm-8">
                    <div class="search-top-cart  f-right" >
                        
                        
                        <!-- header-search 
                        <div class="header-search f-left">
                            <div class="header-search-inner">
                               <button class="search-toggle">
                                <i class="zmdi zmdi-search"></i>
                               </button>
                                <form action="#">
                                    <div class="top-search-box">
                                        <input type="text" placeholder="Search here your product...">
                                        <button type="submit">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </div>
                                </form> 
                            </div>
                        </div>-->
                        <!-- total-cart 
                        <div class="total-cart f-left">
                            <div class="total-cart-in">
                                <div class="cart-toggler">
                                    <a href="#">
                                        <span class="cart-quantity">02</span><br>
                                        <span class="cart-icon">
                                            <i class="zmdi zmdi-shopping-cart-plus"></i>
                                        </span>
                                    </a>                            
                                </div> -->
                                <!-- <ul>
                                    <li>
                                        <div class="top-cart-inner your-cart">
                                            <h5 class="text-capitalize">Your Cart</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="total-cart-pro">
                                            
                                            <div class="single-cart clearfix">
                                                <div class="cart-img f-left">
                                                    <a href="#">
                                                        <img src="img/cart/1.jpg" alt="Cart Product" />
                                                    </a>
                                                    <div class="del-icon">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-info f-left">
                                                    <h6 class="text-capitalize">
                                                        <a href="#">Dummy Product Name</a>
                                                    </h6>
                                                    <p>
                                                        <span>Brand <strong>:</strong></span>Brand Name
                                                    </p>
                                                    <p>
                                                        <span>Model <strong>:</strong></span>Grand s2
                                                    </p>
                                                    <p>
                                                        <span>Color <strong>:</strong></span>Black, White
                                                    </p>
                                                </div>
                                            </div>
                                            
                                            <div class="single-cart clearfix">
                                                <div class="cart-img f-left">
                                                    <a href="#">
                                                        <img src="img/cart/1.jpg" alt="Cart Product" />
                                                    </a>
                                                    <div class="del-icon">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-info f-left">
                                                    <h6 class="text-capitalize">
                                                        <a href="#">Dummy Product Name</a>
                                                    </h6>
                                                    <p>
                                                        <span>Brand <strong>:</strong></span>Brand Name
                                                    </p>
                                                    <p>
                                                        <span>Model <strong>:</strong></span>Grand s2
                                                    </p>
                                                    <p>
                                                        <span>Color <strong>:</strong></span>Black, White
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="top-cart-inner subtotal">
                                            <h4 class="text-uppercase g-font-2">
                                                Total  =  
                                                <span>$ 500.00</span>
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="top-cart-inner view-cart">
                                            <h4 class="text-uppercase">
                                                <a href="#">View cart</a>
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="top-cart-inner check-out">
                                            <h4 class="text-uppercase">
                                                <a href="#">Check out</a>
                                            </h4>
                                        </div>
                                    </li>
                                </ul> 
                            </div>
                        </div>-->
                    </div>
                </div>
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