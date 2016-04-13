<?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        header('location:login4.php');
    }
    else{
        $username = $_SESSION['username'];    
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menu Admin PPKPK</title>

        <!-- CSS -->
         <link href="../bootstrap1/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../bootstrap1/css/modern-business.css" rel="stylesheet">

        <!-- Custom Fonts -->
    
        <link href="../bootstrap1/css/style.css" rel="stylesheet">
        <link href="../bootstrap1/css/form-elements.css" rel="stylesheet">
       

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>



    <body>

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Admin PPKPK</h3>
                                </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                            </div>
                                <div class="form-bottom">
                                    <form>
                                        <a href = "register2.php">Buat Admin baru</br>
                                        <a href = ""> Ubah Password </br>
                                        <button class = "karyawan"> Manage Karyawan  </button> </br>
                                        <button class = "content">  Manage Content  </button> 
                                    </form>
                                    <a href="logout.php"><button class="btnbatal">Logout</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="../bootstrap1/js/bootstrap.min.js"></script>
        <script src="../bootstrap1/js/jquery.backstretch.min.js"></script>
        <script src="../bootstrap1/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>