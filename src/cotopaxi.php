<?php include 'functions.php' ?>
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
<div id="coffee-products" class="center">
    <?php
    $coffee_array = array('title' => 'Cotopaxi Coffee Capsules', 'kind' => 'pads', 'price_per_unit' => '6.-', 'origin' => 'Ecuador', 'growing_altitude' => '1700',
        'description' => 'A great example of how coffee cultivators evolve - Ethiopian seedlings brought into Ecuador for a fascinating  experience in the cup.');
    productpage('coffee', $coffee_array);
    ?>
</div>
<?php include 'footer.php' ?></body>
</html>
