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

    public function resultadoUsuarios(){
        try {
            $sql ="SELECT pe.nombrersocial, pe.dniruc, (CASE WHEN LENGTH(pe.dniruc) <= 8 THEN 'DNI' ELSE 'RUC' END) AS tipodoc, pe.email, pe.numero, us.cUsuUsuario FROM persona pe INNER JOIN usuario us ON pe.nPerCodigo = us.nPerCodigo;";
            $resul = $this->db->query($sql);

        } catch (Exception $exc) {
            echo $exc;
        }
        return $resul;

    }









}