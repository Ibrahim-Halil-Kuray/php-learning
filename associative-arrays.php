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

?>