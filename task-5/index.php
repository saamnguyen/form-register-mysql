

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang chu</title>
</head>
<body>
	<h1>Vulnerability: SQL Injection</h1>
	<form method="post" action="index.php">
		<label for="text">User ID:</label>
		<input type="text" name="text" placeholder="Enter" required>
		<input type="submit" name="find" value="Find">
	</form>
	<?php require 'xuly2.php'; ?>
</body>
</html>