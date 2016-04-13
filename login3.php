<?php
	session_start();
	include "koneksi.php";

	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	$cekuser  = mysql_query("SELECT * FROM admin WHERE username = '$username'");
	$hasil    = mysql_fetch_array($cekuser);

	if($password != $hasil['password'])
	{
		header('location:login5.php');
	}
	else{
		$_SESSION['username'] = $hasil['username'];
		header('location:menuadmin2.php');
	}


?>