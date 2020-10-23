<?php



function get_address_label($customer, $language){

    $customer_params=[ 'first_name'=>['en'=>'first name', 'de'=>'Vorname'],
        'last_name'=>['en'=>'last name', 'de'=>'Nachname'],
        'email'=>['en'=>'e-mail', 'de'=>'E-Mail'],
        'street'=>['en'=>'street', 'de'=>'Strasse'],
        'number'=>['en'=>'no.', 'de'=>'Number'],
        'city'=>['en'=>'City', 'de'=>'Stadt'],
        'plz'=>['en'=>'Zip Code', 'de'=>'PLZ'],
        'phone_number'=>['en'=>'phone number', 'de'=>'Telefonnummer'],
        'country'=>['en'=>'Country', 'de'=>'Land']];

    echo '<label>'.$customer['first name'].' '.$customer['last name'].'</label><br>';
    echo '<label>'.$customer['street'].' '.$customer['street_number'].'</label><br>';
    echo '<label>'.$customer['plz'].' '.$customer['city'].'</label><br>';
    echo '<label>'.$customer['country'].'</label><br>';
    echo '<label>'.$customer_params['phone_number'][$language].': '.$customer['phone_number'].'</label>';


}