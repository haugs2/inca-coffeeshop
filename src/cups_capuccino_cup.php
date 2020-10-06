<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php $product_array = ['title' => 'Cappuccino Cup', 'price' => '8.-', 'description' => 'Cappuccino cup made of porcelain with a timeless design. Holds 160ml',
        'img_link' => 'img/cappucino-cup-sample.jpg'];
    productpage('accessory', $product_array); ?>
</div>

<?php include 'footer.php' ?></body>
</html>
