<?php
echo'<div id="lower-content">';
$bestsellers = [1, 2, 3, 4, 12];
$text = ['contact'=>['en'=>'Contact us', 'de'=>'Kontaktiere uns'], 'pricelist'=>['en'=>'See our pricelist', 'de'=>'Unsere Preisliste']];
show_bestselling_products($bestsellers, $language);

    echo '<br/>
    <div id="footercontainer">
        <footer>
            <div id="contact">'.$text['contact'][$language].': <a href="#mail">info@coffeeshop.com</a></div>
            <div><a href="menu.php?id=11&lang='.$language.'">'.$text['pricelist'][$language].'</a></div>
        </footer>
    </div>
</div>';