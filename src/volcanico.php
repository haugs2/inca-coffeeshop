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
    $coffee_array = array('title' => 'Volcanico Coffee Beans', 'kind' => 'beans', 'price_per_unit' => '10.-', 'origin' => 'Peru', 'growing_altitude' => '1000',
        'description' => '100% Arabica. This Peru Coffee is also known as "Tres Cumbres" and organically grown in the Chanchamayo region at the
            highest ranges of the South American Andes and the Amazon River basin.
            The Peruvian Coffee produces a complex full bodied coffee with floral, smoky overtones, bright aromatic
            finish, and a gentle acidity and a clean, bright aromatic finish.');
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