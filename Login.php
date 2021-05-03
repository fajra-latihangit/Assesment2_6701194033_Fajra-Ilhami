<?php include_once 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>	
		<link rel="stylesheet" type="text/css" href="stylecss.css">
</head>
<body>
	<div class="loginbox">
		<img src="avatar.png" class="avatar">
			<h1>Login Here</h1> 
		<form method="post" action="home.php">
			<p>Username</p>
			<input type="text" name="" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="" placeholder="Enter Password">
			<input type="submit" name="" value="Login">
			
			<a href="regist.php">Don't have an account?</a>
		</form>
	</dir>
</body>
</html>