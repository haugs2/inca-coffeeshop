<!DOCTYPE html>
<html lang="en">
<head><!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Coffee Shop</title>
    </head>
<body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffe-products" class="center">
    <?php

    $coffeeProduct = array('title' => 'Cotopaxi Coffee Capsules', 'kind'=>'pads', 'price_per_unit' => '6.-', 'origin' => 'Ecuador', 'growing_altitude' => '1700',
        'description' => 'A great example of how coffee cultivators evolve - Ethiopian seedlings brought into Ecuador for a fascinating  experience in the cup.');
    include 'coffeeProduct.php';

    ?>
    <div id="lower-content">
        <?php include 'bestsellingitems.php' ?>
        <br/>
        <div id="footercontainer">
            <footer>
                <div id="contact">Contact us: <a href="#mail">info@coffeeshop.com</a></div>
                <div><a href="pricelist.php">See our Pricelist</a></div>
            </footer>
        </div>
    </div>
</body>
</html>

<meta charset="UTF-8">
<title>Our Coffee</title>
</head>
<body>

</body>
</html>