<?php

function Fibonacci($n)
{
    $num1 = 0;
    $num2 = 1;

    for ($int = 1; $int <= $n; $int++) {
        echo $num1 . " ";

        $proximo = $num1 + $num2;
        $num1 = $num2;
        $num2 = $proximo;
    }
}

$n = (int) readline("Digite a quantidade de termos: ");

Fibonacci($n);
?>