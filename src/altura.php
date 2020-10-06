<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php
    $coffee_array = array('title' => 'Altura Coffee Beans', 'kind' => 'beans', 'price_per_unit' => '7.-', 'origin' => 'Peru', 'growing_altitude' => '1200',
        'description' => '  Organic Altura coffee beans from the Cusco region in Quillabamba, Peru. This is a washed coffee with sweet
            notes of cocoa, hazelnut and caramel. 100% Arabica. Specialty coffee. Medium roast designed for a good
            balanced espresso. Roasted in France. 250g coffee beans.');
    productpage('coffee', $coffee_array)
    ?>
</div>
<?php include 'footer.php' ?>
</body>
</html>
