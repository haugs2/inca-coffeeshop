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
    $coffee_array = array('title' => 'Quindio Coffee Capsules', 'kind' => 'pads', 'price_per_unit' => '5.50', 'origin' => 'Colombia', 'growing_altitude' => '1400',
        'description' => 'Made from Excelso grade beans which are carefully selected from the coffee fincas (farms) located in the
            mountainous region of Quindío. Because this coffee is grown at a high elevation, at over 1,400 metres, it is
            characterised by a softness, natural acidity and intense aroma. Capsules that taste like freshly ground coffee.');
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