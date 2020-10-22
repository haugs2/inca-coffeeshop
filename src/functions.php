<?php


function get_param($name, $default=0) {
    if (!isset($_GET[$name]))
        return $default;
    return urldecode($_GET[$name]);
}

function get_query_param_from_url($url, $param){
    $gets = parse_url($url);
    if (array_key_exists ('query', $gets)){
        $queryArray = explode('&', $gets['query']);
        foreach($queryArray as $query){
            list($key, $value) = explode('=', $query);
            if ($key==$param){
                return $value;
            }
        }
        return 0;
    }
}

function add_param($url, $name, $value) {
    if(strpos($url,'?') !== false)
        $sep = '&';
    else
        $sep = '?';
    return $url . $sep . $name . "=" . urlencode($value);
}


function render_content($pageId=0){
    global $language;
    $pagesById =[
        0=>'home.php',
        1=>'coffee.php',
        2=>'machines.php',
        3=>'accessories.php',
        4=>'about.php',
        5=>'contact.php',
        6=>'cart.php',
        7=>'profile.php',
        8=>'login.php',
        9=>'product.php',
        10=>'register.php',
        11=>'pricelist.php',
        12=>'buy.php',
        13=>'shipping.php'
    ];
    include $pagesById[$pageId];
}

function show_bestselling_products($product_ids, $language){
    $text = ['en'=>'Our best selling products', 'de'=>'Unsere Bestseller'];
    global $products;
    include 'data.php';
    echo '<div class="product-display">';
    echo '<div class="center"><h2>'.$text[$language].'</h2></div>';
    echo '<ul>';
    foreach ($product_ids as $id){
        $product = $products[$id];
        $product_url = add_param($product['link'], 'lang', $language);
        echo '<li>';
        echo '<div class="product-item"><img src="'.$product['img_link'].'" class="product-image-small"><span
                        class="product-caption"><a href="'.$product_url.'">'.$product['title'][$language].'</a></span>
            </div>
        </li>';}
    echo'</ul>';
    echo '</div>';

}

function show_pricelist($language){

    global $products;
    include 'data.php';
    $colormap = array('coffee'=>'lightblue',  'machine'=>'lightpink', 'accessory'=>'lightcoral');
    echo'<div id="pricelist" class="center">';
    echo'<table>';
    foreach($products as $id=> $product){
        echo'<tr>';
        echo'<tr style="background-color:'.$colormap[$product['category']].'">';
        echo'<td>'.$product['title'][$language].'</td>';
        if($product['price_unit']){
             echo'<td>'.$product['price_per_unit'].'/'.$product['price_unit'][$language].'</td>';
        }
        else{
              echo'<td>'.$product['price_per_unit'].'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
    }



function show_products($category, $language){

    global $products;
    include 'data.php';
    $filtered_products = array_filter($products, function($x) use($category){
        return $x['category']==$category;
    });
    include('data.php');
    echo '<table class="table-product-display">';
    $counter = 0;
    foreach($filtered_products as $id=>$product){
            if(($counter)%3==0){
                echo '<tr>';
            }
            echo '<td>';
            echo '<div class="product-item"><img src="'.$product['img_link']. '" class="product-image-medium"><span
                        class="product-caption"><a href="'.$product['link']. '">'.$product['title'][$language].'</a></span>
                    <span class="price-tag">'.get_price($product, $language).'</span>';
            echo'</div>';
            echo'</td>';
            if(($counter+1)%3==0){
                echo '</tr>';
            }
        $counter=$counter+1;
    }
    echo '</table>';
}

function get_price($product, $language){
    if (is_int($product['price_per_unit'])){
        $pricestr = $product['price_per_unit'].'.-';
    }
    else{
        $pricestr = $product['price_per_unit'];
    }
    if($product['price_unit']) {
        $per_unit_str = '/'.$product['price_unit'][$language];
    }
    else {
        $per_unit_str = '';
    }

    return $pricestr.$per_unit_str;
}

function languages($language, $pageId){
    $product_id = get_param('productId');
    $languages = ['de'=>'img/ch.svg', 'en'=>'img/gb.svg'];
    $urlbase = add_param($_SERVER['PHP_SELF'], 'id', $pageId);
    echo '<div class="language-icon-container">';
    foreach($languages as $l=>$flaglink){
        $class= $language == $l ? 'lang-active' : 'lang-inactive';
        //Depending on whether we have a productId in the URL, the current URL looks different
        if($product_id>0) {
            $new_url = add_param(add_param($urlbase, 'lang', $l), 'productId', $product_id);
        }
        else{
            $new_url = add_param($urlbase, 'lang', $l);
        }
        echo '<a href="';
        echo $new_url.'">';
        echo '<img class="flag-icon '.$class.'"  src="'.$flaglink.'"></img>'.'</a>';
    }
    echo '</div>';
}

function navigation($pageId, $language){
    global $language;
    include 'nav.php';
    return;
}
function productpage($product_array, $language){
 echo '<h2>'.$product_array['title'][$language].'</h2>';
 echo '<div class="product-info-upper">';
 echo  '<div class="item-image-container">';
 echo '<img class="single-product-image" src="'.$product_array['img_link'].'"></div>';
 echo '<div class="item-details">';
 echo '<label class="pricelabel">'.get_price($product_array, $language).'</label><br>';
 $url_buy ='menu.php?id=12';
 $url_buy = add_param($url_buy, 'lang', $language);
 $url_buy = add_param($url_buy, 'productId', $product_array['id']);
 echo '<button class="standardbtn"><a class="btn-link" href="'.$url_buy.'">Buy Now</a></button>';
 echo get_product_description($product_array, $language);
 echo '</div>';
}

function get_product_description($product_array, $language){
    $points_of_description = ['origin'=>['en'=>'Origin', 'de'=>'Herkunft'],
                                'altitude'=>['en'=>'Growing Altitude', 'de'=>'Anbauhöhe'],
                                'masl'=>['en'=>'masl', 'de'=>'müM']];
    echo '<div class="product-description"><p>';
    if($product_array['category']=='coffee'){
            echo $points_of_description['origin'][$language].': '.$product_array['origin'][$language].'<br>';
            echo $points_of_description['altitude'][$language].': '.$product_array['growing_altitude'].$points_of_description['masl'][$language].'<br>';
            }
            echo $product_array['description'][$language].'</p>';


    }





function translate_navigation($key, $language='en'){
    $navigation = [
        'coffee'=>['en'=>'Coffee', 'de'=>'Kaffee'],
        'machines'=>['en'=>'Machines', 'de'=>'Maschinen'],
        'accessories'=>['en'=>'Accessories', 'de'=>'Zubehör'],
        'about' =>['en'=>'About', 'de'=>'Über Uns'],
        'contact' =>['en'=>'Contact', 'de'=>'Kontakt'],
        'cart'=>['en'=>'Shopping Cart', 'de'=>'Warenkorb'],
        'my account' =>['en'=>'My Account', 'de'=>'Mein Konto'],
        'register'=>['en'=>'Register', 'de'=>'Registrieren'],
        'login'=>['en'=>'Login', 'de'=>'Anmelden'],
        'profile'=>['en'=>'Profile', 'de'=>'Profil']


    ];
    return $navigation[$key][$language];
}

