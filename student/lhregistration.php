<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title></title>
  <link rel="stylesheet" href="..\css\mhreg.css">
  </head>
  <body>
    <?php       session_start(); ?>

      <?php

      if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once('../dbConnect.php');
        $regno =  $_SESSION['regno'];
        if(isset($_POST["qblock"])){
          $blockname="VAIGAI";
          $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
          $row = mysqli_fetch_array( $rowSQL );
          $largestNumber = $row['max'];
          if($largestNumber==0){
            $largestNumber=1;
          }
          $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
        $data=mysqli_fetch_assoc($result);
        $count= $data['total'];
        if($count<6){
          $roomno=$largestNumber;
        }
        else{
            $roomno=$largestNumber+1;
        }
        }
    if(isset($_POST["ablock"])){
      $blockname="KAVERI";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<6){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }
    if(isset($_POST["bblock"])){
      $blockname="AMARAVATHI";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<6){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }
    if(isset($_POST["cblock"])){
      $blockname="GANGA";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<6){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }
    


    $sql="UPDATE `users` SET `block`='$blockname' where regno='$regno'";
    $query=mysqli_query($conn,$sql);
    $sql="UPDATE `users` SET `roomno`='$roomno' where regno='$regno'";
    $query1=mysqli_query($conn,$sql);
    if($query && $query1){
      echo 'Entry successful';
      header('Location: studentdashboard.php');
    }
    else{
      echo "error occoured";
    }
    }
       ?>
<?php include '../header.php';?>


<form class="" action="lhregistration.php" method="post">
    <section class="cards">
<article class="card card--1">
  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">VAIGAI</h3>
    <!-- <span class="card__by"> <a href="#" class="card__author" title="author">select</a></span> -->
    <input type="submit" name="" id="qblock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--2">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">KAVERI</h3>
    <input type="submit" name="ablock" id="ablock" class="card__by" value="submit">
  </div>
</article>

<article class="card card--3">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">AMARAVATHI</h3>
      <input type="submit" name="bblock" id="bblock" class="card__by" value="submit">
  </div>
</article>
<article class="card card--4">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">GANGA</h3>
      <input type="submit" name="cblock" id="cblock" class="card__by" value="submit">
  </div>
</article>
  </section>
</form>

  </body>
</html>
