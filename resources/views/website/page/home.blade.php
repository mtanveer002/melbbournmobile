@extends('website.master')
@section('web_content')
    

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
                <div class="booking-form" onclick="">
                    <div class="dark">
                         <div class="form">
                    <h5 class="get-quote-button">Get Free Quote</h5>
                    <p>We will get in touch with you shortly</p>
                    <form action="{{route('saveQuote')}}"  method="post">
            {{csrf_field()}}

                    <div id="first-form" class="first-form">
                        <div class="select-option">
                            <label for="label-title">Device:</label>
                            <select name="brand" id="brand" class="booking-select sources" placeholder="Source Type">
                                <option>Select your Device</option>

                                @isset($brands)
                                @foreach($brands as $brand)
                                 <option value="{{$brand->brand}}">{{$brand->brand}}</option>
                                @endforeach
                                @endisset
                                                                                                                    <option value="Iphone">Iphone</option>
                                                                            <option value="Samsung">Samsung</option>
                                                                            <option value="Oppo">Oppo</option>
                                                                            <option value="Htc">Htc</option>
                                                                            <option value="Xiaomi">Xiaomi</option>
                                                                            <option value="Google">Google</option>
                                                                            <option value="Huawei">Huawei</option>
                                                                            <option value="Sony">Sony</option>
                                                                            <option value="IPad">iPad</option>
                                                                            <option value="Galaxy-Tab">Galaxy-Tab</option>
                                                                            <option value="iPod">iPod</option>
                                                                            <option value="iWatch">iWatch</option>
                                                                            <option value="Macbook">Macbook</option>
                                                                            <option value="LG">LG</option>
                                                                            <option value="Nokia">Nokia</option>
                                                                            <option value="One-Plus">One-Plus</option>
                                                                            <option value="MS-Surface">MS-Surface</option>
                                                                            <option value="Motorola">Motorola</option>
                                                                            <option value="Blackberry">Blackberry</option>
                                                                            <option value="Asus">Asus</option>
                                                                            <option value="Telstra">Telstra</option>
                                                                            <option value="Vivo">Vivo</option>
                              </select>
                        </div>
                        <div class="select-option">
                            <label for="label-title">Model:</label>
                            <select name="modal" id="modal" class="booking-select sources" placeholder="Source Type">
                                <option>Select your Model</option>

                                @isset($modals)
                                @foreach($modals as $modal)
                                 <option value="{{$modal->name}}">{{$modal->name}}</option>
                                @endforeach
                                @endisset
                                                                                                                    <option value="iPhone 4">iPhone 4</option>
                                                                            <option value="iPhone 4s">iPhone 4s</option>
                                                                            <option value="iPhone 5">iPhone 5</option>
                                                                            <option value="iPhone 5s">iPhone 5s</option>
                                                                            <option value="iPhone 5c">iPhone 5c</option>
                                                                            <option value="iPhone 6">iPhone 6</option>
                                                                            <option value="iPhone 6 Plus">iPhone 6 Plus</option>
                                                                            <option value="iPhone 6s">iPhone 6s</option>
                                                                            <option value="iPhone 6s Plus">iPhone 6s Plus</option>
                                                                            <option value="iPhone 7">iPhone 7</option>
                                                                            <option value="iPhone 7 Plus">iPhone 7 Plus</option>
                                                                            <option value="iPhone 8">iPhone 8</option>
                                                                            <option value="iPhone 8 Plus">iPhone 8 Plus</option>
                                                                            <option value="iPhone SE">iPhone SE</option>
                                                                            <option value="iPhone SE 2020">iPhone SE 2020</option>
                                                                            <option value="iPhone X">iPhone X</option>
                                                                            <option value="iPhone XR">iPhone XR</option>
                                                                            <option value="iPhone XS">iPhone XS</option>
                                                                            <option value="iPhone XS Max">iPhone XS Max</option>
                                                                            <option value="iPhone 11">iPhone 11</option>
                                                                            <option value="iPhone 11 Pro">iPhone 11 Pro</option>
                                                                            <option value="Huawei P Smart">Huawei P Smart</option>
                                                                            <option value="Oppo R7">Oppo R7</option>
                                                                            <option value="Huawei P8">Huawei P8</option>
                                                                            <option value="Huawei P8 Lite">Huawei P8 Lite</option>
                                                                            <option value="Huawei P9">Huawei P9</option>
                                                                            <option value="Xiaomi Mi A1">Xiaomi Mi A1</option>
                                                                            <option value="Huawei P9 Lite">Huawei P9 Lite</option>
                                                                            <option value="Huawei P9 Plus">Huawei P9 Plus</option>
                                                                            <option value="Huawei P10">Huawei P10</option>
                                                                            <option value="Huawei P10 Lite">Huawei P10 Lite</option>
                                                                            <option value="Huawei P10 Plus">Huawei P10 Plus</option>
                                                                            <option value="Huawei P20">Huawei P20</option>
                                                                            <option value="Huawei P20 Lite">Huawei P20 Lite</option>
                                                                            <option value="Huawei P20 Pro">Huawei P20 Pro</option>
                                                                            <option value="Xiaomi Mi A2">Xiaomi Mi A2</option>
                                                                            <option value="Xiaomi Mi A2 Lite">Xiaomi Mi A2 Lite</option>
                                                                            <option value="Huawei P30">Huawei P30</option>
                                                                            <option value="Xiaomi Mi 2A">Xiaomi Mi 2A</option>
                                                                            <option value="Huawei P30 Lite">Huawei P30 Lite</option>
                                                                            <option value="Xiaomi Mi 3">Xiaomi Mi 3</option>
                                                                            <option value="Huawei P30 Pro">Huawei P30 Pro</option>
                                                                            <option value="Huawei P40 Pro">Huawei P40 Pro</option>
                                                                            <option value="Xiaomi Mi 4">Xiaomi Mi 4</option>
                                                                            <option value="Xiaomi Mi 4C">Xiaomi Mi 4C</option>
                                                                            <option value="Xiaomi Mi 4i">Xiaomi Mi 4i</option>
                                                                            <option value="Xiaomi Mi 4S">Xiaomi Mi 4S</option>
                                                                            <option value="Xiaomi Mi 5">Xiaomi Mi 5</option>
                                                                            <option value="Xiaomi Mi 5C">Xiaomi Mi 5C</option>
                                                                            <option value="Huawei Mate 8">Huawei Mate 8</option>
                                                                            <option value="Xiaomi Mi 5s">Xiaomi Mi 5s</option>
                                                                            <option value="Huawei Mate 9">Huawei Mate 9</option>
                                                                            <option value="Xiaomi Mi 5S Plus">Xiaomi Mi 5S Plus</option>
                                                                            <option value="Huawei Mate 9 Lite">Huawei Mate 9 Lite</option>
                                                                            <option value="Huawei Mate 9 Pro">Huawei Mate 9 Pro</option>
                                                                            <option value="Xiaomi Mi 6">Xiaomi Mi 6</option>
                                                                            <option value="Huawei Mate 10">Huawei Mate 10</option>
                                                                            <option value="Huawei Mate 10 Lite">Huawei Mate 10 Lite</option>
                                                                            <option value="Xiaomi Mi 8">Xiaomi Mi 8</option>
                                                                            <option value="Huawei Mate 10 Pro">Huawei Mate 10 Pro</option>
                                                                            <option value="Huawei Mate 20">Huawei Mate 20</option>
                                                                            <option value="Xiaomi MI 8 Lite">Xiaomi MI 8 Lite</option>
                                                                            <option value="Huawei Mate 20 Pro">Huawei Mate 20 Pro</option>
                                                                            <option value="Xiaomi Mi 8 SE">Xiaomi Mi 8 SE</option>
                                                                            <option value="Huawei Mate 20 X">Huawei Mate 20 X</option>
                                                                            <option value="Huawei Mate 20 RS">Huawei Mate 20 RS</option>
                                                                            <option value="Xiaomi Mi 9">Xiaomi Mi 9</option>
                                                                            <option value="Huawei Mate 30">Huawei Mate 30</option>
                                                                            <option value="Xiaomi Mi 9 Lite">Xiaomi Mi 9 Lite</option>
                                                                            <option value="Huawei Mate 30 Pro">Huawei Mate 30 Pro</option>
                                                                            <option value="Xiaomi Mi 9 Pro">Xiaomi Mi 9 Pro</option>
                                                                            <option value="Xiaomi Mi 9T">Xiaomi Mi 9T</option>
                                                                            <option value="Xiaomi Mi 9 SE">Xiaomi Mi 9 SE</option>
                                                                            <option value="Xiaomi Mi A3">Xiaomi Mi A3</option>
                                                                            <option value="Xiaomi Mi 10">Xiaomi Mi 10</option>
                                                                            <option value="Ascend Y210">Ascend Y210</option>
                                                                            <option value="Xiaomi Mi 10 Pro">Xiaomi Mi 10 Pro</option>
                                                                            <option value="Ascend Y330">Ascend Y330</option>
                                                                            <option value="Ascend Y530">Ascend Y530</option>
                                                                            <option value="Xiaomi Mi Mix">Xiaomi Mi Mix</option>
                                                                            <option value="Ascend Y550">Ascend Y550</option>
                                                                            <option value="Ascend G300">Ascend G300</option>
                                                                            <option value="Xiaomi Mi Mix 2">Xiaomi Mi Mix 2</option>
                                                                            <option value="Ascend G510">Ascend G510</option>
                                                                            <option value="Xiaomi MI Mix 2S">Xiaomi MI Mix 2S</option>
                                                                            <option value="Ascend G526">Ascend G526</option>
                                                                            <option value="Xiaomi Mi Mix 3">Xiaomi Mi Mix 3</option>
                                                                            <option value="Ascend G600">Ascend G600</option>
                                                                            <option value="Ascend G730">Ascend G730</option>
                                                                            <option value="Ascend P6">Ascend P6</option>
                                                                            <option value="Xiaomi Mi Max">Xiaomi Mi Max</option>
                                                                            <option value="Ascend P7">Ascend P7</option>
                                                                            <option value="Xiaomi Mi Max 2">Xiaomi Mi Max 2</option>
                                                                            <option value="Huawei Honor 7C">Huawei Honor 7C</option>
                                                                            <option value="Xiaomi Mi Max 3">Xiaomi Mi Max 3</option>
                                                                            <option value="Huawei Honor 4X">Huawei Honor 4X</option>
                                                                            <option value="Xiaomi Mi Note Pro">Xiaomi Mi Note Pro</option>
                                                                            <option value="iPhone 11 Pro Max">iPhone 11 Pro Max</option>
                                                                            <option value="Xiaomi Mi Note 1">Xiaomi Mi Note 1</option>
                                                                            <option value="Xiaomi Mi Note 2">Xiaomi Mi Note 2</option>
                                                                            <option value="Huawei Honor 7X">Huawei Honor 7X</option>
                                                                            <option value="Xiaomi Redmi Note 3G">Xiaomi Redmi Note 3G</option>
                                                                            <option value="Huawei Honor 8">Huawei Honor 8</option>
                                                                            <option value="Huawei Honor 8 Lite">Huawei Honor 8 Lite</option>
                                                                            <option value="Huawei Honor 8X">Huawei Honor 8X</option>
                                                                            <option value="Huawei Honor 9">Huawei Honor 9</option>
                                                                            <option value="Huawei Honor 9 Lite">Huawei Honor 9 Lite</option>
                                                                            <option value="Huawei Honor 10">Huawei Honor 10</option>
                                                                            <option value="Xiaomi Redmi Note 4G">Xiaomi Redmi Note 4G</option>
                                                                            <option value="Honor View 10">Honor View 10</option>
                                                                            <option value="Xiaomi Redmi Note 2">Xiaomi Redmi Note 2</option>
                                                                            <option value="Honor View 20">Honor View 20</option>
                                                                            <option value="Xiaomi Redmi Note 3">Xiaomi Redmi Note 3</option>
                                                                            <option value="Huawei Honor 20">Huawei Honor 20</option>
                                                                            <option value="Huawei Honor 9i">Huawei Honor 9i</option>
                                                                            <option value="Xiaomi Redmi Note 3 Pro">Xiaomi Redmi Note 3 Pro</option>
                                                                            <option value="Xiaomi Redmi Note 4">Xiaomi Redmi Note 4</option>
                                                                            <option value="Huawei Y3">Huawei Y3</option>
                                                                            <option value="Xiaomi Redmi Note 4X">Xiaomi Redmi Note 4X</option>
                                                                            <option value="Huawei Y6">Huawei Y6</option>
                                                                            <option value="Huawei Y6 Pro">Huawei Y6 Pro</option>
                                                                            <option value="Xiaomi Redmi Note 5">Xiaomi Redmi Note 5</option>
                                                                            <option value="Huawei Y7 2017">Huawei Y7 2017</option>
                                                                            <option value="Xiaomi Redmi Note 5 Pro">Xiaomi Redmi Note 5 Pro</option>
                                                                            <option value="Huawei Y5 2018">Huawei Y5 2018</option>
                                                                            <option value="Huawei Y6 2018">Huawei Y6 2018</option>
                                                                            <option value="Xiaomi Redmi Note 5A">Xiaomi Redmi Note 5A</option>
                                                                            <option value="Huawei Y7 2018">Huawei Y7 2018</option>
                                                                            <option value="Xiaomi Redmi Note 5A Prime">Xiaomi Redmi Note 5A Prime</option>
                                                                            <option value="Huawei Y9 2018">Huawei Y9 2018</option>
                                                                            <option value="Huawei Y6 2019">Huawei Y6 2019</option>
                                                                            <option value="Huawei Y7 2019">Huawei Y7 2019</option>
                                                                            <option value="Xiaomi Redmi Note 6 Pro">Xiaomi Redmi Note 6 Pro</option>
                                                                            <option value="Huawei Y7 Prime">Huawei Y7 Prime</option>
                                                                            <option value="Xiaomi Redmi Note 7">Xiaomi Redmi Note 7</option>
                                                                            <option value="Xiaomi Redmi Note 7 Pro">Xiaomi Redmi Note 7 Pro</option>
                                                                            <option value="Huawei Y7 Pro 2019">Huawei Y7 Pro 2019</option>
                                                                            <option value="Huawei Y5 2019">Huawei Y5 2019</option>
                                                                            <option value="Xiaomi Redmi Note 8">Xiaomi Redmi Note 8</option>
                                                                            <option value="Huawei Y9 2019">Huawei Y9 2019</option>
                                                                            <option value="Xiaomi Redmi Note 8 Pro">Xiaomi Redmi Note 8 Pro</option>
                                                                            <option value="Huawei Y9 Prime 2019">Huawei Y9 Prime 2019</option>
                                                                            <option value="Huawei Y6 2020">Huawei Y6 2020</option>
                                                                            <option value="Xiaomi Redmi Note 8T">Xiaomi Redmi Note 8T</option>
                                                                            <option value="Xiaomi Mi Note 10">Xiaomi Mi Note 10</option>
                                                                            <option value="Xiaomi Mi Note 10 Pro">Xiaomi Mi Note 10 Pro</option>
                                                                            <option value="Xiaomi Redmi Note 9">Xiaomi Redmi Note 9</option>
                                                                            <option value="Xiaomi Redmi Note 9S">Xiaomi Redmi Note 9S</option>
                                                                            <option value="Xiaomi Redmi S2">Xiaomi Redmi S2</option>
                                                                            <option value="Xiaomi Redmi Pro">Xiaomi Redmi Pro</option>
                                                                            <option value="Huawei Y7 2020">Huawei Y7 2020</option>
                                                                            <option value="Xiaomi Redmi 1S">Xiaomi Redmi 1S</option>
                                                                            <option value="Huawei G8">Huawei G8</option>
                                                                            <option value="Huawei Nexus 6P">Huawei Nexus 6P</option>
                                                                            <option value="Xiaomi Redmi 2">Xiaomi Redmi 2</option>
                                                                            <option value="Huawei GR3">Huawei GR3</option>
                                                                            <option value="Xiaomi Redmi 3">Xiaomi Redmi 3</option>
                                                                            <option value="Huawei GR5">Huawei GR5</option>
                                                                            <option value="Xiaomi Redmi 3S">Xiaomi Redmi 3S</option>
                                                                            <option value="Huawei Nova">Huawei Nova</option>
                                                                            <option value="Xiaomi Redmi 4">Xiaomi Redmi 4</option>
                                                                            <option value="Huawei Nova Plus">Huawei Nova Plus</option>
                                                                            <option value="Huawei Nova 2">Huawei Nova 2</option>
                                                                            <option value="Xiaomi Redmi 4A">Xiaomi Redmi 4A</option>
                                                                            <option value="Huawei Nova 2 Plus">Huawei Nova 2 Plus</option>
                                                                            <option value="Xiaomi Redmi 4X">Xiaomi Redmi 4X</option>
                                                                            <option value="Huawei Nova 3">Huawei Nova 3</option>
                                                                            <option value="Huawei Nova 3i">Huawei Nova 3i</option>
                                                                            <option value="Xiaomi Redmi 5">Xiaomi Redmi 5</option>
                                                                            <option value="Huawei Nova 3E">Huawei Nova 3E</option>
                                                                            <option value="Xiaomi Redmi 5 Plus">Xiaomi Redmi 5 Plus</option>
                                                                            <option value="Huawei Nova 4">Huawei Nova 4</option>
                                                                            <option value="Huawei Nova 4e">Huawei Nova 4e</option>
                                                                            <option value="Xiaomi Redmi 5A">Xiaomi Redmi 5A</option>
                                                                            <option value="Huawei nova 5">Huawei nova 5</option>
                                                                            <option value="Xiaomi Redmi 6">Xiaomi Redmi 6</option>
                                                                            <option value="Huawei nova 5 Pro">Huawei nova 5 Pro</option>
                                                                            <option value="Xiaomi Redmi 6A">Xiaomi Redmi 6A</option>
                                                                            <option value="Huawei nova 5i">Huawei nova 5i</option>
                                                                            <option value="Xiaomi Redmi 7">Xiaomi Redmi 7</option>
                                                                            <option value="Huawei nova 5i Pro">Huawei nova 5i Pro</option>
                                                                            <option value="Xiaomi Redmi 7A">Xiaomi Redmi 7A</option>
                                                                            <option value="Xiaomi Redmi 8">Xiaomi Redmi 8</option>
                                                                            <option value="Xiaomi Redmi 8a">Xiaomi Redmi 8a</option>
                                                                            <option value="Xiaomi Redmi 9A">Xiaomi Redmi 9A</option>
                                                                            <option value="Xiaomi Redmi K20">Xiaomi Redmi K20</option>
                                                                            <option value="Huawei Nova 5T">Huawei Nova 5T</option>
                                                                            <option value="Xiaomi Redmi K20 Pro">Xiaomi Redmi K20 Pro</option>
                                                                            <option value="Huawei Nova 7i">Huawei Nova 7i</option>
                                                                            <option value="Xiaomi Redmi K30 / Poco X2">Xiaomi Redmi K30 / Poco X2</option>
                                                                            <option value="Xiaomi Redmi K30 Pro / Poco F2 Pro">Xiaomi Redmi K30 Pro / Poco F2 Pro</option>
                                                                            <option value="Xiaomi Mi Pad 1">Xiaomi Mi Pad 1</option>
                                                                            <option value="Xiaomi Mi Pad 2">Xiaomi Mi Pad 2</option>
                                                                            <option value="Xiaomi Mi Pad 3">Xiaomi Mi Pad 3</option>
                                                                            <option value="Xiaomi Mi Pad 4">Xiaomi Mi Pad 4</option>
                                                                            <option value="Xiaomi Mi Pad 4 Plus">Xiaomi Mi Pad 4 Plus</option>
                                                                            <option value="Xiaomi Pocophone F1">Xiaomi Pocophone F1</option>
                                                                            <option value="Xiaomi Black Shark">Xiaomi Black Shark</option>
                                                                            <option value="Xiaomi Black Shark 2">Xiaomi Black Shark 2</option>
                                                                            <option value="Xiaomi Black Shark Helo">Xiaomi Black Shark Helo</option>
                                                                            <option value="Galaxy S4 i9500">Galaxy S4 i9500</option>
                                                                            <option value="Galaxy S4 i9506">Galaxy S4 i9506</option>
                                                                            <option value="Galaxy S4 4G i9505">Galaxy S4 4G i9505</option>
                                                                            <option value="Galaxy S4 4G i9507">Galaxy S4 4G i9507</option>
                                                                            <option value="Galaxy S4 Mini i9195">Galaxy S4 Mini i9195</option>
                                                                            <option value="Galaxy S4 Active i9295">Galaxy S4 Active i9295</option>
                                                                            <option value="Galaxy S5">Galaxy S5</option>
                                                                            <option value="Galaxy S5 Mini">Galaxy S5 Mini</option>
                                                                            <option value="Galaxy S6">Galaxy S6</option>
                                                                            <option value="Galaxy S6 active">Galaxy S6 active</option>
                                                                            <option value="Galaxy S6 Edge">Galaxy S6 Edge</option>
                                                                            <option value="Galaxy S6 Edge Plus">Galaxy S6 Edge Plus</option>
                                                                            <option value="Galaxy S7">Galaxy S7</option>
                                                                            <option value="Galaxy S7 Edge">Galaxy S7 Edge</option>
                                                                            <option value="Galaxy S8">Galaxy S8</option>
                                                                            <option value="Galaxy S8 Plus">Galaxy S8 Plus</option>
                                                                            <option value="Galaxy S9">Galaxy S9</option>
                                                                            <option value="Galaxy S9 Plus">Galaxy S9 Plus</option>
                                                                            <option value="Galaxy S10">Galaxy S10</option>
                                                                            <option value="Galaxy S10 E">Galaxy S10 E</option>
                                                                            <option value="Galaxy S10 Plus">Galaxy S10 Plus</option>
                                                                            <option value="Galaxy S10 5G">Galaxy S10 5G</option>
                                                                            <option value="Galaxy S10 Lite">Galaxy S10 Lite</option>
                                                                            <option value="Galaxy S20">Galaxy S20</option>
                                                                            <option value="Galaxy S20 Plus">Galaxy S20 Plus</option>
                                                                            <option value="Galaxy S20 Ultra">Galaxy S20 Ultra</option>
                                                                            <option value="Galaxy A3 (A300)">Galaxy A3 (A300)</option>
                                                                            <option value="Oppo R7 Plus">Oppo R7 Plus</option>
                                                                            <option value="Galaxy A5 (A500)">Galaxy A5 (A500)</option>
                                                                            <option value="Galaxy A7 (A700)">Galaxy A7 (A700)</option>
                                                                            <option value="Galaxy A3 2016 (A310)">Galaxy A3 2016 (A310)</option>
                                                                            <option value="Oppo R7s">Oppo R7s</option>
                                                                            <option value="Galaxy A5 2016 (A510)">Galaxy A5 2016 (A510)</option>
                                                                            <option value="Oppo R9">Oppo R9</option>
                                                                            <option value="Galaxy A7 2016 (A710)">Galaxy A7 2016 (A710)</option>
                                                                            <option value="Galaxy A3 2017 (A320)">Galaxy A3 2017 (A320)</option>
                                                                            <option value="Oppo R9 Plus">Oppo R9 Plus</option>
                                                                            <option value="Galaxy A5 2017 (A520)">Galaxy A5 2017 (A520)</option>
                                                                            <option value="Galaxy A7 2017 (A720)">Galaxy A7 2017 (A720)</option>
                                                                            <option value="Oppo R9s">Oppo R9s</option>
                                                                            <option value="Galaxy A6 Plus 2018 A605">Galaxy A6 Plus 2018 A605</option>
                                                                            <option value="Oppo R9s Plus">Oppo R9s Plus</option>
                                                                            <option value="Galaxy A8 2018 A530">Galaxy A8 2018 A530</option>
                                                                            <option value="Galaxy A8 Plus 2018 A730">Galaxy A8 Plus 2018 A730</option>
                                                                            <option value="Oppo R11">Oppo R11</option>
                                                                            <option value="Galaxy A9 2018 A920">Galaxy A9 2018 A920</option>
                                                                            <option value="Galaxy A10 2019 A105">Galaxy A10 2019 A105</option>
                                                                            <option value="Oppo R11 Plus">Oppo R11 Plus</option>
                                                                            <option value="Galaxy A20e 2019 A202">Galaxy A20e 2019 A202</option>
                                                                            <option value="Galaxy A20 2019 A205">Galaxy A20 2019 A205</option>
                                                                            <option value="Oppo R11S Plus">Oppo R11S Plus</option>
                                                                            <option value="Galaxy A20S 2019 A207">Galaxy A20S 2019 A207</option>
                                                                            <option value="Galaxy A30 2019 A305">Galaxy A30 2019 A305</option>
                                                                            <option value="Galaxy A30S 2019 A307">Galaxy A30S 2019 A307</option>
                                                                            <option value="Galaxy A40 2019 A405">Galaxy A40 2019 A405</option>
                                                                            <option value="Galaxy A50 2019 A505">Galaxy A50 2019 A505</option>
                                                                            <option value="Oppo R15">Oppo R15</option>
                                                                            <option value="Galaxy A60 2019 A606">Galaxy A60 2019 A606</option>
                                                                            <option value="Galaxy A70 2019 A705">Galaxy A70 2019 A705</option>
                                                                            <option value="Oppo R15 Pro">Oppo R15 Pro</option>
                                                                            <option value="Galaxy A80 2019 A805">Galaxy A80 2019 A805</option>
                                                                            <option value="Oppo R11S">Oppo R11S</option>
                                                                            <option value="Galaxy A90 2019 5G">Galaxy A90 2019 5G</option>
                                                                            <option value="Galaxy A21 2020 A215">Galaxy A21 2020 A215</option>
                                                                            <option value="Oppo R17">Oppo R17</option>
                                                                            <option value="Galaxy A21S 2020 A217">Galaxy A21S 2020 A217</option>
                                                                            <option value="Galaxy A31 2020 A315">Galaxy A31 2020 A315</option>
                                                                            <option value="Oppo R17 Pro">Oppo R17 Pro</option>
                                                                            <option value="Galaxy A41 2020 A415">Galaxy A41 2020 A415</option>
                                                                            <option value="Galaxy A51 2020 A515">Galaxy A51 2020 A515</option>
                                                                            <option value="Galaxy A51 5G 2020 A516">Galaxy A51 5G 2020 A516</option>
                                                                            <option value="Galaxy A71 2020 A715">Galaxy A71 2020 A715</option>
                                                                            <option value="Galaxy A71 5G 2020 A716">Galaxy A71 5G 2020 A716</option>
                                                                            <option value="Galaxy A11 2020 A115">Galaxy A11 2020 A115</option>
                                                                            <option value="Galaxy M10">Galaxy M10</option>
                                                                            <option value="Galaxy M20">Galaxy M20</option>
                                                                            <option value="Galaxy M30">Galaxy M30</option>
                                                                            <option value="Oppo F1">Oppo F1</option>
                                                                            <option value="Galaxy M11 2020">Galaxy M11 2020</option>
                                                                            <option value="Oppo F1 Plus">Oppo F1 Plus</option>
                                                                            <option value="Galaxy J3">Galaxy J3</option>
                                                                            <option value="Oppo F1s">Oppo F1s</option>
                                                                            <option value="Galaxy J3 Pro">Galaxy J3 Pro</option>
                                                                            <option value="Galaxy J5">Galaxy J5</option>
                                                                            <option value="Galaxy J5 Prime">Galaxy J5 Prime</option>
                                                                            <option value="Galaxy J5 Pro">Galaxy J5 Pro</option>
                                                                            <option value="Galaxy J6">Galaxy J6</option>
                                                                            <option value="Oppo A31 2020">Oppo A31 2020</option>
                                                                            <option value="Galaxy J6 Plus">Galaxy J6 Plus</option>
                                                                            <option value="Galaxy J7">Galaxy J7</option>
                                                                            <option value="Oppo A73">Oppo A73</option>
                                                                            <option value="Galaxy J7 Prime">Galaxy J7 Prime</option>
                                                                            <option value="Galaxy J7 Pro">Galaxy J7 Pro</option>
                                                                            <option value="Galaxy J8 J810 (2018)">Galaxy J8 J810 (2018)</option>
                                                                            <option value="Oppo A37">Oppo A37</option>
                                                                            <option value="Galaxy Note i9220 n7000">Galaxy Note i9220 n7000</option>
                                                                            <option value="OPPO A53">OPPO A53</option>
                                                                            <option value="Galaxy Note Edge">Galaxy Note Edge</option>
                                                                            <option value="Galaxy Note 2 N7100">Galaxy Note 2 N7100</option>
                                                                            <option value="OPPO A59">OPPO A59</option>
                                                                            <option value="Galaxy Note 2 4g N7105">Galaxy Note 2 4g N7105</option>
                                                                            <option value="Galaxy Note 3 N9005">Galaxy Note 3 N9005</option>
                                                                            <option value="Galaxy Note 4">Galaxy Note 4</option>
                                                                            <option value="Galaxy Note 5">Galaxy Note 5</option>
                                                                            <option value="Oppo A79">Oppo A79</option>
                                                                            <option value="Galaxy Note 8">Galaxy Note 8</option>
                                                                            <option value="Galaxy Note 9">Galaxy Note 9</option>
                                                                            <option value="Oppo A83 2018">Oppo A83 2018</option>
                                                                            <option value="Galaxy Note 10">Galaxy Note 10</option>
                                                                            <option value="Galaxy Note 10 Plus | 5G">Galaxy Note 10 Plus | 5G</option>
                                                                            <option value="Galaxy Note 10 Lite">Galaxy Note 10 Lite</option>
                                                                            <option value="Oppo A5">Oppo A5</option>
                                                                            <option value="Galaxy Note 20">Galaxy Note 20</option>
                                                                            <option value="Galaxy Note 20 Ultra">Galaxy Note 20 Ultra</option>
                                                                            <option value="Galaxy Mega 5.8 i9152">Galaxy Mega 5.8 i9152</option>
                                                                            <option value="Galaxy Alpha G850">Galaxy Alpha G850</option>
                                                                            <option value="Galaxy Mega 6.3 i9205">Galaxy Mega 6.3 i9205</option>
                                                                            <option value="Galaxy Express i8730">Galaxy Express i8730</option>
                                                                            <option value="Galaxy Duos S7562">Galaxy Duos S7562</option>
                                                                            <option value="Galaxy Ace 3 S7270">Galaxy Ace 3 S7270</option>
                                                                            <option value="Galaxy Ace S5830">Galaxy Ace S5830</option>
                                                                            <option value="Galaxy Ace Plus s7500">Galaxy Ace Plus s7500</option>
                                                                            <option value="Oppo AX5">Oppo AX5</option>
                                                                            <option value="Galaxy Nexus i9250">Galaxy Nexus i9250</option>
                                                                            <option value="Galaxy C9 Pro">Galaxy C9 Pro</option>
                                                                            <option value="Oppo A5S (AX5S)">Oppo A5S (AX5S)</option>
                                                                            <option value="Xcover S5690">Xcover S5690</option>
                                                                            <option value="Galaxy Duos 2 S7582">Galaxy Duos 2 S7582</option>
                                                                            <option value="Galaxy Grand Duos I9082">Galaxy Grand Duos I9082</option>
                                                                            <option value="Oppo AX7">Oppo AX7</option>
                                                                            <option value="Galaxy Grand Prime">Galaxy Grand Prime</option>
                                                                            <option value="Oppo A7">Oppo A7</option>
                                                                            <option value="Galaxy Core Prime">Galaxy Core Prime</option>
                                                                            <option value="Oppo A7X">Oppo A7X</option>
                                                                            <option value="Oppo A9">Oppo A9</option>
                                                                            <option value="Oppo A9X">Oppo A9X</option>
                                                                            <option value="Oppo A91">Oppo A91</option>
                                                                            <option value="Oppo A5 2020">Oppo A5 2020</option>
                                                                            <option value="Oppo A9 2020">Oppo A9 2020</option>
                                                                            <option value="Oppo A52">Oppo A52</option>
                                                                            <option value="RealMe C1">RealMe C1</option>
                                                                            <option value="RealMe U1">RealMe U1</option>
                                                                            <option value="RealMe 2">RealMe 2</option>
                                                                            <option value="RealMe 5 Pro">RealMe 5 Pro</option>
                                                                            <option value="RealMe 5">RealMe 5</option>
                                                                            <option value="RealMe Q">RealMe Q</option>
                                                                            <option value="RealMe 3 Pro">RealMe 3 Pro</option>
                                                                            <option value="Realme 1">Realme 1</option>
                                                                            <option value="RealMe 2 Pro">RealMe 2 Pro</option>
                                                                            <option value="RealMe X">RealMe X</option>
                                                                            <option value="Realme X2 Pro">Realme X2 Pro</option>
                                                                            <option value="Realme C3">Realme C3</option>
                                                                            <option value="Realme 6">Realme 6</option>
                                                                            <option value="Realme 6 Pro">Realme 6 Pro</option>
                                                                            <option value="Oppo Reno 5G">Oppo Reno 5G</option>
                                                                            <option value="Oppo Reno Ace">Oppo Reno Ace</option>
                                                                            <option value="Oppo Reno 10x zoom">Oppo Reno 10x zoom</option>
                                                                            <option value="Oppo Reno Z">Oppo Reno Z</option>
                                                                            <option value="Oppo Reno">Oppo Reno</option>
                                                                            <option value="Oppo Mirror 5">Oppo Mirror 5</option>
                                                                            <option value="Oppo Find X">Oppo Find X</option>
                                                                            <option value="Xperia X10">Xperia X10</option>
                                                                            <option value="xPeria X">xPeria X</option>
                                                                            <option value="Xperia X Performance">Xperia X Performance</option>
                                                                            <option value="Xperia XZ">Xperia XZ</option>
                                                                            <option value="Xperia XZ Premium">Xperia XZ Premium</option>
                                                                            <option value="Xperia XZ1">Xperia XZ1</option>
                                                                            <option value="Xperia XZ1 Compact">Xperia XZ1 Compact</option>
                                                                            <option value="Xperia XZ2">Xperia XZ2</option>
                                                                            <option value="Xperia XZ3">Xperia XZ3</option>
                                                                            <option value="xPeria XA">xPeria XA</option>
                                                                            <option value="Xperia XA1">Xperia XA1</option>
                                                                            <option value="Xperia XA1 Plus">Xperia XA1 Plus</option>
                                                                            <option value="Xperia XA1 Ultra">Xperia XA1 Ultra</option>
                                                                            <option value="Xperia XA2">Xperia XA2</option>
                                                                            <option value="Xperia XA2 Ultra">Xperia XA2 Ultra</option>
                                                                            <option value="xPeria Z Ultra">xPeria Z Ultra</option>
                                                                            <option value="xPeria Z1 L39h">xPeria Z1 L39h</option>
                                                                            <option value="Xperia Z1 Compact">Xperia Z1 Compact</option>
                                                                            <option value="xPeria Z2">xPeria Z2</option>
                                                                            <option value="xPeria Z3">xPeria Z3</option>
                                                                            <option value="xPeria Z3 Plus">xPeria Z3 Plus</option>
                                                                            <option value="xPeria Z3 Compact">xPeria Z3 Compact</option>
                                                                            <option value="Xperia Z4 E6553">Xperia Z4 E6553</option>
                                                                            <option value="Xperia Z5">Xperia Z5</option>
                                                                            <option value="Xperia Z5 Compact">Xperia Z5 Compact</option>
                                                                            <option value="Xperia Z5 Premium">Xperia Z5 Premium</option>
                                                                            <option value="XPeria Z L36">XPeria Z L36</option>
                                                                            <option value="xPeria M">xPeria M</option>
                                                                            <option value="Xperia M2">Xperia M2</option>
                                                                            <option value="Xperia M4 Aqua">Xperia M4 Aqua</option>
                                                                            <option value="Xperia M5">Xperia M5</option>
                                                                            <option value="Sony Z Tablet">Sony Z Tablet</option>
                                                                            <option value="Sony Z2 Tablet">Sony Z2 Tablet</option>
                                                                            <option value="Sony Z3 Tablet">Sony Z3 Tablet</option>
                                                                            <option value="Sony Z4 Tablet">Sony Z4 Tablet</option>
                                                                            <option value="XPeria S LT26i">XPeria S LT26i</option>
                                                                            <option value="xPeria Arc/Arc S">xPeria Arc/Arc S</option>
                                                                            <option value="Xperia V lt25i">Xperia V lt25i</option>
                                                                            <option value="Xperia C4">Xperia C4</option>
                                                                            <option value="Xperia Play">Xperia Play</option>
                                                                            <option value="XPeria P LT22i">XPeria P LT22i</option>
                                                                            <option value="xPeria U ST25i">xPeria U ST25i</option>
                                                                            <option value="Xperia 10">Xperia 10</option>
                                                                            <option value="Xperia 10 Plus">Xperia 10 Plus</option>
                                                                            <option value="Xperia L3">Xperia L3</option>
                                                                            <option value="Google Nexus 1st Gen">Google Nexus 1st Gen</option>
                                                                            <option value="Google Nexus 2nd Gen">Google Nexus 2nd Gen</option>
                                                                            <option value="Google Pixel">Google Pixel</option>
                                                                            <option value="Google Pixel XL">Google Pixel XL</option>
                                                                            <option value="Google Pixel 2">Google Pixel 2</option>
                                                                            <option value="Google Pixel 2 XL">Google Pixel 2 XL</option>
                                                                            <option value="Google Pixel 3">Google Pixel 3</option>
                                                                            <option value="Google Pixel 3 XL">Google Pixel 3 XL</option>
                                                                            <option value="Google Pixel 3A">Google Pixel 3A</option>
                                                                            <option value="Google Pixel 3A XL">Google Pixel 3A XL</option>
                                                                            <option value="Google Pixel 4">Google Pixel 4</option>
                                                                            <option value="Google Pixel 4 XL">Google Pixel 4 XL</option>
                                                                            <option value="HTC Desire Eye">HTC Desire Eye</option>
                                                                            <option value="HTC Desire C">HTC Desire C</option>
                                                                            <option value="HTC Desire S">HTC Desire S</option>
                                                                            <option value="HTC Desire X">HTC Desire X</option>
                                                                            <option value="HTC Desire Z">HTC Desire Z</option>
                                                                            <option value="HTC Desire HD">HTC Desire HD</option>
                                                                            <option value="HTC Desire 300">HTC Desire 300</option>
                                                                            <option value="HTC Desire 320">HTC Desire 320</option>
                                                                            <option value="HTC Desire 510">HTC Desire 510</option>
                                                                            <option value="HTC Desire 530">HTC Desire 530</option>
                                                                            <option value="HTC Desire 601">HTC Desire 601</option>
                                                                            <option value="HTC Desire 610">HTC Desire 610</option>
                                                                            <option value="HTC Desire 616">HTC Desire 616</option>
                                                                            <option value="HTC Desire 620">HTC Desire 620</option>
                                                                            <option value="HTC Desire 625">HTC Desire 625</option>
                                                                            <option value="HTC Desire 626">HTC Desire 626</option>
                                                                            <option value="HTC Desire 628">HTC Desire 628</option>
                                                                            <option value="HTC Desire 816">HTC Desire 816</option>
                                                                            <option value="HTC Desire 820">HTC Desire 820</option>
                                                                            <option value="HTC One V">HTC One V</option>
                                                                            <option value="HTC One SV">HTC One SV</option>
                                                                            <option value="HTC One S">HTC One S</option>
                                                                            <option value="HTC 10">HTC 10</option>
                                                                            <option value="HTC One ME">HTC One ME</option>
                                                                            <option value="HTC One Max">HTC One Max</option>
                                                                            <option value="HTC One E9">HTC One E9</option>
                                                                            <option value="HTC One Mini">HTC One Mini</option>
                                                                            <option value="HTC One Mini 2">HTC One Mini 2</option>
                                                                            <option value="HTC One A9">HTC One A9</option>
                                                                            <option value="HTC One M7">HTC One M7</option>
                                                                            <option value="HTC One M8">HTC One M8</option>
                                                                            <option value="HTC One M8s">HTC One M8s</option>
                                                                            <option value="HTC One M9">HTC One M9</option>
                                                                            <option value="HTC One M9 Plus">HTC One M9 Plus</option>
                                                                            <option value="HTC One M9s">HTC One M9s</option>
                                                                            <option value="HTC One X">HTC One X</option>
                                                                            <option value="HTC One XL">HTC One XL</option>
                                                                            <option value="HTC One X9">HTC One X9</option>
                                                                            <option value="HTC One X10">HTC One X10</option>
                                                                            <option value="HTC U Play">HTC U Play</option>
                                                                            <option value="HTC U11">HTC U11</option>
                                                                            <option value="HTC Sensation">HTC Sensation</option>
                                                                            <option value="HTC Sensation XL">HTC Sensation XL</option>
                                                                            <option value="HTC Sensation XE">HTC Sensation XE</option>
                                                                            <option value="HTC Explorer">HTC Explorer</option>
                                                                            <option value="HTC HD7">HTC HD7</option>
                                                                            <option value="HTC Wildfire">HTC Wildfire</option>
                                                                            <option value="HTC Wildfire S">HTC Wildfire S</option>
                                                                            <option value="HTC Incredible S">HTC Incredible S</option>
                                                                            <option value="HTC Aria">HTC Aria</option>
                                                                            <option value="HTC Trophy 7">HTC Trophy 7</option>
                                                                            <option value="HTC Rhyme">HTC Rhyme</option>
                                                                            <option value="HTC Velocity 4g">HTC Velocity 4g</option>
                                                                            <option value="HTC Windows 8s">HTC Windows 8s</option>
                                                                            <option value="HTC Windows 8x">HTC Windows 8x</option>
                                                                            <option value="HTC Nexus 9">HTC Nexus 9</option>
                                                                            <option value="iPad 1">iPad 1</option>
                                                                            <option value="iPad 2">iPad 2</option>
                                                                            <option value="iPad 3">iPad 3</option>
                                                                            <option value="iPad 4">iPad 4</option>
                                                                            <option value="iPad 2017">iPad 2017</option>
                                                                            <option value="iPad 2018">iPad 2018</option>
                                                                            <option value="iPad 10.2 2019">iPad 10.2 2019</option>
                                                                            <option value="iPad Mini">iPad Mini</option>
                                                                            <option value="iPad Mini 2">iPad Mini 2</option>
                                                                            <option value="iPad Mini 3">iPad Mini 3</option>
                                                                            <option value="iPad Mini 4">iPad Mini 4</option>
                                                                            <option value="iPad mini 5">iPad mini 5</option>
                                                                            <option value="iPad Air">iPad Air</option>
                                                                            <option value="iPad Air 2">iPad Air 2</option>
                                                                            <option value="iPad Air 3 2019">iPad Air 3 2019</option>
                                                                            <option value="iPad Pro 9.7">iPad Pro 9.7</option>
                                                                            <option value="iPad Pro 10.5 2017">iPad Pro 10.5 2017</option>
                                                                            <option value="iPad Pro 11 1st Gen 2018">iPad Pro 11 1st Gen 2018</option>
                                                                            <option value="iPad Pro 12.9 1st Gen">iPad Pro 12.9 1st Gen</option>
                                                                            <option value="iPad Pro 12.9 2nd Gen">iPad Pro 12.9 2nd Gen</option>
                                                                            <option value="iPad Pro 12.9 3rd Gen">iPad Pro 12.9 3rd Gen</option>
                                                                            <option value="iPad Pro 11 2nd Gen 2020">iPad Pro 11 2nd Gen 2020</option>
                                                                            <option value="Series 1">Series 1</option>
                                                                            <option value="Series 2">Series 2</option>
                                                                            <option value="Series 3">Series 3</option>
                                                                            <option value="Series 4">Series 4</option>
                                                                            <option value="Series 5">Series 5</option>
                                                                            <option value="Galaxy Tab S 10.5 T800 T805">Galaxy Tab S 10.5 T800 T805</option>
                                                                            <option value="Galaxy Tab S 8.4 T700 T705">Galaxy Tab S 8.4 T700 T705</option>
                                                                            <option value="Galaxy Tab S2 8.0 T713 T719">Galaxy Tab S2 8.0 T713 T719</option>
                                                                            <option value="Galaxy Tab S2 8.0 T710 T715">Galaxy Tab S2 8.0 T710 T715</option>
                                                                            <option value="Galaxy Tab S2 9.7 T810 T815">Galaxy Tab S2 9.7 T810 T815</option>
                                                                            <option value="Galaxy Tab S2 9.7 T813 T819">Galaxy Tab S2 9.7 T813 T819</option>
                                                                            <option value="Galaxy Tab S3 T820 T825">Galaxy Tab S3 T820 T825</option>
                                                                            <option value="Galaxy Tab S4 T830 T835">Galaxy Tab S4 T830 T835</option>
                                                                            <option value="Galaxy Tab S5e T720 T725">Galaxy Tab S5e T720 T725</option>
                                                                            <option value="Galaxy Tab S6 T860 T865">Galaxy Tab S6 T860 T865</option>
                                                                            <option value="Galaxy Tab S6 Lite T810">Galaxy Tab S6 Lite T810</option>
                                                                            <option value="Galaxy Tab A 10.1 T510 T515">Galaxy Tab A 10.1 T510 T515</option>
                                                                            <option value="Galaxy Tab A 8.0 T290 T295">Galaxy Tab A 8.0 T290 T295</option>
                                                                            <option value="Galaxy Tab A 10.1 T580 T585">Galaxy Tab A 10.1 T580 T585</option>
                                                                            <option value="Galaxy Tab A 10.5 T590 T595">Galaxy Tab A 10.5 T590 T595</option>
                                                                            <option value="Galaxy Tab A 9.7 T550">Galaxy Tab A 9.7 T550</option>
                                                                            <option value="Galaxy Tab A 7.0 T280 T285">Galaxy Tab A 7.0 T280 T285</option>
                                                                            <option value="Galaxy Tab A 8.0 T350 T355">Galaxy Tab A 8.0 T350 T355</option>
                                                                            <option value="Galaxy Tab A 8.0 T380 T385">Galaxy Tab A 8.0 T380 T385</option>
                                                                            <option value="Galaxy Tab Pro S W700">Galaxy Tab Pro S W700</option>
                                                                            <option value="Galaxy Tab Pro 10.1 T520">Galaxy Tab Pro 10.1 T520</option>
                                                                            <option value="Galaxy Tab Pro 12.2 P900">Galaxy Tab Pro 12.2 P900</option>
                                                                            <option value="Galaxy Note Tab 10.1 P605">Galaxy Note Tab 10.1 P605</option>
                                                                            <option value="Galaxy Tab Note 10.1 N8020">Galaxy Tab Note 10.1 N8020</option>
                                                                            <option value="Galaxy Tab Note 10.1 N8000">Galaxy Tab Note 10.1 N8000</option>
                                                                            <option value="Galaxy Note 8.0 N5100">Galaxy Note 8.0 N5100</option>
                                                                            <option value="Galaxy Note 8.0 N5110">Galaxy Note 8.0 N5110</option>
                                                                            <option value="Galaxy Tab 3 8.0 P3200">Galaxy Tab 3 8.0 P3200</option>
                                                                            <option value="Galaxy Tab 3 10.1 P5200">Galaxy Tab 3 10.1 P5200</option>
                                                                            <option value="Galaxy Tab 3 Lite T111 3G">Galaxy Tab 3 Lite T111 3G</option>
                                                                            <option value="Galaxy Tab 3 Lite T110">Galaxy Tab 3 Lite T110</option>
                                                                            <option value="Galaxy Tab 3 7.0 T210">Galaxy Tab 3 7.0 T210</option>
                                                                            <option value="Galaxy Tab 3 7.0 T211">Galaxy Tab 3 7.0 T211</option>
                                                                            <option value="Galaxy Tab 3 8.0 T310">Galaxy Tab 3 8.0 T310</option>
                                                                            <option value="Galaxy Tab 3 8.0 T311">Galaxy Tab 3 8.0 T311</option>
                                                                            <option value="Galaxy Tab 2 10.1 P5100">Galaxy Tab 2 10.1 P5100</option>
                                                                            <option value="Galaxy Tab 2 7.0 P3110">Galaxy Tab 2 7.0 P3110</option>
                                                                            <option value="Galaxy Tab N5120">Galaxy Tab N5120</option>
                                                                            <option value="Galaxy Tab Active T365">Galaxy Tab Active T365</option>
                                                                            <option value="Galaxy Tab 8.9 P7300">Galaxy Tab 8.9 P7300</option>
                                                                            <option value="Galaxy Tab 10.1 P7500">Galaxy Tab 10.1 P7500</option>
                                                                            <option value="Galaxy Tab 7.0 P1000">Galaxy Tab 7.0 P1000</option>
                                                                            <option value="Pro Unibody 13&quot; A1278">Pro Unibody 13" A1278</option>
                                                                            <option value="Pro Unibody 17&quot; A1297">Pro Unibody 17" A1297</option>
                                                                            <option value="Pro Unibody 15&quot; A1286">Pro Unibody 15" A1286</option>
                                                                            <option value="Pro Retina 13&quot; A1502">Pro Retina 13" A1502</option>
                                                                            <option value="Pro Retina 13&quot; A1425">Pro Retina 13" A1425</option>
                                                                            <option value="Pro Retina 13&quot; A1708">Pro Retina 13" A1708</option>
                                                                            <option value="Pro Retina 15&quot; A1398">Pro Retina 15" A1398</option>
                                                                            <option value="Pro Touch 13&quot; A1706">Pro Touch 13" A1706</option>
                                                                            <option value="Pro Touch 13&quot; A1989">Pro Touch 13" A1989</option>
                                                                            <option value="Pro Touch 15&quot; A1707">Pro Touch 15" A1707</option>
                                                                            <option value="Pro Touch 15&quot; A1990">Pro Touch 15" A1990</option>
                                                                            <option value="Air 13&quot; A1304">Air 13" A1304</option>
                                                                            <option value="Air 13&quot; A1237">Air 13" A1237</option>
                                                                            <option value="Air 11&quot; A1370">Air 11" A1370</option>
                                                                            <option value="Air 13&quot; A1369">Air 13" A1369</option>
                                                                            <option value="Air 11&quot; A1465">Air 11" A1465</option>
                                                                            <option value="Air 13&quot; A1466">Air 13" A1466</option>
                                                                            <option value="Air 13&quot; A1932">Air 13" A1932</option>
                                                                            <option value="LG G2 D805">LG G2 D805</option>
                                                                            <option value="LG G2 Mini">LG G2 Mini</option>
                                                                            <option value="LG G3 D855">LG G3 D855</option>
                                                                            <option value="LG G4 H815">LG G4 H815</option>
                                                                            <option value="LG G5">LG G5</option>
                                                                            <option value="LG G6">LG G6</option>
                                                                            <option value="LG G7 ThinQ">LG G7 ThinQ</option>
                                                                            <option value="LG G8">LG G8</option>
                                                                            <option value="LG G8X">LG G8X</option>
                                                                            <option value="LG Nexus 4 E960">LG Nexus 4 E960</option>
                                                                            <option value="LG Nexus 5 D820">LG Nexus 5 D820</option>
                                                                            <option value="LG Nexus 5X">LG Nexus 5X</option>
                                                                            <option value="LG K4 2017">LG K4 2017</option>
                                                                            <option value="LG K10">LG K10</option>
                                                                            <option value="LG K20 Pro">LG K20 Pro</option>
                                                                            <option value="LG K20">LG K20</option>
                                                                            <option value="Optimus G E973">Optimus G E973</option>
                                                                            <option value="Optimus L3 E400">Optimus L3 E400</option>
                                                                            <option value="Optimus F5 P875">Optimus F5 P875</option>
                                                                            <option value="Optimus L5 E610">Optimus L5 E610</option>
                                                                            <option value="Optimus L7 P705 P700">Optimus L7 P705 P700</option>
                                                                            <option value="Optimus L7 2 P713">Optimus L7 2 P713</option>
                                                                            <option value="Optimus L7 2 P715">Optimus L7 2 P715</option>
                                                                            <option value="Optimus L9 P768">Optimus L9 P768</option>
                                                                            <option value="Optimus L9 2 D605">Optimus L9 2 D605</option>
                                                                            <option value="LG V20">LG V20</option>
                                                                            <option value="LG V30">LG V30</option>
                                                                            <option value="LG V40 ThinQ">LG V40 ThinQ</option>
                                                                            <option value="LG V50 ThinQ">LG V50 ThinQ</option>
                                                                            <option value="LG Spirit H440V">LG Spirit H440V</option>
                                                                            <option value="LG L70 D325">LG L70 D325</option>
                                                                            <option value="LG F70 D315">LG F70 D315</option>
                                                                            <option value="LG-Leon-H340">LG-Leon-H340</option>
                                                                            <option value="LG Q7">LG Q7</option>
                                                                            <option value="Nokia 2">Nokia 2</option>
                                                                            <option value="Nokia 2.1">Nokia 2.1</option>
                                                                            <option value="Nokia 2.2">Nokia 2.2</option>
                                                                            <option value="Nokia 2.3">Nokia 2.3</option>
                                                                            <option value="Nokia 3">Nokia 3</option>
                                                                            <option value="Nokia 3.1">Nokia 3.1</option>
                                                                            <option value="Nokia 3.2">Nokia 3.2</option>
                                                                            <option value="Nokia 4.2">Nokia 4.2</option>
                                                                            <option value="Nokia 5">Nokia 5</option>
                                                                            <option value="Nokia 5.1">Nokia 5.1</option>
                                                                            <option value="Nokia 5.1 Plus / X5">Nokia 5.1 Plus / X5</option>
                                                                            <option value="Nokia 6">Nokia 6</option>
                                                                            <option value="Nokia 6 Plus">Nokia 6 Plus</option>
                                                                            <option value="Nokia 6.1">Nokia 6.1</option>
                                                                            <option value="Nokia 6.1 Plus / X6">Nokia 6.1 Plus / X6</option>
                                                                            <option value="Nokia 6.2">Nokia 6.2</option>
                                                                            <option value="Nokia 7">Nokia 7</option>
                                                                            <option value="Nokia 7 Plus">Nokia 7 Plus</option>
                                                                            <option value="Nokia 7.1">Nokia 7.1</option>
                                                                            <option value="Nokia 7.2">Nokia 7.2</option>
                                                                            <option value="Nokia 8">Nokia 8</option>
                                                                            <option value="Nokia 8 Sirocco">Nokia 8 Sirocco</option>
                                                                            <option value="Nokia 8.1 / X7">Nokia 8.1 / X7</option>
                                                                            <option value="Lumia 1020">Lumia 1020</option>
                                                                            <option value="Lumia 1320">Lumia 1320</option>
                                                                            <option value="Lumia 1520">Lumia 1520</option>
                                                                            <option value="Lumia 920">Lumia 920</option>
                                                                            <option value="Lumia 925">Lumia 925</option>
                                                                            <option value="Lumia 930">Lumia 930</option>
                                                                            <option value="Lumia 950">Lumia 950</option>
                                                                            <option value="Lumia 950 XL">Lumia 950 XL</option>
                                                                            <option value="Lumia 800">Lumia 800</option>
                                                                            <option value="Lumia 820">Lumia 820</option>
                                                                            <option value="Lumia 830">Lumia 830</option>
                                                                            <option value="Lumia 710">Lumia 710</option>
                                                                            <option value="Lumia 720">Lumia 720</option>
                                                                            <option value="Lumia 730">Lumia 730</option>
                                                                            <option value="Lumia 610">Lumia 610</option>
                                                                            <option value="Lumia 620">Lumia 620</option>
                                                                            <option value="Lumia 625">Lumia 625</option>
                                                                            <option value="Lumia 630">Lumia 630</option>
                                                                            <option value="Lumia 635">Lumia 635</option>
                                                                            <option value="Lumia 640">Lumia 640</option>
                                                                            <option value="Lumia 640 XL">Lumia 640 XL</option>
                                                                            <option value="Lumia 650">Lumia 650</option>
                                                                            <option value="Lumia 520">Lumia 520</option>
                                                                            <option value="Lumia 530">Lumia 530</option>
                                                                            <option value="N97 Mini">N97 Mini</option>
                                                                            <option value="N8">N8</option>
                                                                            <option value="C7">C7</option>
                                                                            <option value="5230">5230</option>
                                                                            <option value="E5">E5</option>
                                                                            <option value="OnePlus X">OnePlus X</option>
                                                                            <option value="One Plus One">One Plus One</option>
                                                                            <option value="OnePlus 2">OnePlus 2</option>
                                                                            <option value="OnePlus 3">OnePlus 3</option>
                                                                            <option value="OnePlus 3T">OnePlus 3T</option>
                                                                            <option value="OnePlus 5">OnePlus 5</option>
                                                                            <option value="OnePlus 5T">OnePlus 5T</option>
                                                                            <option value="OnePlus 6">OnePlus 6</option>
                                                                            <option value="OnePlus 6T">OnePlus 6T</option>
                                                                            <option value="Oneplus 7">Oneplus 7</option>
                                                                            <option value="OnePlus 7 Pro">OnePlus 7 Pro</option>
                                                                            <option value="OnePlus 7T">OnePlus 7T</option>
                                                                            <option value="OnePlus 8">OnePlus 8</option>
                                                                            <option value="OnePlus 8 Pro">OnePlus 8 Pro</option>
                                                                            <option value="Microsoft Surface Laptop (1st Gen)">Microsoft Surface Laptop (1st Gen)</option>
                                                                            <option value="Microsoft Surface Book 1">Microsoft Surface Book 1</option>
                                                                            <option value="Microsoft Surface Book 2">Microsoft Surface Book 2</option>
                                                                            <option value="Microsoft Surface Book 1703 |1704">Microsoft Surface Book 1703 |1704</option>
                                                                            <option value="Microsoft Surface RT">Microsoft Surface RT</option>
                                                                            <option value="Microsoft Surface RT2">Microsoft Surface RT2</option>
                                                                            <option value="Microsoft Surface RT3">Microsoft Surface RT3</option>
                                                                            <option value="Microsoft Surface Pro">Microsoft Surface Pro</option>
                                                                            <option value="Microsoft Surface Pro 2">Microsoft Surface Pro 2</option>
                                                                            <option value="Microsoft Surface Pro 3">Microsoft Surface Pro 3</option>
                                                                            <option value="Microsoft Surface Pro 4">Microsoft Surface Pro 4</option>
                                                                            <option value="Microsoft Surface Pro 5">Microsoft Surface Pro 5</option>
                                                                            <option value="Microsoft Surface Pro 6">Microsoft Surface Pro 6</option>
                                                                            <option value="Microsoft Surface Pro 7">Microsoft Surface Pro 7</option>
                                                                            <option value="Moto G XT1032">Moto G XT1032</option>
                                                                            <option value="Moto G2 XT1068">Moto G2 XT1068</option>
                                                                            <option value="Moto G3">Moto G3</option>
                                                                            <option value="Moto G4">Moto G4</option>
                                                                            <option value="Moto G4 Play">Moto G4 Play</option>
                                                                            <option value="Moto G4 Plus">Moto G4 Plus</option>
                                                                            <option value="Moto G6">Moto G6</option>
                                                                            <option value="Moto Z">Moto Z</option>
                                                                            <option value="Moto Z Play">Moto Z Play</option>
                                                                            <option value="Moto X XT1058">Moto X XT1058</option>
                                                                            <option value="Moto X XT1562">Moto X XT1562</option>
                                                                            <option value="Moto X Force">Moto X Force</option>
                                                                            <option value="Moto X Style">Moto X Style</option>
                                                                            <option value="Moto X2 XT1096">Moto X2 XT1096</option>
                                                                            <option value="Motorola Moto E">Motorola Moto E</option>
                                                                            <option value="Motorola Moto E 2">Motorola Moto E 2</option>
                                                                            <option value="Blackberry Z30">Blackberry Z30</option>
                                                                            <option value="Blackberry Z20">Blackberry Z20</option>
                                                                            <option value="Blackberry Z10">Blackberry Z10</option>
                                                                            <option value="BlackBerry Q20 (Classic)">BlackBerry Q20 (Classic)</option>
                                                                            <option value="Blackberry Q10">Blackberry Q10</option>
                                                                            <option value="Blackberry Q5">Blackberry Q5</option>
                                                                            <option value="Bold 9900">Bold 9900</option>
                                                                            <option value="Bold 9700">Bold 9700</option>
                                                                            <option value="Bold 9000">Bold 9000</option>
                                                                            <option value="Torch 9800">Torch 9800</option>
                                                                            <option value="Tough Max 3 T86">Tough Max 3 T86</option>
                                                                            <option value="Tough Max 2 T85">Tough Max 2 T85</option>
                                                                            <option value="Tough Max T84">Tough Max T84</option>
                                                                            <option value="Telstra Dave T83">Telstra Dave T83</option>
                                                                            <option value="Telstra Signature Premium">Telstra Signature Premium</option>
                                                                            <option value="Telstra Superior Alcatel 3V">Telstra Superior Alcatel 3V</option>
                                                                            <option value="Telstra Tempo T815">Telstra Tempo T815</option>
                                                                            <option value="Asus Zenfone 5 A500CG">Asus Zenfone 5 A500CG</option>
                                                                            <option value="Asus Zenfone 2">Asus Zenfone 2</option>
                                                                            <option value="Vivo Y53">Vivo Y53</option>
                                                                            <option value="Galaxy S20 FE">Galaxy S20 FE</option>
                                                                            <option value="Huawei P40 Lite">Huawei P40 Lite</option>
                                                                            <option value="Huawei P40">Huawei P40</option>
                                                                            <option value="Huawei Mate 7">Huawei Mate 7</option>
                                                                            <option value="Huawei Mate S">Huawei Mate S</option>
                                                                            <option value="Ascend Y300">Ascend Y300</option>
                                                                            <option value="Huawei Honor X10">Huawei Honor X10</option>
                                                                            <option value="Galaxy Tab 4 10.1 T530">Galaxy Tab 4 10.1 T530</option>
                                                                            <option value="Huawei Honor 30 Pro">Huawei Honor 30 Pro</option>
                                                                            <option value="Huawei Honor 30 Lite">Huawei Honor 30 Lite</option>
                                                                            <option value="Galaxy Tab 4 8.0 T330">Galaxy Tab 4 8.0 T330</option>
                                                                            <option value="Huawei Honor 30s">Huawei Honor 30s</option>
                                                                            <option value="Huawei Honor 20 Pro">Huawei Honor 20 Pro</option>
                                                                            <option value="Galaxy Tab 4 7.0 T230">Galaxy Tab 4 7.0 T230</option>
                                                                            <option value="Huawei Honor Play 3">Huawei Honor Play 3</option>
                                                                            <option value="Galaxy S3 Mini i8190">Galaxy S3 Mini i8190</option>
                                                                            <option value="Huawei Honor 9X">Huawei Honor 9X</option>
                                                                            <option value="Galaxy S3 4G i9305">Galaxy S3 4G i9305</option>
                                                                            <option value="Nokia 8.1 Plus / X71">Nokia 8.1 Plus / X71</option>
                                                                            <option value="Oppo Realme X2">Oppo Realme X2</option>
                                                                            <option value="Galaxy S3 i9300">Galaxy S3 i9300</option>
                                                                            <option value="Galaxy S2 i9210 4G">Galaxy S2 i9210 4G</option>
                                                                            <option value="Galaxy S2 i9100">Galaxy S2 i9100</option>
                                                                            <option value="Nokia 7.1 Plus">Nokia 7.1 Plus</option>
                                                                            <option value="Nokia 3.1 Plus">Nokia 3.1 Plus</option>
                                                                            <option value="HTC Evo 3D">HTC Evo 3D</option>
                                                                            <option value="Nokia 1 Plus">Nokia 1 Plus</option>
                                                                            <option value="Huawei V30 Pro">Huawei V30 Pro</option>
                                                                            <option value="Galaxy J2 Pro">Galaxy J2 Pro</option>
                                                                            <option value="Galaxy J2 2016">Galaxy J2 2016</option>
                                                                            <option value="Galaxy J1 (2016)">Galaxy J1 (2016)</option>
                                                                            <option value="Galaxy J1 Ace">Galaxy J1 Ace</option>
                                                                            <option value="Galaxy J1 Mini">Galaxy J1 Mini</option>
                                                                            <option value="Galaxy J1">Galaxy J1</option>
                                                                            <option value="Nokia C1/C2">Nokia C1/C2</option>
                                                                            <option value="Huawei Enjoy 10 Plus">Huawei Enjoy 10 Plus</option>
                                                                            <option value="Huawei Enjoy 9S">Huawei Enjoy 9S</option>
                                                                            <option value="Huawei Enjoy 10">Huawei Enjoy 10</option>
                                                                            <option value="Huawei Nova 7">Huawei Nova 7</option>
                                                                            <option value="Huawei Nova 6 SE">Huawei Nova 6 SE</option>
                                                                            <option value="Huawei Nova 6 | 5G">Huawei Nova 6 | 5G</option>
                                                                            <option value="iPod Touch 2">iPod Touch 2</option>
                                                                            <option value="iPod Touch 4">iPod Touch 4</option>
                                                                            <option value="iPod Touch 5">iPod Touch 5</option>
                                                                            <option value="iPod Touch 6">iPod Touch 6</option>
                                                                            <option value="iPod Classic 5">iPod Classic 5</option>
                                                                            <option value="iPod Classic 6">iPod Classic 6</option>
                                                                            <option value="iPod Classic 7">iPod Classic 7</option>
                                                                            <option value="iPod Nano 4">iPod Nano 4</option>
                                                                            <option value="iPod Nano 5">iPod Nano 5</option>
                                                                            <option value="iPod Nano 6">iPod Nano 6</option>
                                                                            <option value="iPod Nano 7">iPod Nano 7</option>
                                                                            <option value="iPhone 12">iPhone 12</option>
                                                                            <option value="iPhone 12 Pro">iPhone 12 Pro</option>
                                                                            <option value="iPhone 12 Pro Max">iPhone 12 Pro Max</option>
                                                                            <option value="Nokia 9 Pureview">Nokia 9 Pureview</option>
                                                                            <option value="Nokia 8.3">Nokia 8.3</option>
                                                                            <option value="Nokia 5.3">Nokia 5.3</option>
                                                                            <option value="Nokia 3.4">Nokia 3.4</option>
                                                                            <option value="Nokia 2.4">Nokia 2.4</option>
                                                                            <option value="Nokia 1.3">Nokia 1.3</option>
                                                                            <option value="Nokia 1">Nokia 1</option>
                                                                            <option value="Oppo F9">Oppo F9</option>
                                                                            <option value="Oppo A3s">Oppo A3s</option>
                                                                            <option value="Oppo Find X2 Neo">Oppo Find X2 Neo</option>
                                                                            <option value="Oppo Find X2 Lite">Oppo Find X2 Lite</option>
                                                                            <option value="Galaxy Tab E 9.6 T560">Galaxy Tab E 9.6 T560</option>
                                                                            <option value="Galaxy Tab E 8.0 T377">Galaxy Tab E 8.0 T377</option>
                                                                            <option value="Microsoft Surface Go">Microsoft Surface Go</option>
                                                                            <option value="iPad Pro 12.9 4th Gen">iPad Pro 12.9 4th Gen</option>
                                                                            <option value="Huawei Honor Play">Huawei Honor Play</option>
                                                                            <option value="Huawei V30">Huawei V30</option>
                                                                            <option value="Huawei Nova 7 Pro">Huawei Nova 7 Pro</option>
                                                                            <option value="OnePlus Nord">OnePlus Nord</option>
                                                                            <option value="iPad Air 4 2020">iPad Air 4 2020</option>
                                                                            <option value="iPhone 12 Mini">iPhone 12 Mini</option>
                              </select>
                        </div>
                        <div class="select-option">
                            <label for="label-title">Device Issue:</label>
                            <select name="issue" id="issue" class="booking-select sources" placeholder="Source Type">
                                <option>Select Device Issue</option>
                                @isset($issues)
                                @foreach($issues as $issue)
                                 <option value="{{$issue->issue}}">{{$issue->issue}}</option>
                                @endforeach
                                @endisset
                                    <option value="Front Camera Replacemen">Front Camera Replacemen</option>
                                    <option value="Back camera Replacement">Back camera Replacement</option>
                                    <option value="Sim Tray Replacement">Sim Tray Replacement</option>
                                    <option value="LCD Digitazir">LCD Digitazir</option>
                                    <option value="Back Panel Replacement">Back Panel Replacement</option>
                                    <option value="Charging Issue">Charging Issue</option>
                                    <option value="Headphone Jack">Headphone Jack</option>
                                    <option value="Back Camera">Back Camera</option>
                                    <option value="Camera Lens">Camera Lens</option>
                                    <option value="Front Panel Replacement">Front Panel Replacement</option>
                                    <option value="Water Damage Replacement">Water Damage Replacement</option>
                                    <option value="Charging Port Flex Replacement">Charging Port Flex Replacement</option>
                                    <option value="Back Cover">Back Cover</option>
                                    <option value="Back Housing">Back Housing</option>
                                    <option value="WIFI Antenna Flex Replacement">WIFI Antenna Flex Replacement</option>
                                    <option value="Ear Speaker Replacement">Ear Speaker Replacement</option>
                                    <option value="Loud Speaker Replacement">Loud Speaker Replacement</option>
                                    <option value="Logic Board Replacement">Logic Board Replacement</option>
                                    <option value="LCD Shield Plate">LCD Shield Plate</option>
                                    <option value="Wifi Flex Replacement">Wifi Flex Replacement</option>
                                    <option value="Rear Case Replacement">Rear Case Replacement</option>
                                    <option value="Motherboard Replacement">Motherboard Replacement</option>
                                    <option value="Power Button Replacement">Power Button Replacement</option>
                                    <option value="Motherboard Issues">Motherboard Issues</option>
                                    <option value="Front Camera">Front Camera</option>
                                    <option value="Home Button">Home Button</option>
                                    <option value="Screen Replacement">Screen Replacement</option>
                                    <option value="Battery Replacement">Battery Replacement</option>
                                    <option value="Housing Body">Housing Body</option>
                                    <option value="Back Camera Replacement">Back Camera Replacement</option>
                                    <option value="Front Camera Replacement">Front Camera Replacement</option>
                                    <option value="Camera Lens Replacement">Camera Lens Replacement</option>
                                    <option value="Charging Port Replacement">Charging Port Replacement</option>
                                    <option value="Headphone Jack Replacement">Headphone Jack Replacement</option>
                                    <option value="Loudspeaker Replacement">Loudspeaker Replacement</option>
                                    <option value="Vibrator Replacement">Vibrator Replacement</option>
                                    <option value="Power Volume Flex Replacement">Power Volume Flex Replacement</option>
                                    <option value="Wifi Antena Replacement">Wifi Antena Replacement</option>
                                    <option value="Earspeaker Replacement">Earspeaker Replacement</option>
                                    <option value="Water Damage">Water Damage</option>
                              </select>
                        </div>
                        <div class="button" onclick="secondForm()"><i class="fas fa-angle-double-right" style="margin: 3%;"></i></div>
                    </div>

                        <div id="second-form" class="second-form" style="display: none;" >
                            <!-- <h5 class="get-quote-button">Personal Info</h5>
                            <p>We will get in touch with you shortly</p> -->
                           
                                <div class="select-option">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" id="name">
                                </div>
                                <div class="select-option">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email">
                                </div>
                                <div class="select-option">
                                    <label for="number">Phone:</label>
                                    <input type="number" name="number" id="number">
                                </div>
                                <button type="submit">SUBMIT</button>
                                
                            
                        </div>
                        
                    </form>
                        </div > 
                        
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
                                    <div class="banner-button">
                                       <a href="#">Discover <i class="zmdi zmdi-long-arrow-right"></i></a> 
                                    </div>
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
                                <div class="banner-button">
                                   <a href="#">Discover <i class="zmdi zmdi-long-arrow-right"></i></a> 
                                </div>
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
                                <div class="banner-button">
                                   <a href="#">Discover <i class="zmdi zmdi-long-arrow-right"></i></a> 
                                </div>
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
        <div class="container">
            <section class="my-5">

                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center my-5">DEVICE ISSUES WE FIX</h2>
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



        <!-- PRODUCT TAB SECTION START -->
        
        <!-- PRODUCT TAB SECTION END -->


        <!-- FEATURED PRODUCT SECTION START -->
        <div class="featured-product-section section-bg-tb pt-80 pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left mb-20">
                            <h2 class="uppercase">OUR SHOP</h2>
                            <h6>There are many variations of passages of brands available,</h6>
                            <div class="featured-product">
                                <div class="active-featured-product slick-arrow-2">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/img/product-2/1.png') }}" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/img/product-2/1.png') }}" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/img/product-2/1.png') }}" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/img/product-2/1.png') }}" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/img/product-2/1.png') }}" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>          
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <!-- FEATURED PRODUCT SECTION END -->


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

    @endsection