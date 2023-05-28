<?php

//Inicio de sesión

session_start();

$_SESSION['user_name'] = "MaddyPipes";

if (isset($_SESSION['user_id'])) {
    $_SESSION['isLoggedIn'] = true; // El usuario está logueado
} else {
    $_SESSION['isLoggedIn'] = false; // El usuario no está logueado
}

use model\Usuario;
use \model\Utils;

//Añadimos el código del modelo
require_once("./model/Usuario.php");
require_once("./model/utils.php");
$inf_ms = null;
$gestor = new Usuario();


include("./views/main_page.php");
