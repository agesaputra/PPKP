<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Event</title>
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/form_pendaftaran.css">

		<script src="kalender/lib/jquery.min.js"></script>
		<script src="kalender/lib/zebra_datepicker.js"></script>
		<link rel="stylesheet" href="kalender/lib/css/default.css" />
		<script>
	    	$(document).ready(function(){
	        	$('.tanggal').Zebra_DatePicker({
	            	format: 'Y-F-d',
	            	months : ['01','02','03','04','05','06','07','08','09','10','11','12'],
	            	days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
	            	days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
	        	});
	    	});
		</script>
	</head>

		<header>
			<h1 style="text-align : center ">Daftar Event</h1>
		</header>
<div class="main-content">
	<body>
		<form class="form-labels-on-top" method="POST" enctype="multipart/form-data" action="event_simpan.php">
			<div class="form-title-row">
                <h1>Form Pendaftaran Event</h1>
            </div>

            <div class="form-row">
            	<input type="text" name="event" placeholder="Judul Event">	
            </div>
			
			<div class="form-row">
				<input type="text" name="mulai" class="tanggal" />
			</div>
			<div class="form-row">
				<input type="text" name="selesai" class="tanggal" />
			</div>
			<div class="form-row">
				<input type="file" name="gambar">
			</div>
			
			<button type="submit">Create</button>
    		</form>
	</body>
</div>
</html>