<?php include 'functions.php'?>
<!DOCTYPE html>
<html lang="en">
<head><!DOCTYPE html>
    <html lang="en">
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
    $coffee_array = array('title' => 'Robusta Coffee Beans', 'kind' => 'beans', 'price_per_unit' => '8.-', 'origin' => 'Peru', 'growing_altitude' => '1600',
        'description' => 'A pure Robusta, very strong, both in flavor and caffeine. Richly chocolatey in the best Robusta tradition.
            Excellent with milk and sugar, or sweetened condensed milk, but is also very low in acid so can be drunk
            black even by individuals who are sensitive to acidity. Robusta is high in body and crema and makes a
            fabulous espresso alone or paired with your favorite arabica.');
    return productpage('coffee', $coffee_array)
    ?>
</div>
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