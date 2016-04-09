<?php 
	include 'koneksi.php';

	$id=$_POST['id'];
	$query="SELECT * FROM content WHERE id='$id'";

	$result=mysql_query($query) or die(mysql_error());

	if(mysql_num_rows($result)==1){
		while ($hsl=mysql_fetch_array($result)) {
?>
			<h1><?php echo $hsl['judul']; ?></h1>
			<img src="news_image/<?php echo $hsl['gambar'];?>" class="img-responsive img-rounded">
			<br>
			<p><?php echo $hsl['isi']; ?> </p>
			<a href="#" onclick="return false"><button class="btn btn-info"   style="float:right" onclick="back(this,70)"> <b><<</b> Back</button></a>
<?php  
		}
	}
?>