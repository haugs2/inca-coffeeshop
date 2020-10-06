<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php
    $product_array=['title'=>'Thermos Bottle', 'price'=>'20.-', 'description'=>'Keep hot drinks warm!. This elegantly designed thermos comes in handy when you take your coffee for the road
            Made of stainless steel. Holds 0.5l', 'img_link'=>'img/thermos-sample.jpg'];
    productpage('accessory', $product_array);
    ?>
</div>
<?php include 'footer.php' ?></body>
</html>

