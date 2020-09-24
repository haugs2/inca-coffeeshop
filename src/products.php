<link rel="stylesheet" type="text/css" href="css/main.css">

<?php

$headers = array('Product Number', 'Product Name', 'Product Category', 'Product description', 'Price');
$products = array([1, 'Robusta', 'Beans', 'Coffee Beans', '8.-/250g'],
                  [2, 'Altura', 'Beans', 'Coffee Beans', '7.-/250g'],
                  [3, 'Cubico', 'Beans', 'Coffee Beans', '10.-/250g'],
                  [4, 'Diamante', 'Beans', 'Coffee Beans', '10.-/250g'],
                  [5, 'Volcanico', 'Beans', 'Coffee Beans', '9.-/250g'],
                  [6, 'Cotopaxi', 'Beans', 'Coffee Pods', '6.-/10pcs'],
                  [7, 'Urubamba', 'Beans', 'Coffee Pods', '5.50/10pcs'],
                  [8, 'Quindio', 'Pods', 'Coffee Pods', '5.50/10pcs'],
                  [9, 'Piura', 'Pods', 'Espresso Machine', '2200.-' ],
                  [10, 'La Galina', 'Machines', 'French Press', '55.-'],
                  [11, 'Quechua', 'Machines', 'Capsule Machine', '320.-'],
                  [12, 'Tamper', 'Machines', 'Coffee Machine Accessory', '25.-'],
                  [13, 'Espresso Cup', 'Cups',  'Porcelain coffee cup for espresso', '6.90'],
                  [14, 'Retro Coffee Cup', 'Cups', 'Enamel coffee cup', '7.50'],
                  [15, 'Cappuccino Coffee Cup', 'Cups',  'Porcelain coffee cup for Cappuccino and Latte drinks', '8.-'],
                  [16, 'Milk Jar', 'Cups', 'Stainless steel milk jar', '18.-'],
                  [17, 'Thermos', 'Cups', 'Stainless steel thermos bottle', '20.-'],
                  [18, 'Reusable Coffee Mug', 'Cups', 'Reusable bamboo coffee mug', '20.-']);

$colormap = array('Beans'=>'lightblue', 'Pods'=>'lightseagreen', 'Machines'=>'lightpink', 'Cups'=>'lightcoral');


?>

<div id="pricelist" class="center">
    <h2>Product List</h2>
    <table>
        <tr>
        <?php foreach($headers as $header){?>
            <th><?php echo $header?></th>
        <?php } ?>
        </tr>
        <?php foreach($products as $product){?>
            <tr style="background-color:<?php echo $colormap[$product[2]]?>">
                <?php foreach($product as $entry){?>
                <td><?php echo $entry?></td>

                <?php } ?>
            </tr>
       <?php } ?>
    </table>
</div>
