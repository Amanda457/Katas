<?php
abstract class Jugador
{
    public string $nickname;
    public int $posicionVertical = 0;
    public int $posicionHorizontal = 0;
    const LIMITE_SUPERIOR = 9;
    const LIMITE_INFERIOR = 0;
  

    public function __construct(string $nickname){
        $this->$nickname = $nickname;
        $this->posicionVertical = 0;
        $this->posicionHorizontal = 0;
    }

    public function moverse(int $pasos = 1):void{
    
        echo "Hacia donde te quieres mover?" .PHP_EOL. "1. Arriba ".PHP_EOL. "2. Abajo" .PHP_EOL. "3. Derecha ".PHP_EOL. "4. Izquierda".PHP_EOL;
        $direccion = readline();

        switch ($direccion) {
            case '1':
                $this->mover(0, $pasos, 'Arriba');
                break;
            case '2':
                $this->mover(0, -$pasos, 'Abajo');
                break;
            case '3':
                $this->mover($pasos, 0, 'Derecha');
                break;
            case '4':
                $this->mover(-$pasos, 0, 'Izquierda');
                break;
            default:
                echo "Dirección no válida".PHP_EOL;
                break;
        }

    }

    private function mover(int $pasoHorizontal, int $pasoVertical, string $direccion): void {
        $nuevaPosicionVertical = $this->posicionVertical + $pasoVertical;
        $nuevaPosicionHorizontal = $this->posicionHorizontal + $pasoHorizontal;

        if ($this->esPasoPermitido($nuevaPosicionVertical, $nuevaPosicionHorizontal)) {
            $this->posicionVertical = $nuevaPosicionVertical;
            $this->posicionHorizontal = $nuevaPosicionHorizontal;
            echo "Ahora estas en (" . $this->posicionVertical . "," . $this->posicionHorizontal . ")".PHP_EOL;
        } else {
            echo "PARAA!!, no puedes moverte más dirección " . $direccion . ", tu posición actual es (" . $this->posicionVertical . "," . $this->posicionHorizontal . ")".PHP_EOL;
        }
    }
        private function esPasoPermitido(int $nuevaPosicionVertical, int $nuevaPosicionHorizontal): bool {
            return $nuevaPosicionVertical >= self::LIMITE_INFERIOR && $nuevaPosicionVertical <= self::LIMITE_SUPERIOR &&
                   $nuevaPosicionHorizontal >= self::LIMITE_INFERIOR && $nuevaPosicionHorizontal <= self::LIMITE_SUPERIOR;
        }





        /*switch ($direccion) {
            case '1':
                if ($this->posicionVertical < 9) {
                    $this->posicionVertical = $this->posicionVertical + $pasos;
                    echo " Ahora estas en (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                } else {
                    echo "Error, no puedes subir más, tu posición actual es (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                } break;
            case '2':
                if ($this->posicionVertical > 0) {
                    $this->posicionVertical = $this->posicionVertical - $pasos;;
                    echo " Ahora estas en (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                } else {
                    echo "Error, no puedes bajar más, tu posición actual es (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                } break;
            case '3':
                if ($this->posicionHorizontal < 9) {
                    $this->posicionHorizontal.=$pasos;
                    echo " Ahora estas en (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                } else {
                    echo "Error, no puedes ir más a la derecha, tu posición actual es (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                } break;
            case '4':
                if ($this->posicionHorizontal > 0) {
                    $this->posicionHorizontal = $this->posicionHorizontal - $pasos;
                    echo " Ahora estas en (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                } else {
                    echo "Error, no puedes ir más a la izquiera, tu posición actual es (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                } break;
        }*/
    }

