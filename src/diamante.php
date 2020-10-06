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
    $coffee_array = array('title' => 'Diamante Coffee Beans', 'kind' => 'beans', 'price_per_unit' => '10.-', 'origin' => 'Colombia', 'growing_altitude' => '1700',
        'description' => 'The Colombia Diamante was carefully roasted for you by Halfwit Coffee Roasters. This coffee from the El
            Diamante farm is first and foremost a great representation of this incredible region, with the typical Huila
            characteristics of intense sweetness, crisp fruits, and a buoyant mouthfeel. In addition, this coffee is
            100% Yellow Bourbon, a rare mutation of the traditional Bourbon variety that was first introduced to Latin
            America in the 19th century. Yellow Bourbon has an exceptional flavor, characterized by caramel, juicy fruit
            and floral notes.');
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