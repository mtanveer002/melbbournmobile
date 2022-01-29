@extends('website.master')
@section('web_content')
<section class="hero-section">
    <div class="container">
        <div class="row">
            <!-- tablet design -->
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <div class="carousel-background">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        
                        <div class="carousel-inner">

                            <div class="carousel-item active  item-1">

                                <div class="hero-text">
                                    <form method="post" style="text-align: left" action="{{ route('tickets.store') }}">
                                        @csrf
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label><br>
                                            <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name">
                                          </div><br>
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Email address</label><br>
                                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div><br>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Message</label><br>
                                          <textarea type="text" name="message" class="form-control" id="exampleInputMessage1" rows="5" cols="5" placeholder="Message">
                                          </textarea>
                                        </div><br>
                                        <button type="submit" class="btn btn-warning btn-block" style="height: 30px;background-color: #fb6128">Submit</button>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
