<?php 
      include "../connect1.php";
      $sql = "select * from teams";
      $result = mysqli_query($conn,$sql);
      $users = mysqli_fetch_all($result);
    function selectOne($result)
    {
        global $conn;   
        $sql1 = "select * from teams where teamId =" . $result;
        $test = mysqli_query($conn, $sql1);
        $a = mysqli_fetch_assoc($test);
        return $a;
    }
    if (isset($_GET['id'])) {
        $id = $a['teamId'];
        $a = selectOne($_GET['id']);
        $sql5 = "delete from teams where teamId=" . $_GET['id'];
        mysqli_query($conn, $sql5);
        header('location: /CV_Project/adminpage/admin_About.php');
        exit();
    }
?>