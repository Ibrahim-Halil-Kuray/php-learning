<?php

    $item = "Iphone 14";
    $price = "1000";
    $currency = "usd";
    $taxP = 0.07;
    $totalTax = $price * $taxP; 

    //$result = $item."`s price is ".$price." ".$currency.".";
    
    $result = "{$item}`s price is {$price} {$currency}.";

    echo "<br>";

    echo $result;

    echo "<br>";

    echo "Tax : ".$totalTax;

    echo "<br>";

    echo $result[4]; // n
    echo "<br>";
    
    echo strlen($result); // 30 char len str
    echo "<br>";

    echo str_word_count($result); // 5 word
    echo "<br>";

    echo strtolower($result); // lower case
    echo "<br>";

    echo strtoupper($result); // upper case
    echo "<br>";

?>