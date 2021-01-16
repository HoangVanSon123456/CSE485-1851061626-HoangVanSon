<?php
if (isset($_SESSION['id']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: login.php');
}else {
	if (isset($_SESSION['role']) == true) {
		// Ngược lại nếu đã đăng nhập
		$role = $_SESSION['role'];
		// Kiểm tra quyền của người đó có phải là admin hay không
		if ($role == '0') {
			// Nếu không phải admin thì xuất thông báo
			echo "Bạn không đủ quyền truy cập vào trang này<br>";
			echo "<a href='home.php'> Click để về lại trang chủ</a>";
			exit();
		}
	}
}
?>