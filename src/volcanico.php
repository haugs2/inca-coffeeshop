<?php include 'functions.php'?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php
    $coffee_array = array('title' => 'Volcanico Coffee Beans', 'kind' => 'beans', 'price_per_unit' => '10.-', 'origin' => 'Peru', 'growing_altitude' => '1000',
        'description' => '100% Arabica. This Peru Coffee is also known as "Tres Cumbres" and organically grown in the Chanchamayo region at the
            highest ranges of the South American Andes and the Amazon River basin.
            The Peruvian Coffee produces a complex full bodied coffee with floral, smoky overtones, bright aromatic
            finish, and a gentle acidity and a clean, bright aromatic finish.');
    productpage('coffee', $coffee_array)
    ?>
</div>
<?php include 'footer.php' ?></body>
</html>
