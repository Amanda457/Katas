<?php

function calcularQuadrat(int $num): string{

    $resultat = $num * $num;
    $missatgeQ = "Quadrat: " . $resultat . PHP_EOL;
    return $missatgeQ;
}

function calcularCub(int $num): string{

    $resultat = $num * $num * $num;
    $missatgeC = "Cub: " . $resultat . PHP_EOL;
    return $missatgeC;
}

function calcularFactorial(int $num): string{
    $resultat = $num;
    for ($i = 1; $i < $num; $i++) {
        $resultat = $resultat * $i;
    }

    $missatgeF = "Factorial: " . $resultat . PHP_EOL;
    return $missatgeF;
}

function imprimirCalculs(int $num): string{
    $quadrat = calcularQuadrat($num);
    $cub = calcularCub($num);
    $factorial = calcularFactorial($num);

    return $missatge = "Numero: " . $num . PHP_EOL . $quadrat . $cub . $factorial . PHP_EOL;
}

function openAndWriteCalc (int $num) : void{
    $calculs = imprimirCalculs($num);
    $fp = fopen("calculs_$num.txt", "w");
    fwrite($fp, $calculs);
}

openAndWriteCalc(5);
