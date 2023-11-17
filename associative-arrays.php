<?php

// key - value
// 80 => Osm

$keys = array('21', '80', '34', '06');
$cities = array('Diyarbakir', 'Osmaniye', 'Istanbul', 'Ankara');

$cityKeys = array(
    '21' =>'Diyarbakir',
    '80' =>'Osmaniye',
    '34' =>'Istanbul',
    '06' =>'Ankara'
);

echo $cityKeys["21"].'<br>'; // Diyarbakir
echo $cityKeys["06"].'<br>'; // Ankara

$phoneNumbers = [
    'Alex'=> '076111',
    'Micahel'=> '078222',
    'Oleg'=> '0771234',
];

echo $phoneNumbers['Oleg'].'<br>'; // Oleg`s Phone Number

$item = [
    'name'=> 'Iphone 14',
    'price'=> '1000',
    'currency' => 'Chf',
    'available'=> true,
];

echo $item['name']."`s price is ".$item['price']." ".$item['currency'].'<br>';


$items = [
    [
        'name'=> 'Iphone 14',
        'price'=> '1000',
        'currency' => 'Chf',
        'available'=> true,
    ],
    [
        'name'=> 'Iphone 15',
        'price'=> '1100',
        'currency' => 'Chf',
        'available'=> true,
    ],
    [
        'name'=> 'Iphone 16',
        'price'=> '1200',
        'currency' => 'Chf',
        'available'=> true,
    ],
];

echo $items[2]['name'].'<br>';
?>