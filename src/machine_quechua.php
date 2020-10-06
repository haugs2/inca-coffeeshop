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
    <?php $product_array = ['title' => 'Capsule Machine Quechua', 'price' => '320. -', 'img_link' => "img/capsule-machine-sample.jpg",
        'description' => 'One of our all favorite products the Quechua pod machine is ideal for every coffe lover who prefers a simple handling and a quick pouring!
            Compatible with our own and all Nespresso compatible Capsules. Machine heats up in only 15 seconds and comes with a removable 1L water tank.
            The used capsule container can hold up to 20 used capsules. Cup support can be adjusted for tall glasses. off mode after 10min of inactivity.'];
    return productPage('machine', $product_array); ?>
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