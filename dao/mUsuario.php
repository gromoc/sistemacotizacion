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
            $sql = "INSERT INTO persona (nombresocial, dniruc, email, numero) "
            . "VALUES ('$OBJRegistro->nombreruc', '$OBJRegistro->dniruc', '$OBJRegistro->email' ,'$OBJRegistro->telefono'); "
            . "INSERT INTO usuario (nPerCodigo, cUsuUsuario, cUsuClave, cUsuTipo) "
            . "VALUES (LAST_INSERT_ID(), '$OBJRegistro->usuario', '$OBJRegistro->clave' ,'2');";
            $result = $this->db->query($sql);
            $row_cnt = $this->db->affeted_rows;
        }
        catch (Exception $exc) {
            echo $exc;
        }
        return $row_cnt;
    }








}