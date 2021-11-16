<?php
include"koneksi.php";
session_start();
	
$username=$_POST['username'];
$password= md5($_POST['password']);

//echo $user,$pass;

$sql=mysqli_query($koneksi, "select * from admin where username ='$username' 
			      and password ='$password' ");
$cek=mysqli_num_rows($sql);

//cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($sql);
	if($data['status']=="1"){
		// cek jika user login sebagai admin
		if($data['level']=="admin"){
 
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			// alihkan ke halaman dashboard admin
			header("location:intro.php");
 
		// cek jika user login sebagai host
		}else if($data['level']=="host"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "host";
			// alihkan ke halaman dashboard host
			header("location:intro.php");
 	
		}else{
 
			// alihkan ke halaman login kembali
			header("location:login.php?pesan=gagaluser");
		}	
	}else{
		header("location:login.php?pesan=gagaluser");
	}
}else{
 
	// alihkan ke halaman login kembali
	header("location:login.php?pesan=gagaluser");
}