<?php 
      include "connect.php";
      include "header.php";
      $sql = "select * from products";
      $result = mysqli_query($conn,$sql);
      $users = mysqli_fetch_all($result);
      $id = '';
      $name = '';
      $brand = '';
      $category = '';
      $year = '';
      $price = '';
      if (isset($_POST['btn-thuc-hien'])) 
      {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $category = $_POST['category'];
        $year = $_POST['year'];
        $price = $_POST['price'];
        if(empty($id)||empty($name)||empty($brand)||empty($category)||empty($year)||empty($price))
        {
          header('location: error.php');
          exit();
        }
        else 
        {
          $sql2 = "insert into products(product_id,product_name,brand,category,model_year,price) values( '$id','$name','$brand','$category','$year','$price')" ;
          mysqli_query($conn, $sql2);
          header('location: index.php');
          exit();
        }
    }
?>
<!doctype html>
<html lang="en">
      <head>
        <title>Thêm sản phẩm</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
        <form action="create.php" method="post">
        <h2>Thêm sản phẩm mới</h2>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mã sản phẩm</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="id" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên sản phẩm</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Thương hiệu</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="brand">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên danh mục sản phẩm</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="category">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Năm sản xuất</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="year">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Giá</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="price">
        </div>
        <input name ="btn-thuc-hien" type="submit" class="btn btn-primary" value="Thực hiện">
        <a href="index.php" class="btn btn-default">Hủy bỏ</a>
        </form>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
    </html>