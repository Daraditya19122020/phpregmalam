<?php 
session_start();

	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagaluser"){
			echo "<SCRIPT>alert('Username dan Password tidak sesuai !');window.location='login.php'</SCRIPT>";
		}else if($_GET['pesan']=="gagalaktif"){
			echo "<SCRIPT>alert('User tidak aktif !');window.location='login.php'</SCRIPT>";
		}
	}
?>
<html>
<head>
	<title>Form Login</title>
</head>
<body> 
	<center>
	<table border="0">
	<form action="cek1.php" method="POST" >
	<h1>Login</h1>
		<tr><td>Username :<input type="text" name="username"></tr></td>
		<tr><td>Password :<input type="password" name="password"></tr></td>
		<tr><td><colspan="2""align="left"><input type="submit" value="login"></td></tr>
		</form>
		</table>
		</center>
</body>
</html>