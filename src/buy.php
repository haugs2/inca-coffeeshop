<?php
$product_id = get_param('productId',0);
$title = ['en' => 'Choose your options', 'de' => 'Wählen Sie Ihre Optionen'];
$option_dict = ['color' => ['en' => 'Color', 'de' => 'Farbe'], 'size' => ['en' => 'Size', 'de' => 'Grösse'],
    'consistence' => ['en' => 'Consistence', 'de' => 'Beschaffenheit'],
    'pattern'=>['en'=>'Pattern', 'de'=>'Muster']];
$submit = ['en'=>'Add to basket', 'de'=>'Dem Warenkorb hinzufügen'];
include 'data.php';
echo '<form method="post">';
echo '<h3>' . $title[$language] . '</h3>';
$product = $products[$product_id];
$options = $product['options'];
foreach ($options as $name => $option_arr) {
    echo'<div class="select-container">';
    if($name=='consistence'){
        foreach($option_arr as $option){
            echo'<input type="radio" id="'.$option[$language].'" name="'.$name.'" value="'.ucwords($option[$language]).'">';
            echo'<label for="'.$option[$language].'">'.ucwords($option[$language]).'</label><br>';

        }
        echo '</div>';
    }
    else{

    echo '<label class="option-label">'.$option_dict[$name][$language].':</label>';
    echo '<select class="product-option-select" name="' . $option_dict[$name][$language] . '">';
    foreach ($option_arr as $option) {
        echo '<option value="' . $option[$language] . '">' . ucwords($option[$language]) . '</option>';
    }
    echo '</select>';
    echo '</div>';
    }
}

echo '<input type="submit" value="'.$submit[$language].'" />';
echo '</form>';