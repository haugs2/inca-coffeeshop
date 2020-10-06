<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>
<body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php
    $coffee_array = array('title' => 'Quindio Coffee Capsules', 'kind' => 'pads', 'price_per_unit' => '5.50', 'origin' => 'Colombia', 'growing_altitude' => '1400',
        'description' => 'Made from Excelso grade beans which are carefully selected from the coffee fincas (farms) located in the
            mountainous region of Quindío. Because this coffee is grown at a high elevation, at over 1,400 metres, it is
            characterised by a softness, natural acidity and intense aroma. Capsules that taste like freshly ground coffee.');
    productpage('coffee', $coffee_array)
    ?>
</div>
<?php include 'footer.php' ?>
</body>
</html>
