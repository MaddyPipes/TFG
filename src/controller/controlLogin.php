<?php

namespace controller;

use \model\Usuario;
use \model\utils;

require_once("../model/Usuario.php");
require_once("../model/utils.php");

$inf_ms = null;

//Comprobamos los datos que nos envía el controlador principal

if (isset($_POST["email"]) && isset($_POST["password"])) {

    //Creamos un array con los datos introducidos en el login

    $checkUsuario = array();

    //Saneamos el código de posibles códigos maliciosos

    $checkUsuario["password"] = utils::sanear($_POST["password"]);
    $checkUsuario["email"] = utils::sanear($_POST["email"]);

    //Creamos un gestor de la clase usuario

    $gestorUser = new Usuario();

    //Conectamos

    $conexPDO = utils::conectar();

    //Inicializamos el mensaje

    $inf_ms = null;

    //Guardamos en una variable los datos del usuario cuyo email corresponda al que nos envía el login

    $usuario = $gestorUser->getUsuarioMail($checkUsuario["email"], $conexPDO);

    //Comprobamos que el usuario exista en la base de datos según la variable usuario, si es diferente a null, es que habrá encontrado una coincidencia

    if ($usuario != null) {

        //Si ha sido encontrado, el siguiente paso será comprobar que la contraseña coincida, comparando la pass introducida, sometida a la misma encriptación, con la de la base de datos

        if (utils::verifyPassword($_POST["password"], $usuario["password"])) {

            //Si todo sale bien, añadimos los datos del usuario a la sesión

            //Iniciamos la sesión

            session_start();

            $_SESSION["user_id"] = $usuario["idjugador"];
            $_SESSION["email"] = $usuario["email"];
            $_SESSION["nombre"] = $usuario["nombre"];

            // //Si la contraseña es correcta, la siguiente comprobación será verificar si el usuario está verificado en la base de datos

            // if ($usuario["statusconf"] != 0) {

            // } else {
            //     //Si el estado de confirmación del usuario es 0, significará que el usuario no ha introducido su código de confirmación, en cuyo caso se le devolverá al login
            //     //con el mensaje de que el usuario no está validado

            //     $inf_ms = "¡El usuario no está validado!";

            //     include("../views/formularioActivacion.php");
            // }
        } else {

            //En caso de que no coincidan, cambiamos el mensaje y llamamos a la vista de nuevo

            var_dump($usuario["PASSWORD"]);

            $inf_ms = "¡Contraseña incorrecta!";

            include("../views/loginUsuario.php");
        }
    } else {

        //En caso de que no encuentre un usuario volvemos a llamar a la vista de login y cambiamos el valor del mensaje

        $inf_ms = "¡El usuario no existe!";

        include("../views/loginUsuario.php");
    }
} else {
    //Si los datos aún no han sido enviados desde la vista es que estamos entrando por primera vez al controlador e incluímos la vista del login

    $inf_ms = null;

    include("../views/loginUsuario.php");
}
