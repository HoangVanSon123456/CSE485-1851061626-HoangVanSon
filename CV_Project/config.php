<?php
$link = mysqli_connect( 'localhost', 'root', '', 'quanlycv');
 
if($link === false){
    die("Lỗi kết nối" . mysqli_connect_error());
}
?>