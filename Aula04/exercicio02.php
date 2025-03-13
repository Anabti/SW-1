<?php
    $num1 = $_GET["cxnumero1"];
    $num2 = $_GET["cxnumero2"];
    $num3 = $_GET["cxnumero3"];

    $max = max($num1, $num2, $num3);
    echo"Seu maior número é: $max"
?>
