<!doctype html>
<html lang="en">
  <head>
    <title>Website thương mại điện tử</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- FontAwesome -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
          <a class="navbar-brand" href="index.php">Trang chủ</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation"></button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
              <form  class="form my-2 my-lg-0" medthod = "post action">
                <a href="create.php" class="btn btn-success ">Thêm sản phẩm mới</a>
              </form>
          </div>
      </nav>
      <h2>Danh sách sản phẩm</h2>
      <?php
        //1. Kết nối database
        include "connect.php";
        //2. Khai báo truy vấn
        $sql="SELECT * from products";
        $result = mysqli_query($conn,$sql);
        $users = mysqli_fetch_all($result);
        // echo "<pre>";
        // echo print_r($users);
        // echo "</pre>";
        // In kqua theo dạng array
        //3. Xử lý kết quả
        echo "<table class = 'table table-bordered table-striped'>";
            echo "<tr>";
                echo "<th>Mã sản phẩm</th>";
                echo "<th>Tên sản phẩm</th>";
                echo "<th>Thương hiệu</th>";
                echo "<th>Giá</th>";
                echo "<th>Hiển thị thông tin chi tiết</th>";
                echo "<th>Chỉnh sửa thông tin</th>";
                echo "<th>Xóa thông tin</th>";
            echo "</tr>";
        foreach($users as $user)
        {
            echo "<tr>";
                echo "<td>$user[0]</td>";
                echo "<td>$user[1]</td>";
                echo "<td>$user[2]</td>";
                echo "<td>$user[5]</td>";
                echo "<td><a href='read.php?id=". $user[0]."'><i class='fas fa-eye'></i></a></td>";
                echo "<td><a href='edit.php?id=". $user[0]."'><i class = 'fas fa-edit'></a></td>";
                echo "<td><a href='delete.php?id=". $user[0]."'><i class = 'fas fa-trash-alt'></a></td>";
            echo "</tr>";
        }
        echo "</table>";
        //4. Đóng kết nối
        mysqli_close($conn);
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>