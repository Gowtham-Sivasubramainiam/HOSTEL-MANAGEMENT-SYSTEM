<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Hostel Management System</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">
 <style>
  #about
{
  background-color: azure;
}

  </style>
    <title>Hello, world!</title>
  </head>
  <body id="h1">
  <script type="text/javascript">
    function rtohome(){
      window.location.href ="index.php";
    }
    function change(){
      window.location.href ="registration.php";
    }
    function facilities(){
      window.location.href = "facilities.php"
    }
    window.onscroll=function(){
      var top=window.scrollY;
      if(top>=50){
        document.getElementById("Nav1").style.backgroundColor = "white";
        document.getElementById("linkcolor").style.color = "black";
        document.getElementById("linkcolor1").style.color = "black";
        document.getElementById("linkcolor2").style.color = "black";
        document.getElementById("linkcolor3").style.color = "black";
      }
      else{
        document.getElementById("Nav1").style.backgroundColor = "gray";
        document.getElementById("linkcolor").style.color = "white";
        document.getElementById("linkcolor1").style.color = "white";
        document.getElementById("linkcolor2").style.color = "white";
        document.getElementById("linkcolor3").style.color = "white";
      }
    }
    </script>
  <div class="Nav" id="Nav1" style=" background-color:gray">
  <div class="NavbarContainer">
    <img src="videos\college1.mp4" alt="" class="NavLogo" onclick="rtohome()">
    <div class="MobileIcon">
    <i class="fa fa-bars"></i>
    </div>
    <ul class="NavMenu ">
      <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="#about">About</a></li>
      <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.php">Pricing</a></li>
      <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="#contact">Contact Us</a></li>
      <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
    </ul>
    <div class="NavBtn">
      <button type="button" name="button" class="NavBtnLink"  onclick="change()">Signup</button>
    </div>
  </div>
</div>
<div class="container-fluid" style="margin-top: 10px;">
    <div class="row" style="margin-top: 60px;">

    <div class="col-3">
    <div class="card text-white bg-secondary mb-3" style="width: 18rem; margin-top: 10%; margin-left:2%;  border-radius:10px;   border-style: solid;
  border-width: 5px; border-color: gray; float: left;height: 320px;">
    <img class="card-img-top" src="clg/power.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style=" font-family: sans-serif; font-weight: bold">24x7 Power Supply</h5>
         <p class="card-text" style="font-family: sans-serif">We are providing 24x7 power supply to our hostels.</p>
        
    </div>
   </div>
</div>
<div class="col-3">
    <div class="card text-white bg-secondary mb-3" style="width: 19rem; margin-top: 10%; margin-left:2%;  border-radius:10px;   border-style: solid;
  border-width: 5px; border-color: gray; float: left;height: 320px;">
    <img class="card-img-top" src="clg/ro.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style=" font-family: sans-serif; font-weight: bold">RO purified water supply</h5>
         <p class="card-text" style="font-family: sans-serif">We are providing ro purified water supply in our hostels.</p>
        
    </div>
   </div>
</div>
<div class="col-3">
    <div class="card text-white bg-secondary mb-3" style="width: 19rem; margin-top: 10%; margin-left:2%;  border-radius:10px;   border-style: solid;
  border-width: 5px; border-color: gray; float: left; height:320px;">
    <img class="card-img-top" src="clg/ambulance.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style=" font-family: sans-serif; font-weight: bold">24x7 Ambulance Services</h5>
         <p class="card-text" style="font-family: sans-serif">We are providing 24x7 ambulance service in our hostels.</p>
        
    </div>
   </div>
</div>
<div class="col-3">
    <div class="card text-white bg-secondary mb-3" style="width: 18rem; height: 320px; margin-top: 10%; margin-left:2%;  border-radius:10px;   border-style: solid;
  border-width: 5px; border-color: gray; float: left;">
    <img class="card-img-top" src="clg/wifi.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style=" font-family: sans-serif; font-weight: bold">Wifi facilities</h5>
         <p class="card-text" style="font-family: sans-serif">We are offering wifi facilities in our hostels.</p>
        
    </div>
   </div>
</div>
</div>

</div>
<div class="container-fluid" style="margin-top: 10px;">
    <div class="row" style="margin-top: 60px;">

    <div class="col-3">
    <div class="card text-white bg-secondary mb-3" style="width: 18rem; margin-top: 10%; margin-left:2%;  border-radius:10px;   border-style: solid;
  border-width: 5px; border-color: gray; float: left; height:320px;">
    <img class="card-img-top" src="clg/bank.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style=" font-family: sans-serif; font-weight: bold">Bank Services</h5>
         <p class="card-text" style="font-family: sans-serif">We are providing bank services in our hostels.</p>
        
    </div>
   </div>
</div>
<div class="col-3">
    <div class="card text-white bg-secondary mb-3" style="width: 19rem; margin-top: 10%; margin-left:2%;  border-radius:10px;   border-style: solid; height: 320px;
  border-width: 5px; border-color: gray; float: left;">
    <img class="card-img-top" src="clg/postoffice.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style=" font-family: sans-serif; font-weight: bold">Post Office</h5>
         <p class="card-text" style="font-family: sans-serif">We are providing postal services in our hostels.</p>
        
    </div>
   </div>
</div>
<div class="col-3">
    <div class="card text-white bg-secondary mb-3" style="width: 19rem;margin-top: 10%; margin-left:2%;  border-radius:10px;   border-style: solid; height: 320px;
  border-width: 5px; border-color: gray; float: left;">
    <img class="card-img-top" src="clg/dispensary.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style=" font-family: sans-serif; font-weight: bold">Dispensary</h5>
         <p class="card-text" style="font-family: sans-serif;">We have dispensary facilities in our hostel.</p>
        
    </div>
   </div>
</div>
<div class="col-3">
    <div class="card text-white bg-secondary mb-3" style="width: 18rem; height: 320px; margin-top: 10%; margin-left:2%;  border-radius:10px;   border-style: solid;
  border-width: 5px; border-color: gray; float: left;">
    <img class="card-img-top" src="clg/dpe.jpeg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style=" font-family: sans-serif; font-weight: bold">Gym facilities</h5>
         <p class="card-text" style="font-family: sans-serif">We are offering gym facilities in our hostels.</p>
        
    </div>
   </div>
</div>
</div>

</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>