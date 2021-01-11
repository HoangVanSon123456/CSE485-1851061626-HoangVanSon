<html>
	<head>
		<title>kungfuphp - Form đăng ký thành viên</title>
	</head>
	<body>
		<?php
		require_once("config.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["password"];
 			$name = $_POST["name"];
            $email = $_POST["email"];
            $age = $_POST["age"];
            $phone = $_POST["phone"];
            $description = $_POST["description"];
            $image = $_POST["image"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
              if ($username == "" || $password == "" || $name == "" || $email == ""  || $age == ""
               || $phone == "" || $description == "" || $image == "") {
                   echo "bạn vui lòng nhập đầy đủ thông tin";
                   $password = md5($password);
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from user where username='$username'";
					$kt=mysqli_query($link, $sql);
					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO user(
	    					username,
	    					password,
	    					name,
						    email,
                            age,
                            phone,
                            description,
                            image
	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$name',
	    					'$email',
                            '$age',
                            '$phone',
                            '$description',
                            '$image'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($link,$sql);
                           echo "chúc mừng bạn đã đăng ký thành công";
                           header('Location: home.php');
					}
									    
					
			  }
	}
	?>
	<form action="register.php" method="post">
		<table>
			<tr>
				<td colspan="2">Form dang ky</td>
			</tr>	
			<tr>
				<td>Username :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" id="password" name="password"></td>
			</tr>
			<tr>
				<td>Ho Ten :</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
            <tr>
				<td>Age :</td>
				<td><input type="text" id="age" name="age"></td>
			</tr>
            <tr>
				<td>Phone :</td>
				<td><input type="text" id="phone" name="phone"></td>
			</tr>
            <tr>
				<td>Description :</td>
				<td><input type="text" id="description" name="description"></td>
			</tr>
            <tr>
				<td>Image :</td>
				<td><input type="text" id="image" name="image"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Dang ky"></td>
			</tr>

		</table>

	</form>
	</body>
	</html>