<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MSD</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/nlogo.jpg.png" rel="icon">
  <link href="img/nlogo.jpg.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: MSD
    Theme URL: https://bootstrapmade.com/MSD-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><img src="img/nlogo.jpg.png" height="35px" width="35px"><a href="#intro">MSD</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php">About Us</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="team.php">Team</a></li>

          <li class="menu-has-children"><a href="#">Services</a>
            <ul>
              <li><a href="home_app.php">Home Appliance</a></li>
              <li><a href="plumber.php">Plumber</a></li>
              <li><a href="beauty_salon.php">Beauty salon</a></li>
              <li><a href="carpenter.php">Carpentar</a></li>
              <li><a href="painter.php">Painter</a></li>
              <li><a href="gardener.php">Gardener</a></li>
              <li><a href="grocery.php">Grocery</a></li>
              <li><a href="electrician.php">Electrician</a></li>
              <li><a href="laundry.php">Laundry</a></li>
            </ul>
          </li>
          <li><a href="contact_us.php">Contact</a></li>
         

          <?php include('config.php'); @session_start();
           if (isset($_SESSION['user'])) 
          {
            $us=mysqli_query($con,"select * from user_registration where id='".$_SESSION['user']."'");
            $user=mysqli_fetch_array($us);?>
             <li><a href="my_booking.php">My Booking</a></li>
            <li><a title="<?php echo $user['id']; ?>" href="mp.php"><?php echo $user['name']; ?><img style="border-radius: 20px" src="<?php echo $user['user_image'];?>" width="30px" height="30px"></a></li>
            <li><a href="logout.php">Logout</a></li><?php

          }
          else
          {?>
            <li><a href="login.php"><i class="fa fa-user" style="color: white;margin-right: 8px"></i>Login</a></li>
            <li><a href="#"><i class="fa fa-sign-in" style="color: white;margin-right: 8px"></i>Register</a>
              <ul>
              <li><a href="registration.php">User Registration</a></li>
              <li><a href="service_person_register.php">Service person Registration</a></li></li>
              </ul></li><?php
          } ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
</body>
