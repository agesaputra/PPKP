
<?PHP
include "koneksi.php";

$id = mysql_real_escape_string($_GET['id']);
$nama = mysql_real_escape_string($_POST['nama']);
$jabatan = mysql_real_escape_string($_POST['jabatan']);
$email1 = mysql_real_escape_string($_POST['email1']);
$email2 = mysql_real_escape_string($_POST['email2']);

$query = "UPDATE anggota SET nama = '$nama', jabatan='$jabatan',email1='$email1', email2='$email2' WHERE md5(id)='$_GET[id]'";
	$sql = mysql_query ($query) or die (mysql_error());
	if ($sql) {
		echo "<script>alert('Data berhasil diupdate');
		document.location.href='anggota.php'</script>\n";
	} else {
		echo "<h2><font color=red>Data gagal ditambahkan</font></h2>";	
	}
?>
