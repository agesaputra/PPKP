<?php 



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

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.php">PPKPK</a>
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
    <div class="row">
        <form class="form" method="POST" enctype="multipart/form-data" action="anggota_simpan.php">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Tambah Anggota</strong></div>
                <div class="form-group">
                    <label for="judul">Nama</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="isi">Jabatan</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="judul">Email 1</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="email1" name="email1" placeholder="Email1" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="judul">Email 2</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="email2" name="email2" placeholder="Email2" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

				<input type="reset" name="Reset" id="reset" value="reset" class="btn btn-info pull-center">	
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-center">       
            </div>
        </form>
        <div class="col-lg-5 col-md-push-1">
            <div class="col-md-12">
            <?php
            if(isset($_GET['error']))
                {
                    echo '<div class="alert alert-danger"> <strong>';
                    if( $_GET['error']==1)
                    {
                        echo "Gambar harus berformat jpeg, png, bmp";
                    }else{
                        echo "Harap mengisi form dengan benar";
                    }
                    echo  '</strong></div>';
                }
            ?>
                

            </div>
             <div class="col-md-12">
                <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Periksan kembali data anda</strong>
                </div>
               
            </div>

 <div class="col-md-12">
                <div class="alert alert-success">
                    <a href="anggota.php" class="btn btn-success">Lihat Daftar Anggota</a>
                    <a href="anggota.php" class="btn btn-danger pull-right">Search Anggota</a>
                </div>
            </div>



        </div>
    </div>
</div>
</div>


                  
        <hr>         

       <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Age.Saputtra 2015</p>
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