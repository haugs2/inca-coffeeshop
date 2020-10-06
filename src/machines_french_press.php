<?php include 'functions.php'?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php $product_array = ['title' => 'French Press La Galina', 'price' => '55. -', 'img_link' => "img/french-press-sample.jpg",
        'description' => ' A simple yet robust french press made of steel and premium glass. Use a coarsely ground coffee, wait 4 minutes and press down the flask.
        Pour and enjoy a highly aromatic coffee. Leaves no residue in cup'];
    productPage('machine', $product_array); ; ?>
</div>
<?php include 'footer.php' ?></body>
</html>
