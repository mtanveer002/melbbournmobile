@extends('website.master')
@section('web_content')

<style>
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #FB5E24;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      .form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px black; 
      }
      .banner {
      position: relative;
      height: 250px;
      background-image: url("{{asset('/')}}frontend/assets/img/banner/BOOK NOW MMPR.jpg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #FB5E24;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  black;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
</style>
<div class="container">
    <div class="testbox">
        <form action="{{ route('savebooking') }}" method="post" class="form">
        @csrf
          
            <div class="banner">
                
            </div>
            <!-- @php
            if(isset($_REQUEST['submit']) && $_REQUEST['submit']==1){
              @endphp
                      <center>
                          <div class="alert alert-success" style="background-color:#FB5E24; color:white" role="alert">
                              <strong style = "text-transform:uppercase;">Your Booking Is Confirmed!</strong>
                          </div>
                      </center>
                      @php
                      }
                @endphp -->
            <br/>
            <fieldset>
                <legend>Inquiry Form</legend>
                <div class="colums">
                    <div class="item">
                        <label for="fname">Brand Name<span>*</span></label>
                        @foreach($brands as $brand)
                        <input value="{{ $brand->brand }}" name="device" type="text" readonly required/>
                        @endforeach
                    </div>
                    <div class="item">
                        <label for="lname">Select Issue</label>
                        <select class="form-control" name="issue">
                            <option>Select Issue</option>
                            <option>Screen Replacement</option>
                            <option>Battery Replacement</option>
                            <option>Front Camera Replacement</option>
                            <option>Camera Lens Replacement</option>
                            <option>Charging Port Replacement</option>
                            <option>Earspeaker Replacement</option>
                            <option>Loudspeaker Replacement</option>
                            <option>Vibrator Replacement</option>
                            <option>Power Volume Flex Replacement </option>
                            <option>Wifi Antena Replacement</option>
                            <option>Water Damage </option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="item">
                        <label for="model">Model Name<span>*</span></label>
                        <input type="text" name="model" placeholder="Model Name" required/>
                    </div>
                  
                    <div class="item">
                        <label for="name">Name<span>*</span></label>
                        <input type="text" name="name" placeholder="Your Name" value="" required/>
                    </div>
                    <div class="item">
                        <label for="number">Phone Number</label>
                        <input type="text" name="number"  placeholder="Phone No" value="" required/>
                    </div>
                    <div class="item">
                        <label for="email">Email Address</label>
                        <input type="email" name="email"  placeholder="Email Address" value="" required/>
                    </div>
                    
                    <div class="item">
                        <label for="shop">Select Shop</label>
                        <select class="form-control" name="shop">
                            <option>Select Shop Address</option>
                            <option>82 Somerville Hampton Park VIC 3976</option>
                            <option>3 Lawrence Street, Blackburn South VIC 3130</option>
                        </select>
                    </div>
                    <div class="item">
                        <label for="email">Message</label>
                        <textarea type="text" name="message"  placeholder="Other Detail" value=""></textarea>
                    </div>
                </div> 
            </fieldset>
            <div class="btn-block">
                <button type="submit" >Inquire Now</button>
            </div>
            
        </form>
    </div>
</div>

<script>
      $(document).ready(function(){
    $('.alert-success').fadeIn().delay(10000).fadeOut();
      });
  </script>


@endsection