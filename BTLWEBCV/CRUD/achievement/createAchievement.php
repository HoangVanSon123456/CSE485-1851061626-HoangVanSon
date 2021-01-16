<?php
      include "../connect1.php";
      $sql = "select * from achievement";
      $result = mysqli_query($conn,$sql);
      $users = mysqli_fetch_all($result);
      $name = '';
      $parameter = '';
      if (isset($_POST['btn-submit'])) 
      {
        $name = $_POST['name'];
        $parameter = $_POST['parameter'];
        if(empty($name)||empty($parameter))
        {
          header('location: ../error.php');
          exit();
        }
        else 
        {
          $sql2 = "insert into achievement (name,parameter) values
          ('$name','$parameter')" ;
          mysqli_query($conn, $sql2);
          header('location: /CV_Project/adminpage/adminAchievement.php');
          exit();
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
    <form action="createAchievement.php" class="needs-validation" method="post" novalidate>
         <h2>Create Achievement</h2>
        <div class="form-group">
            <label for="inputEmail">Name</label>
            <input type="name" class="form-control" id="name" name="name" placeholder="Name" required>
            <div class="invalid-feedback">Please enter a valid name a.</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Parameter</label>
            <input type="parameter" class="form-control" id="parameter" name="parameter" placeholder="Parameter" required>
            <div class="invalid-feedback">Please enter a valid parameter.</div>
        </div>
        <div class="form-group">
            <input name ="btn-submit" type="submit" class="btn btn-primary" value="Save">
        <a href="/CV_Project/adminpage/adminAchievement.php" class="btn btn-default">Cancel</a>
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