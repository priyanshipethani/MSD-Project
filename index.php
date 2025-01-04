<?php include('config.php'); ?>
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
<style>
  body {
    font-family: Arial;
  }

  * {
    box-sizing: border-box;
  }

  form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    height: 47px;
    background: #f1f1f1;
  }

  form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: black;
    color: white;
    font-size: 17px;
    border: 1px solid black;
    border-left: none;
    cursor: pointer;
  }

  form.example button:hover {
    background: #C70039;
  }

  form.example::after {
    content: "";
    clear: both;
    display: table;
  }
</style>

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
          <li><a href="#intro">Home</a></li>
          <li><a href="#about"></i>About Us</a></li>
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

          <?php session_start();
          if (isset($_SESSION['user'])) {
            $us = mysqli_query($con, "select * from user_registration where id='" . $_SESSION['user'] . "'");
            $user = mysqli_fetch_array($us); ?>
            <li><a href="my_booking.php">My Booking</a></li>
            <li><a href="mp.php"><?php echo $user['name']; ?><img style="border-radius: 20px" src="<?php echo $user['user_image']; ?>" width="30px" height="30px"><br></a></li>
            <li><a href="logout.php">Logout</a></li><?php

                                                  } else { ?>
            <li><a href="login.php"><i class="fa fa-user" style="color: white;margin-right: 8px"></i>Login</a></li>
            <li><a href="#"><i class="fa fa-sign-in" style="color: white;margin-right: 8px"></i>Register</a>
              <ul>
                <li><a href="registration.php">User Registration</a></li>
                <li><a href="service_person_register.php">Service person Registration</a></li>
            </li>
        </ul>
      <?php
                                                  } ?>

      </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/has.jpg" height="50px" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Home appliance Service</h2>
                <a href="home_app.php" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/gs.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Grocery Service</h2>

                <a href="grocery.php" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/es.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Electrician Service</h2>

                <a href="electrician.php" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/bb1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Beauty salon Service</h2>

                <a href="beauty_salon.php" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/cs1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Carpenter Service</h2>
                <a href="carpenter.php" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/ps1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Painter Service</h2>
                <a href="painter.php" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/ls.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Laundry Service</h2>
                <a href="laundry.php" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/gars.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Gardener Service</h2>
                <a href="gardener.php" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>
        </div>


        <div class="carousel-item">
          <div class="carousel-background"><img src="img/intro-carousel/ls.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Laundry Service</h2>
              <a href="laundry.php" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>



      </div>
    </div>
  </section><!-- #intro -->
  <style>
    * {
      box-sizing: border-box;
    }

    #myInput {
      background-image: url('/css/searchicon.png');
      background-position: 10px 12px;
      background-repeat: no-repeat;
      width: 100%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
    }

    #myUL {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    #myUL li a {
      border: 1px solid #ddd;
      margin-top: -1px;
      /* Prevent double borders */
      background-color: #f6f6f6;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      color: black;
      display: block
    }

    #myUL li a:hover:not(.header) {
      background-color: #eee;
    }
  </style>
  <main id="main">
    <div style="padding: 30px;" align="center">
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

      <ul id="myUL" style="display: none;">
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
    </div>
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>About Us</h3>
          <p>MSD is Surat services marketplace. the platform helps customer book reliable home services - from Beauty salon, Home appliance, plumbing, Electrician.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Services excellence is our mission, the critical element for maintaining life-long, valuable relationship our client.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                A service plan is also road map that provides direction so a business can plan its future and help it avoid bumps in the road. The time you spend making your plan thorough and accurate, and keeping it up to date.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>Our vision is to use technology and smart Processes to structure the the highly unorganized services market in Surat end emerging markets </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Surat services Directory is your one step destination for life-style services. we help you to thinks done that matter in your life. In this busy schedule, this is an excellent option for getting work done in a seamless way without finding several service providers.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div align="center"><img src="img/intro-carousel/home.png" height="100px" width="100px"></div>
            <div align="center">
              <h6><a href="home_app.php" class="ii" style="color:black;"> Home appliance</a></h6>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div align="center"><img src="img/intro-carousel/bb.jpg" height="100px" width="100px"></div>
            <div align="center">
              <h6><a href="beauty_salon.php" style="color:black;">Beauty salon</a></h6>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div align="center"><img src="img/intro-carousel/plumber.jpg" height="100px" width="100px"></div>
            <div align="center">
              <h6><a href="plumber.php" style="color:black;">Plumber</a></h6>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div align="center"><img src="img/intro-carousel/Lond.png" height="100px" width="100px"></div>
            <div align="center">
              <h6><a href="laundry.php" style="color:black;">Laundry</a></h6>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div align="center"><img src="img/intro-carousel/grocery.jpg" height="100px" width="100px"></div>
            <div align="center">
              <h6><a href="grocery.php" style="color:black;">Grocery</a></h6>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div align="center"><img src="img/intro-carousel/electrician.jpg" height="100px" width="100px"></div>
            <div align="center">
              <h6><a href="electrician.php" style="color:black;">Electrician</a></h6>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div align="center"><img src="img/intro-carousel/painter.png" height="100px" width="100px"></div>
            <div align="center">
              <h6><a href="painter.php" style="color:black;">Painter</a></h6>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div align="center"><img src="img/intro-carousel/icon-garden.png" height="100px" width="100px"></div>
            <div align="center">
              <h6><a href="gardener.php" style="color:black;">Gardener</a></h6>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div align="center"><img src="img/intro-carousel/car.png" height="100px" width="100px"></div>
            <div align="center">
              <h6><a href="carpenter.php" style="color:black;">Carpenter</a></h6>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->



    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class=" wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>

        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <p><a href="https://www.google.com/maps/place/Surat,+Gujarat/@21.1591857,72.7522557,12z/data=!3m1!4b1!4m6!3m5!1s0x3be04e59411d1563:0xfe4558290938b042!8m2!3d21.1702401!4d72.8310607!16zL20vMDFoMWhu">Surat</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:7990624777">9265099377</a></p>
              <p><a href="tel:7202915981">9979904714</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="MSD@gmail.com">suratservices@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="message" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" id="sent_feed">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>MSD</h3>
            <p>Surat services directory is online market place for local services such as Repair and Maintanance, Beauty salon, Laundry, Grocery, Electrician, Home appliances, Carpentar,Painter,etc...</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#featured-services">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Surat, <br>
              364290,<br>
              <strong>Phone:</strong> 9265099377<br>
              <strong>Phone:</strong> 9979904714<br>
              <strong>Email:</strong> MSD@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://instagram.com/msd_2423?igshid=1rcdpaf3ttvq0" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Related Services In Surat</h4>

            <a href="home_app.php">Home Appliance</a><br>
            <a href="plumber.php">Plumber</a><br>
            <a href="beauty_salon.php">Beauty salon</a><br>
            <a href="carpenter.php">Carpentar</a><br>
            <a href="painter.php">Painter</a><br>
            <a href="gardener.php">Gardener</a><br>
            <a href="grocery.php">Grocery</a><br>
            <a href="electrician.php">Electrician</a><br>
            <a href="laundry.php">Laundry</a>


            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>MSD</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->

      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
<script>
  $(document).ready(function() {
    $("#search-box").keyup(function() {
      $.ajax({
        type: "POST",
        url: "search_services.php",
        data: 'keyword=' + $(this).val(),
        beforeSend: function() {
          $("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data) {
          $("#suggesstion-box").show();
          $("#suggesstion-box").html(data);
          $("#search-box").css("background", "#FFF");
        }
      });
    });
  });

  $("#sent_feed").click(function() {
    name = $("#name").val();
    email = $("#email").val();
    subject = $("#subject").val();
    message = $("#message").val();
    $.ajax({
        url: 'sent_feedback.php',
        type: 'POST',
        data: {
          "name": name,
          "email": email,
          "subject": subject,
          "msg": message
        },
        gatatype: 'html'
      })
      .done(function(data) {
        alert(data);
        location.reload();
      })
      .fail(function() {
        window.location = "demo.<?php ?>";
        alert("fail");
      });
  });
</script>
<script>
  function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    document.getElementById("myUL").style.display = "inline";
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "inline";
      } else {
        li[i].style.display = "none";
      }
    }
  }
</script>

</html>