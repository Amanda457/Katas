<?php

$archivo = "loveIsAwful.txt";
$gestor = fopen($archivo, "r");
$contenido = fread($gestor, filesize($archivo));
//echo $contenido;

$arrayTexto = explode(" ", $contenido);

function imprimirPalabrasQueContienenLetras(array $arrayTexto): void
{
    $caracter = "t";
    echo "Palabras que contienen la letra ".$caracter.PHP_EOL;
    
    foreach ($arrayTexto as $palabra) {
        if (strpos($palabra, $caracter)) {
            echo $palabra . PHP_EOL;
        }
    }
}

function imprimirPalabrasQueInicianConVocal(array $arrayTexto): void{

    $vocales = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
    echo "Palabras que empiezan con vocal:".PHP_EOL;
    foreach ($arrayTexto as $palabra) {
        if (in_array(mb_substr($palabra, 0, 1), $vocales)) {
            echo $palabra.PHP_EOL;
        }
    }
}
imprimirPalabrasQueContienenLetras($arrayTexto);
imprimirPalabrasQueInicianConVocal($arrayTexto);

fclose($archivo);
?>