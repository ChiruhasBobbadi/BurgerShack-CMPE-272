<!doctype html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="/favicon.png"/>


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

<?php require "includes/navbar.php" ?>
<?php require "includes/home.php" ?>
<?php require "includes/about.php" ?>
<?php require "includes/menu.php" ?>
<?php require "includes/news.php" ?>
<?php require "includes/devContact.php" ?>


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

<!---->
<!--<script type="text/javascript">-->
<!--    $(window).load(function(){-->
<!---->
<!--        $('.main-nav li a, .servicelink').bind('click',function(event){-->
<!--            var $anchor = $(this);-->
<!---->
<!--            $('html, body').stop().animate({-->
<!--                scrollTop: $($anchor.attr('href')).offset().top - 102-->
<!--            }, 1500,'easeInOutExpo');-->
<!--            /*-->
<!--            if you don't want to use the easing effects:-->
<!--            $('html, body').stop().animate({-->
<!--                scrollTop: $($anchor.attr('href')).offset().top-->
<!--            }, 1000);-->
<!--            */-->
<!--            event.preventDefault();-->
<!--        });-->
<!--    })-->
<!--</script>-->
<!---->
<!--<script type="text/javascript">-->
<!---->
<!--    $(window).load(function(){-->
<!---->
<!---->
<!--        var $container = $('.portfolioContainer'),-->
<!--            $body = $('body'),-->
<!--            colW = 375,-->
<!--            columns = null;-->
<!---->
<!---->
<!--        $container.isotope({-->
<!--            // disable window resizing-->
<!--            resizable: true,-->
<!--            masonry: {-->
<!--                columnWidth: colW-->
<!--            }-->
<!--        });-->
<!---->
<!--        $(window).smartresize(function(){-->
<!--            // check if columns has changed-->
<!--            var currentColumns = Math.floor( ( $body.width() -30 ) / colW );-->
<!--            if ( currentColumns !== columns ) {-->
<!--                // set new column count-->
<!--                columns = currentColumns;-->
<!--                // apply width to container manually, then trigger relayout-->
<!--                $container.width( columns * colW )-->
<!--                    .isotope('reLayout');-->
<!--            }-->
<!---->
<!--        }).smartresize(); // trigger resize to set container width-->
<!--        $('.portfolioFilter a').click(function(){-->
<!--            $('.portfolioFilter .current').removeClass('current');-->
<!--            $(this).addClass('current');-->
<!---->
<!--            var selector = $(this).attr('data-filter');-->
<!--            $container.isotope({-->
<!---->
<!--                filter: selector,-->
<!--            });-->
<!--            return false;-->
<!--        });-->
<!---->
<!--    });-->
<!---->
<!--</script>-->

</body>
</html>