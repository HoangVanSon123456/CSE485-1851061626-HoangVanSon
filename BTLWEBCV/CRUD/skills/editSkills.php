<?php
    include "../connect1.php";
    global $conn;
    $sql = "select * from skills";
    $result = mysqli_query($conn,$sql);
    $users = mysqli_fetch_all($result);
    function selectOne($result)
    {
        global $conn;   
        $sql1 = "select * from skills where id =" . $result;
        $test = mysqli_query($conn, $sql1);
        $a = mysqli_fetch_assoc($test);
        return $a;
    }
    if (isset($_GET['id'])) {
        $row = selectOne($_GET['id']);
        if ($row === null) {
            header('location: ../error.php');
            exit();
        }
        else 
        {
            $id = $row['id'];
            $name = $row['name'];
            $parameter = $row['parameter']; 
        }
    }
    if (isset($_POST['btn-luu'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];    
        $parameter = $_POST['parameter']; 
        $sql3 = "update skills set  
        name='$name', 
        parameter='$parameter'
        where id='$id'";  
        //print_r($sql3);
        mysqli_query($conn, $sql3);
        header('location: /CV_Project/adminpage/adminSkills.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit Record</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="editSkills.php" method="post">
        <h2>Edit skill infomation</h2>
        <div class="form-group">
            <label for="inputEmail">Id</label>
            <input type="td" class="form-control" id="id" name="id" placeholder="id" readonly value="<?php echo $id ?>">
            <div class="invalid-feedback">Please enter a valid name a.</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Name</label>
            <input type="name" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $name ?>" required>
            <div class="invalid-feedback">Please enter a valid name a.</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Parameter</label>
            <input type="parameter" class="form-control" id="parameter" name="parameter" placeholder="Parameter" value="<?php echo $parameter ?>" required>
            <div class="invalid-feedback">Please enter a valid parameter.</div>
        </div>
        <div class="form-group">
          <input name ="btn-luu" type="submit" class="btn btn-primary" value="Save">
        <a href="/CV_Project/adminpage/adminSkills.php" class="btn btn-default">Cancel</a>
        
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>