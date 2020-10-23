<?php
include 'data.php';
$title=['en'=>'Shipping Information', 'de'=>'Lieferangaben'];
$text=['shipping address'=>['en'=>'Shipping Address', 'de'=>'Lieferadresse'],
    'shipping method'=>['en'=>'Shipping Method', 'de'=>'Lieferoptionen'],
    'payment method'=>['en'=>'Payment Method', 'de'=>'Zahlungsmethode'],
    'gift'=> ['en'=>'Wrap as a gift', 'de'=>'Als Geschenk verpacken'],
 ];

$shipping=[ 'firstname'=>['en'=>'first name', 'de'=>'Vorname', 'type'=>'text', 'placeholder'=>'Peter'],
    'lastname'=>['en'=>'last name', 'de'=>'Nachname', 'type'=>'text', 'placeholder'=>'Smith'],
    'email'=>['en'=>'e-mail', 'de'=>'E-Mail', 'type'=>'email', 'placeholder'=>'peter@example.com'],
    'street'=>['en'=>'street', 'de'=>'Strasse', 'type'=>'text', 'placeholder'=>'Musterstrasse'],
    'streetno'=>['en'=>'no.', 'de'=>'Nr.', 'type'=>'number', 'placeholder'=>'121'],
    'city'=>['en'=>'City', 'de'=>'Stadt', 'type'=>'text', 'placeholder'=>'Bern'],
    'plz'=>['en'=>'Zip Code', 'de'=>'PLZ', 'type'=>'text', 'placeholder'=>'3012'],
    'country'=>['en'=>'Country', 'de'=>'Land', 'type'=>'text', 'placeholder'=>'Switzerland']];

$submit=['en'=>'Continue to Checkout', 'de'=>'Weiter zum Checkout'];

$shipping_methods=['standard'=>['en'=>'Standard (3-4 days)', 'de'=>'Standard (3-4 Tage)'],
    'premium'=>['en'=>'Premium (1-2 days)', 'de'=>'Premium (1-2 Tage)'],
    'express'=>['en'=>'Express (delivery on the same day)', 'de'=>'Express (Zustellung am gleichen Tag)']];

$shipping_prices=['standard'=>'7.-', 'premium'=>'12.-','express'=>'25.-'];


$paying_methods=['paypal'=>['name'=>['en'=>'PayPal', 'de'=>'PayPal'], 'path'=>'img/icons/paypal.png'],
                 'creditcard'=>['name'=>['en'=>'Credit Card', 'de'=>'Kreditkarte'], 'path'=>'img/icons/mastercard.png'],
                 'twint'=>['name'=>['en'=>'Twint', 'de'=>'Twint'], 'path'=>'img/icons/twint.png']];

// First name and last name should be on the same line
echo '<h2 class="center">'.$title[$language].'</h2>';
echo '<div class="shipping-form-container">';
echo '<form class="shipping-form">';
echo '<h3>'.$title[$language].'</h3>';

echo '<div><label for="fname">'.ucwords($shipping['firstname'][$language]).'</label></div><br>';
echo '<input type=text id="fname" name="fname" placeholder="John" required><br>';
echo '<label for="lname">'.ucwords($shipping['lastname'][$language]).'</label><br>';
echo '<input type=text id="lname" name="lname" placeholder="Smith" required><br>';

// The street and street number should be on the same line
echo '<div>';
echo '<label for="street">'.ucwords($shipping['street'][$language]).'</label><br>';
echo '<input type=text id="street" name="street" placeholder="Militärstrasse"><br>';
echo '<label for="streetno">'.ucwords($shipping['streetno'][$language]).'</label><br>';
echo '<input type=number id="streetno" name="streetno" placeholder="24"><br>';
echo '</div>';
// PLZ and city name should be on the same line
echo '<div>';
echo '<label for="plz">'.ucwords($shipping['plz'][$language]).'</label><br>';
echo '<input type=number id="plz" name="plz" placeholder=3014 pattern="[1-9][0-9]{3}" required><br>';
echo '<label for="city">'.ucwords($shipping['city'][$language]).'</label><br>';
echo '<input type=text id="city" name="city" placeholder="Bern"><br>';
echo '</div>';
// include the select dropdown for country
include 'countries.php';
// Section for shipping method
echo '<h3>'.$text['shipping method'][$language].'</h3>';
foreach ($shipping_methods as $method=>$details){
    echo '<input type=radio id="'.$method.'" name="shippingmethod" value="'.$method.'">';
    echo '<label for="'.$method.'">'.$details[$language].': <span>'.$shipping_prices[$method].'</span></label><br>';
}

// Section for payment method
echo '<h3>'.$text['payment method'][$language].'</h3>';
foreach ($paying_methods as $method=>$details){
    echo '<input type=radio id="'.$method.'" name="paymentmethod" value="'.$method.'">';
    echo '<label for="'.$method.'">'.$details['name'][$language].'<span><img class="flag-icon" src="'.$details['path'].'"></span></label><br>';}

//Final submit button
echo '<input type="submit" value="'.$submit[$language].'" />';
echo '</form>';
echo '</div>';

