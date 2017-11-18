<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "db_henry");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>