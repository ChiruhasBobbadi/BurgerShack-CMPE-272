<?php ob_start(); ?>
<?php $arr = array(
    array('id'=>0,
        'image' => '/BurgerShack-CMPE-272/img/menu/burger.jpeg',
        'name' => 'Classic cheese burger',
        'calories' =>'298 kCal',
        'description' => 'Sometimes you just want to reach for a classic. A classic 100% beef patty, and cheese; with onions, pickles, mustard and a dollop of tomato ketchup, in a soft bun. Delicious.'
    ),
    array('id'=>1,
        'image' => '/BurgerShack-CMPE-272/img/menu/garlic%20mayo%20wrap.jpeg',
        'name' => 'Garlic Mayo Chicken Wrap',
        'calories' =>'295 kCal',
        'description'=>'New and improved grilled chicken with garlic mayo, tomato, lettuce and cucumber in a soft, toasted tortilla wrap. Wrap of the Day every Monday and Saturday! Also available in Crispy Chicken.'
    ),
    array('id'=>2,
        'image' => '/BurgerShack-CMPE-272/img/menu/fries.jpeg',
        'name' => 'Large French Fries',
        'calories' =>'444 kCal',
        'description' =>"Fluffy on the inside and crispy on the outside, our fries are cut from whole potatoes. That's why they're so delicious."
    ),
    array('id'=>3,
        'image' => '/BurgerShack-CMPE-272/img/menu/nuggets.jpeg',
        'name' => 'Classic Chicken Nuggets',
        'calories' =>'391 kCal',
        'description' =>"Chicken McNuggets® are made with 100% chicken breast meat in a deliciously crispy coating, just waiting to be dipped. A firm favourite with everyone."

    ),
    array('id'=>4,
        'image' => '/BurgerShack-CMPE-272/img/menu/diet%20coke.jpeg',
        'name' => 'Large Diet Coke',
        'calories' =>'2 kCal',
        'description' =>"Diet Coke has a lighter taste, with no calories or sugar. Enjoy one with your meal or on its own."
    ),
    array('id'=>5,
        'image' => '/BurgerShack-CMPE-272/img/menu/sugar%20donut.jpeg',
        'name' => 'Sugar Donuts',
        'calories' =>'191 kCal',
        'description' =>'It’s a classic. A soft ring donut, dusted in sugar and totally delicious.'
    ),
    array('id'=>6,
        'image' => '/BurgerShack-CMPE-272/img/menu/yogurt.jpeg',
        'name' => ' Berry & Granola Yogurt',
        'calories' =>'290 kCal',
        'description'=>"Soft dairy ice cream, swirled with pieces of Cadbury’s Twirl with Milk Chocolate sauce."
    ), array('id'=>7,
        'image' => '/BurgerShack-CMPE-272/img/menu/egg%20muffin.jpeg',
        'name' => ' Egg & Cheese Muffin',
        'calories' =>'295 kCal',
        'description'=>'A pork sausage patty, lightly seasoned with herbs, a free range egg and a slice of cheese, in a hot, toasted English muffin. Perfect.'
    ), array('id'=>8,
        'image' => '/BurgerShack-CMPE-272/img/menu/Mozzarella.jpeg',
        'name' => 'Mozzarella Dippers',
        'calories' =>'256 kCal',
        'description'=>'Three sticks of Mozzarella cheese coated in breadcrumbs and served with Salsa dip. Nutrition and allergen information do not include dips.'
    ),
    array('id'=>9,
        'image' => '/BurgerShack-CMPE-272/img/menu/oreo.jpeg',
        'name' => 'Oreo Flurry',
        'calories' =>'258 kCal',
        'description'=>'Take two great things and put them together. Like our soft ice cream and crumbled-up Oreo cookies. Who could resist?'
    ),

    array('id'=>10,
        'image' => '/BurgerShack-CMPE-272/img/menu/potato.jpeg',
        'name' => 'Mini Potato Waffles',
        'calories' =>'201 kCal',
        'description'=>"Just when you thought frozen waffles couldn’t get any more convenient! Introducing Birds Eye mini potato waffles - a bite-sized version of the classic teatime favourite. 

Made with quality potatoes within 40 miles of our UK Waffle factory, Birds Eye mini waffles are a super versatile version of the old family staple. Low in saturated fat and full of energy, they're the perfect companion to any meal.

Our deliciously crisp mini potato waffles are made with real frozen potatoes and gluten free. Available in a small or big bag and ready on the grill in 5-10 minutes. Even better!"
    ),array('id'=>11,
        'image' => '/BurgerShack-CMPE-272/img/menu/apple_pie.jpeg',
        'name' => 'Apple Pie',
        'calories' =>'243 kCal',
        'description'=>"Crispy on the outside, deliciously hot and sweet on the inside, our Apple Pie is a McDonald's classic."
    ),

);


$id =  $_GET['id'];
$id = (string)$id;

$data =array();
foreach ($arr as $item) {

    if($item['id']==$id){
        //echo "found <br>";
        $data = $item;
        break;
    }
}


 require "dbconnect.php";

$sql = "SELECT * FROM products WHERE id={$id}";


$result = $conn->query($sql);

if (mysqli_num_rows($result) === 0) {

    $sql = "INSERT INTO products (id,name,calories,image,count) values ({$id},'{$data['name']}','{$data['calories']}','{$data['image']}',1)";

    $result2 = $conn->query($sql);


}else{
    while($row = $result -> fetch_assoc()){
        //echo "number of rows: " . $result->num_rows;
        $count =1+$row["count"];
        $sql = "UPDATE products set count='{$count}' where id={$id}";
        $result = $conn->query($sql);
        break;
    }
}



$cookie_name = $id;
$cookie_val = time();
setcookie($cookie_name,$cookie_val,time()+60*60*24,'/');



?>


<!doctype html>
<html lang='en'>
<head>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, maximum-scale=1'>


    <link rel='shortcut icon' type='image/x-icon' href='/BurgerShack-CMPE-272/favicon.png'/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


    <link href='BurgerShack-CMPE-272/css/style.css' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
          integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>


    <title>View Product</title>

</head>
<body>

<?php require 'nav2.php'?>

<br>
<br>
<br>

<?php
echo "<div class='container'>
    <div class='row'>
        <div class='col-4'></div>
        <div class='col-4'>
            <p class = lead style='text-align: center'>{$data['name']}</p>
            <br>
            <p class = lead style='text-align: center; font-weight: bold'> Calories : {$data['calories']}</p>
            <br>
            <br>
            <img src={$data['image']} class='img-fluid' alt=''>
        </div>
    </div>
    <br>
    <br>
    <div class='row'>
        <div class='col-2'></div>
        <div class='col-8'>
            <p class = lead style='text-align: center'>{$data['description']}</p>
        </div>
    </div>
    <div class='row'></div>
</div>" ; 

?>









</body>
</html>


