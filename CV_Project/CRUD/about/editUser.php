<?php
    include "/database/connect.php";
    global $conn;
    $sql = "select * from user";
    $result = mysqli_query($conn,$sql);
    $users = mysqli_fetch_all($result);
    function selectOne($result)
    {
        global $conn;   
        $sql1 = "select * from user where id =" . $result;
        $test = mysqli_query($conn, $sql1);
        $a = mysqli_fetch_assoc($test);
        return $a;
    }
    if (isset($_GET['id'])) {
        $row = selectOne($_GET['id']);
        if ($row === null) {
            header('location: /error.php');
            exit();
        }
        else 
        {
            $id = $row['id'];
            $name = $row['name'];
            $username = $row['username'];
            $password = $row['password'];
            $age = $row['age'];
            $email = $row['email'];
            $phone = $row['phone']; 
            $description = $row['description']; 
        }
    }
    if (isset($_POST['btn-luu'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $description = $_POST['description']; 
        $sql3 = "update user set  
        name='$name', 
        username='$username',
        password='$password',
        age='$age',
        email='$email',
        phone='$phone',
        description='$description'
        where id='$id'";  
        //print_r($sql3);
        mysqli_query($conn, $sql3);
        header('location: /adminpage/adminAbout.php');
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
    <form action="editUser.php" method="post">
        <h2>Edit user information</h2>
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
            <label for="inputEmail">Username</label>
            <input type="username" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $username ?>" required>
            <div class="invalid-feedback">Please enter a valid username .</div>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <div class="invalid-feedback">Please enter your password to continue.</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Age</label>
            <input type="age" class="form-control" id="age" name = "age" placeholder="Age" value="<?php echo $age ?>" required>
            <div class="invalid-feedback">Please enter a valid age.</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email ?>" required>
            <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>
          <div class="form-group">
            <label for="inputEmail">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $phone ?>" required>
            <div class="invalid-feedback">Please enter a valid phone.</div>
        </div>
          <div class="form-group">
            <label for="inputEmail">Decription</label>
            <input type="decription" class="form-control" id="description" name="description" placeholder="Decription" value="<?php echo $description ?>" required>
            <div class="invalid-feedback">Please enter a valid decription.</div>
        </div>
        <div class="form-group">
          <input name ="btn-luu" type="submit" class="btn btn-primary" value="Save">
        <a href="/adminpage/adminAbout.php" class="btn btn-default">Cancel</a>
        
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>