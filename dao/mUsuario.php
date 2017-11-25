<?php
require_once '../util/database.php';
class mUsuario
{
    private $db;

    public function __construct(){    
        $this->db=Conectar::conexion();
    }

    public function registrarUsuario(BRegistro $OBJRegistro){ 
        try {
            $sql = "INSERT INTO persona (nombrersocial, dniruc, email, numero) "
            . "VALUES ('$OBJRegistro->nombreruc', '$OBJRegistro->dniruc', '$OBJRegistro->email' ,'$OBJRegistro->telefono');";


            $sql2="INSERT INTO usuario (nPerCodigo, cUsuUsuario, cUsuClave, cUsuTipo) "
            . "VALUES (LAST_INSERT_ID(), '$OBJRegistro->usuario', '$OBJRegistro->clave' ,'2');";
            $result = $this->db->query($sql);
            $result2 = $this->db->query($sql2);

            if($result2){
                $data=1;
            }else{
                $data=0; 
            }
            

        }
        catch (Exception $exc) {
            echo $exc;
        }
        return $data;
    }








}