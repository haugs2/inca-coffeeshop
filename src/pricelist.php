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
<div id="pricelist" class="center">
    <h2>Product List</h2>
    <table>
        <tr>
            <th>Product Number</th>
            <th>Product Name</th>
            <th>Product description</th>
            <th>Price</th>
        </tr>
        <tr class="coffee-bean-row">
            <td>1</td>
            <td>Robusta</td>
            <td>Coffee beans</td>
            <td>8.-/250g</td>
        </tr>
        <tr class="coffee-bean-row">
            <td>2</td>
            <td>Altura</td>
            <td>Coffee beans</td>
            <td>7.-/250g</td>
        </tr>
        <tr class="coffee-bean-row">
            <td>3</td>
            <td>Cubico</td>
            <td>Coffee beans</td>
            <td>10.-/250g</td>
        </tr>
        <tr class="coffee-bean-row">
            <td>4</td>
            <td>Diamante</td>
            <td>Coffee beans</td>
            <td>10.-/250g</td>
        </tr>
        <tr class="coffee-bean-row">
            <td>5</td>
            <td>Diamante</td>
            <td>Coffee beans</td>
            <td>10.-/250g</td>
        </tr>
        <tr class="coffee-bean-row">
            <td>6</td>
            <td>Volcanico</td>
            <td>Coffee beans</td>
            <td>9.-/250g</td>
        </tr>
        <tr class="coffee-pod-row">
            <td>6</td>
            <td>Cotopaxi</td>
            <td>Coffee pods</td>
            <td>6.-/10pcs</td>
        </tr>
        <tr class="coffee-pod-row">
            <td>7</td>
            <td>Urubamba</td>
            <td>Coffee pods</td>
            <td>5.50/10pcs</td>
        </tr>
        <tr class="coffee-pod-row">
            <td>8</td>
            <td>Quindio</td>
            <td>Coffee pods</td>
            <td>5.50/10pcs</td>
        </tr>
        <tr class="coffee-machines-row">
            <td>9</td>
            <td>Piura</td>
            <td>Espresso Machine</td>
            <td>2200.-</td>
        </tr>
        <tr class="coffee-machines-row">
            <td>10</td>
            <td>La Galina</td>
            <td>French Press</td>
            <td>55.-</td>
        </tr>
        <tr class="coffee-machines-row">
            <td>11</td>
            <td>Quechua</td>
            <td>Capsule Machine</td>
            <td>320.-</td>
        </tr>
        <tr class="coffee-machines-row">
            <td>12</td>
            <td>Tamper</td>
            <td>Coffee Machine Accessory</td>
            <td>25.-</td>
        </tr>
        <tr class="coffee-cups-row">
            <td>13</td>
            <td>Espresso Cup</td>
            <td>Porcelain coffee cup for espresso</td>
            <td>6.90</td>
        </tr>
        <tr class="coffee-cups-row">
            <td>14</td>
            <td>Retro Coffee Cup</td>
            <td>Enamel coffee cup</td>
            <td>7.50</td>
        </tr>
        <tr class="coffee-cups-row">
            <td>15</td>
            <td>Capuccino Coffee Cup</td>
            <td>Porcelain coffee cup for Capuccino and Latte drinks</td>
            <td>8.-</td>
        </tr>
        <tr class="coffee-cups-row">
            <td>16</td>
            <td>Milk Jar</td>
            <td>Stainless steel milk jar</td>
            <td>18.-</td>
        </tr>
        <tr class="coffee-cups-row">
            <td>17</td>
            <td>Thermos</td>
            <td>Stainless steel thermos bottle</td>
            <td>20.-</td>
        </tr>
        <tr class="coffee-cups-row">
            <td>18</td>
            <td>Reusable coffee mug</td>
            <td>Reusable bamboo coffee mug</td>
            <td>20.-</td>
        </tr>
    </table>


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