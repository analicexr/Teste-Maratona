
<?php

function NumeroPerfeito($n) {
    $soma = 0;

    for ($num = 1; $num < $n; $num++) {

        if ($n % $num == 0) {
            $soma = $soma + $num;
        }
    }

    if ($soma == $n) {
        return true;
    } else {
        return false;
    }
}

$n = (int) readline("Digite seu numero: ");

if (NumeroPerfeito($n)) {
    echo "True";
} else {
    echo "False";
}

?>
