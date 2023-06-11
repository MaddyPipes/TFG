<?php

namespace model;

use \PDO;
use \PDOException;

require_once("utils.php");



class Personaje
{

    /** 
     * Función para obtener todos los personajes de la base de datos 
     */

    public function getPersonaje($idPersonaje ,$conexPDO)
    {

        if ($conexPDO != null) {
            try {

                $sentencia = $conexPDO->prepare("SELECT * FROM gestionRol.PERSONAJE WHERE idPERSONAJE = ?");

                //Asociamos a cada interrogacion el valor que queremos en su lugar
                $sentencia->bindParam(1, $idPersonaje, PDO::PARAM_INT);

                $sentencia->execute();

                //Devolvemos los datos del personaje

                return $sentencia->fetchAll();
            } catch (PDOException $e) {
                print("Error al acceder a BD" . $e->getMessage());
            }
        }
    }

    /**
     * Función que obteiene todos los personajes a partir de la ID del jugador
     */

    public function getPersonajeID($idJugador, $conexPDO)
    {
        $idJugador = intval($idJugador); 

        if ($conexPDO != null) {
            try {
                //Primero introducimos la sentencia a ejecutar con prepare
                //Ponemos en lugar de valores directamente, interrogaciones
                $sentencia = $conexPDO->prepare("SELECT * FROM gestionRol.PERSONAJE WHERE JUGADOR_idJUGADOR = ? ORDER BY NOMBRE");
                //Asociamos a cada interrogacion el valor que queremos en su lugar
                $sentencia->bindParam(1, $idJugador, PDO::PARAM_INT);
                
                //Ejecutamos la sentencia
                $sentencia->execute();

                //Devolvemos los datos de los perspnajes
                return $sentencia->fetchAll();
            } catch (PDOException $e) {
                print("Error al acceder a BD" . $e->getMessage());
            }
        }
    }


    /**
     * Función que añade un personaje a la base de datos a partir de un array asociativo con los campos
     */

    function addPersonaje($personaje, $conexPDO)
    {

        $result = null;

        if (isset($personaje) && $conexPDO != null) {
            try {

                //Sentencia preparada

                // INSERT INTO `gestionrol`.`personaje` (`idPERSONAJE`, `JUGADOR_idJUGADOR`, `NOMBRE`, `RAZA`, `CLASE`, `NIVEL`, `ILUSTRACION`, `FICHA`, `INVENTARIO`, `DIARIO`) VALUES ('', '1', 'Aelrik Rounar', 'Semielfo', 'Paladín', '5', 'elfex1.jpg', 'cualquierurl', 'vacío', 'vacío');

                $statement = $conexPDO->prepare("INSERT INTO gestionRol.PERSONAJE (JUGADOR_idJUGADOR, NOMBRE, RAZA, CLASE, NIVEL, ILUSTRACION, STAT1, STAT2, STAT3, STAT4, STAT5, STAT6, STAT7, STAT8, COMPETENCIAS, SALVACIONES) VALUES (:JUGADOR_idJUGADOR, :NOMBRE, :RAZA, :CLASE, :NIVEL, :ILUSTRACION, :STAT1, :STAT2, :STAT3, :STAT4, :STAT5, :STAT6, :STAT7, :STAT8, :COMPETENCIAS, :SALVACIONES)");

                //Bindeamos los parámetros a la sentencia

                $statement->bindParam(":JUGADOR_idJUGADOR", $personaje["idJugador"]);
                $statement->bindParam(":NOMBRE", $personaje["nombre"]);
                $statement->bindParam(":RAZA", $personaje["raza"]);
                $statement->bindParam(":CLASE", $personaje["clase"]);
                $statement->bindParam(":NIVEL", $personaje["nivel"]);
                $statement->bindParam(":ILUSTRACION", $personaje["ilustracion"]);
                $statement->bindParam(":STAT1", $personaje["stat1"]);
                $statement->bindParam(":STAT2", $personaje["stat2"]);
                $statement->bindParam(":STAT3", $personaje["stat3"]);
                $statement->bindParam(":STAT4", $personaje["stat4"]);
                $statement->bindParam(":STAT5", $personaje["stat5"]);
                $statement->bindParam(":STAT6", $personaje["stat6"]);
                $statement->bindParam(":STAT7", $personaje["stat7"]);
                $statement->bindParam(":STAT8", $personaje["stat8"]);
                $statement->bindParam(":COMPETENCIAS", $personaje["competencias"]);
                $statement->bindParam(":SALVACIONES", $personaje["salvaciones"]);

                //Una vez completada la sentencia, la ejecutamos

                $result = $statement->execute();
                if (!$result) {
                    $result = $statement->errorInfo();
                }
            } catch (PDOException $e) {
                print("Error al acceder a la BD" . $e->getMessage());
            }
        }

        return $result;
    }

    /**
     * Función que borra al personaje de la base de datos cuya ID coincida
     */

    function delPersonaje($idPersonaje, $idJugador, $conexPDO)
    {
        $result = null;

        if (isset($idPersonaje) && is_numeric($idPersonaje)) {


            if ($conexPDO != null) {
                try {

                    //Preparamos la sentencia para borrar un personaje

                    $statement = $conexPDO->prepare("DELETE FROM gestionRol.PERSONAJE where (:idPERSONAJE) and (:JUGADOR_idJUGADOR)");

                    //Bindeamos el parámetro para insertar la ID

                    $statement->bindParam(":idPERSONAJE", $idPersonaje);
                    $statement->bindParam(":JUGADOR_idJUGADOR", $idJugador);

                    //Ejecutamos la sentencia

                    $result = $statement->execute();
                    
                } catch (PDOException $e) {
                    print("Error al borrar" . $e->getMessage());
                }
            }
        }

        return $result;
    }

    /**
     * Función que actualiza los valores del personaje cuya ID coincida con la dada
     * obteniendo los datos de un array asociativo del personaje.
     */

    function updatePersonaje($personaje, $conexPDO)
    {


        $result = null;
        if (isset($personaje) && isset($personaje["idPersonaje"]) && is_numeric($personaje["idPersonaje"])  && $conexPDO != null) {

            try {

                //Preparamos la sentencia

                $statement = $conexPDO->prepare("UPDATE gestionrol.personaje set JUGADOR_idJUGADOR=:JUGADOR_idJUGADOR, NOMBRE=:NOMBRE, RAZA=:RAZA, CLASE=:CLASE, NIVEL=:NIVEL, ILUSTRACION=:ILUSTRACION, FICHA=:FICHA, INVENTARIO=:INVENTARIO, DIARIO=:DIARIO where idPERSONAJE=:idPERSONAJE");



                //Asociamos los valores a los parametros de la sentencia sql

                $statement->bindParam(":idPERSONAJE", $personaje["idPersonaje"]);
                $statement->bindParam(":JUGADOR_idJUGADOR", $personaje["idJugador"]);
                $statement->bindParam(":NOMBRE", $personaje["nombre"]);
                $statement->bindParam(":RAZA", $personaje["raza"]);
                $statement->bindParam(":CLASE", $personaje["clase"]);
                $statement->bindParam(":NIVEL", $personaje["nivel"]);
                $statement->bindParam(":ILUSTRACION", $personaje["ilustracion"]);
                $statement->bindParam(":FICHA", $personaje["ficha"]);
                $statement->bindParam(":INVENTARIO", $personaje["inventario"]);
                $statement->bindParam(":DIARIO", $personaje["diario"]);

                //Ejecutamos la sentencia

                $result = $statement->execute();
            } catch (PDOException $e) {
                print("Error al acceder a BD" . $e->getMessage());
            }
        }

        return $result;
    }
}
