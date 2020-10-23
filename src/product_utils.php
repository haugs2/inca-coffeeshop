<?php

function get_price_as_string($numeric_price){
    if(is_int($numeric_price)){
        return $numeric_price.'.-';
    }
    else{
        return number_format($numeric_price, 2, '.', ',');
    }
}

// Get a label listing all the products ordered with the selected options
function get_order_confirmation_form($order_list, $language){
    $table_headers = ['product'=>['en'=>'Product', 'de'=>'Produkt'],
                      'price_per_unit'=>['en'=>'Price', 'de'=>'Preis'],
                      'count'=>['en'=>' ', 'de'=>'Anzahl'],
                      'price_total'=>['en'=>'Total', 'de'=>'Total']];

    global $products;
    include 'data.php';

    echo'<table>';
    echo'<tr>';
    foreach($table_headers as $header){
        echo'<th>'.$header[$language].'</th>';
    }
    echo'</tr>';
    foreach($order_list as $order){
        $product = $products[$order['id']];
        $total_price = $order['count']*$product['price_per_unit'];
        echo'<tr>';
        echo'<td>'.$product['title'][$language].'</td>';
        echo'<td>'.get_price_as_string($product['price_per_unit']).'</td>';
        echo'<td>'.$order['count'].'</td>';
        echo'<td>'.get_price_as_string($total_price).'</td>';
        echo'</tr>';
    }
    echo '</table>';

}