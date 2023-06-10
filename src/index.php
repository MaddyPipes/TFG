<?php

//Inicio de sesión

session_start();

use model\Usuario;
use model\Personaje;
use \model\Utils;

if (isset($_SESSION['user_id'])) {

    $_SESSION['isLoggedIn'] = true; // El usuario está logueado
    //Añadimos el código del modelo
    require_once("./model/Usuario.php");
    require_once("./model/Personaje.php");
    require_once("./model/utils.php");
    $inf_ms = null;
    $gestorUsuario = new Usuario();
    $gestorPersonaje = new Personaje();
    $conexPDO = utils::conectar();

    $personajes = $gestorPersonaje->getPersonajeID($_SESSION['user_id'], $conexPDO);

    include("./views/main_page.php");
} else {
    
    $_SESSION['isLoggedIn'] = false; // El usuario no está logueado

    include("./views/loginUsuario.php");
}
