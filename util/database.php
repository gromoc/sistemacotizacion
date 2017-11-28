<?php
class Conectar{

    protected static $db_host= "localhost";
    protected static $db_user= "root";
    protected static $db_pass= "";
    protected static $db_name= "db_cotizacion";


    public function __construct(){
    }

    public static function conexion(){
        $conexion=new mysqli(self::$db_host, self::$db_user, self::$db_pass, self::$db_name);
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>

