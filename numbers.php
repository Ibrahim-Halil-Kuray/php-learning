<?php

    $number1 = 12;
    $number2 = 18;
    $number3 = 1.1;

    echo "Result : ".($number1 + $number2)."<br>"; // 30
    echo "Result : ".($number1 - $number2)."<br>"; // -6
    echo "Result : ".($number1 * $number2)."<br>"; // 216
    echo "Result : ".($number1 / $number2)."<br>"; // 0.66

    echo is_int($number1)."<br>"; // 1 (true)

    echo is_int($number3)."<br>"; // 0 (false but result is not visible) double

    echo var_dump(is_int($number3))."<br>"; // bool(false) variable type and the value.

    echo ceil(4.1)."<br>"; // 5
    echo ceil(4.9)."<br>"; // 5

    echo floor(4.9)."<br>"; // 4
    echo floor(4.1)."<br>"; // 4

    echo round(4.4)."<br>"; // 4
    echo round(4.6)."<br>"; // 5


    echo sqrt(25)."<br>"; // 5
    echo abs(-25)."<br>"; // 25

?>