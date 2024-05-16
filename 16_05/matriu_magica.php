<?php 

$magicSquare = [2,7,6,9,5,1,4,3,8];
$magicSquare2 = [3,7,6,9,5,1,4,3,8];

/* OLD STYLE CON ARRAY SIMPLE
function comprovarMagicSquare (array $array) : void {

    if (($array[0]+$array[1]+ $array[2]) === ($array[3]+$array[4]+ $array[5]) && ($array[3]+$array[4]+ $array[5]) === ($array[6]+$array[7]+ $array[8])){
        //echo "files ok".PHP_EOL;
        if ( ($array[0]+$array[3]+ $array[6]) === ($array[1]+$array[4]+ $array[7]) && ($array[1]+$array[4]+ $array[7]) === ($array[2]+$array[5]+ $array[8])){
           //echo "columnes ok".PHP_EOL;
            if (  ($array[0]+$array[4]+ $array[8]) === ($array[2]+$array[4]+ $array[6])){
                echo "És una matriu màgica!".PHP_EOL;
            } else {
                echo "No és una matriu màgica!".PHP_EOL;
                }
        }else {
            echo "No és una matriu màgica!".PHP_EOL;}
    }else {
        echo "No és una matriu màgica!".PHP_EOL;
    }
}*/

function sumarFiles (array $array) : array {
    $fila1 = $array[0]+$array[1]+ $array[2];
    $fila2 = $array[3]+$array[4]+ $array[5];
    $fila3 = $array[6]+$array[7]+ $array[8];

    $valorFiles = [$fila1, $fila2, $fila3];

    return $valorFiles;
}

function sumarColumnes (array $array) : array {
    $columna1 = $array[0]+$array[3]+ $array[6];
    $columna2 = $array[1]+$array[4]+ $array[7];
    $columna3 = $array[2]+$array[5]+ $array[8];

    $valorColumnes = [$columna1, $columna2, $columna3];

    return $valorColumnes;
}

function sumarDiagonals (array $array) : array {
    $diagonal1 = $array[0]+$array[3]+ $array[6];
    $diagonal2 = $array[1]+$array[4]+ $array[7];
 
    $valorDiagonals = [$diagonal1, $diagonal2];

    return $valorDiagonals;
}
function comprovarMagicSquare (array $array) : void {
    $files = sumarFiles($array);
    $columnes = sumarColumnes($array);
    $diagonals = sumarDiagonals($array);

    if ($files[0] === $files[1] && $files[1] === $files[2]){
        //echo "files ok".PHP_EOL;
        if ($columnes[0] === $columnes[1] && $columnes[1] === $columnes[2]){
           //echo "columnes ok".PHP_EOL;
            if ( $diagonals[0] === $diagonals [1]){
                echo "És una matriu màgica!".PHP_EOL;
            } else {
                echo "No és una matriu màgica!".PHP_EOL;
                }
        }else {
            echo "No és una matriu màgica!".PHP_EOL;}
    }else {
        echo "No és una matriu màgica!".PHP_EOL;
    }
}

comprovarMagicSquare($magicSquare);
comprovarMagicSquare($magicSquare2);
?>