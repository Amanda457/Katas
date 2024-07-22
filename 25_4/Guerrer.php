<?php
require_once "Jugador.php";
class Guerrer extends Jugador
{
    public string $arma;

    public function __construct(string $nickname, string $arma){
        parent::__construct($nickname);
        $this->arma = $arma;
    }

    public function atacar(): void {
        echo "Yo te rajo con mi " . $this->arma . " . AAAAAAAAHHH!".PHP_EOL;
    }

    public function correr() : void {
        $this->moverse(2);
    }
}
?>