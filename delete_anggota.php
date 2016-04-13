
<?PHP
include "koneksi.php";

$id = mysql_real_escape_string($_GET['id']);


$query="DELETE FROM anggota WHERE md5(id) ='$id'";
	$sql = mysql_query ($query) or die (mysql_error());
	if ($sql) {
		echo "<script>alert('Data berhasil dihapus');
		document.location.href='anggota.php'</script>\n";
	} else {
		echo "<h2><font color=red>Data gagal dihapus</font></h2>";	
	}
?>
