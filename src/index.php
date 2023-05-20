<?php

//Inicio de sesión

session_start ();


use model\Jugador;
use \model\Utils;

//Añadimos el código del modelo
require_once("./model/Jugador.php");
require_once("./model/utils.php");
$inf_ms=null;
$gestor = new Jugador();

//Nos conectamos a la Bd
$conexPDO = Utils::conectar();
//Recolectamos los datos de los jugadores
$datosJugador = $gestor->getJugador($conexPDO, true, $pag);
//Obtenemos el número total de jugadores de la base de datos sin importar cuantos muestre en el array
$numJugadores = $gestor->numeroJugadores($conexPDO);
$numJugadores = intval($numJugadores[0]);


include("./views/main_page.php");

?>