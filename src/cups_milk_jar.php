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
    $product_array = ['title'=> 'Barista Milk Jar', 'price'=>'18.-', 'description'=>'Stainless steel milk jar with graduated measurement. Holds 350ml',
    'img_link'=>'img/milk-jar-sample.jpg'];
    return productpage('accessory', $product_array);?>
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