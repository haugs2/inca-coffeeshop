<?php include 'functions.php' ?>
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
    $coffee_array = array('title' => 'Cubico Coffee Beans', 'kind' => 'beans', 'price_per_unit' => '7.50', 'origin' => 'Peru', 'growing_altitude' => '1600',
        'description' => ' Freshly Roasted Peruvian Beans - Cubico Coffees are roasted in small batches and our roasters sign and date
            each bag to ensure freshness.
            Cupping Notes - Smooth body, intense citrus and lemon acidity, followed by nutty and toffee sweetness, with
            mild herbal notes in the finish.
            Premium Organic Coffee - Medium Roasted to preserve the coffee’s complex flavors and intense aroma.');
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