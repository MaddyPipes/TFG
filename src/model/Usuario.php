<?php

namespace model;

require_once("utils.php");

use \PDO;
use \PDOException;

class Usuario
{


    /**
     * 
     * Funcion que nos devuelve todos los usuarios 
     * 
     */

    public function getUsuarios($conexPDO)
    {

        if ($conexPDO != null) {
            try {

                //Preparamos la sentencia, un select all a la BD

                $sentence = $conexPDO->prepare("SELECT * FROM gestionrol.usuario");

                //Ejecutamos la sentencia
                $sentence->execute();

                //Devolvemos los datos del usuario

                return $sentence->fetchAll();
            } catch (PDOException $e) {
                print("Error al acceder a BD" . $e->getMessage());
            }
        }
    }


    /**
     * 
     * Función que nos devuelve el usuario cuya id coincida
     * 
     */

    public function getUsuario($idUsuario, $conexPDO)
    {
        if (isset($idUsuario) && is_numeric($idUsuario)) {


            if ($conexPDO != null) {
                try {

                    //Preparamos la sentencia, un select all a la BD buscando una coincidencia específica

                    $sentencia = $conexPDO->prepare("SELECT * FROM gestionrol.usuario where idusuario=?");

                    //Bindeamos los parámetros

                    $sentencia->bindParam(1, $idUsuario);

                    //Ejecutamos la sentencia

                    $sentencia->execute();

                    //Devolvemos los datos del Usuario

                    return $sentencia->fetch();
                } catch (PDOException $e) {
                    print("Error al acceder a BD" . $e->getMessage());
                }
            }
        }
    }

    /**
     * 
     * Función que nos devuelve el usuario cuyo email coincida
     * 
     */

    public function getUsuarioMail($email, $conexPDO)
    {
        if (isset($email)) {


            if ($conexPDO != null) {
                try {

                    //Preparamos la sentencia, un select all a la BD buscando una coincidencia específica

                    $sentencia = $conexPDO->prepare("SELECT * FROM gestionrol.usuario where email=?");

                    //Bindeamos los parámetros

                    $sentencia->bindParam(1, $email);

                    //Ejecutamos la sentencia

                    $sentencia->execute();

                    //Devolvemos los datos del Usuario

                    return $sentencia->fetch();
                } catch (PDOException $e) {
                    print("Error al acceder a BD" . $e->getMessage());
                }
            }
        }
    }

    /**
     * 
     * Función que añade un usuario a la base de datos a partir de un array asociativo
     * 
     */

    function addUsuario($usuario, $conexPDO)
    {

        $result = null;

        if (isset($usuario) && $conexPDO != null) {

            try {

                //Preparamos la sentencia, un insert a la base de datos

                $sentencia = $conexPDO->prepare("INSERT INTO gestionrol.usuario (nombre, email, password ,salt, statusconf, codconf) VALUES ( :nombre, :email, :password, :salt, :statusconf, :codconf)");

                //Bindeamos los parámetros

                $sentencia->bindParam(":nombre", $usuario["nombre"]);
                $sentencia->bindParam(":email", $usuario["email"]);
                $sentencia->bindParam(":password", $usuario["password"]);
                $sentencia->bindParam(":salt", $usuario["salt"]);
                $sentencia->bindParam(":statusconf", $usuario["statusconf"]);
                $sentencia->bindParam(":codconf", $usuario["codconf"]);

                //Ejecutamos la sentencia

                $result = $sentencia->execute();
            } catch (PDOException $e) {
                print("Error al acceder a BD" . $e->getMessage());
            }
        }

        return $result;
    }

    /**
     * 
     * Función para obtener únicamente la contraseña del usuario para verificarla
     * 
     */

    function getPass($conexPDO, $idUsuario)
    {

        if (isset($idUsuario) && is_numeric($idUsuario)) {


            if ($conexPDO != null) {
                try {

                    //Preparamos la sentencia, un select a la contraseña a la BD buscando una coincidencia específica

                    $sentencia = $conexPDO->prepare("SELECT password FROM gestionrol.usuario where idusuario=?");

                    //Bindeamos los parámetros

                    $sentencia->bindParam(1, $idUsuario);

                    //Ejecutamos la sentencia

                    $sentencia->execute();

                    //Devolvemos los datos del Usuario

                    return $sentencia->fetch();
                } catch (PDOException $e) {
                    print("Error al acceder a BD" . $e->getMessage());
                }
            }
        }
    }

    /**
     * 
     * Función para activar a un usuario 
     * 
     */

    function activarUsuario($conexPDO, $email)
    {

        $result = null;
        if (isset($email) && $conexPDO != null) {

            try {

                //Preparamos la sentencia

                $statement = $conexPDO->prepare("UPDATE gestionrol.usuario set statusconf=:statusconf where email=:email");

                //Bindeamos los parámetros, creando primero una variable que equivalga a 1 para poder pasarla como parámetro

                $active = 1;

                $statement->bindParam(":statusconf", $active);
                $statement->bindParam(":email", $email);

                //Ejecutamos la sentencia

                $result = $statement->execute();
            } catch (PDOException $e) {
                print("Error al acceder a BD" . $e->getMessage());
            }
        }

        return $result;
    }

    /**
     * 
     * Función cambiar la contraseña en la base de datos
     * 
     */

    function modificarPass($conexPDO, $email, $newPass, $newSalt)
    {

        $result = null;

            try {

                //Preparamos la sentencia

                $statement = $conexPDO->prepare("UPDATE gestionrol.usuario set password=:password, salt=:salt where email=:email");

                //Bindeamos los parámetros

                $statement->bindParam(":email", $email);
                $statement->bindParam(":password", $newPass);
                $statement->bindParam(":salt", $newSalt);

                //Ejecutamos la sentencia

                $result = $statement->execute();
            } catch (PDOException $e) {
                print("Error al acceder a BD" . $e->getMessage());
            }

        return $result;
    }
}