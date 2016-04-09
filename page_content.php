<?php
	include'koneksi.php';
	$item_per_page=5;

	if (!isset($_POST['page']) || !isset($_POST['panjang'])) {
		echo $_POST['page']."<br>";
		echo $_POST['panjang'];
	}else{
		$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
		$page_number=$page_number-1;
		$panjang=mysql_real_escape_string($_POST['panjang']);
	
		if(!is_numeric($page_number)){die('Invalid page number!');}
		$position = ($page_number * $item_per_page);
		$hsl = mysql_query("SELECT * from content ORDER BY id DESC LIMIT $position, $item_per_page");
	        $i=0;
	        while($sql = mysql_fetch_array($hsl)){
?>
				<div class="col-sm-12">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo $sql['judul']; ?></b></h3>
						</div>
						<div class="panel-body">
							<img src="news_image/<?php echo $sql['gambar'];?>" class="img-responsive img-rounded" style="float:left; width:50px; :50px; margin:10px;">
							<br>
							<?php echo substr($sql['isi'],0,$panjang)." ..."; ?>
							<br><br><br>
					        <a href="#" onclick="return false"><button class="btn btn-primary btn-xs"  id="<?php echo $sql['id'];?>" style="float:right" onClick="open_news(this)"> Read more >>></button></a>
						</div>
					</div>
				</div>
<?php 
			}
		}
?>