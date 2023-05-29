<?php

namespace model;

use \PDO;
use \PDOException;



class Utils
{

    /**
     * 
     * Función para establecer la conexión con la BD
     * 
     */

    public static function conectar()
    {
        
        require("/var/www/html/model/global.php");

        $conPDO = null;
        try {
            
            $conPDO = new PDO("mysql:host=" . $DB_SERVER . ";dbname=" . $DB_SCHEMA, $DB_USER, $DB_PASSWD);
            return $conPDO;
        } catch (PDOException $e) {
            print "¡Error al conectar!: " . $e->getMessage() . "<br/>";
            return $conPDO;
            die();
        }
    }

    /**
     * 
     * Función para sanear el código
     * 
     */

    public static function sanear($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    /**
     * 
     * Funcion para generar una cadena aleatoria para la encriptación
     * 
     */

    // public static function generar_salt($cyphNum, bool $numeric)
    // {

    //     //Creamos un string de caracteres según sea sólo numérica o alfanumérica y una variable salt vacía
    //     if($numeric)
    //         $cyphChars= "1234567890";
    //     else
    //         $cyphChars = "abcdefghijklmnopqrstuvwxyz1234567890*-.,";

    //     $salt = "";

    //     //Vamos concatenando a la cadena salt caracteres que se encuentren en posiciones aleatorias en la cadena un número de veces
    //     //igual al valor introducido

    //     for ($i = 0; $i < $cyphNum; $i++) {
    //         $salt .= $cyphChars[rand(0, strlen($cyphChars) - 1)];
    //     }

    //     return $salt;
    // }

    /**
     * 
     * Función para encriptar la contraseña usando hash
     * 
     */

     public static function encryptPassword($password) {
        // Generar una salt aleatoria de 4 dígitos
        $salt = substr(str_shuffle("0123456789"), 0, 4);
        
        // Concatenar la salt al inicio de la contraseña
        $saltedPassword = $salt . $password;
        
        // Encriptar la contraseña usando el algoritmo Blowfish
        $hashedPassword = password_hash($saltedPassword, PASSWORD_BCRYPT);
        
        return $hashedPassword;
    }
    
    /**
     * 
     * Función para comprobar una contraseña
     * 
     */

    public static function verifyPassword($password, $hashedPassword) {
        // Obtener la salt de los primeros 4 dígitos del hash almacenado
        $salt = substr($hashedPassword, 0, 4);
        
        // Concatenar la salt al inicio de la contraseña ingresada
        $saltedPassword = $salt . $password;

        var_dump($saltedPassword);
        
        // Verificar la contraseña encriptada usando el método password_verify
        $isValid = password_verify($saltedPassword, $hashedPassword);
        
        return $isValid;
    }

    /**
     * 
     * Función para generar el código de activación para enviar al usuario en el registro
     * 
     */

    public static function generar_codigo_activacion()
    {
        return rand(1111, 9999);
    }
    
    /**
     * 
     * Función para generar una contraseña nueva
     * 
     */

    public static function generar_temp_pass()
    {

        //Reutilizamos una versión retocada de generar salt

        $cyphChars = "abcdefghijklmnopqrstuvwxyz1234567890";

        $temp = "";

        for ($i = 0; $i < 10; $i++) {
            $temp .= $cyphChars[rand(0, strlen($cyphChars) - 1)];
        }

        return $temp;
    }

    /**
     * 
     * Función que crea y envía un email de confirmación al usuario
     * 
     */

    public static function correo_registro($usuario)
    {
        require("/var/www/html/model/global.php");

        //Creamos una url que insertar en el correo usando url encode para guardar los datos que le enviamos para su posterior revisión en el controlador

        $url_activacion = 'http://localhost/TrabajoESObjetosYBD/controller/controlActivacion.php?email='.urlencode($usuario["email"]).'&codconf='.urlencode($usuario["codconf"]);

        //Vamos creando el email con los parámetros necesarios

        $to = $usuario["email"];
        $subject = "Código de confirmación";

        $message = "<b>Bienvenido " . $usuario["nombre"] . "</b>";
        $message .= "<h1>Por favor confirma tu email</h1>";
        $message .= "<br>";
        $message .= "Su código de activación: ".$usuario["codconf"];
        $message .= "<br>";

        //Insertamos la url que hemos creado

        $message .= "Active su cuenta pulsando <a href='".$url_activacion."'>aquí</a>";

        $header = "From:prueba@somedomain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail($to, $subject, $message, $header);

        if (!$retval) {           
            return $MAIL_ERROR;
        }else{           
            return $MAIL_SUCCESS;
        }
    }

    /**
     * 
     * Función que crea y envía un email para cambiar la contraseña
     * 
     */

    public static function correo_cambio_pass($email, $temp)
    {
        require("./var/www/html/model/global.php");

        //Vamos creando el email con los parámetros necesarios

        $to = $email;
        $subject = "Cambio de contraseña";

        $message = "<b>Saludos</b>";
        $message .= "<h1>Aquí tiene su contraseña temporal</h1>";
        $message .= "<br>";
        $message .= "Introduzca esta contraseña en el formulario para recuperar su contraseña: ".$temp;
        $message .= "<br>";

        $header = "From:prueba@somedomain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail($to, $subject, $message, $header);

        if (!$retval) {
            
            return $MAIL_ERROR;
        }else{           
            return $MAIL_SUCCESS;
        }
    }
}
