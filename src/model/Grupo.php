<?php

namespace model;
use \PDO;
use \PDOException;

require_once("utils.php");



class Grupo {

    /** 
     * Función para obtener todos los grupos de la base de datos 
    */

    public function getGrupo($conexPDO, $ordAsc, int $numPag)
    {

        if ($conexPDO != null) {
            try {
                //Primero introducimos la sentencia a ejecutar con prepare
                //Ponemos en lugar de valores directamente, interrogaciones

                //Query inicial
                $statement = "SELECT * FROM gestionrol.grupo ORDER BY NOMBRE ";

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
     * Función que añade un grupo a la base de datos a partir de un array asociativo con los campos
     */

    function addGrupo($grupo, $conexPDO){
    
        $result = null;
        
        if(isset($grupo) && $conexPDO != null){
            try{

                //Sentencia preparada

                // INSERT INTO `gestionrol`.`grupo` (`NOMBRE`, `MAXJUGADORES`, `MASTER`, `HORARIOS`, `PRESENCIAL`) VALUES ('La Logia', '6', 'Maddy', 'N/A', 'S');

                //Info! MASTER parece que es una palabra reservada del método prepare de la biblioteca de PDO, pero lo he probado y la interpreta como parte de la sentencia con normalidad
                //De todas formas ahora que lo sé, no usaré más la palabra cuando trabaje con bases de datos.

                $statement = $conexPDO->prepare("INSERT INTO gestionrol.grupo (idGRUPO, NOMBRE, MAXJUGADORES, MASTER, HORARIOS, PRESENCIAL) VALUES ('', :NOMBRE, :MAXJUGADORES, :MASTER, :HORARIOS, :PRESENCIAL)");

                //Bindeamos los parámetros a la sentencia

                $statement->bindParam(":NOMBRE", $grupo["nombre"]);
                $statement->bindParam(":MAXJUGADORES", $grupo["maxJugadores"]);
                $statement->bindParam(":MASTER", $grupo["master"]);
                $statement->bindParam(":HORARIOS", $grupo["horarios"]);
                $statement->bindParam(":PRESENCIAL", $grupo["presencial"]);
                
                //Una vez completada la sentencia, la ejecutamos

                $result = $statement->execute();

            }catch(PDOException $e){
                print("Error al acceder a la BD".$e->getMessage());
            }
        }

        return $result;

    }

    /**
     * Función que borra al grupo de la base de datos cuya ID coincida
     */

    function delGrupo($idGrupo, $conexPDO)
    {
        $result = null;

        if (isset($idGrupo) && is_numeric($idGrupo)) {


            if ($conexPDO != null) {
                try {

                    //Preparamos la sentencia para borrar un grupo

                    $statement = $conexPDO->prepare("DELETE  FROM gestionrol.grupo where idGrupo=?");
                    
                    //Bindeamos el parámetro para insertar la ID

                    $statement->bindParam(1, $idGrupo);

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
     * Función que actualiza los valores del Grupo cuya ID coincida con la dada
     * obteniendo los datos de un array asociativo del Grupo.
     */

    function updateGrupo($grupo, $conexPDO)
    {

       
        $result = null;
        if (isset($grupo) && isset($grupo["idGrupo"]) && is_numeric($grupo["idGrupo"])  && $conexPDO != null) {

            try {

                //Preparamos la sentencia

                $statement = $conexPDO->prepare("UPDATE gestionrol.grupo set NOMBRE=:NOMBRE, MAXJUGADORES=:MAXJUGADORES, MASTER=:MASTER, HORARIOS=:HORARIOS, PRESENCIAL=:PRESENCIAL where idGRUPO=:idGRUPO");

                

                //Asociamos los valores a los parametros de la sentencia sql

                $statement->bindParam(":idGRUPO", $grupo["idGrupo"]);
                $statement->bindParam(":NOMBRE", $grupo["nombre"]);
                $statement->bindParam(":MAXJUGADORES", $grupo["maxJugadores"]);
                $statement->bindParam(":MASTER", $grupo["master"]);
                $statement->bindParam(":HORARIOS", $grupo["horarios"]);
                $statement->bindParam(":PRESENCIAL", $grupo["presencial"]);

                //Ejecutamos la sentencia

                $result = $statement->execute();

            } catch (PDOException $e) {
                print("Error al acceder a BD" . $e->getMessage());
            }
        }

        return $result;
    }

    
}

$conex = Utils::conectar();

$gestorGrupo = new Grupo();

var_dump($gestorGrupo->getGrupo($conex, false, 1));



