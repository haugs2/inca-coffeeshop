<?php
$bestSellingOffers = array(['Robusta', 'robusta.php', 'img/coffeebeanproductsample.jpg'],
                           ['Diamante', 'diamante.php', 'img/coffeebeanproductsample.jpg'],
                           ['La Galina', 'machines_french_press.php', 'img/french-press-sample.jpg'],
                            ['Quindio', 'quindio.php', 'img/capsuleproductsample.jpg']);

?>
<div class="product-display">
    <div class="center"><h2>Our best selling offers</h2></div>
    <ul>
        <?php foreach ($bestSellingOffers as $item){ ?>
        <li>
            <div class="product-item"><img src="<?php echo $item[2] ?>" class="product-image-small"><span
                        class="product-caption"><a href="<?php echo $item[1] ?>"><?php echo $item[0] ?></a></span>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>
