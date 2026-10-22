<?php
function ContarDivisores($n) {
    $cont = 0;

    for ($num = 1; $num <= $n; $num++) {

        if ($n % $num == 0){
            $cont++;
        }
    }

    return $cont;
}

$n = (int) readline  ("Digite seu número: ");

echo "Quantidade de divisores: ". ContarDivisores($n);

?>