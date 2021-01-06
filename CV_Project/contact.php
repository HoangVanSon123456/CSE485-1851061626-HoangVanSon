<?php 
if(isset($_POST['submit'])){
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
    if (mail($to,$subject, $message, $headers)) {
      echo "Email successfully sent to $to...";
  } else {
      echo "Email sending failed...";
  }
    // mail($to,$subject,$message,$headers);
    // echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
// require_once("../prac01/mail/class.phpmailer (1).php");
// require_once("../prac01/mail/class.smtp.php");
// $receiving_email_address = 'tuvana86@gmail.com';


// $mail = new PHPMailer;
// $mail->isSMTP();                                       
//  $mail->Host = 'smtp.gmail.com;';                       
//  $mail->SMTPAuth = true;  
// $mail->to = $receiving_email_address;
// $mail->from_name = $_POST['name'];
// $mail->from_email = $_POST['email'];
// $mail->subject = $_POST['subject'];

// // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
// /*
// $contact->smtp = array(
//   'host' => 'example.com',
//   'username' => 'example',
//   'password' => 'pass',
//   'port' => '587'
// );
// */

// $mail->add_message( $_POST['name'], 'From');
// $mail->add_message( $_POST['email'], 'Email');
// $mail->add_message( $_POST['message'], 'Message', 10);

// echo $mail->send();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Vendor CSS Files -->
    <?php include "linkcss.php" ?>
</head>
<body id="page-top">
    <!-- ======= Contact Section ======= -->
    <?php include "header.php" ?>
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
                      <form action="contact.php" method="post" role="form" >
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
                          <!-- <div class="col-md-12 text-center mb-3">
                             <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div> -->
                          <!-- </div> -->
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
    <?php include "linkjs.php" ?>
</body>
</html>