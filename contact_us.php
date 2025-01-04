<?php include('header.php'); ?>
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

<?php
include 'footer.php';
?>

<script>
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