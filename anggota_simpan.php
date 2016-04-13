<?PHP
include "koneksi.php";
if(isset($_POST)){
	$nama = mysql_real_escape_string($_POST['nama']) ;
	$jabatan = mysql_real_escape_string($_POST['jabatan']) ;
	$email1 = mysql_real_escape_string($_POST['email1']) ;
	$email2 = mysql_real_escape_string($_POST['email2']) ;		
	if(empty($nama))
	{
		header("Location:add_anggota.php?error=1");
	}elseif (empty($jabatan)) {
		header("Location:add_anggota.php?error=2");
	}elseif (empty($email1)) {
		header("Location:add_anggota.php?error=3");
	}elseif (empty($email2)) {
		header("Location:add_anggota.php?error=4");
	}
	else
	{
		$query = "INSERT INTO anggota VALUES(id,'$nama','$jabatan','$email1','$email2')";
			$sql = mysql_query ($query) or die (mysql_error());
			if ($sql) {
				echo "<script>alert('Data berhasil diupdate')";
				header("Location:anggota.php");
			} else {
				header("Location:anggota.php");
			}

		}
	}
else
{
	header('Location:anggota.php');
}
?>

