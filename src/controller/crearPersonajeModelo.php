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

    $personaje["idJugador"] = htmlspecialchars($_POST["idJugador"]);
    $personaje["nombre"] = htmlspecialchars($_POST["nombre"]);
    $personaje["edad"] = htmlspecialchars($_POST["edad"]);
    $personaje["genero"] = htmlspecialchars($_POST["genero"]);
    $personaje["localidad"] = htmlspecialchars($_POST["localidad"]);
    $personaje["intereses"] = htmlspecialchars($_POST["intereses"]);
    $personaje["avatar"] = htmlspecialchars($_POST["avatar"]);


    //Añadimos el código del modelo
    require_once("../model/Personaje.php");
    require_once("../model/Utils.php");

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
