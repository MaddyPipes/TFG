<?php

use \model\Jugador;
use \model\Utils;

//Creamos la función de evaluación

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Creamos un array para guardar los datos del jugador
$jugador = array();


if (isset($_POST["idJugador"]) && isset($_POST["nombre"]) && isset($_POST["edad"]) && isset($_POST["genero"]) && isset($_POST["localidad"]) && isset($_POST["intereses"]) && isset($_POST["avatar"])) {


    //rellenamos los datos del jugador que le pasaremos a la vista stripeando inyecciones de código

    $jugador["idJugador"] = htmlspecialchars($_POST["idJugador"]);
    $jugador["nombre"] = htmlspecialchars($_POST["nombre"]);
    $jugador["edad"] = htmlspecialchars($_POST["edad"]);
    $jugador["genero"] = htmlspecialchars($_POST["genero"]);
    $jugador["localidad"] = htmlspecialchars($_POST["localidad"]);
    $jugador["intereses"] = htmlspecialchars($_POST["intereses"]);
    $jugador["avatar"] = htmlspecialchars($_POST["avatar"]);


    if (isset($_POST["modificar"]) && $_POST["modificar"] == "false") {
        //Declaramos la accion para que el formulario 
        //Sepa a que controlador llamar con los datos
        $accion = "modificar";
        //Con los datos del jugador cargados cargamos la vista
        include("../views/formularioJugador.php");
    } else {

        //Si modificar es true implica que nos ha llamado el formulario y nos ha pasado los datos cambiados
        //Para que los modifiquemos en BD.
        //Añadimos el código del modelo
        require_once("../model/Jugador.php");
        require_once("../model/Utils.php");

        $gestor = new Jugador();

        //Nos conectamos a la Bd
        $conexPDO = Utils::conectar();

        //Modificamos el registro
        $resultado = $gestor->updateJugador($jugador, $conexPDO);

        //Si ha ido bien el mensaje sera distint
        if ($resultado != null)
            $inf_ms = "El jugador se actualizó Correctamente";
        else
            $inf_ms = "Ha habido un fallo al acceder a la Base de Datos";

        //Recolectamos los datos de los jugadores
        $datosJugador = $gestor->getJugador($conexPDO, true, 1);
        //Obtenemos el número total de jugadores de la base de datos sin importar cuantos muestre en el array
        $numJugadores = $gestor->numeroJugadores($conexPDO);
        $numJugadores = intval($numJugadores[0]);

        include("../views/mostrarJugadores.php");
    }
} else {

    //Añadimos el código del modelo
    require_once("../model/Jugador.php");
    require_once("../model/Utils.php");

    $gestor = new Jugador();

    //Nos conectamos a la Bd
    $conexPDO = Utils::conectar();

    //Recolectamos los datos de los jugadores
    $datosJugador = $gestor->getJugador($conexPDO, true, 1);

    include("../views/mostrarJugadores.php");
}
