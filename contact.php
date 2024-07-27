<?php
require("connect.php");  
require('settings/header.php'); 

$name = "";
$email = "";
$sub = "";
$msg = "";

   if(isset($_POST['submit'])){
    if(isset($_POST['full_name'])){
      $name = ($_POST['full_name']);
    }
    if(isset($_POST['email'])){
      $email = ($_POST['email']);
    }
    if(isset($_POST['subject'])){
      $sub = ($_POST['subject']);
    }
    if(isset($_POST['message'])){
      $msg = ($_POST['message']);
    }
    $headers = "";

   $ins = "INSERT INTO contacts(full_name, email, sub, messages) VALUES('$name', '$email', '$sub', '$msg')";

   if ($conn->query($ins) === TRUE) {
    echo '<script>alert("message sent successfully")</script>';
  
    $to = "inquiries@southernbridgeintelligence.com";
    $subject = "New Contact Request";
    $mesg = "\nHello admin you have a new contact request from Name: ".$name."\n Email: ".$email."\n Message: ".$msg;
    $mesg = wordwrap($mesg, 70);
    $headers .="Reply-To: Southern Bridge Intelligence <inquiries@southernbridgeintelligence.com> \r\n";
    $headers .="Return-Path: The Sender <inquiries@southernbridgeintelligence.com>\r\n";
    $headers .="MIME-Version: 1.0" ."\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8". "\r\n";
    $headers .= "From Southern Bridge Intelligence". "\r\n";
    mail($to, $subject, $mesg, $headers);
   }else{
    echo $conn->error;
   }
} 
?>



  <div style="height: 10vh"></div>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          
        </div>

      </div>
    </section>
    
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7310.475147533561!2d-46.73133942497254!3d-23.631661488592066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce514043537f51%3A0x6da6938196caa325!2sPanamby%2C%20S%C3%A3o%20Paulo%20-%20State%20of%20S%C3%A3o%20Paulo%2C%20Brazil!5e0!3m2!1sen!2sng!4v1687436999313!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p><br>Vila Andrade, Panamby,
                    <br>Sao Paulo, SP </p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>inquiries<br>@southernbridgeintelligence.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+55 1195397-0187</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="contact.php" method="POST" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="full_name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <!--<div class="loading">Loading</div> -->
                <!--<div class="error-message"></div> -->
                <!--<div class="sent-message">Your message has been sent. Thank you!</div> -->
              </div>
              <div class="text-center">
                <button name="submit" type="submit">Send Message</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
              
  <!-- ======= Footer ======= -->
  <?php  require('settings/footer.php'); ?>