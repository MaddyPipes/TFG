<?php

use model\Jugador;
use \model\Utils;

//Añadimos el código del modelo
require_once("../model/Jugador.php");
require_once("../model/utils.php");
$inf_ms=null;
$gestor = new Jugador();

//Nos conectamos a la Bd
$conexPDO = Utils::conectar();

//Borramos al jugador

if(isset($_POST["idJugador"])){

    $result = $gestor->delJugador($_POST["idJugador"], $conexPDO);

    if($result == null || $result == 0){
        $inf_ms = "Error con la base de datos.";
    }else{
        $inf_ms = "Eliminado con éxito.";
    }

}

//Recolectamos los datos de los jugadores

$datosJugador = $gestor->getJugador($conexPDO, true, 1);
//Obtenemos el número total de jugadores de la base de datos sin importar cuantos muestre en el array
$numJugadores = $gestor->numeroJugadores($conexPDO);
$numJugadores = intval($numJugadores[0]);


include("../views/mostrarJugadores.php");

?>