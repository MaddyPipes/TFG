<?php

use model\Jugador;
use model\Personaje;
use \model\Utils;

session_start();

//Añadimos el código del modelo
require_once("../model/Jugador.php");
require_once("../model/Personaje.php");
require_once("../model/utils.php");
$inf_ms=null;
$gestorPersonaje = new Personaje();

//Nos conectamos a la Bd
$conexPDO = Utils::conectar();

//Borramos al jugador

if(isset($_POST["id"])){

    $result = $gestorPersonaje->delPersonaje(intval($_POST["id"]), intval($_SESSION['user_id']), $conexPDO);

}
?>