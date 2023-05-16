<?php

namespace model;
use \PDO;
use \PDOException;

require_once("utils.php");



class Partida {

    /** 
     * Función para obtener todos las partidas de la base de datos 
    */

    public function getPartida($conexPDO, $ordAsc, int $numPag)
    {

        if ($conexPDO != null) {
            try {
                //Primero introducimos la sentencia a ejecutar con prepare
                //Ponemos en lugar de valores directamente, interrogaciones

                //Query inicial
                $statement = "SELECT * FROM gestionrol.partida ORDER BY NOMBRE ";

                //si esta ordenada descentemente añadimos DESC

                if (!$ordAsc) $statement = $statement . "DESC ";

                //Añadimos a la query la cantidad de elementos por página con LIMIT
                //Y desde que página empieza con OFFSET
                $statement = $statement . "LIMIT 10 OFFSET ?";

                $preparedStatement = $conexPDO->prepare($statement);

                //El tercer parametro es desde que registro empieza a partir de la
                //pagina actual
                $offset = ($numPag - 1) * 10;
                if ($numPag != 1)
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
     * Función que añade una partida a la base de datos a partir de un array asociativo con los campos
     */

    function addPartida($partida, $conexPDO){
    
        $result = null;
        
        if(isset($partida) && $conexPDO != null){
            try{

                //Sentencia preparada

                // INSERT INTO gestionrol`.`partida` (`JUEGO_idJUEGO`, `NOMBRE`, `DESCRIPCION`, `RESUMEN`, `DIARIO`, `GRUPO_idGRUPO`) VALUES ('1', 'Rise Of Tiamat', 'N/A', '¡Dragones y mazmorras en una partida de Dragones Y Mazmorras!', 'Vacío', '2');

                $statement = $conexPDO->prepare("INSERT INTO gestionrol.partida (idPARTIDA ,JUEGO_idJUEGO, NOMBRE, DESCRIPCION, RESUMEN, DIARIO, GRUPO_idGRUPO) VALUES ('' , :JUEGO_idJUEGO, :NOMBRE, :DESCRIPCION, :RESUMEN, :DIARIO, :GRUPO_idGRUPO)");

                //Bindeamos los parámetros a la sentencia

                $statement->bindParam(":JUEGO_idJUEGO", $partida["idJuego"]);
                $statement->bindParam(":NOMBRE", $partida["nombre"]);
                $statement->bindParam(":DESCRIPCION", $partida["descripcion"]);
                $statement->bindParam(":RESUMEN", $partida["resumen"]);
                $statement->bindParam(":DIARIO", $partida["diario"]);
                $statement->bindParam(":GRUPO_idGRUPO", $partida["idGrupo"]);
                
                //Una vez completada la sentencia, la ejecutamos

                $result = $statement->execute();

            }catch(PDOException $e){
                print("Error al acceder a la BD".$e->getMessage());
            }
        }

        return $result;

    }

    /**
     * Función que borra a la partida de la base de datos cuya ID coincida
     */

    function delPartida($idPartida, $conexPDO)
    {
        $result = null;

        if (isset($idPartida) && is_numeric($idPartida)) {


            if ($conexPDO != null) {
                try {

                    //Preparamos la sentencia para borrar un grupo

                    $statement = $conexPDO->prepare("DELETE  FROM gestionrol.partida where idPartida=?");
                    
                    //Bindeamos el parámetro para insertar la ID

                    $statement->bindParam(1, $idPartida);

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
     * Función que actualiza los valores de la partida cuya ID coincida con la dada
     * obteniendo los datos de un array asociativo de la partida.
     */

    function updatePartida($partida, $conexPDO)
    {

       
        $result = null;
        if (isset($partida) && isset($partida["idPartida"]) && is_numeric($partida["idPartida"])  && $conexPDO != null) {

            try {

                //Preparamos la sentencia

                $statement = $conexPDO->prepare("UPDATE gestionrol.partida set NOMBRE=:NOMBRE, DESCRIPCION=:DESCRIPCION, RESUMEN=:RESUMEN, DIARIO=:DIARIO where idPARTIDA=:idPARTIDA");

                

                //Asociamos los valores a los parametros de la sentencia sql

                $statement->bindParam(":idPARTIDA", $partida["idPartida"]);
                $statement->bindParam(":NOMBRE", $partida["nombre"]);
                $statement->bindParam(":DESCRIPCION", $partida["descripcion"]);
                $statement->bindParam(":RESUMEN", $partida["resumen"]);
                $statement->bindParam(":DIARIO", $partida["diario"]);

                //Ejecutamos la sentencia

                $result = $statement->execute();

            } catch (PDOException $e) {
                print("Error al acceder a BD" . $e->getMessage());
            }
        }

        return $result;
    }

    
}