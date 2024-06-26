<?php 

$cadena1 = "(3 + 4) * 2";
$cadena2 = "(5 + 3) * (3 - 1)";
$cadena3 = "(5 + 3 * (3 - 1)";

function convertStringToArray (string $string) : array {

    $newArray = str_split($string);
    return $newArray;
}

function countParenthesisLeft (array $array):int{
    $countLeft=0;
    
    for($i=0; $i<count($array); $i++){
        if( $array[$i] == '('){
            ++$countLeft;
        }
    }
    return $countLeft;
}

function countParenthesisRight (array $array):int{
    $countRight=0;
    
    for($i=0; $i<count($array); $i++){
        if( $array[$i] == ')'){
            ++$countRight;
        }
    }
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