<?php
//Dang nhap
session_start();

header('Content-Type: text/html; charset=UTF-8');

if(isset($_POST['dangnhap'])){

	include('connect.php');

	$username = addslashes($_POST['username']);
	$password = addslashes($_POST['password']);




	// $password = md5($password);

	$query = "SELECT * FROM member WHERE username='$username'";

	$result = mysqli_query($connect, $query) or die( mysqli_error($connect));

	if(!$result){
		echo "Ten dang nhap khong dung hoac mat khau khong dung";
		exit();
	}

	$row = mysqli_fetch_array($result);

	if($password != $row['password']){
		echo "Mat khau khong dung";
		exit();
	}else{
		echo '<script language="javascript">alert("Dang nhap thanh cong"); </script>';
		echo "<script>console.log('Objects: " .json_encode($row) . "' );</script>";
	}

	$_SESSION['username'] = $username;
	echo "Xin chao <b>" .$username. "</b>. Ban da dang nhap thanh cong";
	session_commit();
	header('Location: index.php');
	die();

	$connect->close();

}
?>