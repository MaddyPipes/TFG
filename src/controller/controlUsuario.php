<?php

namespace controller;

use \model\Usuario;
use \model\utils;

require_once("../model/Usuario.php");
require_once("../model/utils.php");

//Comprobamos los datos

if (isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["password"])) {

    //Creamos un array con los datos del usuario

    $usuario = array();

    //Saneamos el código de posibles códigos maliciosos

    $usuario["nombre"] = utils::sanear($_POST["nombre"]);
    $usuario["email"] = utils::sanear($_POST["email"]);

    //Generamos la salt para el usuario, con 4 caracteres para que esté en 16 bits y especificando con un boolean que sea sólo numérica

    $salt = utils::generar_salt(4, true);

    $usuario["salt"] = $salt;

    //Usamos la función para encriptar los datos, usando la opción blowfish ('$2y$10$') para obtener una pass codificada en 256 bits

    $usuario["password"] = utils::encryptPassword($_POST["password"], $usuario["salt"]);

    //Fijamos el valor de activación a 0 (inactivo)

    $usuario["conf"] = 0;

    //Generamos un código de activación

    $usuario["confcod"] = utils::generar_codigo_activacion();

    //Creamos un gestor de la clase usuario

    $gestorUser = new Usuario();

    //Conectamos

    $conexPDO = utils::conectar();

    //Añadimos al usuario a la BD

    $resultado = $gestorUser->addUsuario($usuario, $conexPDO);

    //Creamos el mensaje a mostrar dependiendo del resultado

    $inf_ms = null;

    if ($resultado != null) {
        $inf_ms = "Se ha registrado correctamente";

        //En caso de que haya sido registrado correctamente en la base de datos, mandamos además el email de confirmación

        //Mandamos un mail al usuario con el código de activación

        $resultadoMail = utils::correo_registro($usuario);

        //Cambiamos el valor del mensaje para que aparezca un mensaje en caso de fallar al mandar el mail, siendo el return de la función 0 (Valor de la constante $MAIL_ERROR)
        if($resultadoMail == 0)
            $inf_ms = "¡Ha habido un error en el envío del correo de confirmación!";
        
    } else
        $inf_ms = "¡Ha habido un error al conectar con la base de datos!";

    include("../views/loginUsuario.php");
} else {
    //Si los datos del usuario aún no están seteados significa que el usuario aún no se ha registrado, con lo que llamamos al formulario de registro
    include("../views/registroUsuario.php");
}
