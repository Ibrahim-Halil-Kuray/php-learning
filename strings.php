<?php

    $item = "Iphone 14";
    $price = "1000";
    $currency = "usd";
    $taxP = 0.07;
    $totalTax = $price * $taxP; 

    $result = $item."`s price is ".$price." ".$currency.".";
    
    $result2 = "{$item}`s price is {$price} {$currency}.";

    echo $result;

    echo "<br>";

    echo $result2;

    echo "<br>";

    echo "Tax : ".$totalTax;
?>