<?php
    include "header.php";
    include "connect.php";
    global $conn;
    $sql = "select * from products";
    $result = mysqli_query($conn,$sql);
    $users = mysqli_fetch_all($result);
    function selectOne($result)
    {
        global $conn;   
        $sql1 = "select * from products where product_id =" . $result;
        $test = mysqli_query($conn, $sql1);
        $a = mysqli_fetch_assoc($test);
        return $a;
    }
    if (isset($_GET['id'])) {
        $a = selectOne($_GET['id']);
        if ($a === null) {
            header('location: error.php');
            exit();
        }
        else 
        {
            $id = $a['product_id'];
            $name = $a['product_name'];
            $brand = $a['brand'];
            $category = $a['category'];
            $year = $a['model_year'];
            $price = $a['price'];
        }
    }
    if (isset($_POST['btn-luu'])) {
        $i = $_POST['id'];
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $category = $_POST['category'];
        $year = $_POST['year'];
        $price = $_POST['price'];
        $sql3 = "update products set  
        product_name='$name', 
        brand='$brand',
        category='$category',
        model_year='$year',
        price='$price'
        where product_id='$i'";  
        //print_r($sql3);
        mysqli_query($conn, $sql3);
        header('location: index.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Chỉnh sửa thông tin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>">
        <h2>Chỉnh sửa thông tin sản phẩm</h2>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên sản phẩm</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?php echo $name ?>" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Thương hiệu</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="brand" value="<?php echo $brand ?>" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên danh mục sản phẩm</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="category" value="<?php echo $category ?>" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Năm sản xuất</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="year" value="<?php echo $year ?>" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Giá</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="price" value="<?php echo $price ?>">
        </div>
        <input name ="btn-luu" type="submit" class="btn btn-primary" value="Lưu">
        <a href="index.php" class="btn btn-default">Hủy bỏ</a>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>