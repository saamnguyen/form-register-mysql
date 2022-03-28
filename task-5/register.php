<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css"/>
	<title>Register</title>
</head>
<body>
<form method="post" action="register.php" class="form">
	<h2>Đăng ký thành viên</h2> 
	Username:  <input type="text" name="username" value="" required />
	Password:  <input type="text" name="password" value="" required />
	Email:  <input type="text" name="email" value="" required />
	Phone:  <input type="text" name="phone" value="" required />
	<input type="submit" name="dangdy" value="Đăng ký">
	<?php require 'xuly.php';?>
</form>
</body>
</html>