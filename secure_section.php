<?php session_start();
        ob_start();
            if (!isset($_SESSION["user"])){
                header("location:index.php");
                die();
            }
        ?>
<!doctype html>
<html>
<!-- This website is built modifying styles and themes originally created by bootstrapmade-->

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">


        <link rel="shortcut icon" type="image/x-icon" href="favicon.png"/>

        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <title>BurgerShack</title>
    </head>
    <body>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" style="text-align: center;margin-top: 5em">Hello, <?php echo $_SESSION["user"]?>
            <br/>
            <p class="lead">Current website Admin Users are:</p>
            <br/>
        </div>
    </div>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" style="text-align: center;margin-top: 5em">
            <?php
            $userfile = fopen("data/credentials.txt", "r");
            $x = 1;
            while(($line=fgets($userfile))!==false){
                $user = explode(",", $line);
                echo '<p class="lead" style="font-weight:bold">'. $x++." ". $user[0] .'</p>';

            }
            fclose($userfile);
            ?>
        </div>

    </div>

    <div class="row" >
        <div class="col-3"></div>
        <div class="col-6" style="text-align: center;margin-top: 5em">
            <a class="link animated fadeInUp delay-1s servicelink" href="http://chiruhas.com/BurgerShack-CMPE-272/">Logout</a>
        </div>

    </div>


        

        
</body>
</html>