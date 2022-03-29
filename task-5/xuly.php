<?php 
header('Content-Type: text/html; charset=utf-8');

$conn = new mysqli('127.0.0.1:3306', 'root', '', 'data1') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

if(isset($_POST['dangdy'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$repeatpassword = trim($_POST['repeatpassword']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);

	if(empty($username)){
		array_push($errors, "Username is required");
	}
	if(empty($password)){
		array_push($errors, "Username is required");
	}
	if(empty($repeatpassword)){
		array_push($errors, "Username is required");
	}
	if(empty($email)){
		array_push($errors, "Username is required");
	}
	if(empty($phone)){
		array_push($errors, "Username is required");
	}

	$sql = "SELECT * FROM member WHERE username = '$username' OR email = '$email'";

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

		die();
	}else{
		$sql = "INSERT INTO member (username, password, repassword, phone, email) VALUES ('$username','$password', '$repeatpassword','$phone','$email')";
		#echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';
		

		if(mysqli_query($conn, $sql)){
			echo "Tên đăng nhập: ".$_POST['username']."<br/>";
			echo "Mật khẩu: " .$_POST['password']."<br/>";
			echo "Email đăng nhập: ".$_POST['email']."<br/>";
			echo "Số điện thoại: ".$_POST['phone']."<br/>";
			echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';
		}else{
			echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
		}
	}
}

?>