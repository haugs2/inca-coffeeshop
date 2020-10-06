<?php include 'functions.php'?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php $product_array = ['title' => 'Coffee Tamper', 'price' => '25. -', 'img_link' => "img/tamper-sample.jpg",
        'description' => ' An indispensable tool for every Espresso Machine owner, the tamper is used to press coffee into the sieve carrier with the right amount of pressure.
            Forms a flat surface on the coffee powder and thus ensures optimal water saturation. Made of stainless steel.'];
    productPage('machine', $product_array); ; ?>
</div>

<?php include 'footer.php' ?></body>
</html>

