<?php
$title = ['en'=>'Our Coffee', 'de'=>'Unser Kaffee'];?>
<!DOCTYPE html>
<html lang="en">
<body>
<div id="coffee-products" class="center">
    <h2><?php echo $title[$language]?></h2>
    <?php
    show_products('coffee', $language);?>
</div>
</body>
