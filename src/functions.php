<?php

function productpage($kind, $product_array){
    if($kind == 'coffee'){
        return coffeePage($product_array);
    }
    else if ($kind =='machine'){
        return machinePage($product_array);
    }
    else if ($kind=='accessory'){
        return accessoryPage($product_array);
    }

}


function coffeePage($coffee_array){
    require('coffeeproduct.php');
    return;
}

function machinePage($product_array){
    require('unitproduct.php');
    return;
}

function accessoryPage($product_array){
    require('unitproduct.php');
    return;
}
