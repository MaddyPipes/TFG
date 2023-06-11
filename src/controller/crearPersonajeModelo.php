<?php

session_start();

use \model\Jugador;
use model\Personaje;
use \model\Utils;
//Creamos un array para guardar los datos del personaje


//Si nos llegan datos de un personaje, implica que es el formulario el que llama al controlador
if (isset($_POST["juegoPersonaje"])) {
    //rellenamos los datos del personaje que le pasaremos a la vista

    //Creamos un array para guardar los datos del personaje
    $personaje = array();

    //rellenamos los datos del personaje que nos pasa la vista, stripeandolo de inyecciones de código

    $personaje["idJugador"] = intval($_SESSION['user_id']);
    $personaje["nombre"] = $_POST["nombre"];
    $personaje["raza"] = $_POST["raza"];
    $personaje["clase"] = $_POST["clase"];
    $personaje["nivel"] = $_POST["nivel"];
    $personaje["ilustracion"] = $_POST["picture"];
    $personaje["stat1"] = $_POST["hp"];
    $personaje["stat2"] = $_POST["ca"];
    $personaje["stat3"] = $_POST["fuerza"];
    $personaje["stat4"] = $_POST["constitucion"];
    $personaje["stat5"] = $_POST["destreza"];
    $personaje["stat6"] = $_POST["inteligencia"];
    $personaje["stat7"] = $_POST["sabiduria"];
    $personaje["stat8"] = $_POST["carisma"];
    $personaje["salvaciones"] = serialize($_POST["salvaciones"]);
    $personaje["competencias"] = serialize($_POST["competencias"]);


    //Añadimos el código del modelo
    require_once("../model/Personaje.php");
    require_once("../model/utils.php");

    $gestorPersonaje = new Personaje();

    //Nos conectamos a la Bd
    $conexPDO = Utils::conectar();

    //Modificamos el registro
    $resultado = $gestorPersonaje->addPersonaje($personaje, $conexPDO);

    // Si ha ido bien el mensaje sera distint
    if ($resultado != null)
        $inf_ms = "El personaje se ha insertado Correctamente";
    else {
        $inf_ms = "Ha habido un fallo al acceder a la Base de Datos";
    }

    $personajes = $gestorPersonaje->getPersonajeID($_SESSION["user_id"], $conexPDO);
    for ($i = 0; $i < count($personajes); $i++) {
        $personajes[$i]["COMPETENCIAS"] = unserialize($personajes[$i]["COMPETENCIAS"]);
        $personajes[$i]["SALVACIONES"] = unserialize($personajes[$i]["SALVACIONES"]);
    }
    include("../views/main_page.php");
}
if (isset($_POST["editarPersonaje"])) {
    //rellenamos los datos del personaje que le pasaremos a la vista

    //Creamos un array para guardar los datos del personaje
    $personaje = array();

    //rellenamos los datos del personaje que nos pasa la vista, stripeandolo de inyecciones de código

    $personaje["idJugador"] = intval($_SESSION['user_id']);
    $personaje["nombre"] = $_POST["nombre"];
    $personaje["raza"] = $_POST["raza"];
    $personaje["clase"] = $_POST["clase"];
    $personaje["nivel"] = $_POST["nivel"];
    $personaje["ilustracion"] = $_POST["picture"];
    $personaje["stat1"] = $_POST["hp"];
    $personaje["stat2"] = $_POST["ca"];
    $personaje["stat3"] = $_POST["fuerza"];
    $personaje["stat4"] = $_POST["constitucion"];
    $personaje["stat5"] = $_POST["destreza"];
    $personaje["stat6"] = $_POST["inteligencia"];
    $personaje["stat7"] = $_POST["sabiduria"];
    $personaje["stat8"] = $_POST["carisma"];
    $personaje["salvaciones"] = serialize($_POST["salvaciones"]);
    $personaje["competencias"] = serialize($_POST["competencias"]);


    //Añadimos el código del modelo
    require_once("../model/Personaje.php");
    require_once("../model/utils.php");

    $gestorPersonaje = new Personaje();

    //Nos conectamos a la Bd
    $conexPDO = Utils::conectar();

    //Modificamos el registro
    $resultado = $gestorPersonaje->updatePersonaje($personaje, $conexPDO);

    // Si ha ido bien el mensaje sera distint
    if ($resultado != null)
        $inf_ms = "El personaje se ha insertado Correctamente";
    else {
        $inf_ms = "Ha habido un fallo al acceder a la Base de Datos";
    }

    $personajes = $gestorPersonaje->getPersonajeID($_SESSION["user_id"], $conexPDO);
    for ($i = 0; $i < count($personajes); $i++) {
        $personajes[$i]["COMPETENCIAS"] = unserialize($personajes[$i]["COMPETENCIAS"]);
        $personajes[$i]["SALVACIONES"] = unserialize($personajes[$i]["SALVACIONES"]);
    }
    include("../views/main_page.php");
}
if (isset($_POST["editarPJ"])) {
    require_once("../model/Personaje.php");
    require_once("../model/utils.php");

    //Nos conectamos a la Bd
    $conexPDO = Utils::conectar();
    $gestorPersonaje = new Personaje();

    $idPJ = intval($_POST["idPJ"]);

    $personaje = $gestorPersonaje->getPersonaje($idPJ, $conexPDO);

    $personaje["SALVACIONES"] = unserialize($personaje["SALVACIONES"]);
    $personaje["COMPETENCIAS"] = unserialize($personaje["COMPETENCIAS"]);

    include("../views/crearPersonajeDYD.php");
}
if(!isset($_POST["editarPersonaje"]) && isset($_POST["crearPersonaje"])) {
    //Sin datos del personaje cargados cargamos la vista
    include("../views/crearPersonajeDYD.php");
}
