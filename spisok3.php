<?php

$array = array(
    'Ингредиенты',
    'Молоко - 200мл',
    'Сливки Parmalat CHEF 35% - 500мл',
    'Сахар - 70г',
    'Мед - 70г',
    'Яичные желтки - 4 штуки',
    'Голубика - 200г',
    'Лаванда - 1,5 столовой ложки'
);

echo '<h2><strong>' . $array[0] . '</h2></strong>' . '<ul><li>' . 
    implode('</li><li>', array_slice($array, 1, 7)) . '</li></ul>';
?>