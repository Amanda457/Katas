<?php

use PhpParser\Node\Expr\Print_;
require_once "Jugador.php";
class Mago extends Jugador{
    public array $hechizos;


    public function __construct(string $nickname){
        parent::__construct($nickname);
        $this->hechizos = array();
        }

    public function añadirHechizo(string $hechizo) : void{
        $this->hechizos[] = $hechizo;
    }

    public function mostrarHechizos() : void {
        print_r($this->hechizos);
    }

    public function lanzarHechizo(string $hechizoBuscado):void{
        foreach ($this->hechizos as $hechizo) {
            if ($hechizo == $hechizoBuscado){
                echo "Abracadabra, ". $hechizoBuscado. PHP_EOL;
            } else {
                echo "Tendré que repasarme la enciclopedia de hechizos... ".PHP_EOL;
            }
        }
    }
}
?>