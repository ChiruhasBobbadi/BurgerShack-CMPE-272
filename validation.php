<!doctype html>
<html lang="en">
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

    <title>BurgerShack Validation</title>


</head>
<body>

<!--todo-->
<?php //require "dbconnect.php" ?>
<?php
ob_start();
session_start();
if (isset($_POST["Login"]) && !empty($_POST["Username"]) && !empty($_POST["Password"])){
    $userfile = fopen("data/credentials.txt", "r");
    while(($line=fgets($userfile))!==false){
        $line = rtrim($line,"\r\n");
        $user = explode(",", $line);
        if ($_POST["Username"]==$user[0]  && $_POST["Password"]==$user[1]){
            $_SESSION["user"] = $_POST["Username"];
            fclose($userfile);
            header("location: ../BurgerShack/secure_section.php");
            exit;
        }else{
            header("location: ../BurgerShack/error.php");
        }
    }
}
else
{
    header("location: ../index.php");
}
?>


</body>
</html>









