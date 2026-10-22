<?php

function RemoverRepetidos($Sequencia) {
    $nova =[];

    for ($num = 0; $num < count($Sequencia); $num++) {

        if ($num == 0 || $Sequencia[$num] != $Sequencia[$num - 1]) {
            $nova[] = $Sequencia[$num];
        }
    }

    return $nova;

}

$txt = trim(readline ("Escreva sua sequência de caracteres: "));
$Sequencia = str_split($txt);
$Resultado = RemoverRepetidos($Sequencia);

echo "Resultado: ";
print_r ($Resultado);
?>