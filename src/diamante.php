<?php include 'functions.php'?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php
    $coffee_array = array('title' => 'Diamante Coffee Beans', 'kind' => 'beans', 'price_per_unit' => '10.-', 'origin' => 'Colombia', 'growing_altitude' => '1700',
        'description' => 'The Colombia Diamante was carefully roasted for you by Halfwit Coffee Roasters. This coffee from the El
            Diamante farm is first and foremost a great representation of this incredible region, with the typical Huila
            characteristics of intense sweetness, crisp fruits, and a buoyant mouthfeel. In addition, this coffee is
            100% Yellow Bourbon, a rare mutation of the traditional Bourbon variety that was first introduced to Latin
            America in the 19th century. Yellow Bourbon has an exceptional flavor, characterized by caramel, juicy fruit
            and floral notes.');
    productpage('coffee', $coffee_array)
    ?>
</div>
<?php include 'footer.php' ?></body>
</html>

