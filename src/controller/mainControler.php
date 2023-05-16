<?php

//Si el usuario no está logeado, lo mandamos al login

session_start ();

if (isset($_SESSION['idusuario']) == null) {
    header('location: http://localhost/TrabajoESObjetosYBD/controller/controlLogin.php');
}

//Si cuando cargamos el controlador principal ha sido a través del botón de cerrar sesión, matamos la sesión y devolvemos al usuario al login

if (isset($_POST["close_sesion"])){
    unset($_SESSION['nombre']);
    unset($_SESSION['email']);
    unset($_SESSION['idusuario']);
    session_destroy();
    header('location: http://localhost/TrabajoESObjetosYBD/controller/controlLogin.php');
}

use model\Jugador;
use \model\Utils;

//Añadimos el código del modelo
require_once("../model/Jugador.php");
require_once("../model/utils.php");
$inf_ms=null;
$gestor = new Jugador();

//Creamos una variable para la paginación, que recibirá su valor según lo enviado por la vista, por defecto será 1

if(isset($_POST['pag'])){
    $pag = $_POST['pag'];
}else{
    $pag = 1;
}

//Nos conectamos a la Bd
$conexPDO = Utils::conectar();
//Recolectamos los datos de los jugadores
$datosJugador = $gestor->getJugador($conexPDO, true, $pag);
//Obtenemos el número total de jugadores de la base de datos sin importar cuantos muestre en el array
$numJugadores = $gestor->numeroJugadores($conexPDO);
$numJugadores = intval($numJugadores[0]);


include("../views/mostrarJugadores.php");

?>