<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
</head>
<body>
    <style>
            img{
                width: 90px;
                height: 90px;
            }
            .data{
                padding-left: 200px;
                padding-top: 3%;
                margin-top: -14%;
                margin-left: -100px;
            }
            .fab{
                font-size: 2rem;
            }
            .fa-instagram-square{
                color: #8e2e92;
            }
            .fa-facebook-square{
                color: #033e82;
            }
            .sincerely{
                color: #b5723a;
                font-weight: 600;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            .p1{
                font-family: sans-serif;
            }
            .web{
                color: black;
            }
    </style>

    <p class="sincerely"><i>Sincerely,</i></p>
    <p class="p1"><i><strong>Steven Parker</strong></i></p>
    <p class="p1"><i><strong>Customer Services</strong></i></p>
    <br>
        <h4>Reply:</h4> <hr>
        <p> {{$userdata['reply']}}</p>
    <br>
    <hr>
    
        <div class="bottom">
            <div class="row">
                <div class="col-2 left">
                    <img src="{{asset('backend/images/mmpr_logo.png')}}"/>
                </div>
                <div class="data col-10">
                    Tel: (03) 8845 7222 <br>
                     Mail: <a href="mmpr.sales@gmail.com">mmpr.sales@gmail.com</a>
                      <br>
                      Web: <a class="melbournemobilephonerepairs.com.a" href="#">melbournemobilephonerepairs.com.au/</a>
                      <br>
                      Add:  3 Lawrence St, Blackburn South, VIC 3130 82 Somerville Rd, Hampton Park VIC 3976, Australia</p> 
                      <i class="fab fa-facebook-square"></i>&nbsp;&nbsp;<i class="fab fa-instagram-square"></i>
                  </div>
            </div>
        </div>
</body>
</html>


