<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>
<body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php
    $coffee_array = array('title' => 'Robusta Coffee Beans', 'kind' => 'beans', 'price_per_unit' => '8.-', 'origin' => 'Peru', 'growing_altitude' => '1600',
        'description' => 'A pure Robusta, very strong, both in flavor and caffeine. Richly chocolatey in the best Robusta tradition.
            Excellent with milk and sugar, or sweetened condensed milk, but is also very low in acid so can be drunk
            black even by individuals who are sensitive to acidity. Robusta is high in body and crema and makes a
            fabulous espresso alone or paired with your favorite arabica.');
    productpage('coffee', $coffee_array)
    ?>
</div>
<?php include 'footer.php' ?>
</body>
</html>
