 <?php 
      include "/database/connect.php";
      $sql = "select * from product";
      $result = mysqli_query($conn,$sql);
      $users = mysqli_fetch_all($result);
      $name = '';
      $time_start = '';
      $description = '';
      $url ='';
      $content = '';
      $title ='';
      $category='';
      if (isset($_POST['btn-submit'])) 
      {
        $name = $_POST['name'];
        $time_start = $_POST['time_start'];
        $description =$_POST['description'];
        $url = $_POST['url'];
        $content = $_POST['content'];
        $title = $_POST['title'];
        $category = $_POST['category'];
        $sql2 = "INSERT INTO product
        (name,time_start,description,url,content,title,category) 
        VALUES('$name','$time_start','$description','$url','$content','$title','$category')" ;
        mysqli_query($conn, $sql2);
        header('location: /adminpage/adminProduct.php');
    }
?>
<!doctype html>
<html lang="en">
      <head>
        <title>Create Record</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
      <form action="create_productT.php" class="needs-validation" method="post" novalidate>
         <h2 style = 'text-align:center'>Create New product </h2>
        <div class="form-group">
            <label for="inputname"><strong>Name</strong></label>
            <input type="name" class="form-control" id="name" name="name" placeholder="Enter your product name" required>
            <div class="invalid-feedback">Please enter a valid name to continue.</div>
        </div>
        <div class="form-group">
            <label for="inputdate"><strong>Time Start</strong></label>
            <input type="date" class="form-control" id="time_start" name="time_start" placeholder="Enter your product date" required>
            <div class="invalid-feedback">Please enter a valid date to continue.</div>
        </div>
        <div class="form-group">
            <label for="inputcontent"><strong>Decription</strong></label>
            <input type="description" class="form-control" id="description" name="description" placeholder="Enter your client name" required>
            <div class="invalid-feedback">Please enter a valid client to continue.</div>
        </div>
          <div class="form-group">
            <label for="inputyear"><strong>Url</strong></label>
            <input type="text" class="form-control" id="url" name="url" placeholder="Enter your product url" required>
            <div class="invalid-feedback">Please enter a valid url to continue.</div>
        </div>
        <div class="form-group">
            <label for="inputcontent"><strong>Content</strong></label>
            <input type="content" class="form-control" id="content" name = "content" placeholder="Enter your product content" required>
            <div class="invalid-feedback">Please enter a valid content to continue.</div>
        </div>
        <div class="form-group">
            <label for="inputcoursetime"><strong>Title</strong></label>
            <input type="title" class="form-control" id="title" name = "title" placeholder="Enter your product title" required>
            <div class="invalid-feedback">Please enter a valid title to continue.</div>
        </div>
        <div class="form-group">
            <label for="inputcoursetime"><strong>Category</strong></label>
            <input type="category" class="form-control" id="category" name = "category" placeholder="Enter your product category" required>
            <div class="invalid-feedback">Please enter a valid category to continue.</div>
        </div>
        <div class="form-group">
            <input name ="btn-submit" type="submit" class="btn btn-primary" value="Save">
        <a href="/adminpage/adminProduct.php" class="btn btn-default">Cancel</a>
        </div>
    </form>

        <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
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