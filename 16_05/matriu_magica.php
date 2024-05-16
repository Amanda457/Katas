<?php 

$magicSquare = [2,7,6,9,5,1,4,3,8];

$magicSquare2 = [3,7,6, 9,5,1, 4,3,8];

function comprovarMagicSquare ($array) : void {

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
}

comprovarMagicSquare($magicSquare);
comprovarMagicSquare($magicSquare2);
?>