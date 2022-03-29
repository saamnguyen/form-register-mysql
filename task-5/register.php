<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css"/>
	<title>Register</title>
	<style type="text/css">
		input[type=text], input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 5px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.form {
 width: 500px;
 border: 1px solid green;
 padding: 20px;
 margin: 0 auto;
 font-weight: 700px;
 overflow: hidden;
}
	</style>
</head>
<body>
<form method="post" action="register.php" class="form">
	<h2>Đăng ký thành viên</h2> 
	Username:  <input type="text" name="username" value="" required placeholder="Enter Username" />
	Password:  <input type="password" name="password" value="" required placeholder="Enter Password"/>
	Repeat Password:  <input type="password" name="repeatpassword" value="" required placeholder="Enter Repeat Password"/>
	Email:  <input type="text" name="email" value="" required placeholder="Enter Email"/>
	Phone:  <input type="text" name="phone" value="" required placeholder="Enter Phone"/>
	<input type="submit" name="dangdy" value="Đăng ký" class="btn" style="margin-top: 10px;">
	<?php require 'xuly.php';?>
</form>
</body>
</html>