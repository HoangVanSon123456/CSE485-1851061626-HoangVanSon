<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <title>Existing Login Form a Flat Responsive Widget Template :: W3layouts</title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="resources/login/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="resources/login/css/style.css" type="text/css" media="all">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>
<body>
<?php
	//Gọi file connection.php ở bài trước
	include "database/connect.php";
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
			echo "Username or password mustn't be empty!";
		}
		else{
            $sql = "select * from user where username = '$username' and password = '$password'";
			$query = mysqli_query($conn,$sql);
			$users = mysqli_fetch_all($query);
			if (mysqli_num_rows($query) > 0) {
				$_SESSION['username'] = $username;
				if ($username =='Tu1602'){
					header('Location: adminpage/adminAbout.php');
				}
				elseif ($username == "Son1234" ){
					header('Location: adminpage/adminAbout.php');
				}
				else{
					header('Location: home.php');
				} 
			}	
			else{
				 echo "Username or password may be not correct!";
			}
		}
    }
?>
    <h1>EXISTING LOGIN FORM</h1>

    <div class="w3layoutscontaineragileits">
        <h2>Login here</h2>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="EMAIL" required="">
            <input type="password" name="password" placeholder="PASSWORD" required="">
            <div class="aitssendbuttonw3ls">
                <input type="submit" name="btn_submit" value="LOGIN">
                <div class="clear"></div>
            </div>
        </form>
    </div>
    <div class="w3footeragile">
        <p> &copy;Login Tu and Son</p>
    </div>


    <script type="text/javascript" src="resources/login/js/jquery-2.1.4.min.js"></script>

    <!-- pop-up-box-js-file -->
    <script src="resources/login/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!--//pop-up-box-js-file -->
    <script>
        $(document).ready(function() {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>

</body>
<!-- //Body -->

</html>