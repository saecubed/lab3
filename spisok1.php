<?php

$array = array(
    'Ингредиенты',
    'Мед - 140г',
    'Сливочное масло - 32г',
    'Куриное яйцо - 2 штуки',
    'Сахар - 2 столовые ложки',
    'Пшеничная мука - 8,5 столовых ложек',
    'Сода - по вкусу',
    'Сметана 20%-ная - 6 столовых ложек',
    'Сахарная пудра - 2,5 столовые ложки'
);

echo '<h2><strong>' . $array[0] . '</h2></strong>' . '<ul><li>' . 
    implode('</li><li>', array_slice($array, 1, 8)) . '</li></ul>';
?>