<?php
include 'data.php';
$product_id = get_param('productId',0);?>
<!DOCTYPE html>
<html lang="en">
<body>
<div id="coffee-products" class="center">
    <?php
    $product_array = $products[$product_id];
    productpage($product_array)
    ?>
</div>
</body>
</html>
