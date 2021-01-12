<?php
 if(isset($_POST['submit'])){
    if((!empty($_POST['name']))&&(!empty($_POST['email']))&&(!empty($_POST['subject']))&&(!empty($_POST['message']))){
    $to1 = "tuvana86@gmail.com"; 
    $to2 = "mail o";// this is your Email address
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
    mail($to1,$subject, $message, $headers);
    mail($to2,$subject, $message, $headers);
    echo "Email successfully sent to .$to1..."
    }
    else{
      echo "Email sending failed, please check your information again";
    }

} 
?>
