<?php

namespace controller;

use \model\Usuario;
use \model\utils;

require_once("../model/Usuario.php");
require_once("../model/utils.php");

//Comprobamos si el controlador ha sido llamado desde la vista o desde el login, comprobando si los datos han sido enviados desde un POST

if (isset($_GET["mailPass"]) && isset($_GET["email"])) {

    //Creamos un gestor de la clase usuario

    $gestorUser = new Usuario();

    //Conectamos

    $conexPDO = utils::conectar();

    //Creamos una contraseña temporal

    $temp_pass = utils::generar_temp_pass();

    //Generamos una nueva salt para encriptar la contraseña

    $salt = utils::generar_salt(4, true);

    //Encriptamos la nueva contraseña con la salt (la encriptada la subiremos a la base de datos, la no encriptada será la que mandaremos por email)

    $cyph_temp_pass = crypt($temp_pass, '$2y$10$' . $salt . '$');

    //Una vez la hemos creado, cambiamos la contraseña y la salt del usuario en la BD

    $gestorUser->modificarPass($conexPDO, $_GET["email"], $cyph_temp_pass, $salt);

    //Madamos el email al usuario

    utils::correo_cambio_pass($_GET["email"], $temp_pass);

    //Llamamos a la vista con el formulario para introducir el código del email

    include("../views/formularioCambioPass.php");

} else if (isset($_POST["newPass"]) && isset($_POST["tempPass"]) && isset($_POST["email"])) {

    //Si estos dos campos están seteados significará que el usuario ha recibido el email y que estará listo para introducir la contraseña nueva

    //Creamos un gestor de la clase usuario

    $gestorUser = new Usuario();

    //Conectamos

    $conexPDO = utils::conectar();

    //Obtenemos al usuario a través de su email

    $email = $_POST["email"];

    $usuario = $gestorUser->getUsuarioMail($email, $conexPDO);

    //Comprobamos que la contraseña temporal que ha usado es la que tiene actualmente en la base de datos

    if ($usuario["password"] == crypt($_POST["tempPass"], '$2y$10$' . $usuario["salt"] . '$')) {

        //En caso de que lo sea, generamos una nueva salt y repetimos el proceso de encrioptar y cambiar, pero esta vez a la pass que ha elegido el usuario

        //Generamos una nueva salt para encriptar la contraseña

        $salt = utils::generar_salt(4, true);

        //Encriptamos la nueva contraseña con la salt (la encriptada la subiremos a la base de datos, la no encriptada será la que mandaremos por email)

        $cyph_pass = crypt($_POST["newPass"], '$2y$10$' . $salt . '$');

        //Una vez la hemos creado, cambiamos la contraseña y la salt del usuario en la BD

        $gestorUser->modificarPass($conexPDO, $usuario["email"], $cyph_pass, $salt);

        //Creamos el mensaje

        $inf_ms = "Su contraseña ha sido restablecida con éxito";

        //Y llamamos a la vista del login

        include("../views/loginUsuario.php");

    } else {
        //En caso de que no lo sea mostramos un error y volvemos a la misma vista

        echo '<script>alert("Contraseña Temporal Incorrecta");</script>';

        include("../views/formularioCambioPass.php");
    }
} else {
    //Si no están seteados los valores, significa que entramos aquí por primera vez desde el login, así que llamamos a la vista

    include("../views/formularioEmailCambioPass.php");
}
