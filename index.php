<!doctype html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="favicon.png"/>


    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>

    <title>BurgerShack</title>
    <?php ob_start(); ?>
</head>
<body>

<!--todo-->
<?php require "dbconnect.php" ?>
<?php require "navbar.php" ?>
<?php require "home.php" ?>
<?php require "about.php" ?>
<?php require "recents.php"?>
<?php require "menu.php" ?>
<?php require "news.php" ?>
<?php require "users.php" ?>



<section class="main-section alabaster" id="users">
    <div class="container fullsize">
        <center><h1>Users</h1></center>
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
            }

            else{
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
            }



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


            ?>
        </table>



    </div>
</section>



<?php require "devContact.php" ?>






<footer class="footer">
    <div class="container">
        <div class="foot lead h3" >
           Visit us at 1 washington square, San Jose, California
        </div>
    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>

<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100
        }
    );
    wow.init();
</script>



</body>
</html>