<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php
    $coffee_array = array('title' => 'Cubico Coffee Beans', 'kind' => 'beans', 'price_per_unit' => '7.50', 'origin' => 'Peru', 'growing_altitude' => '1600',
        'description' => ' Freshly Roasted Peruvian Beans - Cubico Coffees are roasted in small batches and our roasters sign and date
            each bag to ensure freshness.
            Cupping Notes - Smooth body, intense citrus and lemon acidity, followed by nutty and toffee sweetness, with
            mild herbal notes in the finish.
            Premium Organic Coffee - Medium Roasted to preserve the coffee’s complex flavors and intense aroma.');
    productpage('coffee', $coffee_array);
    ?>
</div>
<?php include 'footer.php' ?></body>
</html>
