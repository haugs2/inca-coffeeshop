<?php require 'functions.php'?>
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
    <?php $product_array = ['title' => 'Espresso machine Piura', 'price' => '2200. -', 'img_link' => "img/espresso-machine-sample.jpg",
        'description' => '  Prepare tasty espresso within a minute.The Piura Espresso machine unites a grinder
            with an exquisite espresso machine. Use the digital temperature control to ensure that water has the perfect temperature.
            Froth your milk by hand using the milk frother when making Latte or Capuccino. Grinding strength can be adjusted depending on the type of beans.
            Choose either single or double espresso. Manual included with the machine.'];
    return productPage('machine', $product_array); ; ?>
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