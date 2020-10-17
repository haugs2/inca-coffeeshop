<?php
$title = ['en'=>'List of Products', 'de'=>'Unsere Produkte'];?>

<!DOCTYPE html>
<html lang="en">
<body>
<div id="coffee-products" class="center">
    <h2><?php echo $title[$language]?></h2>
    <?php
    show_pricelist($language);?>
</div>
</body>




