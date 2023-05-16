<?php

namespace model;

use \PDO;
use \PDOException;

require_once("utils.php");



class Jugador
{

    /** 
     * Función para obtener todos los jugadores de la base de datos y 
     * los devolverá por orden descendente (por defecto)
     */

    public function getJugador($conexPDO, $ordAsc, int $numPag)
    {

        if ($conexPDO != null) {
            try {
                //Primero introducimos la sentencia a ejecutar con prepare
                //Ponemos en lugar de valores directamente, interrogaciones

                //Query inicial
                $statement = "SELECT * FROM gestionrol.jugador ORDER BY NOMBRE ";

                //si esta ordenada descentemente añadimos DESC

                if (!$ordAsc) $statement = $statement . "DESC ";

                //Añadimos a la query la cantidad de elementos por página con LIMIT
                //Y desde que página empieza con OFFSET
                $statement = $statement . "LIMIT 10 OFFSET ?";

                $preparedStatement = $conexPDO->prepare($statement);

                //El tercer parametro es desde que registro empieza a partir de la
                //pagina actual
                $offset = ($numPag - 1) * 10;
                if ($numPag == 0)
                    $offset++;

                $preparedStatement->bindParam(1, $offset, PDO::PARAM_INT);

                //INTERESANTE 
                //queryString contiene la sentencia sql a ejecutar
                //print($sentencia->queryString);

                //Ejecutamos la sentencia
                $preparedStatement->execute();

                //Devolvemos los datos del jugador
                return $preparedStatement->fetchAll();
            } catch (PDOException $e) {
                print("Error al acceder a BD" . $e->getMessage());
            }
        }
    }

    /**
     * Función para obtener un jugador en específico
     */

    public function getJugadorID($idJugador, $conexPDO)
    {
        if (isset($idJugador) && is_numeric($idJugador)) {


            if ($conexPDO != null) {
                try {
                    //Primero introducimos la sentencia a ejecutar con prepare
                    //Ponemos en lugar de valores directamente, interrogaciones
                    $sentencia = $conexPDO->prepare("SELECT * FROM gestionrol.jugador where idJUGADOR=?");
                    //Asociamos a cada interrogacion el valor que queremos en su lugar
                    $sentencia->bindParam(1, $idJugador);
                    //Ejecutamos la sentencia
                    $sentencia->execute();

                    //Devolvemos los datos del jugador
                    return $sentencia->fetch();
                } catch (PDOException $e) {
                    print("Error al acceder a BD" . $e->getMessage());
                }
            }
        }
    }

    /**
     * Función que añade un jugador a la base de datos a partir de un array asociativo con los campos
     */

    function addJugador($jugador, $conexPDO)
    {

        $result = null;

        if (isset($jugador) && $conexPDO != null) {
            try {

                //Sentencia preparada

                //INSERT INTO `gestionrol`.`jugador` (`idJUGADOR`, `NOMBRE`, `EDAD`, `GENERO`, `LOCALIDAD`, `INTERESES`, `AVATAR`) VALUES ('', 'Many', '29', 'M', 'Jerez', 'Fantasy', 'ejemplo3.jpg');

                $statement = $conexPDO->prepare("INSERT INTO gestionrol.jugador (idJUGADOR, NOMBRE, EDAD, GENERO, LOCALIDAD, INTERESES, AVATAR) VALUES ('', :NOMBRE, :EDAD, :GENERO, :LOCALIDAD, :INTERESES, :AVATAR)");

                //Bindeamos los parámetros a la sentencia

                $statement->bindParam(":NOMBRE", $jugador["nombre"]);
                $statement->bindParam(":EDAD", $jugador["edad"]);
                $statement->bindParam(":GENERO", $jugador["genero"]);
                $statement->bindParam(":LOCALIDAD", $jugador["localidad"]);
                $statement->bindParam(":INTERESES", $jugador["intereses"]);
                $statement->bindParam(":AVATAR", $jugador["avatar"]);

                //Una vez completada la sentencia, la ejecutamos

                $result = $statement->execute();
            } catch (PDOException $e) {
                print("Error al acceder a la BD" . $e->getMessage());
            }
        }

        return $result;
    }

    /**
     * Función que borra al jugador de la base de datos cuya ID coincida
     */

    function delJugador($idJugador, $conexPDO)
    {
        $result = null;

        if (isset($idJugador) && is_numeric($idJugador)) {


            if ($conexPDO != null) {
                try {

                    //Preparamos la sentencia para borrar un jugador

                    $statement = $conexPDO->prepare("DELETE  FROM gestionrol.jugador where idJUGADOR=?");

                    //Bindeamos el parámetro para insertar la ID

                    $statement->bindParam(1, $idJugador);

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
     * Función que actualiza los valores del jugador cuya ID coincida con la dada
     * obteniendo los datos de un array asociativo del jugador.
     */

    function updateJugador($jugador, $conexPDO)
    {


        $result = null;
        if (isset($jugador) && isset($jugador["idJugador"]) && is_numeric($jugador["idJugador"])  && $conexPDO != null) {

            try {

                //Preparamos la sentencia

                $statement = $conexPDO->prepare("UPDATE gestionrol.jugador set NOMBRE=:NOMBRE, EDAD=:EDAD, GENERO=:GENERO, LOCALIDAD=:LOCALIDAD, INTERESES=:INTERESES, AVATAR=:AVATAR where idJUGADOR=:idJUGADOR");



                //Asociamos los valores a los parametros de la sentencia sql

                $statement->bindParam(":idJUGADOR", $jugador["idJugador"]);
                $statement->bindParam(":NOMBRE", $jugador["nombre"]);
                $statement->bindParam(":EDAD", $jugador["edad"]);
                $statement->bindParam(":GENERO", $jugador["genero"]);
                $statement->bindParam(":LOCALIDAD", $jugador["localidad"]);
                $statement->bindParam(":INTERESES", $jugador["intereses"]);
                $statement->bindParam(":AVATAR", $jugador["avatar"]);

                //Ejecutamos la sentencia

                $result = $statement->execute();
            } catch (PDOException $e) {
                print("Error al acceder a BD" . $e->getMessage());
            }
        }

        return $result;
    }

    /**
     * Función para obtener el número total de jugadores en la base de datos
     */

    function numeroJugadores($conexPDO)
    {

        try {

            $statement = $conexPDO->prepare("SELECT COUNT(NOMBRE) AS NUMERO_JUGADORES FROM jugador");

            $statement->execute();

            return $statement->fetch();

        } catch (PDOException $e) {
            print("Error al acceder a BD" . $e->getMessage());
        }
    }
}
