<?php
require_once "Jugador.php";
class Arquero extends Jugador{
    public string $arco;
    public int $flechas;

    public function __construct(string $nickname, string $arco, int $flechas){
        parent::__construct($nickname);
        $this->arco = $arco;
        $this->flechas = $flechas;
    }

    public function lanzarFlecha(): void{
        if ($this->flechas > 0) {
            --$this->flechas;
            echo "Ui, eres una diana perfecta, toma!!".PHP_EOL;
        } else {
            echo "Recorcholis, no tengo más flechas TT_TT".PHP_EOL;
        }
    }
}
