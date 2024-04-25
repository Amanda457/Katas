<?php

abstract class Jugador
{
    public string $nickname;
    public int $posicionVertical;
    public int $posicionHorizontal;
  

    public function __construct(string $nickname, int $posicionVertical, int $posicionHorizontal){
        $this->$nickname = $nickname;
        $this->posicionVertical = $posicionVertical;
        $this->posicionHorizontal = $posicionHorizontal;
    }

    public function moverse()
    {
        echo "Hacia donde te quieres mover? <br> 1. Arriba <br> 2. Abajo <br> 3. Derecha <br> 4. Izquierda";
        $direccion = readline();

        switch ($direccion) {
            case '1':
                if ($this->posicionVertical < 9) {
                    ++$this->posicionVertical;
                    echo " Ahora estas en (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                } else {
                    echo "Error, no puedes subir más, tu posición actual es (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                }
                break;
            case '2':
                if ($this->posicionVertical > 0) {
                    --$this->posicionVertical;
                    echo " Ahora estas en (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                } else {
                    echo "Error, no puedes bajar más, tu posición actual es (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                }
                break;
            case '3':
                if ($this->posicionHorizontal < 9) {
                    ++$this->posicionHorizontal;
                    echo " Ahora estas en (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                } else {
                    echo "Error, no puedes ir más a la derecha, tu posición actual es (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                }
                break;
            case '4':
                if ($this->posicionHorizontal > 0) {
                    --$this->posicionHorizontal;
                    echo " Ahora estas en (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                } else {
                    echo "Error, no puedes ir más a la izquiera, tu posición actual es (" . $this->posicionVertical . "," . $this->posicionHorizontal . ").<br>";
                }
                break;
        }
    }
}
