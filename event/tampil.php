
	<?php 
		$query = "SELECT * FROM `event` WHERE date(now())<=end";
		$sql = mysql_query($query) or die( mysql_error());
		if (mysql_num_rows($sql)>=1) {
			while ($hasil=mysql_fetch_array($sql)) {
		?>
				<h2>Event</h2>
				<table class="table ">
					<tr>
						<td rowspan="2">Gambar</td>
						<td>
							<?php echo $hasil['event']; ?>
						</td>
					</tr>
					<tr>
						<td><a href="./pendaftaran/form_pendaftaran.php" class="label label-info" style="float: right;">Daftar</a></td>
					</tr>
				</table>
		<?php

			}
		}
		 ?>
