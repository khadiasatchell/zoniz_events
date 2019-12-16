<?php 
include_once 'Includes/session.php'?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <link rel= "stylesheet" href="css/site.css" />

    <title>Attendace - <?php echo $title?></title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">Zoniz Events</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavA1tMarkup" aria-controls="navbarNavA1tMarkup" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavA1tMarkup">
      <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="services.php">Services </a>
          <a class="nav-item nav-link active" href="aboutus.php">About Us </a>
          <a class="nav-item nav-link active" href="appointments.php">Appointment </a>
          <a class="nav-item nav-link active" href="contact.php">Contact </a>
        </div>
      <div class="navbar-nav ml-auto">
      <?php
      if(!isset($_SESSION['userid '])){

      ?>
          <a class="nav-item nav-link active" href="login.php">Login <span class="sr-only">(current)</span></a>
    <?php }else{
      ?>
       <a class="nav-item nav-link active" href="#"><span>HELLO <?php echo  $_SESSION['username']?>!(current)</span></a>
          <a class="nav-item nav-link active" href="login.php">Logout <span class="sr-only">(current)</span></a>
    <?php }?>
        </div>
    </div>
  </nav>
  <br/>
  <br/>
  <br/>
  <br/>