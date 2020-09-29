<!DOCTYPE html>
<html lang="en">
<head><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Coffee Shop</title>
    </head>
<body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>




<?php include 'nav.php' ?>
<div id="coffe-products" class="center">
    <h2>Cubico Coffee Beans</h2>
    <div class="single-product">
        <div class="product-info-upper">
            <div class="item-image-container"><img class="single-product-image" src="img/coffeebeanproductsample.jpg">
            </div>
            <div class="item-details">
                <label class="pricelabel">7.50/250g</label><br>
                <div><label for="coffee-sizes">Select a size:</label>
                    <select name="sizes" id="coffee-sizes">
                        <option value="250">250g</option>
                        <option value="500">500g</option>
                    </select></div>
                <br>
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="1" max="99">
                <br><br>
            </div>

        </div>
        <button class="standardbtn">Add to Cart</button>
        <div class="product-description"><p>ORIGIN:
            100% Robusta from Peru<br>
            Growing altitude: 1400 - 1600 masl<br>
            Freshly Roasted Peruvian Beans - Cubico Coffees are roasted in small batches and our roasters sign and date
            each bag to ensure freshness.
            Cupping Notes - Smooth body, intense citrus and lemon acidity, followed by nutty and toffee sweetness, with
            mild herbal notes in the finish.
            Premium Organic Coffee - Medium Roasted to preserve the coffee’s complex flavors and intense aroma.</p>
        </div>


    </div>

</div>
<div id="lower-content">
    <?php include 'bestsellingitems.php' ?>
    <br/>
    <div id="footercontainer">
        <footer>
            <div id="contact">Contact us: <a href="#mail">info@coffeeshop.com</a></div>
            <div><a href="pricelist.php">See our Pricelist</a></div>
        </footer>
    </div>
</div>
</body>
</html>

<meta charset="UTF-8">
<title>Our Coffee</title>
</head>
<body>

</body>
</html>