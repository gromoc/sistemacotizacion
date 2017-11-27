<?php
class Conectar{

    public function __construct(){
        
    }

    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "db_cotizacion");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>