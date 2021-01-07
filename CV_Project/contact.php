<?php
 if(isset($_POST['submit'])){
    if((!empty($_POST['name']))&&(!empty($_POST['email']))&&(!empty($_POST['subject']))&&(!empty($_POST['message']))){
    $to = "tuvana86@gmail.com"; // this is your Email address
    $from = trim(strip_tags($_POST['email'])); // this is the sender's Email address
    $name = trim( strip_tags($_POST['name']));
    $subject = trim( strip_tags($_POST['subject']));
    $thongdiep = trim( strip_tags($_POST['message']));
    $message =
    "Họ tên:" .$name."\n".
    "Email:" .$from."\n".
    "Tiêu đề:".$subject."\n".
    "Thông điệp:".$thongdiep."\n";
    $headers = "From:" . $from;
    mail($to,$subject, $message, $headers);
    echo "Email successfully sent to $to...";
    }
    else{
      echo "Email sending failed...";
    }
  //   if (mail($to,$subject, $message, $headers)) {
  //     echo "Email successfully sent to $to...";
  // } else {
  //     echo "Email sending failed...";
  // }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Vendor CSS Files and Template Main CSS File-->
    <?php include "linkcss.php" ?>
</head>
<body id ="page-top">
  <!-- ======= Contact Section ======= -->
  <?php include "header.php" ?>
  <br> <br>
  <main id="main">
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(resources/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <form action="contact.php" method="post" role="form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            <input type="submit" name="submit" class="btn btn-primary"value='Send Message'>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                        expedita aperiam aliquid at.
                        Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                        mollitia inventore?
                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> 329 WASHINGTON ST BOSTON, MA 02108</li>
                        <li><span class="ion-ios-telephone"></span> (617) 557-0089</li>
                        <li><span class="ion-email"></span> contact@example.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main>
  <!-- ======= Footer ======= -->
  <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->
    <!-- Vendor JS Files and Template Main JS File  -->
    <?php include "linkjs.php"?>
<!-- <script>
  $("#submit").click(function(){
    mailfeedback();
  });
  function mailfeedback() {
    var checck=false;
    var value1 = $('#name').val().trim();
    var value2 = $('#email').val().trim();
    var value3 = $('#subject').val().trim();
    var value4 = $('#message').val().trim();
    if(value1 == ''||value2 == ''||value3 == ''||value4 == ''){
        alert('ban chua nhap thong tin');
    }
  } 
</script> -->
</body>
</html>
