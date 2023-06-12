<?php

use model\Personaje;
use \model\Utils;

session_start();

// Añadimos el código del modelo
require_once("../model/Personaje.php");
require_once("../model/utils.php");

$gestorPersonaje = new Personaje();

// Nos conectamos a la BD
$conexPDO = Utils::conectar();

if (isset($_POST["id"])) {
    try {
        $idPersonaje = intval($_POST["id"]);
        $personaje = $gestorPersonaje->getPersonaje($idPersonaje, $conexPDO);
        if ($personaje) {
            $personaje["SALVACIONES"] = unserialize($personaje["SALVACIONES"]);
            $personaje["COMPETENCIAS"] = unserialize($personaje["COMPETENCIAS"]);

            // Convertir el array a formato JSON
            $respuesta = json_encode($personaje);

            // Configurar las cabeceras de la respuesta como JSON
            header("Content-Type: application/json");

            // Emitir la respuesta JSON
            echo $respuesta;
        } else {
            echo "error";
        }
    } catch (PDOException $e) {
        echo "error: " . $e->getMessage();
    }
}
