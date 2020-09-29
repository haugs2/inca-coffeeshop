<h2><?php echo $coffeeProduct['title'] ?></h2>
<div class="single-product">
    <div class="product-info-upper">
        <div class="item-image-container"><img class="single-product-image" src="img/capsuleproductsample.jpg">
        </div>
        <div class="item-details">
            <label class="pricelabel"><?php echo $coffeeProduct['price_per_unit'] ?>/10pcs</label><br>
            <div><label for="coffee-sizes">Select a size:</label>
                <select name="sizes" id="coffee-sizes">
                    <?php
                        if ($coffeeProduct['kind'] == 'pads'){?>
                        <option value="10">10 pcs <?php } else{ ?> <option value="250">250g <?php } ?></option>
                    <?php if ($coffeeProduct['kind'] == 'pads'){?>
                    <option value="20">20 pcs <?php } else{ ?> <option value="500">500g <?php } ?></option>
                </select></div>
            <br>
            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity" min="1" max="99">
            <br><br>
        </div>

    </div>
    <button class="standardbtn">Add to Cart</button>
    <div class="product-description"><p>ORIGIN:
            Origin:<?php echo $coffeeProduct['origin'] ?><br>
            Growing altitude: <?php echo $coffeeProduct['growing_altitude'] ?>masl<br>
           <?php echo $coffeeProduct['description'] ?></p>
    </div>

</div>
