<?php
    $conn = mysqli_connect('localhost','root','','cv');
    /*db_host,db_user,db_password,db_name*/ 
    if(!$conn){
        die('Co loi ket noi'.mysqli_connect_error());
    }
?>