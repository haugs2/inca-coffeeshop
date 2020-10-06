<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php $product_array=['title'=>'Reusable Bamboo Coffee Mug', 'price'=>'20.-', 'description'=>'No more paper mugs! Not only does this reusable mug made from bamboo wood look more colorful and trendy,
            by using it you also reduce waste and protect the environment. Holds 330ml. With a rubber band to protect
            your hands from hot temperature', 'img_link'=>'img/reusable-mug-sample.jpg'];
   productpage('accessory', $product_array);?>
</div>
<?php include 'footer.php' ?></body>
</html>
