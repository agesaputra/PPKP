<?php 
include "koneksi.php";
$results = mysql_query("SELECT COUNT(id) FROM anggota");
$get_total_rows = mysql_fetch_array($results); //total records

$item_per_page=5;

$pages = ceil($get_total_rows[0]/$item_per_page);
  $pagination = '';
if($pages > 1)
{

  $pagination .= '<ul class="paginate">';
  for($i = 1; $i<=$pages; $i++)
  {
    $pagination .= '<li><a href="#" class="paginate_click" id="'.$i.'-page_anggota">'.$i.'</a></li>';
  }
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
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $("#results").load("page_anggota.php", {'page_anggota':0}, function() {$("#1-page_anggota").addClass('active');});  //Perintah untuk memuat link halaman
      
      $(".paginate_click").click(function (e) {
        
        $("#results").prepend('');
        
        var clicked_id = $(this).attr("id").split("-"); //Jika element link halaman di klik, di gunakan split() (seperti explode PHP) untuk memisahkan karakter berdasarkan tanda "-".
        var page_num = parseInt(clicked_id[0]); //clicked_id[0] mengambil karakter pertama sebelum tanda "-" 
        
        $('.paginate_click').removeClass('active'); //Mencabut semua class active
        
            //file isi.php akan dimuat berdasarkan halaman yang diminta
            //catatan (page_num-1), untuk mendapatkan posisi datanya
        $("#results").load("page_anggota.php", {'page_anggota':(page_num-1)}, function(){

        });

        $(this).addClass('active'); //menambahkan class active pada link yang di klik
        
        return false;
      }); 
    });
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/edit_book.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="index.php">Perpustakaan Ceria</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
           
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>








<div class="container">
    <div class="row col-md-14 col-md-offset-0 custyle">
    <?php
      if(isset($_GET['succes']))
                {
                    if( $_GET['succes']==1)
                    {
                        echo '<div class="alert alert-success"> <strong>';
                        echo "Data berhasil disimpan";
                        echo  '</strong></div>';
                    }else{
                        echo '<div class="alert alert-danger"> <strong>';
                        echo "Data gagal disimpan";
                        echo  '</strong></div>';
                    }
                    
                }
            
    ?>
    
    <a href="add_anggota.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Tambah Anggota</a>
     
        
    <div id="results"></div>
    <?php echo $pagination; ?>
    </table>

    </div>
</div>



  <hr>         

       <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Age.Saputra 2015</p>
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