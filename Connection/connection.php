<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "Libreria";

    try{
        $bd = new PDO (
            'mysql:host=localhost;
            dbname='.$db_name,
            $username,
            $password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    }
    catch (Exception $ex){
        echo "Problema con la conexion".$ex->getMessage();
    }
?>