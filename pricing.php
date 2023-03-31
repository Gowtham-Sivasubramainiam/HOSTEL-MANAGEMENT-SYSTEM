<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pricing</title>
    <link rel="stylesheet" href="css\pricing.css">

    <script type="text/javascript">
      function change(){
        window.location.href ="registration.php";
      }
      function rtohome(){
        window.location.href ="index.php";
      }
    </script>
  </head>

  <body>
    <div class="Nav" id="Nav1">
      <div class="NavbarContainer">
        <img src="images\kec_logo.jpeg" alt="logo" class="NavLogo" style="border-radius: 60%;  " onclick="rtohome()">
        <div class="MobileIcon">
        <i class="fa fa-bars"></i>
        </div>
        <ul class="NavMenu ">
          <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="index.php#about">About</a></li>
          <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.php">Pricing</a></li>
          <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="index.php#contact">Contact Us</a></li>
          <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
        </ul>
        <div class="NavBtn">
          <button type="button" name="button" class="NavBtnLink" onclick="change()">Signup</button>
        </div>

      </div>
    </div>



    <div class="pricingcontainer" style="font-family: ALGERIAN;">
      <div class="pricingwrapper">
        <div class="columns">
  <ul class="price" >
    <li class="header">VALLUVAR</li>
    <div class="imagewrapper">
    <img style="height:150px; width:150px;" src="valluvar.jpg"  alt="">
    </div>

    <li class="grey">80 Thousand/ year</li>
    <li style="font-family: Meiryo; font-size: 17px">Best Internet</li>
    <li style="font-family: Meiryo; font-size: 17px">Good food</li>
    <li style="font-family: Meiryo; font-size: 17px">Best Mess</li>
    <li class="grey"><a href="signin.php" class="button">Select</a></li>
  </ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">DHEERAN</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="dheeran.jpg" alt="">
</div>

<li class="grey">80 Thousand/ year</li>
<li style="font-family: Meiryo; font-size: 17px">Common reading room</li>
<li style="font-family: Meiryo; font-size: 17px">wifi connections</li>
<li style="font-family: Meiryo; font-size: 17px">Clean mess</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

<div class="columns">
<ul class="price">
<li class="header">PONNER</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="ponnar.jpg" alt="">
</div>

<li class="grey">80 Thousand/ year</li>
<li style="font-family: Meiryo; font-size: 17px"> Large rooms</li>
<li style="font-family: Meiryo; font-size: 17px"> Good mess</li>
<li style="font-family: Meiryo; font-size: 17px"> Best Facilities</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">SHANKAR</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="sankar.jpg">
</div>

<li class="grey">80 Thousand/ year</li>
<li style="font-family: Meiryo; font-size: 17px">Large rooms</li>
<li style="font-family: Meiryo; font-size: 17px"> good mess </li>
<li>comfortable living area</li>
<li style="font-family: Meiryo; font-size: 17px">Free wifi</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

      </div>
    </div>

  </body>
</html>
