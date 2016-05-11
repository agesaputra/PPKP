
	<h2>Event</h2>
		
<a href="event" class="btn btn-primary btn-xs "><b>+</b> Tambah Event</a>
<table class="table table-striped custab">
    <thead>
    
     
        <tr>
           <th>Event</th>
           <th class="text-center">Action</th>
        </tr>

    </thead>
<?php
	
	$hsl = mysql_query("SELECT * FROM `event`");
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

		<td>
			<?php echo $brs['event']; ?>
		</td>
		



		<td class="text-center">
		<a class='btn btn-info btn-xs' href="event/editevent.php?id=<?php echo $brs['0'];?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
		<a id="tombol" href="delete_content.php?id=<?php echo $brs['0'];?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin menghapus berita ini')"><span class="glyphicon glyphicon-remove"></span> Del</a></td>


	</tr>
<?php
	}
?>
</table>