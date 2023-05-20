<?php

use model\Jugador;
use model\Personaje;
use \model\Utils;

//Añadimos el código del modelo
require_once("../model/Jugador.php");
require_once("../model/utils.php");
require_once("../model/Personaje.php");





//Recuperamos del get la id del jugador
if (isset($_GET["idJugador"])) {

    $gestorJ = new Jugador();

    $gestorP = new Personaje();

    //Nos conectamos a la Bd
    $conexPDO = Utils::conectar();

    //Recolectamos los datos del jugador y de los personajes cuya ID de jugador coincidan
    $datosJugadorID = $gestorJ->getJugadorID($_GET["idJugador"],$conexPDO);
    $datosPersonajes = $gestorP->getPersonajeID($_GET["idJugador"],$conexPDO);

    //Llamamos a la vista en la que se han usado los datos obtenidos

    include("../views/tarjetaDetalles.php");
} else
    print("Error de carga");
