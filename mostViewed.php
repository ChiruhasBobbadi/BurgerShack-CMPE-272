
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


    <title>Most Viewed items</title>
    <?php ob_start(); ?>
</head>
<body>

<?php require "nav2.php"?>

<?php
require "dbconnect.php";

$sql = "SELECT * FROM products order by count desc ";

$result = $conn->query($sql);

if (mysqli_num_rows($result) === 0) {

    echo "<center><h1 class='lead'> No records found </h1></center>";
} else {

    while ($row = $result->fetch_assoc()) {
        echo "
<br>
             <div class='portfolioContainer'>
            <div class='row'>
                <div class='col-3'></div>
                <div class='col-6' style='background-color:#e3e3e3;border-radius: 5px 5px;padding:5px'>
                       <div class='container'>
                                <p class='h2' style='color: black'>{$row['name']}</p>
                         <div class='row'>
                             <div class='col-6'>
                                 <p class='lead' style='text-align: left;color: black'>calories : {$row['calories']}</p>
                             </div>
                             <div class='col-6'>
                                 <p class='h8' style='text-align: right'>Views :{$row['count']}</p>
                             </div>
                         </div>

                       </div>
                </div>
            </div>
    </div>
    <br>
                          
                        
                      
    ";
    }

}

?>





</body>
</html>








