<?php 
      include "../connect1.php";
      $sql = "select * from education_history";
      $result = mysqli_query($conn,$sql);
      $users = mysqli_fetch_all($result);
    function selectOne($result)
    {
        global $conn;   
        $sql1 = "select * from education_history where id =" . $result;
        $test = mysqli_query($conn, $sql1);
        $a = mysqli_fetch_assoc($test);
        return $a;
    }
    if (isset($_GET['id'])) {
        $a = selectOne($_GET['id']);
        {
            $id = $a['id'];
            $name = $a['name'];
            $content = $a['content'];
            $year_start = $a['year_start'];
            $style_time = $a['style_time'];
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>View Record</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form action="read_educationT.php" class="needs-validation" method="post" novalidate>
         <h2 style = 'text-align:center'>View education information</h2>
        <div class="form-group">
            <label for="inputEmail"><strong>Name</strong></label>
            <input type="name" class="form-control" id="name" name="name" value="<?php echo $name ?>" disabled = "disabled">

        </div>
        <div class="form-group">
            <label for="inputcontent"><strong>Content</strong></label>
            <input type="content" class="form-control" id="content" name="content" value="<?php echo $content ?>" disabled = "disabled">
            
        </div>
          <div class="form-group">
            <label for="inputyear"><strong>Start year</strong></label>
            <input type="year" class="form-control" id="year_start" name="year_start" value="<?php echo $year_start ?>" disabled = "disabled">
            
        </div>
        <div class="form-group">
            <label for="inputcoursetime"><strong>Style Time</strong></label>
            <input type="style_time" class="form-control" id="style_time" name = "style_time" value="<?php echo $style_time ?>" disabled = "disabled">
        
        </div>
        <div class="form-group">
        <a href="/CV_Project/adminpage/adminEduHistory.php" class="btn btn-primary">Back</a>
        </div>

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