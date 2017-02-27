<?php

session_start();

$pass = $_POST['pass'];

$pass = strtolower($pass);
$pass = trim($pass, " \t\n\r\0\x0B");

if($pass == "justin guarino" || $pass == "andrea austin" || $pass == "justinguarino" || $pass == "andreaaustin" || $pass == "andrea guarino" || $pass == "andreaguarino")
{
	$_SESSION["hasAuthed"] = "true";
	include("main.php");
}
else
{
	if(isset($_POST))
	{ ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Justin Guarino, adapted from template by Prime Design" />
        <title>northbayweddingday.com</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <!-- Stlylesheet -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/no-ui-slider/jquery.nouislider.css" type="text/css" />
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
        <!-- Skin Color -->
        <link rel="stylesheet" href="css/colors/blue.css" id="color-skins" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body class="landing-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 well ">
                    <div class="row fade">
                        <img src="img/logo/logo-md.png" class="img-responsive center-block">
                    </div>
                    <div class="row fade">
                        <form class="col-md-12" method="POST" action="index.php">
                            <div class="row">
                                <p class="text-center">Please enter the full (first and last) name of either the bride or groom:</p>
                            </div>
                            <div class="row">
                                <input class="center-block" type="text" name="pass">
                            </div>
                            <div class="row">
                                   <input class="center-block" type="submit" name="submit" value="Go">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>

    </html>
    <?php }
}

?>
