<?php

function myCalculator($num01, $oper, $num02) {
    $sum;
    switch ($oper) {
        case 'add':
            $sum = $num01 + $num02;
            break;
        case 'sub':
            $sum = $num01 - $num02;
            break;
        default:
            $sum = "There was an error!"
            break;
    }
    return $sum;
}

$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "Value: ". myCalculator($num01, $oper, $num02);

/*  
tihs is the php files ,
and it will get move file in future.
*/

// it has problem with connenting it will be solved later


