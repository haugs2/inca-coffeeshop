<?php


function get_payment_method_label($payment_method, $language){
    $payment_methods=['paypal'=>['name'=>['en'=>'PayPal', 'de'=>'PayPal'], 'path'=>'img/icons/paypal.png'],
        'creditcard'=>['name'=>['en'=>'Credit Card', 'de'=>'Kreditkarte'], 'path'=>'img/icons/mastercard.png'],
        'twint'=>['name'=>['en'=>'Twint', 'de'=>'Twint'], 'path'=>'img/icons/twint.png']];

    $method_details = $payment_methods[strtolower($payment_method)];
    echo '<div class="link-with-icon"><label for="'.$payment_method.'">'.$method_details['name'][$language].
        '<img class="flag-icon" src="'.$method_details['path'].'"></label></div>';
}


//Additional order options like gift wrapping to be displayed in the confirmation form

function get_order_options_as_list($order_options, $language){
    echo '<div class="option-list-container"><ul>';
    foreach ($order_options as $option){
        echo'<li>'.$option[$language].'</li>';
    }
    echo '</ul></div>';
}