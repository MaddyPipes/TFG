<?php

session_start();

use \model\Jugador;
use model\Personaje;
use \model\Utils;
//Creamos un array para guardar los datos del personaje


//Si nos llegan datos de un personaje, implica que es el formulario el que llama al controlador
if (isset($_POST["crearPersonaje"])) {
    //rellenamos los datos del personaje que le pasaremos a la vista

    //Creamos un array para guardar los datos del personaje
    $personaje = array();

    //rellenamos los datos del personaje que nos pasa la vista, stripeandolo de inyecciones de código

    $personaje["idJugador"] = htmlspecialchars($_SESSION['user_id']);
    $personaje["nombre"] = htmlspecialchars($_POST["nombre"]);
    $personaje["raza"] = htmlspecialchars($_POST["raza"]);
    $personaje["clase"] = htmlspecialchars($_POST["clase"]);
    $personaje["nivel"] = htmlspecialchars($_POST["nivel"]);
    $personaje["ilustracion"] = htmlspecialchars($_POST["picture"]);
    $personaje["stat1"] = htmlspecialchars($_POST["hp"]);
    $personaje["stat2"] = htmlspecialchars($_POST["ca"]);
    $personaje["stat3"] = htmlspecialchars($_POST["ca"]);
    $personaje["stat4"] = htmlspecialchars($_POST["ca"]);
    $personaje["stat5"] = htmlspecialchars($_POST["ca"]);
    $personaje["stat6"] = htmlspecialchars($_POST["ca"]);
    $personaje["stat7"] = htmlspecialchars($_POST["ca"]);
    $personaje["stat8"] = htmlspecialchars($_POST["ca"]);
    $personaje["stat9"] = htmlspecialchars($_POST["ca"]);
    $personaje["stat10"] = htmlspecialchars($_POST["ca"]);


    //Añadimos el código del modelo
    require_once("../model/Personaje.php");
    require_once("../model/utils.php");

    $gestor = new Personaje();

    //Nos conectamos a la Bd
    $conexPDO = Utils::conectar();

    //Modificamos el registro
    $resultado = $gestor->addPersonaje($personaje, $conexPDO);

    //Si ha ido bien el mensaje sera distint
    // if ($resultado != null)
    //     $inf_ms = "El personaje se ha insertado Correctamente";
    // else
    //     $inf_ms = "Ha habido un fallo al acceder a la Base de Datos";

    include("../views/main_page.php");
} else {
    //Sin datos del personaje cargados cargamos la vista
    include("../views/crearPersonajeDYD.php");
}
