<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="//BurgerShack-CMPE-272/favicon.png"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <link href="/BurgerShack-CMPE-272/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>User Section</title>
    <?php ob_start(); ?>
</head>
<body>


<?php require "dbconnect.php" ?>
<?php require "nav2.php"?>

<br>
<br>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="container">
            <center><h1>Enter Search Criteria</h1></center>
            <form action="/BurgerShack-CMPE-272/search.php" method="post">
                <input type="text" name="name" class="form-control"  placeholder="Enter Name">
                <br>
                <center>OR</center>
                <br>
                <input type="text" name="email" class="form-control"  placeholder="Enter email">
                <br>
                <center>OR</center>
                <br>
                <input type="text" name="phone" class="form-control"  placeholder="Enter phone">
                <br>
                <center><input type="submit" class="btn btn-primary login" name="search"></center>
            </form>
        </div></div>
    <div class="col-4"></div>
</div>


<section class="main-section alabaster" id="users">
    <div class="container fullsize">
        <table align = center>
            <tr>

                <td class="tableheader"><strong>First Name</strong></td>
                <td class="tableheader"><strong>Last Name</strong></td>
                <td class="tableheader"><strong>Email</strong></td>
                <td class="tableheader"><strong>Home Address</strong></td>
                <td class="tableheader"><strong>Home Phone</strong></td>
                <td class="tableheader"><strong>Cell Phone</strong></td>

            </tr>
            <?php
            if(isset($_POST["search"])){
                $sql = "SELECT * FROM users WHERE";
                if(isset($_POST["name"]) and $_POST["name"]!=""){
                    $sql=$sql." firstname LIKE '%".$_POST["name"]."%' OR lastname LIKE '%".$_POST["name"]."%'";
                }
                else{
                    $sql=$sql." firstname = '' OR lastname= ''";
                }
                if(isset($_POST["email"]) and $_POST["email"] != "" ){
                    $sql=$sql."OR email LIKE '%".$_POST["email"]."%'";
                }
                if(isset($_POST["phone"]) and $_POST["phone"] != ""){
                    $sql=$sql."OR homephone LIKE'%".$_POST["phone"]."%' OR cellphone LIKE '%".$_POST["phone"]."%';";
                }

                $result = $conn->query($sql);


                if (mysqli_num_rows($result) === 0) {

                    echo "<center><h1 class='lead'> No records found </h1></center>";
                } else {
                    while($row = $result -> fetch_assoc()){
                        echo "<tr>";
                        echo "<td>";
                        echo $row["firstname"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["lastname"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["email"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["homeaddress"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["homephone"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["cellphone"];
                        echo "</td>";
                        echo "</tr>";
                    }
                }

            }





            ?>
        </table>

    </div>
</section>









</body>
</html>

