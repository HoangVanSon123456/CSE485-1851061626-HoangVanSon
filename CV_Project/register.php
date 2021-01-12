<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="UTF-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register page</title>
	</head>
	<body>
		<?php
		include "database/connect.php";
		if (isset($_POST["btn_submit"])) {
			//lấy thông tin từ các form bằng phương thức POST
			$name = $_POST["name"];
			$age = $_POST["age"];
			$sex = $_POST["sex"];
			$email = $_POST["email"]; 
  			$username = $_POST["username"];
			$password = $_POST["pass"];
			$carrer = $_POST["carrer"]; 
            $phone = $_POST["phone"];
            $description = $_POST["description"];
            $image = $_POST["image"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
              if ($name==""|| $age=="" ||$sex=="" || $email == ""|| $username == "" || $password == ""|| $carrer == ""
               || $phone == "" || $description == "") {
                   echo "bạn vui lòng nhập đầy đủ thông tin";
                   $password = md5($password);
			  }
			  else
			  {
  					// Kiểm tra tài khoản đã tồn tại chưa
  				$sql="select * from personal_information where Username='$username'";
				$kt=mysqli_query($conn, $sql);
				if(mysqli_num_rows($kt)  > 0){
					echo "Tài khoản đã tồn tại";
				}
				else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql1 = "INSERT INTO personal_information(
	    					Name,
							Age,
							Sex,
							Email,
							Username,
	    					Pass,
	    					Carrer,
                            Phone,
                            Description,
                            Image
	    					) VALUES (
							'$name',
							'$age',
							'$sex',
							'$email',
	    					'$username',
	    					'$password',
						    '$carrer',
	    					'$phone',
                            '$description',
                            '$image'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
						   
						mysqli_query($conn,$sql1);
                        echo "chúc mừng bạn đã đăng ký thành công";
                      	header('Location: login.php');
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
				<td>Name:</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td><input type="text" id="age" name="age"></td>
			</tr>
			<tr>
				<td>Sex:</td>
				<td><input type="text" id="sex" name="sex"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>	
			<tr>
				<td>Username :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" id="password" name="pass"></td>
			</tr>
			<tr>
				<td>Carrer :</td>
				<td><input type="text" id="carrer" name="carrer"></td>
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