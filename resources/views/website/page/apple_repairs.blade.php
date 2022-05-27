@extends('website.master')
@section('web_content')

<div class="jumbotron">
    <div class="container">
        <div class="row" style="text-align: center">
            <div class="col-md-6">
                <h1 style="font-size:33px;text-align: justify">Apple Phone Repairs</h1>
                <h2 style="font-size:18px;text-align: justify">Melbourne Mobile Phone Repair has solutions and fixes available for all types of phones. We offer trusted mobile screen replacement services. Our clients and customers trusts our world-class services which makes us to move forward gracefully. </h2>
            </div>
            <div class="col-md-6">
                <img src="https://melbournemobilephonerepairs.com.au/frontend/image/iphone.png" />
            </div>
        </div>
      </div>
      <br>
      <div class="container">
    <div class="row mt-2 g-4">
        <div class="col-md-3">
            <a href="#">
            <div class="card p-1">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>iPhone</span> <span>Repairs</span> </div>
                    <div> <img src="{{ asset('assets/pages/img/works/iphone.jpg') }}" height="100" width="100" /> </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>MacBook</span> <span>Repairs</span> </div>
                    <div> <img src="{{ asset('assets/pages/img/works/macbook.jpg') }}" height="100" width="100" /> </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>iPad</span> <span>Repairs</span> </div>
                    <div> <img src="{{ asset('assets/pages/img/works/ipad.jpg') }}" height="100" width="100" /> </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
            <div class="card p-2tr5">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>iPod</span> <span>Repairs</span> </div>
                    <div> <img src="{{ asset('assets/pages/img/works/ipod.jpeg') }}" height="100" width="100" /> </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>iWatch</span> <span>Repairs</span> </div>
                    <div> <img src="{{ asset('assets/pages/img/works/iwatch.jpg') }}" height="100" width="100" /> </div>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>
</div>

@endsection