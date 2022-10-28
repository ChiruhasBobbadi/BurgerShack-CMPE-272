<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="/BurgerShack-CMPE-272/favicon.png"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <link href="/BurgerShack-CMPE-272/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add User Section</title>
</head>
<body>


<?php require "nav2.php"?>

<div class="row">
    <div class="col-4"></div>
    <div class="col-4"><div class="container">
            <center><h1>Enter the following details</h1></center>
            <form action="/BurgerShack-CMPE-272/add.php" method="post">
                <input type="text" name="firstname" class="form-control"  placeholder="Enter First Name" required>
                <br>
                <br>
                <input type="text" name="lastname" class="form-control"  placeholder="Enter last Name" required>
                <br>
                <br>
                <input type="text" name="email" class="form-control"  placeholder="Enter email" required>
                <br>
                <br>
                <input type="text" name="cellphone" class="form-control"  placeholder="Enter cell phone" required>
                <br>
                <br>
                <input type="text" name="homephone" class="form-control"  placeholder="Enter home phone" required>
                <br>
                <br>
                <input type="text" name="homeaddress" class="form-control"  placeholder="Enter home address" required>
                <br>
                <center><input type="submit" class="btn btn-primary login" name="search"></center>
            </form>
        </div></div>
    <div class="col-4"></div>
</div>









</body>
</html>

