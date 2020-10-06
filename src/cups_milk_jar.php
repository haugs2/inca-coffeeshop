<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php
    $product_array = ['title'=> 'Barista Milk Jar', 'price'=>'18.-', 'description'=>'Stainless steel milk jar with graduated measurement. Holds 350ml',
    'img_link'=>'img/milk-jar-sample.jpg'];
    productpage('accessory', $product_array);?>
</div>
<?php include 'footer.php' ?></body>
</html>
