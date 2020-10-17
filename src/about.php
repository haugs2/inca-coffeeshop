<!DOCTYPE html>
<?php
$title=['en'=>'About Us', 'de'=>'Über Uns'];
$text=['en'=>'We are a local company from Burgdorf who specialises in distributing
           fair trade coffee from Latin American countries. We work with fair trade coffee producers in Peru, Venezuela
           and Colombia. Our focus lies on fair trading high quality coffee. We also sell coffee cups as well has premium
               coffee machines. Our cups are produced in Peru by indigenous manufacturers. Our coffee machines are produced in Switzerland and Latin America. Do not hesitate
               to contact us for more information about our products
           Our passion is keeping the love for premium coffee alive across the world!',
        'de'=>'Wir sind ein kleines Unternehmen mit Sitz in Burgdorf, welches sich auf den Vertrieb von Fair Trade Kaffee aus 
        Lateinamerika spezialisiert hat. Wir arbeiten mit Fair Trade Kaffee-Produzenten in Peru, Venezuela und Kolumbien zusammen. 
        Unser Fokus liegt dabei auf dem fairen Handel von hochwertigen Kaffeebohnen. Wir haben aber auch Tassen wie auch erstklassige Kaffeemaschinen im Angebot. 
        Unsere Maschinen werden sowohl in der Schweiz, wie auch in Lateinamerika produziert. Zögern Sie nicht, uns zu kontaktieren für mehr Informationen über unsere Produkte.'];?>
<html lang="en">
<body>
<div class="center">
    <h2><?php echo $title[$language] ?></h2>
       <div id="about-us-container">
           <img src="img/coffee-producer.jpg" class="product-image-medium">
           <p><?php echo $text[$language]?></p>
           <img src="img/farmers-in-Peru-planting-pine-trees.png" class="product-image-medium">
       </div>
   </h2>
</div>
</body>
</html>

