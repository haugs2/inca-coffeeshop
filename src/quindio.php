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
    <h2>Quindio Coffee Capsules</h2>
    <div class="single-product">
        <div class="product-info-upper">
            <div class="item-image-container"><img class="single-product-image" src="img/capsuleproductsample.jpg">
            </div>
            <div class="item-details">
                <label class="pricelabel">5.50/10pcs</label><br>
                <div><label for="coffee-sizes">Select a size:</label>
                    <select name="sizes" id="coffee-sizes">
                        <option value="10">10 pcs</option>
                        <option value="20">20 pcs</option>
                    </select></div>
                <br>
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="1" max="99">
                <br><br>
            </div>

        </div>
        <button class="standardbtn">Add to Cart</button>
        <div class="product-description"><p>ORIGIN:
            Origin: Colombia<br>
            Growing altitude: 1400 masl<br>
            Made from Excelso grade beans which are carefully selected from the coffee fincas (farms) located in the
            mountainous region of Quindío. Because this coffee is grown at a high elevation, at over 1,400 metres, it is
            characterised by a softness, natural acidity and intense aroma. Capsules that taste like freshly ground coffee.</p>
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