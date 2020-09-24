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
<div id=user-profile" class="center">
    <h2>Register with us!</h2>
    <form>
        <div class="login-container">
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="login-container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
    </form>

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

<meta charset="UTF-8">
<title>Our Coffee</title>
</head>
<body>

</body>
</html>