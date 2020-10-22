<?php
include 'data.php';
$title=['en'=>'Shipping Information', 'de'=>'Lieferangaben'];
$text=['shipping address'=>['en'=>'Shipping Address', 'de'=>'Lieferadresse'],
    'shipping method'=>['en'=>'Shipping Method', 'de'=>'Lieferoptionen'],
    'payment method'=>['en'=>'Payment Method', 'de'=>'Zahlungsmethode'],
    'gift'=> ['en'=>'Wrap as a gift', 'de'=>'Als Geschenk verpacken'],
    'first name'=>['en'=>'first name', 'de'=>'Vorname'],
    'last name'=>['en'=>'last name', 'de'=>'Nachname'],
    'email'=>['en'=>'e-mail', 'de'=>'E-Mail'],
    'street'=>['en'=>'street', 'de'=>'Strasse'],
    'number'=>['en'=>'no.', 'de'=>'Number'],
    'city'=>['en'=>'City', 'de'=>'Stadt'],
    'country'=>['en'=>'Country', 'de'=>'Land']];

$shipping=[ 'first name'=>['en'=>'first name', 'de'=>'Vorname', 'type'=>'text', 'placeholder'=>'Peter'],
    'last name'=>['en'=>'last name', 'de'=>'Nachname', 'type'=>'text', 'placeholder'=>'Smith'],
    'email'=>['en'=>'e-mail', 'de'=>'E-Mail', 'type'=>'email', 'placeholder'=>'peter@example.com'],
    'street'=>['en'=>'street', 'de'=>'Strasse', 'type'=>'text', 'placeholder'=>'Musterstrasse'],
    'number'=>['en'=>'no.', 'de'=>'Number', 'type'=>'number', 'placeholder'=>'121'],
    'city'=>['en'=>'City', 'de'=>'Stadt', 'type'=>'text', 'placeholder'=>'Bern'],
    'country'=>['en'=>'Country', 'de'=>'Land', 'type'=>'text', 'placeholder'=>'Switzerland']];

$submit=['en'=>'Continue to Checkout', 'de'=>'Weiter zum Checkout'];

$shipping_methods=['standard'=>['en'=>'Standard (3-4 days)', 'de'=>'Standard (3-4 Tage)'],
    'premium'=>['en'=>'Premium (1-2 days)', 'de'=>'Premium (1-2 Tage)'],
    'express'=>['en'=>'Express (delivery on the same day)', 'de'=>'Express (Zustellung am gleichen Tag)']];

$shipping_prices=['standard'=>'7.-', 'premium'=>'12.-','express'=>'25.-'];


$paying_methods=['paypal'=>['name'=>['en'=>'PayPal', 'de'=>'PayPal'], 'path'=>'img/icons/paypal.png'],
                 'creditcard'=>['name'=>['en'=>'Credit Card', 'de'=>'Kreditkarte'], 'path'=>'img/icons/mastercard.png'],
                 'twint'=>['name'=>['en'=>'Twint', 'de'=>'Twint'], 'path'=>'img/icons/twint.png']];

?>
<!DOCTYPE html>
<html lang="en">
<body>
<h2 class="center"><?php echo $title[$language]?></h2>
<div class="row">

        <h3><?php echo $text['shipping address'][$language]?></h3>
    <?php foreach ($shipping as $id=>$entry){
        if($id !='country'){
        echo'<label for="'.$id.'">'.ucwords($entry[$language]).'</label><br>';
        echo'<input type="'.$entry['type'].'" id="'.$id.'" name="'.$id.'" placeholder="'.$entry['placeholder'].'"><br>';}
        else{
             echo '<label for="'.$id.'">'. ucwords($entry[$language]).'</label><br>';
             include 'countries.php';
        }
    }?>
        <h3><?php echo $text['shipping method'][$language]?></h3>
        <?php foreach ($shipping_methods as $method=>$details){
            echo '<input type=radio id="'.$method.'" name="shippingmethod" value="'.$method.'">';
            echo '<label for="'.$method.'">'.$details[$language].': <span>'.$shipping_prices[$method].'</span></label><br>';}?>
        <h3><?php echo $text['payment method'][$language]?></h3>
        <?php foreach ($paying_methods as $method=>$details){
            echo '<input type=radio id="'.$method.'" name="paymentmethod" value="'.$method.'">';
            echo '<label for="'.$method.'">'.$details['name'][$language].'<span><img class="flag-icon" src="'.$details['path'].'"></span></label><br>';}?>

    <?php echo '<div class="bottom-checkbox-container"><input type="checkbox" id="gift-checkbox" name="gift" value="True">
        <label for="gift">'.$text['gift'][$language].'</label></div>';
        echo '<input type="submit" value="'.$submit[$language].'" />';?>

    </div>
</body>
</html>
