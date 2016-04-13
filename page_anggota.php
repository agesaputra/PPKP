<table class="table table-striped custab">
    <thead>
    
     
        <tr>
           <th>Id</th>
           <th>Nama</th>
           <th>Jabatan</th>
           <th>Email 1</th>
           <th>Email 2</th>
           <th class="text-center">Action</th>
        </tr>

    </thead>
<?php
	include'koneksi.php';
	$item_per_page=5;

	$page_number = filter_var($_POST["page_anggota"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	if(!is_numeric($page_number)){die('Invalid page number!');}
	$position = ($page_number * $item_per_page);
	$hsl = mysql_query("SELECT md5(id),nama,jabatan,email1,email2 from anggota ORDER BY id ASC LIMIT $position, $item_per_page");
        $i=0;
        while($brs = mysql_fetch_array($hsl)){
          $i++;

	// echo '<ul class="page_result">';
	// while($row = mysqli_fetch_array($results))
	// {
	// 	echo '<li id="item_'.$row["id"].'">'.$row["id"].'. <span class="page_name">'.$row["name"].'</span><span class="page_message">'.$row["message"].'</span></li>';
	// }
	// echo '</ul>';

?>
	<tr class="page_result">

		<td><?php echo $i ?></td>
		<td><?php echo $brs['nama']; ?></td>
		<td><?php echo $brs['jabatan']; ?></td>
		<td><?php echo $brs['email1']; ?></td>
		<td><?php echo $brs['email2']; ?></td>


		<td class="text-center">
		<a class='btn btn-info btn-xs' href="edit_anggota.php?id=<?php echo $brs['0'];?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
		<a id="tombol" href="delete_anggota.php?id=<?php echo $brs['0'];?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin menghapus anggota ini')"><span class="glyphicon glyphicon-remove"></span> Del</a></td>


	</tr>
<?php
	}
?>
</table>