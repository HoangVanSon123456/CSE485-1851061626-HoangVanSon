<?php
session_start();
?>
<html>
<head>
	<title>Trang đăng nhập</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	//Gọi file connection.php ở bài trước
	require_once("config.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection	
		$username = addslashes($username);
		$password = addslashes($password);
		if ($username == "" || $password == "") {
			echo "username hoặc password bạn không được để trống!";
		}else{
            $sql = "select * from user where username = '$username' and password = '$password'";
            $query = mysqli_query($link,$sql);
			if (mysqli_num_rows($query) > 0) {
                $_SESSION['username'] = $username;
                header('Location: home.php');
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				 echo "tên đăng nhập hoặc mật khẩu không đúng !";
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			}
		}
	}
?>
	<form method="POST" action="login.php">
	<fieldset>
	    <legend>Đăng nhập</legend>
	    	<table>
	    		<tr>
	    			<td>Username</td>
	    			<td><input type="text" name="username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="right"> <input name="btn_submit" type="submit" value="Đăng nhập"></td>
					<button class="btn">
					<span class="badge badge-primary"><a href= "register.php">Đăng Ký</a></span>
					</button>
	    		</tr>
	    	</table>
  </fieldset>
  </form>
</body>
</html>