<?php include_once('functions.php'); 
session_start();

    if(!isset($_SESSION['username']))
    {
        $mimin="Login";
    }
    else{
        $mimin="Admin";
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calendar Event</title>
<link type="text/css" rel="stylesheet" href="css/style_calendar.css"/>
<link href="css/New folder (3)/bootstrap.min.css" rel="stylesheet">
<link href="css/New folder (3)/bootstrap1.min.css" rel="stylesheet">

<script src="js/jquery_calendar.min.js"></script>
</head>
<body>
<div id="nav">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.php"><b>PPKPK</b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    </li>
                    <li>
                        <a href="home.php">News</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="calendar.php">Calendar Event</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                        <a href ="admin.php"> <?php echo $mimin; ?> </a>
                  </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    </div>
<div id="calendar_div">
	<?php echo getCalender(); ?>
</div>

</body>
</html>
