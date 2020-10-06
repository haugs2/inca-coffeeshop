<?php include 'functions.php'?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php
    $coffee_array = array('title' => 'Urubamba Coffee Capsules', 'kind' => 'pads', 'price_per_unit' => '5.50', 'origin' => 'Peru', 'growing_altitude' => '1500',
        'description' => 'Fully washed and dried in the sun, Fair Trade, Organic. Tastes like freshly ground.');
    productpage('coffee', $coffee_array)
    ?>
</div>
    <?php include 'footer.php' ?></body>
</html>
