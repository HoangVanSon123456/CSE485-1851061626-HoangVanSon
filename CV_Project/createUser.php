<?php
      include "database/connect.php";
      $sql = "select * from user";
      $result = mysqli_query($conn,$sql);
      $users = mysqli_fetch_all($result);
      $name = '';
      $username = '';
      $password = '';
      $age = '';
      $email = '';
      $description = ''; $phone = '';
      if (isset($_POST['btn-thuc-hien'])) 
      {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $description = $_POST['description'];
        $phone = $_POST['phone'];
        if(empty($name)||empty($username)||empty($password)||empty($age)||empty($email)
        ||empty($description)||empty($phone))
        {
          header('location: error.php');
          exit();
        }
        else 
        {
          $sql2 = "insert into user (name,username,password,age,email,description,image,phone) values
          ('$name','$username','$password','$age','$email','$description','$image','$phone')" ;
          mysqli_query($conn, $sql2);
          header('location: adminAbout.php');
          exit();
        }
    }
if (isset($_POST['btn-thuc-hien'])) {
$errors= array();
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];
$file_name_array = explode('.',$_FILES['image']['name']);
$file_ext=strtolower(end($file_name_array));
   
$expensions= array("jpeg","jpg","png");
   
if(in_array($file_ext,$expensions)=== false){
$errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
}
   
if($file_size > 2097152) {
$errors[]='Kích thước file không được lớn hơn 2MB';
}
$image = $_FILES['image']['name'];
$target = "photo/".basename($image);
$sql = "INSERT INTO user VALUES ('$image')";
mysqli_query($conn, $sql);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
echo '<script language="javascript">alert("Đã upload thành công!");</script>';
}else{
echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Create User</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;        
    }
</style>
</head>
<body>
<div class="bs-example">
    <form action="createUser.php" class="needs-validation" method="post" novalidate>
         <h2>Create User</h2>
        <div class="form-group">
            <label for="inputEmail">Name</label>
            <input type="name" class="form-control" id="name" name="name" placeholder="Name" required>
            <div class="invalid-feedback">Please enter a valid name a.</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Username</label>
            <input type="username" class="form-control" id="username" name="username" placeholder="Username" required>
            <div class="invalid-feedback">Please enter a valid username .</div>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <div class="invalid-feedback">Please enter your password to continue.</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Age</label>
            <input type="age" class="form-control" id="age" name = "age" placeholder="Age" required>
            <div class="invalid-feedback">Please enter a valid age.</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>
          <div class="form-group">
            <label for="inputEmail">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone" required>
            <div class="invalid-feedback">Please enter a valid phone.</div>
        </div>
          <div class="form-group">
            <label for="inputEmail">Decription</label>
            <input type="decription" class="form-control" id="description" name="description" placeholder="Decription" required>
            <div class="invalid-feedback">Please enter a valid decription.</div>
        </div>
          <div class="form-group" method="POST" enctype="multipart/form-data">
            <label for="inputEmail">Image: </label>
            <input type="file" name="image"> 
            <div class="invalid-feedback">Please enter a valid image .</div>
        </div>
        <div class="form-group">
            <input name ="btn-thuc-hien" type="submit" class="btn btn-primary" value="ok">
        <a href="index.php" class="btn btn-default">Hủy bỏ</a>
        </div>

    </form>
    
    <!-- JavaScript for disabling form submissions if there are invalid fields -->
    <script>
        // Self-executing function
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</div>
</body>
</html>