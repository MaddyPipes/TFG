<?php

use model\Jugador;
use model\Personaje;
use \model\Utils;

//Añadimos el código del modelo
require_once("../model/Jugador.php");
require_once("../model/utils.php");
$inf_ms=null;
$gestorPersonaje = new Personaje();

//Nos conectamos a la Bd
$conexPDO = Utils::conectar();

//Borramos al jugador

if(isset($_POST["id"])){

    $result = $gestorPersonaje->delPersonaje($_POST["id"], $conexPDO);

    if($result == null || $result == 0){
        $inf_ms = "Error con la base de datos.";
    }else{
        $inf_ms = "Eliminado con éxito.";
    }

}
?>