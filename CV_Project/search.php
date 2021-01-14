<!doctype html>
<html lang="en">
  <head>
    <title>Search Record</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <form action="search.php" method="post action">
        <h1>Search Record</h1>
        <input type="text" name="q" placeholder="Write something" value="<?php 
        if(isset($_GET['q'])) {echo $_GET['q']; }?>">
        <input type="submit" value="Search">
        <a href="admin_Tu.php" class="btn btn-default">Back</a>
        </form>
        <hr>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php    
    include "database/connect.php";
    if(isset($_GET['q']) && !empty($_GET['q'])){
        $keyword = $_GET['q'];
        $sql_tk = "SELECT * from achievement
        WHERE name LIKE '%$keyword%'";
        $values_test = "SELECT count(*)from achievement
        WHERE name LIKE '%$keyword%'";
        $result_tk = mysqli_query($conn, $sql_tk);
        $users =  mysqli_fetch_all($result_tk);
        $result_sl = mysqli_query($conn, $values_test);
        $values = mysqli_fetch_all($result_sl);
        foreach($values as $val){
          echo "<div class='container'style='margin-bottom: 20px'>";
          echo "<h3> Search results in achievement table: $val[0] </h3>";
          echo "<hr>";
          echo "</div>";
        }
    
      foreach($users as $user){
        echo "<div class='container'>";
        echo "<div class='row'>";
          echo "<div class='col-2' style='display: flex;
          flex-direction: column;
          align-items: flex-end;
      }'>";
              echo "<p>ID:</p>";
              echo "<p>Name:</p>";
              echo "<p>Parameter:</p>";
          echo "</div>";
          echo "<div class='col-10'>";
              echo "<p>$user[0]</p>";
              echo "<p>$user[1]</p>";
              echo "<p>$user[2]</p>";
          echo "</div>";
        echo "</div>";
        echo"<hr style='background-color: black; border: 1px solid black'>";
      echo "</div>";
      }
      $sql_tk1 = "SELECT * from education_history
       WHERE name LIKE '%$keyword%'";
      $values_test1 = "SELECT count(*)
      from education_history
      WHERE name LIKE '%$keyword%'";
      $result_tk1 = mysqli_query($conn, $sql_tk1);
      $users1 =  mysqli_fetch_all($result_tk1);
      $result_sl1 = mysqli_query($conn, $values_test1);
      $values1 = mysqli_fetch_all($result_sl1);
      foreach($values1 as $val1){
        echo "<div class='container'style='margin-bottom: 20px'>";
        echo "<h3> Search results in education table: $val1[0] </h3>";
        echo "<hr>";
        echo "</div>";
      }
  
    foreach($users1 as $user1){
      echo "<div class='container'>";
      echo "<div class='row'>";
        echo "<div class='col-2' style='display: flex;
        flex-direction: column;
        align-items: flex-end;
    }'>";
            echo "<p>ID:</p>";
            echo "<p>Name:</p>";
            echo "<p>Content:</p>";
            echo "<p>Start year:</p>";
            echo "<p>Course time:</p>";
        echo "</div>";
        echo "<div class='col-10'>";
            echo "<p>$user1[0]</p>";
            echo "<p>$user1[1]</p>";
            echo "<p>$user1[2]</p>";
            echo "<p>$user1[3]</p>";
            echo "<p>$user1[4]</p>";
        echo "</div>";
      echo "</div>";
      echo"<hr style='background-color: black; border: 1px solid black'>";
    echo "</div>";
    }
    $sql_tk2 = "SELECT * from history
       WHERE name LIKE '%$keyword%'";
      $values_test2 = "SELECT count(*)
      from history
      WHERE name LIKE '%$keyword%'";
      $result_tk2 = mysqli_query($conn, $sql_tk2);
      $users2 =  mysqli_fetch_all($result_tk2);
      $result_sl2 = mysqli_query($conn, $values_test2);
      $values2 = mysqli_fetch_all($result_sl2);
      foreach($values2 as $val2){
        echo "<div class='container'style='margin-bottom: 20px'>";
        echo "<h3> Search results in job table: $val2[0] </h3>";
        echo "<hr>";
        echo "</div>";
      }
  
    foreach($users2 as $user2){
      echo "<div class='container'>";
      echo "<div class='row'>";
        echo "<div class='col-2' style='display: flex;
        flex-direction: column;
        align-items: flex-end;
    }'>";
            echo "<p>ID:</p>";
            echo "<p>Name:</p>";
            echo "<p>Content:</p>";
        echo "</div>";
        echo "<div class='col-10'>";
            echo "<p>$user2[0]</p>";
            echo "<p>$user2[1]</p>";
            echo "<p>$user2[2]</p>";
        echo "</div>";
      echo "</div>";
      echo"<hr style='background-color: black; border: 1px solid black'>";
    echo "</div>";
    }
        $sql_tk3 = "SELECT * from product,product_detail 
        WHERE product.productId=product_detail.productId
        and name LIKE '%$keyword%'";
        $values_test3 = "SELECT count(*)
        from product,product_detail 
        WHERE product.productId=product_detail.productId
        and name LIKE '%$keyword%'";
        $result_tk3 = mysqli_query($conn, $sql_tk3);
        $users3 =  mysqli_fetch_all($result_tk3);
        $result_sl3 = mysqli_query($conn, $values_test3);
        $values3 = mysqli_fetch_all($result_sl3);
        foreach($values3 as $val3){
        echo "<div class='container'style='margin-bottom: 20px'>";
        echo "<h3> Search results in product table: $val3[0] </h3>";
        echo "<hr>";
        echo "</div>";
      }
  
    foreach($users3 as $user3){
      echo "<div class='container'>";
      echo "<div class='row'>";
        echo "<div class='col-2' style='display: flex;
        flex-direction: column;
        align-items: flex-end;
    }'>";
            echo "<p>ID:</p>";
            echo "<p>Name:</p>";
            echo "<p>Date:</p>";
            echo "<p>Client:</p>";
            echo "<p>Category:</p>";
        echo "</div>";
        echo "<div class='col-10'>";
            echo "<p>$user3[0]</p>";
            echo "<p>$user3[1]</p>";
            echo "<p>$user3[3]</p>";
            echo "<p>$user3[6]</p>";
            echo "<p>$user3[10]</p>";
        echo "</div>";
      echo "</div>";
      echo"<hr style='background-color: black; border: 1px solid black'>";
    echo "</div>";
    }
    $sql_tk4 = "SELECT * from services
        where name LIKE '%$keyword%'";
        $values_test4 = "SELECT count(*) from services
        where name LIKE '%$keyword%'";
        $result_tk4 = mysqli_query($conn, $sql_tk4);
        $users4 =  mysqli_fetch_all($result_tk4);
        $result_sl4 = mysqli_query($conn, $values_test4);
        $values4 = mysqli_fetch_all($result_sl4);
        foreach($values4 as $val4){
        echo "<div class='container'style='margin-bottom: 20px'>";
        echo "<h3> Search results in services table: $val4[0] </h3>";
        echo "<hr>";
        echo "</div>";
      }
  
    foreach($users4 as $user4){
      echo "<div class='container'>";
      echo "<div class='row'>";
        echo "<div class='col-2' style='display: flex;
        flex-direction: column;
        align-items: flex-end;
    }'>";
            echo "<p>ID:</p>";
            echo "<p>Name:</p>";
            echo "<p>Description:</p>";
        echo "</div>";
        echo "<div class='col-10'>";
            echo "<p>$user4[0]</p>";
            echo "<p>$user4[1]</p>";
            echo "<p>$user4[2]</p>";
        echo "</div>";
      echo "</div>";
      echo"<hr style='background-color: black; border: 1px solid black'>";
    echo "</div>";
    }
    $sql_tk5 = "SELECT * from skills
        where name LIKE '%$keyword%'";
        $values_test5 = "SELECT count(*) from skills
        where name LIKE '%$keyword%'";
        $result_tk5 = mysqli_query($conn, $sql_tk5);
        $users5 =  mysqli_fetch_all($result_tk5);
        $result_sl5 = mysqli_query($conn, $values_test5);
        $values5 = mysqli_fetch_all($result_sl5);
        foreach($values5 as $val5){
        echo "<div class='container'style='margin-bottom: 20px'>";
        echo "<h3> Search results in sklls table: $val5[0] </h3>";
        echo "<hr>";
        echo "</div>";
      }
  
    foreach($users5 as $user5){
      echo "<div class='container'>";
      echo "<div class='row'>";
        echo "<div class='col-2' style='display: flex;
        flex-direction: column;
        align-items: flex-end;
    }'>";
            echo "<p>ID:</p>";
            echo "<p>Name:</p>";
            echo "<p>Parameter:</p>";
        echo "</div>";
        echo "<div class='col-10'>";
            echo "<p>$user5[0]</p>";
            echo "<p>$user5[1]</p>";
            echo "<p>$user5[2]</p>";
        echo "</div>";
      echo "</div>";
      echo"<hr style='background-color: black; border: 1px solid black'>";
    echo "</div>";
    }
        $sql_tk6 = "SELECT * from users
        where name LIKE '%$keyword%'";
        $values_test6 = "SELECT count(*)  from users
        where users.name LIKE '%$keyword%'";
        $result_tk6 = mysqli_query($conn, $sql_tk6);
        $users6 =  mysqli_fetch_all($result_tk6);
        $result_sl6 = mysqli_query($conn, $values_test6);
        $values6 = mysqli_fetch_all($result_sl6);
        foreach($values6 as $val6){
        echo "<div class='container'style='margin-bottom: 20px'>";
        echo "<h3> Search results in users table: $val6[0] </h3>";
        echo "<hr>";
        echo "</div>";
      }
  
    foreach($users6 as $user6){
      echo "<div class='container'>";
      echo "<div class='row'>";
        echo "<div class='col-2' style='display: flex;
        flex-direction: column;
        align-items: flex-end;
    }'>";
            echo "<p>ID:</p>";
            echo "<p>Name:</p>";
            echo "<p>Age:</p>";
            echo "<p>Address:</p>";
            echo "<p>Carrer:</p>";
            echo "<p>Phone:</p>";
        echo "</div>";
        echo "<div class='col-10'>";
            echo "<p>$user6[0]</p>";
            echo "<p>$user6[1]</p>";
            echo "<p>$user6[2]</p>";
            echo "<p>$user6[3]</p>";
            echo "<p>$user6[7]</p>";
            echo "<p>$user6[8]</p>";
        echo "</div>";
      echo "</div>";
      echo"<hr style='background-color: black; border: 1px solid black'>";
    echo "</div>";
    }
} 
    mysqli_close($conn);
?>