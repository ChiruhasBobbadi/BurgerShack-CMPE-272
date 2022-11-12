<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, maximum-scale=1'>


    <link rel='shortcut icon' type='image/x-icon' href='/BurgerShack-CMPE-272/favicon.png'/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


    <link href='/BurgerShack-CMPE-272/css/style.css' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
          integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>


    <title>CURL Users</title>
</head>
<body>

<?php require 'nav2.php'?>

<section class="main-section alabaster" id="tops">
    <div class="container fullsize">
        <?php

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, "http://chiruhas.com/BurgerShack-CMPE-272/curl_expose.php");
        curl_setopt($curl_handle, CURLOPT_HEADER, 0);
        curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
        $content = curl_exec($curl_handle);

        echo "<h1 style='text-align: center' class='lead'>Users from Burger Shack </h1>" ;
        echo "<br>";
       // echo $content;
        $contents = explode(",", $content);
        $i=1;
        foreach ($contents as $c) {
            echo $i."."." ".$c."<br/>";
            echo "<br>";
            $i++;
        }

        curl_setopt($curl_handle, CURLOPT_URL, "https://adeshlandge.com/exposecontacts.php");
        curl_setopt($curl_handle, CURLOPT_HEADER, 0);
        curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
        $content = curl_exec($curl_handle);

        echo "<h1 style='text-align: center' class='lead'>Users from Green Leaf Elektronics </h1>" ;
        echo "<br>";
        // echo $content;
        $contents = explode(",", $content);

        foreach ($contents as $c) {
            echo $c."<br/>";
            echo "<br>";

        }

        curl_setopt($curl_handle, CURLOPT_URL, "http://myhvdomain.ninja/iphonestore/admin.php");
        curl_setopt($curl_handle, CURLOPT_HEADER, 0);
        curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
        $content = curl_exec($curl_handle);


        echo "<h1 style='text-align: center' class='lead'>Users from Iphone Store </h1>" ;
        echo "<br>";
        // echo $content;
        $contents = explode(",", $content);

        foreach ($contents as $c) {
            echo $c."<br/>";
            echo "<br>";

        }


        curl_close($curl_handle);




        ?>

    </div>
</section>
</body>
</html>