<h2><?php echo $coffee_array['title'] ?></h2>
<div class="single-product">
    <div class="product-info-upper">
        <div class="item-image-container"><img
                    class="single-product-image" <?php if ($coffee_array['kind'] == 'pads'){ ?>
                    src="img/capsuleproductsample.jpg"><?php } else { ?>src="img/coffeebeanproductsample.jpg"<?php } ?>
        </div>
        <div class="item-details">
            <label class="pricelabel"><?php echo $coffee_array['price_per_unit'];
                if ($coffee_array['kind'] == 'pads') { ?>
                    /10pcs <?php } else { ?> /250g <?php } ?></label><br>
            <div><label for="coffee-sizes">Select a size:</label>
                <select name="sizes" id="coffee-sizes">
                    <?php
                    if ($coffee_array['kind'] == 'pads'){
                    ?>
                <option value="10">10 pcs <?php } else{ ?>
                    <option value="250">250g <?php } ?></option>
                    <?php if ($coffee_array['kind'] == 'pads'){ ?>
                    <option value="20">20 pcs <?php } else{ ?>
                    <option value="500">500g <?php } ?></option>
                </select></div>
            <br>
            <div><label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="1" max="99"></div>
            <br><br>
        </div>

    </div>
    <button class="standardbtn">Add to Cart</button>
    <div class="product-description"><p>
            Origin: <?php echo $coffee_array['origin'] ?><br>
            Growing altitude: <?php echo $coffee_array['growing_altitude'] ?>masl<br>
            <?php echo $coffee_array['description'] ?></p>
    </div>

</div>
