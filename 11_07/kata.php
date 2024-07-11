<?php 

$input= "¿Has debugado ya?";
$caracter = "#";

$palabras = explode(" ", $input);
//var_dump($palabras);

function stringMasLargo (array $array) : int {

    $stringMasLargo = '';
    foreach ($array as $string) {
        if (strlen($string) > strlen($stringMasLargo)) {
            $stringMasLargo = $string;
        }
    }
    return strlen($stringMasLargo);

}

function igualarMedidaStrings (array $array) : array {
    $stringMasLargo = stringMasLargo($array);
    foreach ($array as $palabra) {
        $palabra = str_pad($palabra, $stringMasLargo, " ");
        $nuevoArray [] = $palabra;
    }
    return $nuevoArray;
}

$largura= stringMasLargo($palabras)+2;
$palabras = igualarMedidaStrings($palabras);


for ($i = 0; $i<$largura; $i++){
    echo $caracter;
}
for ($i =0; $i<3; $i++){
    echo PHP_EOL.$caracter.$palabras[$i].$caracter;

}
echo PHP_EOL;
for ($i = 0; $i<$largura; $i++){
    echo $caracter;
}


?>