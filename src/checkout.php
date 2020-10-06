<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="home.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>




<?php include 'nav.php' ?>
<div id=checkout" class="center-wide">
    <div class="left-column">
        <div class="shipment-address-container">
            <table>
                <tr>
                    <td><h3>Shipping Address</h3></td>
                </tr>
                <tr>
                    <td>Sophie Haug</td>
                </tr>
                <tr>
                    <td>Allmendstrasse 54</td>
                </tr>
                <tr>
                    <td>3014 Bern</td>
                </tr>
            </table>
            <hr>
        </div>
        <div class="payment-container">
            <h3>Payment</h3>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Firstname Lastname">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
                <div class="col-50">
                    <label for="expyear">Exp Year</label>
                    <input type="text" id="expyear" name="expyear" placeholder="2020">
                </div>
                <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="111">
                </div>
            </div>
        </div>
    </div>
    <div class="right-column">
    <div class="cart-container">
            <h3>My order summary
            </h3>
            <table>
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
            <hr>
            <p>Total <span class="price" style="color:black"><b>39.-</b></span></p>
    </div>
        <div class="checkout-btns">
            <button class="standardbtn">Back to Cart</button>
            <button class="standardbtn">Buy Now</button>
        </div>
    </div>


</div>

<?php include 'footer.php' ?></body>
</html>

<meta charset="UTF-8">
<title>Our Coffee</title>
</head>
<body>

</body>
</html>