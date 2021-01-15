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
    echo '<script language="javascript">alert("Email successfully sent");</script>';
    }
    else{
      echo '<script language="javascript">alert("Email unsuccessfully sent, please check your information again ");</script>';
    }
} 
?>
