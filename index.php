<?php 
include "koneksi.php";
$results = mysql_query("SELECT COUNT(id) FROM CONTENT");
$total = mysql_fetch_array($results); //total records

$item_per_page=5;

$pages = ceil($total[0]/$item_per_page);
  $pagination = '';
if($pages > 1)
{

  $pagination .= '<ul class="pagination">';
  $pagination .= '<li  onClick="next(0,70)"><a href="#" onClick="return false">&laquo;</a></li>';
  for($i = 1; $i<=$pages; $i++)
  {
    $pagination .= '<li  class="paginate_click page" id="'.$i.'" onClick="ajax(this,70,1,'.$total[0].')"><a href="#">'.$i.'</a></li>';
  }
  $pages=''.$pages-1;
  $pagination .= '<li  onClick="next('.$pages.',70)"><a href="#" onClick="return false">&raquo;</a></li>';
  $pagination .= '</ul>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap1.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/kecil.css" rel="stylesheet"><!--CSS buat loading tanpa ini, gk ada animasi-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script src="js/ajax.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $("#results").load("page_content.php", {'page':(1),'panjang':('70')}, function() {$("#1").addClass('active');});  //Perintah untuk memuat link halaman
      $("#isi_news").hide();
      <?php 
        echo 'var total ='.$total[0].';';
      ?>

      for (var i = 1; i <= total; i++) {
            $('#' + i).hide();
        }

        for (var i = 1; i <= 2; i++) {
            var j = 1 + i
            $('#' + j).show();
            j = 1 - i
            $('#' + j).show();
        }
      $("#1").show();

      $('.cssload-box-loading').hide();
      $(".paginate_click").click(function (e) {
        return false;
      });
    });
    </script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#">PPKPK</a>   
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                     <li>
                        <a href="add_book_form.php">add_book</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
 <div id="carousel-example-generic" class="carousel slide" align="center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="image/cast-harry-potter-5-order-phoenix-hp5-1280x1024.jpg" alt="image can't be load">
      <div class="carousel-caption">
       
      </div>
    </div>
    <div class="item">
      <img src="image/cast-harry-potter-5-order-phoenix-hp5-1280x1024.jpg" alt="">
      <div class="carousel-caption">
      
      </div>
    </div>
	<div class="item">
      <img src="image/cast-harry-potter-5-order-phoenix-hp5-1280x1024.jpg" alt="">
      <div class="carousel-caption">
       
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="container">

        <div class="row">
			<div class="col-md-3">
        <div class="thumbnail" style="pad-bottom:50px;">
            <div class="container-fluid">
                <h1 class="judul">News</h1>
                <div class="kiri">
                    <?php include 'page/right.php' ?>
                   </div>
            </div>
        </div>

                
            </div>
            <div class="col-md-6" >
            	<div class="thumbnail" style="pad-bottom:50px;">
                    <div class="container-fluid">
                        <h1 class="judul">News</h1>
                        <div id="results">
                        </div>
                        <div class="cssload-box-loading berita">
                        </div>
                        <div id="isi_news">
                        </div>
                        <br>
                        <br>
                        <br>
                        <!--^ Di atas ini jangan di isi apa". ini animasi bakalan muncul kalo internet super lola dan bakal ngilang kalo ajaxnya sudah di load semua  -->
                        <span style="float:right;">

                        <?php echo $pagination; ?>
                        </span>
                    </div>
                </div>
                    
                    <br>
                </div>
            <div class="col-md-3" style="float:right;">
            	<div class="thumbnail"><h1>Calendar</h1><br><br>
                </div>
                <div class="thumbnail container-fluid"><h1>Enterprise</h1><br><br>
                	<div class="col-sm-12"  style="text-align:center">
                    	<img src="image/20090305_anycall41.jpg" class="img-rounded" height="64px">
                        <img src="image/759968163.jpg" class="img-rounded" height="64px">
                        <img src="image/20090305_anycall41.jpg" class="img-rounded" height="64px">
                        <img src="image/woothemes-icon.png" class="img-rounded" height="64px">
                        <img src="image/EstiKinasih-JinggaDanSenja.jpg" class="img-rounded" height="64px">
                        <img src="image/cast-harry-potter-5-order-phoenix-hp5-1280x1024.jpg" class="img-rounded" height="64px">
                    </div>
                    
                </div>
            </div>
            
            <div class="col-lg-12">
                <h1 class="page-header">Book Gallery</h1>   
            </div>

           
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <div class="clock" style="margin:2em;"></div>
						
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
