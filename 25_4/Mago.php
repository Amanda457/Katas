<?php

use PhpParser\Node\Expr\Print_;
require_once "Jugador.php";
class Mago extends Jugador{
    public array $hechizos;


    public function __construct(string $nickname, int $x, int $y){
        parent::__construct($nickname, $x, $y);
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
                echo "Tendré que repasarme la enciclopedia de hechizos...<br> ";
            }
        }
    }
}
?>