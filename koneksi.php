<?php
$host = "localhost";
$user = "root";
$name = "ppkpk";
$pass ="";
$conn = mysql_connect('localhost','root',''); 

if ($conn) {
	$buka = mysql_select_db ($name);
	if (!$buka) {
		die ("Database tidak dapat dibuka");	
	}
} else {
	die ("Server MySQL tidak terhubung");	
}


    
?>