<?php
mb_internal_encoding("UTF-8");

$input = "¿Has debugado ya?";
$caracter = "#";

$palabras = explode(" ", $input);

function stringMasLargo(array $array): int
{
    $stringMasLargo = '';
    foreach ($array as $string) {
        if (mb_strlen($string) >  mb_strlen($stringMasLargo)) {
            $stringMasLargo = $string;
        }
    }
    return  mb_strlen($stringMasLargo);
}

function mb_str_pad($input, $pad_length, $pad_string = ' ')
{
    $diff = strlen($input) - mb_strlen($input);
    return str_pad($input, $pad_length + $diff, $pad_string);
}

function igualarMedidaStrings(array $array): array
{
    $stringMasLargo = stringMasLargo($array);
    foreach ($array as $palabra) {
        $palabra = ' ' . mb_str_pad($palabra, $stringMasLargo, " ");
        $nuevoArray[] = $palabra;
    }
    return $nuevoArray;
}

$largura = stringMasLargo($palabras);

function imprimirFilaMarco(string $caracter, array $array): void
{
    $largura = stringMasLargo($array) + 3;
    for ($i = 0; $i < $largura; $i++) {
        echo $caracter;
    }
}

$palabrasIgualadas = igualarMedidaStrings($palabras);

imprimirFilaMarco($caracter, $palabrasIgualadas);
echo PHP_EOL;
for ($i = 0; $i < count($palabrasIgualadas); $i++) {
    echo  $caracter . $palabrasIgualadas[$i] . " " . $caracter.PHP_EOL;
}

imprimirFilaMarco($caracter, $palabrasIgualadas);
