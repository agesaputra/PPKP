<?php
	$page_number=1;
	if (isset($_POST['page']) ) {
		$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
		include'../koneksi.php';
	}
		$results = mysql_query("SELECT COUNT(id) FROM CONTENT");
		$total = mysql_fetch_array($results); //total records

		$item_per_page=5;

		$pages = ceil($total[0]/$item_per_page);





	$item_per_page=5;
	
	
	$page_number=$page_number-1;

	if(!is_numeric($page_number)){die('Invalid page number!');}
	$position = ($page_number * $item_per_page);
	$hsl = mysql_query("SELECT * from content ORDER BY id DESC LIMIT $position, $item_per_page") or die(mysql_error());
	 echo '<div class="list-group">';
    while($sql = mysql_fetch_array($hsl)){
?>
				
		<a href="#" id="<?php echo $sql['id'];?>" onClick="return open_news(this,this)" class="list-group-item">
	    <h4 class="list-group-item-heading"><?php echo $sql['judul']; ?></h4>
		</a>	
				
<?php 
			}
			echo '</div>';
			
			
			$page_number=$page_number+1;
			if($page_number<$pages){
				$next='<li class="next" onclick="return maju('.$page_number.')"><div class="btn btn-default">Newer &rarr;</div></li>';
			}else{
				$next='<li class="next disabled" onclick="return false"><div class="btn btn-default disabled">Newer &rarr;</div></li>';
			}

			if($page_number>1){
				$prev='<li class="previous" onclick="return mundur('.$page_number.')"><div class="btn btn-default">&larr; Older</div></li>';
			}else{
				$prev='<li class="previous disabled" onclick="return false"><div class="btn btn-default disabled">&larr; Older</div></li>';
			}

?>
	<ul class="pager">
		 <?php echo $prev; ?>
		 <?php echo $next; ?>
	</ul>