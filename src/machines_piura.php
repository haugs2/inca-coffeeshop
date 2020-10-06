<?php require 'functions.php'?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include 'nav.php' ?>
<div id="coffee-products" class="center">
    <?php $product_array = ['title' => 'Espresso machine Piura', 'price' => '2200. -', 'img_link' => "img/espresso-machine-sample.jpg",
        'description' => '  Prepare tasty espresso within a minute.The Piura Espresso machine unites a grinder
            with an exquisite espresso machine. Use the digital temperature control to ensure that water has the perfect temperature.
            Froth your milk by hand using the milk frother when making Latte or Capuccino. Grinding strength can be adjusted depending on the type of beans.
            Choose either single or double espresso. Manual included with the machine.'];
    productPage('machine', $product_array); ; ?>
</div>
<?php include 'footer.php' ?></body>
</html>
