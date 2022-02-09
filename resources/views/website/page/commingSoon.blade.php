@extends('website.master')
@section('web_content')
    <link rel="stylesheet" href="{{ asset('frontend/assets/commingSoon/style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

     <!-- Nunito google font -->
 
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">

    <div class="coming-soon-info">
        <div class="wrapper" style="background: url('mobile-accessories.jpg')">
            <div class="header">
                <div class="logo">
                    <a class="brand-logo" href="index.html"></a>
                </div>
             
            </div>
            <div class="coming-back">
                <h1>Melbourne Mobile Online Shop </h1>
                <p class="t-text" style="color: white">We are launching soon the online shop in Melbourne</p>
                <div class="countdown">
                    <div class="countdown-days">
                        <div class="number" style="color: #ff9800"></div>
                        <span style="color: #ff9800">days</span>
                    </div>
                    <div class="countdown-hours">
                    <div class="number" style="color: #ff9800"></div>
                    <span style="color: #ff9800">hours</span>
                    </div>
                    <div class="countdown-minutes">
                        <div class="number" style="color: #ff9800"></div>
                        <span style="color: #ff9800">minutes</span>
                    </div>
                    <div class="countdown-seconds">
                        <div class="number" style="color: #ff9800"></div>
                        <span style="color: #ff9800">seconds</span>
                    </div>
                </div>
               <form action="#" method="post" >
                   <input type="text" name="Email" required="" placeholder="Subscribe to get notified" style="border: 2px solid #ff9800">
                   <button style="height: 20%"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
               </form>
            </div>
    </div>
    </div>
     
    <script>
           (() => {
                const deadlineDate = new Date('May 15, 2022 10:59:59').getTime();
                const countdownDays = document.querySelector('.countdown-days .number');
                const countdownHours = document.querySelector('.countdown-hours .number');
                const countdownMinutes = document.querySelector('.countdown-minutes .number');
                const countdownSeconds = document.querySelector('.countdown-seconds .number');

                setInterval ( () => {
                    const currentDate = new Date().getTime();
                    const distance = deadlineDate - currentDate;

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance %  (1000 * 60)) / 1000);

                    countdownDays.innerHTML = days;
                    countdownHours.innerHTML = hours;
                    countdownMinutes.innerHTML = minutes;
                    countdownSeconds.innerHTML = seconds;
                }, 1000);
            })();

    </script>    
  
  @endsection