<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
<body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php
    $product_array=['title'=>'Retro Coffee Cup', 'price'=>'7.50', 'description'=> 'Classic retro enamel mug with the typical black rim. Holds 125ml',
    'img_link'=>'img/coffeecupretrosample.jpg'];
     productpage('accessory', $product_array); ?>
</div>
<?php include 'footer.php' ?></body>
</html>
