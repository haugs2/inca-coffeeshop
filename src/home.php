<?php
$text = ['en'=>'Welcome to the world of premium coffee', 'de'=>'Willkommen in der Welt des exklusiven Kaffees'];
?>
<!DOCTYPE html>
<html lang="en">
<body>
<div class="image-container">
    <div class="image-overlay-text-center"><h1>Inca Coffee Shop</h1></div>
    <div class="image-overlay-text"><h1><?php echo $text[$language]?></h1></div>
    <div>
    <img src="img/coffeebeans.jpg"
         alt="coffee plantation" class="full"/></div>
</div>
</body>
</html>