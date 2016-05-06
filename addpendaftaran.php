
<?php
include "../koneksi.php";
if(isset($_POST) || !empty($_POST)){
    $nama_peserta           = ($_POST['nama_peserta']);
    $asal_kampus            = mysql_real_escape_string($_POST['asal_kampus']);
    $pendidikan_terakhir    = mysql_real_escape_string($_POST['pendidikan_terakhir']);
    $no_hp                  = mysql_real_escape_string($_POST['no_hp']);
    $email                  = mysql_real_escape_string($_POST['email']);
    $jenis_kelamin          = mysql_real_escape_string($_POST['jkl']);
    $jurusan                = mysql_real_escape_string($_POST['jurusan']);
    $ipk                    = mysql_real_escape_string($_POST['ipk']);
    $pengalaman_kerja       = mysql_real_escape_string($_POST['pengalaman_kerja']);

    $query = "INSERT INTO pendaftaran VALUES(id,'$nama_peserta','$asal_kampus','$pendidikan_terakhir','$no_hp','$email','$jenis_kelamin','$jurusan','$ipk','$pengalaman_kerja')";
        $sql = mysql_query ($query) or die (mysql_error());
        if($sql)
        {
            echo "berhasil";
        }
        else{
            echo "gagal melakukan pendaftaran";
        }
}
?>