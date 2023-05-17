<?php

class DBConexion {

    public static function conexiondb (){
        try{
            $database = new PDO("mysql:host=localhost; dbname=login-php;", 'root', '');
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $database->exec("set names utf8");
        }catch(Exception $erConexion){
            echo 'error en la conexion ' . $erConexion->getMessage();
            die('error en la linea '. $erConexion->getLine());
        }
        return $database;
    }

}