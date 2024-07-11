<?php 

$magicSquare = [2,7,6,9,5,1,4,3,8];
$magicSquare2 = [3,7,6,9,5,1,4,3,8];

/*function sumarFiles (array $array) : array {
    $fila1 = $array[0]+$array[1]+ $array[2];
    $fila2 = $array[3]+$array[4]+ $array[5];
    $fila3 = $array[6]+$array[7]+ $array[8];

    $valorFiles = [$fila1, $fila2, $fila3];

    return $valorFiles;
}*/

function sumarFiles(array $array): array {
    $valorFiles = [];
    for ($i = 0; $i < 3; $i++) {
        $valorFiles[$i] = 0;
        for ($j = 0; $j < 3; $j++) {
            $valorFiles[$i] += $array[$i * 3 + $j];
        }
    }
    return $valorFiles;
}

function sumarColumnes(array $array): array {
    $valorColumnes = [];
    for ($i = 0; $i < 3; $i++) {
        $valorColumnes[$i] = 0;
        for ($j = 0; $j < 3; $j++) {
            $valorColumnes[$i] += $array[$j * 3 + $i];
        }
    }
    return $valorColumnes;
}

function sumarDiagonals (array $array) : array {
    $diagonal1 = $array[0]+$array[3]+ $array[6];
    $diagonal2 = $array[1]+$array[4]+ $array[7];
 
    return [$diagonal1, $diagonal2];
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