<?php
include 'data.php';
include 'customer_utils.php';
include 'product_utils.php';
include 'order_utils.php';

$title=['en'=>'Confirm your order', 'de'=>'Bestellung überprüfen'];
$text=[
    'order'=>['en'=>'Your order', 'de'=>'Ihre Bestellung'],
    'payment'=>['en'=>'Your payment method', 'de'=>'Ihre gewünschte Zahlungsmethode'],
    'shipping'=>['en'=>'Shipping address', 'de'=>'Lieferadresse'],
    'options'=>['en'=>'Options', 'de'=>'Gewählte Optionen']

];
$ordered_products=[
    ['id'=>3, 'count'=>2, 'options'=>['size'=>[['en'=>'10pcs', 'de'=>'10 Stk']]]],
    ['id'=>15, 'count'=>1, 'options'=>['color'=>['en'=>'red', 'de'=>'rot']]]];

$options= ['gift'=>['en'=>'gift wrapped', 'de'=>'Geschenkverpackung']];

$customer=[
    'first name'=>'Anne',
    'last name'=>'Frey',
    'street'=>'Elisabethenstrasse',
    'street_number'=>'142',
    'plz'=>'3014',
    'city'=>'Bern',
    'email'=>'anne.frey@gmx.net',
    'phone_number'=>'+410795467893',
    'country'=>'Switzerland',
];

$submit=['en'=>'Confirm & Buy', 'de'=>'Kauf bestätigen'];

$payment_method='paypal';
echo '<div class="confirmation-form-container">';
echo '<form id="order-confirmation">';


echo '</form>';
echo '<h2>'.$title[$language].'</h2>';
echo '<h3>'.$text['order'][$language].'</h3>';
get_order_confirmation_form($ordered_products, $language);
echo '<h3>'.$text['shipping'][$language].'</h3>';
get_address_label($customer, $language);
echo '<h3>'.$text['payment'][$language].'</h3>';
get_payment_method_label($payment_method, $language);
echo'<br>';
echo '<h3>'.$text['options'][$language].'</h3>';
get_order_options_as_list($options, $language);
echo '</div>';
echo '<div><input class="center-button final-submit" type="submit" value="'.$submit[$language].'" /></div>';?>