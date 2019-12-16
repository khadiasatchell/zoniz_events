<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zoniz Events</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">Zoniz Events Services</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavA1tMarkup" aria-controls="navbarNavA1tMarkup" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavA1tMarkup">
      <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="services.php">Services </a>
          <a class="nav-item nav-link active" href="appointments.php">Appointment</a>
          <a class="nav-item nav-link active" href="aboutus.php">About us </a>
          <a class="nav-item nav-link active" href="contact.php">Contact</a>

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
