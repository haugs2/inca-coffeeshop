<?php

function get_param($name, $default=0) {
    if (!isset($_GET[$name]))
        return $default;
    return urldecode($_GET[$name]);
}

function add_param($url, $name, $value) {
    if(strpos($url,'?') !== false)
        $sep = '&';
    else
        $sep = '?';
    return $url . $sep . $name . "=" . urlencode($value);
}

function render_content($pageId=0, $language='en'){
    $pagesById =[ 0=>'home.php', 1=>'coffee.php', 2=>'machines.php', 3=>'accessories.php', 4=>'about.php', 5=>'contact.php', 6=>'cart.php',
        7=>'profile.php', 8=>'login.php', 9=>'product.php'
    ];
    include $pagesById[$pageId];
}

function languages($language, $pageId){
    $languages = ['de', 'en'];
    $urlbase = add_param($_SERVER['PHP_SELF'], 'id', $pageId);
    foreach($languages as $l){
        $class= $language == $l ? 'active' : 'inactive';
        echo '<a class="'.$class.'" href="';
        echo add_param($urlbase, 'lang', $l).'">';
        echo strtoupper($l).'</a>';
    }
}

function productpage($product_array){
    $category = $product_array['category'];
    if($category == 'coffee'){
        return coffeePage($product_array);
    }
    else if ($category =='machine'){
        return machinePage($product_array);
    }
    else if ($category=='accessory'){
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
