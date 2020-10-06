<h2><?php echo $product_array['title']?></h2>
<div class="single-product">
    <div class="product-info-upper">
        <div class="item-image-container"><img class="single-product-image" src="<?php echo $product_array['img_link']?>">
        </div>
        <div class="item-details-machine">
            <label class="pricelabel"><?php echo $product_array['price']?></label><br>
        </div>
    </div>
    <button class="standardbtn">Add to Cart</button>
    <div class="product-description"><p>
            <?php echo $product_array['description']?></p></div>
</div>
