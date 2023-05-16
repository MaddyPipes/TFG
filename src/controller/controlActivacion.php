<?php

namespace controller;

use \model\Usuario;
use \model\utils;

require_once("../model/Usuario.php");
require_once("../model/utils.php");

//Cuando el usuario pulse el link de activación del email, verificamos sus datos (Quería probar a pasar información por link)

if (isset($_GET["email"]) && isset($_GET["codconf"])) {

    //Creamos un gestor de la clase usuario

    $gestorUser = new Usuario();

    //Conectamos

    $conexPDO = utils::conectar();

    //Obtenemos el usuario a partir de su email

    $usuario = $gestorUser->getUsuarioMail($_GET["email"], $conexPDO);

    //Por seguridad comprobamos que los códigos de confirmación coincidan

    if ($usuario["codconf"] == $_GET["codconf"]) {

        //Si coinciden activamos al usuario

        $resultado = $gestorUser->activarUsuario($conexPDO, $_GET["email"]);

        if ($resultado != null) {

            //Si todo va bien, definimos un mensaje

            $inf_ms = "Su cuenta ha sido activada";

            //Y llamamos a la vista del login

            include("../views/loginUsuario.php");
        } else {
            print("¡Ha habido un error en la activación!");
        }
    } else {
        print("¡Ha habido un error en la activación!");
    }
} else {

    //En caso de que no estén seteados ni el email ni el código de confirmación, significará que el controlador ha sido llamado desde el login
    //en cuyo caso llamaremos a una vista para que el usuario introduzca el código de activación

    //Comprobamos si hemos sido llamados por la vista

    if (isset($_POST["email"]) && isset($_POST["codconf"])) {

        //Creamos un gestor de la clase usuario

        $gestorUser = new Usuario();

        //Conectamos

        $conexPDO = utils::conectar();

        //Obtenemos el usuario a partir de su email

        $usuario = $gestorUser->getUsuarioMail($_POST["email"], $conexPDO);

        //Por seguridad comprobamos que los códigos de confirmación coincidan

        if ($usuario["codconf"] == $_POST["codconf"]) {

            //Si coinciden activamos al usuario

            $resultado = $gestorUser->activarUsuario($conexPDO, $_POST["email"]);

            if ($resultado != null) {

                //Si todo va bien, definimos un mensaje

                $inf_ms = "Su cuenta ha sido activada";

                //Y llamamos a la vista del login

                include("../views/loginUsuario.php");
            } else {
                print("¡Ha habido un error en la activación!");
            }
        } else {
            print("¡Ha habido un error en la activación!");
        }
    }
    else {
        print("¡Ha habido un error en la activación!");
    }
}
