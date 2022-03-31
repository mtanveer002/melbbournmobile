@extends('website.master')
@section('web_content')

<!-- Preloader -->
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

<div class="wrapperr">
    <div class="overlay">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9">
                <div class="contact-us text-center">
                    <h3 style="font-size: 30px;font-weight: 600;text-transform: capitalize;">We come to you</h3><hr>
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

@endsection
