<?PHP
include "../koneksi.php";

	$event=$_POST['event'];
	$mulai=$_POST['mulai'];
	$selesai=$_POST['selesai'];

	$query = "INSERT INTO event VALUES(id,'$event','$mulai','$selesai')";
	$sql = mysql_query ($query) or die (mysql_error());
	if ($sql) {
		header("Location:../admin.php?halaman=job");
	} else {
		echo "gagal";	
	}
	?>

		

