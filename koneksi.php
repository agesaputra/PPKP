<?php 
	//buat koneksi ke databasenya
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = 'ppkpk';

	mysql_connect($server, $username, $password) or die("gagal terkoneksi ke server");
	mysql_select_db($database) or die("gagal terkoneksi ke database");
 ?>