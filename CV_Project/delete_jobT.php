<?php 
      include "database/connect.php";
      $sql = "select * from history";
      $result = mysqli_query($conn,$sql);
      $users = mysqli_fetch_all($result);
    function selectOne($result)
    {
        global $conn;   
        $sql1 = "select * from history where historyId =" . $result;
        $test = mysqli_query($conn, $sql1);
        $a = mysqli_fetch_assoc($test);
        return $a;
    }
    if (isset($_GET['id'])) {
        $id = $a['historyId'];
        $a = selectOne($_GET['id']);
        $sql5 = "delete from history where historyId=" . $_GET['id'];
        mysqli_query($conn, $sql5);
        header('location: admin_Tu.php');
        exit();
    }
?>