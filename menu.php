<section class="main-section paddind" id="menu"><!--main-section-start-->


    <?php $arr = array(
        array("id"=>0,
            "image" => "/BurgerShack-CMPE-272/img/menu/burger.jpeg",
            "name" => "Classic cheese burger",
            "calories" =>"298 kCal"
        ),
        array("id"=>1,
            "image" => "img/menu/garlic%20mayo%20wrap.jpeg",
            "name" => "Garlic Mayo Chicken Wrap",
            "calories" =>"295 kCal"
        ),
        array("id"=>2,
            "image" => "img/menu/fries.jpeg",
            "name" => "Large French Fries",
            "calories" =>"444 kCal"
        ),
        array("id"=>3,
            "image" => "img/menu/nuggets.jpeg",
            "name" => "Classic Chicken Nuggets",
            "calories" =>"391 kCal"
        ),
        array("id"=>4,
            "image" => "img/menu/diet%20coke.jpeg",
            "name" => "Large Diet Coke",
            "calories" =>"2 kCal"
        ),
        array("id"=>5,
            "image" => "img/menu/sugar%20donut.jpeg",
            "name" => "Sugar Donuts",
            "calories" =>"191 kCal"
        ),
        array("id"=>6,
            "image" => "img/menu/yogurt.jpeg",
            "name" => " Berry & Granola Yogurt",
            "calories" =>"290 kCal"
        ), array("id"=>7,
            "image" => "img/menu/egg%20muffin.jpeg",
            "name" => " Egg & Cheese Muffin",
            "calories" =>"295 kCal"
        ), array("id"=>8,
            "image" => "img/menu/mozzarella.jpeg",
            "name" => "Mozzarella Dippers",
            "calories" =>"256 kCal"
        ),
        array("id"=>9,
            "image" => "img/menu/oreo.jpeg",
            "name" => "Oreo Flurry",
            "calories" =>"258 kCal"
        ),

        array("id"=>10,
            "image" => "img/menu/potato.jpeg",
            "name" => "Mini Potato Waffles",
            "calories" =>"201 kCal"
        ),array("id"=>11,
            "image" => "img/menu/apple_pie.jpeg",
            "name" => "Apple Pie",
            "calories" =>"243 kCal"
        ),

    );

    ?>





    <div class="container">
        <div class="h1" style="text-align: center">Our Menu</div>
    </div>

    <br>
    <br>
    <div class="container">


        <div class="row">

             <?php






             for($i=0;$i<3;$i++){


                 echo "<div class='col-4' id={$arr[$i]["id"]}>
                <a href='/BurgerShack-CMPE-272/viewProduct.php?id={$arr[$i]["id"]}' 
                
                '>
                    <img src={$arr[$i]["image"]} class='img-fluid' alt=''>
                    <br>
                    <br>
                    <h3 class='text-center'>{$arr[$i]["name"]}</h3>
                    <h6 class='text-center'>{$arr[$i]["calories"]}</h6>
                </a>


            </div>";
              }
              ?>




</div>

        <div class="row">

            <?php


            for($i=3;$i<6;$i++){


                echo "<div class='col-4' id={$arr[$i]["id"]}>
                <a href='/BurgerShack-CMPE-272/viewProduct.php?id={$arr[$i]["id"]}'>
                    <img src={$arr[$i]["image"]} class='img-fluid' alt=''>
                    <br>
                    <br>
                    <h3 class='text-center'>{$arr[$i]["name"]}</h3>
                    <h6 class='text-center'>{$arr[$i]["calories"]}</h6>
                </a>


            </div>";
            }
            ?>




        </div>

        <div class="row">

            <?php


            for($i=6;$i<9;$i++){


                echo "<div class='col-4' id={$arr[$i]["id"]}>
                 <a href='/BurgerShack-CMPE-272/viewProduct.php?id={$arr[$i]["id"]}'>
                    <img src={$arr[$i]["image"]} class='img-fluid' alt=''>
                    <br>
                    <br>
                    <h3 class='text-center'>{$arr[$i]["name"]}</h3>
                    <h6 class='text-center'>{$arr[$i]["calories"]}</h6>
                </a>


            </div>";
            }
            ?>




        </div>

        <div class="row">

            <?php


            for($i=9;$i<12;$i++){


                echo "<div class='col-4' id={$arr[$i]["id"]}>
               <a href='/BurgerShack-CMPE-272/viewProduct.php?id={$arr[$i]["id"]}'>
                    <img src={$arr[$i]["image"]} class='img-fluid' alt=''>
                    <br>
                    <br>
                    <h3 class='text-center'>{$arr[$i]["name"]}</h3>
                    <h6 class='text-center'>{$arr[$i]["calories"]}</h6>
                </a>


            </div>";
            }
            ?>




        </div>
    </div>

</section></section>
