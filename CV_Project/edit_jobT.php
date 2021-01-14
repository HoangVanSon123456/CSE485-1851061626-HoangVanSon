<?php 
      include "database/connect.php";
      $sql = "select * from history";
      $result = mysqli_query($conn,$sql);
      $users = mysqli_fetch_all($result);
      $id = '';
      $name = '';
      $content = '';
    function selectOne($result)
    {
        global $conn;   
        $sql1 = "select * from history where historyId =" . $result;
        $test = mysqli_query($conn, $sql1);
        $a = mysqli_fetch_assoc($test);
        return $a;
    }
    if (isset($_GET['id'])) {
        $a = selectOne($_GET['id']);
        {
            $id = $a['historyId'];
            $name = $a['name'];
            $content = $a['content'];
        }
    }
    if (isset($_POST['btn-submit'])) {
        $i = $_POST['id'];
        $name = $_POST['name'];
        $content = $_POST['content'];
        $sql3 = "update history set 
        name='$name', 
        content='$content'
        where historyId='$i'";  
        //print_r($sql3);
        mysqli_query($conn, $sql3);
        header('location: admin_Tu.php');
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
  <form action="edit_jobT.php" class="needs-validation" method="post" novalidate>
        <h2 style = 'text-align:center'>Edit Job History</h2>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="form-group">
            <label for="inputEmail"><strong>Name</strong></label>
            <input type="name" class="form-control" id="name" name="name" value="<?php echo $name ?>">
        </div>
        <div class="form-group">
            <label for="inputcontent"><strong>Content</strong></label>
            <input type="content" class="form-control" id="content" name="content" value="<?php echo $content ?>">
            
        </div>
            <input name ="btn-submit" type="submit" class="btn btn-primary" value="Save">
        <a href="admin_Tu.php" class="btn btn-default">Cancel</a>

    </form>

        <script>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>