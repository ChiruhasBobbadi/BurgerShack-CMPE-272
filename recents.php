<?php
$arr = array(
    array('id'=>0,
        'image' => '/BurgerShack/img/menu/burger.jpeg',
        'name' => 'Classic cheese burger',
        'calories' =>'298 kCal',
        'description' => 'Sometimes you just want to reach for a classic. A classic 100% beef patty, and cheese; with onions, pickles, mustard and a dollop of tomato ketchup, in a soft bun. Delicious.'
    ),
    array('id'=>1,
        'image' => 'img/menu/garlic%20mayo%20wrap.jpeg',
        'name' => 'Garlic Mayo Chicken Wrap',
        'calories' =>'295 kCal',
        'description'=>'New and improved grilled chicken with garlic mayo, tomato, lettuce and cucumber in a soft, toasted tortilla wrap. Wrap of the Day every Monday and Saturday! Also available in Crispy Chicken.'
    ),
    array('id'=>2,
        'image' => 'img/menu/fries.jpeg',
        'name' => 'Large French Fries',
        'calories' =>'444 kCal',
        'description' =>"Fluffy on the inside and crispy on the outside, our fries are cut from whole potatoes. That's why they're so delicious."
    ),
    array('id'=>3,
        'image' => 'img/menu/nuggets.jpeg',
        'name' => 'Classic Chicken Nuggets',
        'calories' =>'391 kCal',
        'description' =>"Chicken McNuggets® are made with 100% chicken breast meat in a deliciously crispy coating, just waiting to be dipped. A firm favourite with everyone."

    ),
    array('id'=>4,
        'image' => 'img/menu/diet%20coke.jpeg',
        'name' => 'Large Diet Coke',
        'calories' =>'2 kCal',
        'description' =>"Diet Coke has a lighter taste, with no calories or sugar. Enjoy one with your meal or on its own."
    ),
    array('id'=>5,
        'image' => 'img/menu/sugar%20donut.jpeg',
        'name' => 'Sugar Donuts',
        'calories' =>'191 kCal',
        'description' =>'It’s a classic. A soft ring donut, dusted in sugar and totally delicious.'
    ),
    array('id'=>6,
        'image' => 'img/menu/yogurt.jpeg',
        'name' => ' Berry & Granola Yogurt',
        'calories' =>'290 kCal',
        'description'=>"Soft dairy ice cream, swirled with pieces of Cadbury’s Twirl with Milk Chocolate sauce."
    ), array('id'=>7,
        'image' => 'img/menu/egg%20muffin.jpeg',
        'name' => ' Egg & Cheese Muffin',
        'calories' =>'295 kCal',
        'description'=>'A pork sausage patty, lightly seasoned with herbs, a free range egg and a slice of cheese, in a hot, toasted English muffin. Perfect.'
    ), array('id'=>8,
        'image' => 'img/menu/Mozzarella.jpeg',
        'name' => 'Mozzarella Dippers',
        'calories' =>'256 kCal',
        'description'=>'Three sticks of Mozzarella cheese coated in breadcrumbs and served with Salsa dip. Nutrition and allergen information do not include dips.'
    ),
    array('id'=>9,
        'image' => 'img/menu/oreo.jpeg',
        'name' => 'Oreo Flurry',
        'calories' =>'258 kCal',
        'description'=>'Take two great things and put them together. Like our soft ice cream and crumbled-up Oreo cookies. Who could resist?'
    ),

    array('id'=>10,
        'image' => 'img/menu/potato.jpeg',
        'name' => 'Mini Potato Waffles',
        'calories' =>'201 kCal',
        'description'=>"Just when you thought frozen waffles couldn’t get any more convenient! Introducing Birds Eye mini potato waffles - a bite-sized version of the classic teatime favourite. 

Made with quality potatoes within 40 miles of our UK Waffle factory, Birds Eye mini waffles are a super versatile version of the old family staple. Low in saturated fat and full of energy, they're the perfect companion to any meal.

Our deliciously crisp mini potato waffles are made with real frozen potatoes and gluten free. Available in a small or big bag and ready on the grill in 5-10 minutes. Even better!"
    ),array('id'=>11,
        'image' => 'img/menu/apple_pie.jpeg',
        'name' => 'Apple Pie',
        'calories' =>'243 kCal',
        'description'=>"Crispy on the outside, deliciously hot and sweet on the inside, our Apple Pie is a McDonald's classic."
    ),

);



$data = array();
$temp = array();
for($i=0;$i<12;$i++){
    if(isset($_COOKIE[(string)$i])){
        $temp[$i]= $_COOKIE[(string)$i];

    }


}
//echo "before sorting";
//foreach ($temp as $key => $value){
//    echo $key. " ". $value;
//    echo "<br>";
//    echo "<br>";
//}


arsort($temp);
//echo "after sorting";
//foreach ($temp as $key => $value){
//    echo $key. " ". $value;
//    echo "<br>";
//    echo "<br>";
//}


foreach ($temp as $key => $value) {

    foreach ($arr as $a){
       if((string)$a['id']==(String)$key){
           array_push($data,$a);
       }
    }


}

// most recent will now stay in data, but we need only the first 5

$end=5;
if(sizeof($data)<5)
    $end=sizeof($data);



?>



<section class="main-section " id="recently_viewed"><!--main-section-start-->


    <div class="container">
        <div class="h1" style="text-align: center">Recently Viewed</div>
    </div>

    <br>
    <br>
    <div class="container">

        <div class="row">
            <div class='col-1'>

            </div>
        
        <?php


        for($i=0;$i<$end;$i++){
            echo "
            
            <div class='col-2'>
            <a href='/BurgerShack-CMPE-272/viewProduct.php?id={$data[$i]['id']}'>
            
                <img src={$data[$i]['image']} class='img-fluid' alt=''>
                <br>
                <br>
                <h3 class='text-center'>{$data[$i]['name']}
                </h3>
                <h6 class='text-center'>{$data[$i]['calories']}</h6>

            </a>
            </div>
            
            
        ";
        }


        ?>

            <div class='col-1'></div>
        </div>




    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-5">
            <form action="/BurgerShack-CMPE-272/mostViewed.php">
                <input type="submit" value="View Most Viewed Items on the Menu" />
            </form>
        </div>
        <div class="col-3">

        </div>
    </div>

</section>