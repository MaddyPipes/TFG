<?php

//Inicio de sesión

session_start();

use model\Personaje;
use \model\Utils;

if (isset($_SESSION['idPJ'])) {

    require_once("./model/Personaje.php");
    require_once("./model/utils.php");

    $gestorPersonaje = new Personaje();

    $idPersonaje = intval($_SESSION['idPJ']);
    $personaje = $gestorPersonaje->getPersonaje($idPersonaje, $conexPDO);

    $conexPDO = utils::conectar();

    $personaje["COMPETENCIAS"] = unserialize($personaje["COMPETENCIAS"]);
    $personaje["SALVACIONES"] = unserialize($personaje["SALVACIONES"]);


    include("../views/vistaDYD.php");
}