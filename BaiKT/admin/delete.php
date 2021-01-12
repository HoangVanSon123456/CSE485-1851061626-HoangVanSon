<?php
  include "connect.php";
    $sql = "select * from products";
    $result = mysqli_query($conn,$sql);
    $users = mysqli_fetch_all($result);
  function selectOne($result)
{
    global $conn;
    $sql1 = "select * from products where product_id=" . $result;
    $test = mysqli_query($conn, $sql1);
    $a = mysqli_fetch_assoc($test);
    return $a;
}
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $a = selectOne($id);
    if ($a === null) {
        header('location: error.php');
        exit();
    } else {
        $sql5 = "delete from products where product_id=" . $_GET['id'];
        mysqli_query($conn, $sql5);
        header('location: index.php');
        exit();
    }
}
?>