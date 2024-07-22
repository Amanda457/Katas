<?php 
require_once "Mago.php";
require_once "Arquero.php";
require_once "Guerrer.php";
require_once "Jugador.php";

$mago1 = new Mago ("Merlin", 1, 2);
$arquero1 = new Arquero("Legolas", 0, 6, "Palocuerda", 4);
$guerrero1 = new Guerrer("Ricchi", 8, 2, "Scalibbur");

$mago1->añadirHechizo("Congelancius");
$mago1->añadirHechizo("Abrilesaguasmiles");
$mago1->añadirHechizo("Fuegomiserus");

$mago1->moverse();
$mago1->mostrarHechizos();
$mago1-> lanzarHechizo("locatis");

$arquero1->lanzarFlecha();
$guerrero1->atacar();
$guerrero1->correr();
$guerrero1->correr();
?>