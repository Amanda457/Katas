<?php 

$cadena1 = "(3 + 4) * 2";
$cadena2 = "(5 + 3) * (3 - 1)";
$cadena3 = "(5 + 3 * (3 - 1)";

function convertStringToArray (string $string) : array {

    $newArray = str_split($string);
    return $newArray;
}

function countParenthesis (array $array, string $character) : int {
    $quantity = 0;

        foreach ($array as $posicion) {
            if ($posicion == $character){
                ++$quantity;
            }
        }
    return $quantity;
}


function countParenthesisLeft (array $array) : int{
   
    $countLeft = countParenthesis($array, "(");
  
    return $countLeft;
}

function countParenthesisRight (array $array):int{
    $countRight = countParenthesis($array, ")");
  
    return $countRight;
}

function compareParenthesis (int $int1, int $int2) : void {
    if ($int1 == $int2){
        echo "Correcte".PHP_EOL;
    } else{
        echo "Incorrecte".PHP_EOL;
    }
}

function comproveRightParenthesis ( string $string): void {

    $array = convertStringToArray ($string);
    $leftParenthesis = countParenthesisLeft($array);
    $rightParenthesis = countParenthesisRight($array);
    compareParenthesis ($leftParenthesis, $rightParenthesis);
}

comproveRightParenthesis($cadena1);
comproveRightParenthesis($cadena2);
comproveRightParenthesis($cadena3);