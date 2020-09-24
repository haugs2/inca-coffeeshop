<!DOCTYPE html>
<html lang="en">
<head><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/cart.css">
        <title>Coffee Shop</title>
    </head>
<body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>




<?php include 'nav.php' ?>
<div class="shopping-cart">
    <h2>My Shopping Cart</h2>
    <table class="center">
        <tr>
            <th>Product</th>
            <th></th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th></th>
        </tr>
        <tr>
            <td><img src="img/coffeebeanproductsample.jpg" class="product-image-small"></td>
            <td>Robusta Coffee Beans</td>
            <td>10 Fr.</td>
            <td>2</td>
            <td>20 Fr.</td>
            <td><a href="#remove">Remove</a></td>
        </tr>
        <tr>
            <td><img src="img/coffeebeanproductsample.jpg" class="product-image-small"></td>
            <td>Volcanico Coffee Beans</td>
            <td>8 Fr.</td>
            <td>1</td>
            <td>8 Fr.</td>
            <td><a href="#remove">Remove</a></td>
        </tr>
        <tr>
            <td><img src="img/coffeebeanproductsample.jpg" class="product-image-small"></td>
            <td>Diamante Coffee Beans</td>
            <td>11 Fr.</td>
            <td>1</td>
            <td>11 Fr.</td>
            <td><a href="#remove">Remove</a></td>
        </tr>
    </table>
    <button id="btn-continue"><a href="home.php">Continue Shopping</a></button>
    <button id="btn-checkout"><a href="checkout.php">Proceed to Checkout</a></button>
</div>
<div id="lower-content">
    <div class="product-display">
        <div class="center"><h2>Our best selling offers</h2></div>
        <ul>
            <li>
                <div class="product-item"><img src="img/coffeebeanproductsample.jpg" class="product-image-small"><span
                        class="product-caption"><a href="robusta.php">Robusta Beans</a></span>
                </div>
            </li>
            <li>
                <div class="product-item"><img src="img/coffeebeanproductsample.jpg" class="product-image-small"><span
                        class="product-caption"><a href="cubico.php">Cubico Beans</a></span>
                </div>
            </li>
            <li>
                <div class="product-item"><img src="img/coffeebeanproductsample.jpg" class="product-image-small"><span
                        class="product-caption"><a href="volcanico.php">Volcanico Beans</a></span>
                </div>
            </li>
            <li>
                <div class="product-item"><img src="img/coffeebeanproductsample.jpg" class="product-image-small"><span
                        class="product-caption"><a href="diamante.php">Diamante Beans</a></span>
                </div>
            </li>
        </ul>
    </div>
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
