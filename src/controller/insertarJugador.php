<?php

use \model\Jugador;
use \model\Utils;
//Creamos un array para guardar los datos del jugador


//Si nos llegan datos de un jugador, implica que es el formulario el que llama al controlador
if (isset($_POST["idJugador"]) && isset($_POST["nombre"]) && isset($_POST["edad"]) && isset($_POST["genero"]) && isset($_POST["localidad"]) && isset($_POST["intereses"]) && isset($_POST["avatar"])) {
    //rellenamos los datos del jugador que le pasaremos a la vista

    //Creamos un array para guardar los datos del jugador
    $jugador = array();

    //rellenamos los datos del jugador que nos pasa la vista, stripeandolo de inyecciones de código

    $jugador["idJugador"] = htmlspecialchars($_POST["idJugador"]);
    $jugador["nombre"] = htmlspecialchars($_POST["nombre"]);
    $jugador["edad"] = htmlspecialchars($_POST["edad"]);
    $jugador["genero"] = htmlspecialchars($_POST["genero"]);
    $jugador["localidad"] = htmlspecialchars($_POST["localidad"]);
    $jugador["intereses"] = htmlspecialchars($_POST["intereses"]);
    $jugador["avatar"] = htmlspecialchars($_POST["avatar"]);


    //Añadimos el código del modelo
    require_once("../model/Jugador.php");
    require_once("../model/Utils.php");

    $gestor = new Jugador();

    //Nos conectamos a la Bd
    $conexPDO = Utils::conectar();

    //Modificamos el registro
    $resultado = $gestor->addJugador($jugador, $conexPDO);

    //Si ha ido bien el mensaje sera distint
    if ($resultado != null)
        $inf_ms = "El jugador se ha insertado Correctamente";
    else
        $inf_ms = "Ha habido un fallo al acceder a la Base de Datos";

    //Recolectamos los datos de los jugadores
    $datosJugador = $gestor->getJugador($conexPDO, true, 1);
    //Obtenemos el número total de jugadores de la base de datos sin importar cuantos muestre en el array
    $numJugadores = $gestor->numeroJugadores($conexPDO);
    $numJugadores = intval($numJugadores[0]);

    include("../views/mostrarJugadores.php");
} else {
    //Declaramos la accion para que el formulario 
    //Sepa a que controlador llamar con los datos
    $accion = "insertar";
    //Sin datos del  cliente cargados cargamos la vista
    include("../views/formularioJugador.php");
}
