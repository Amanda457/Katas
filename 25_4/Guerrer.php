<?php
require_once "Jugador.php";
class Guerrer extends Jugador
{
    public string $arma;

    public function __construct(string $nickname, int $x, int $y, string $arma){
        parent::__construct($nickname, $x, $y);
        $this->arma = $arma;
    }

    public function atacar(): void {
        echo "Yo te rajo con mi " . $this->arma . " . AAAAAAAAHHH!".PHP_EOL;
    }

    public function correr():void {
        echo "Hacia donde quieres correr? <br> 1. Arriba <br> 2. Abajo <br> 3. Derecha <br> 4. Izquierda".PHP_EOL;
        $direccion = readline();
        
        switch ($direccion) {
            case '1':
                if ($this->posicionVertical <7){
                    $this->posicionVertical= $this->posicionVertical + 2;
                    echo " Ahora estas en (".$this->posicionVertical. ",".$this->posicionHorizontal.").<br>";
                } else{
                    echo "Error, prueba a caminar, tu posición actual es (".$this->posicionVertical. ",".$this->posicionHorizontal.").<br>";
                }
                break;
            case '2':
                if ($this->posicionVertical >2){
                    $this->posicionVertical= $this->posicionVertical - 2;
                    echo " Ahora estas en (".$this->posicionVertical. ",".$this->posicionHorizontal.").<br>";
                } else{
                    echo "Error, no puedes bajar corriendo así, tu posición actual es (".$this->posicionVertical. ",".$this->posicionHorizontal.").<br>";
                }
                break;
            case '3':
                if ($this->posicionHorizontal <7){
                    $this->posicionHorizontal=  $this->posicionHorizontal + 2;
                    echo " Ahora estas en (".$this->posicionVertical. ",".$this->posicionHorizontal.").<br>";
                } else{
                    echo "Error, no corras tanto, pueba caminar, tu posición actual es (".$this->posicionVertical. ",".$this->posicionHorizontal.").<br>";
                }
                break;
            case '4':
                if ($this->posicionHorizontal >2){
                    $this->posicionHorizontal=  $this->posicionHorizontal - 2;
                    echo " Ahora estas en (".$this->posicionVertical. ",".$this->posicionHorizontal.").<br>";
                } else{
                    echo "Error, deja de correr, tu posición actual es (".$this->posicionVertical. ",".$this->posicionHorizontal.").<br>";
                }
                break;
           }
    }
}
?>