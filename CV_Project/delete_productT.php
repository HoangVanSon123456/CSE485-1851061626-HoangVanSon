<?php 
      include "database/connect.php";
      $sql = "select * from product,product_detail WHERE product.productId=product_detail.productId";
      $result = mysqli_query($conn,$sql);
      $users = mysqli_fetch_all($result);
    function selectOne($result)
    {
        global $conn;   
        $sql1 = "select * from product,product_detail WHERE product.productId=product_detail.productId and product.productId=" . $result;
        $test = mysqli_query($conn, $sql1);
        $a = mysqli_fetch_assoc($test);
        return $a;
    }
    if (isset($_GET['id'])) {
        $id = $a['productId'];
        $a = selectOne($_GET['id']);
        $sql5 = "delete from product_detail where productId=" . $_GET['id'];
        mysqli_query($conn, $sql5);
        $sql6 = "delete from product where productId=" . $_GET['id'];
        mysqli_query($conn, $sql6);
        header('location: admin_Tu.php');
        exit();
    }
?>