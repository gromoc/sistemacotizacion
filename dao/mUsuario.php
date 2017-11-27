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
            $sql = "INSERT INTO persona (nombrersocial, dniruc, email, numero, estado) "
            . "VALUES ('$OBJRegistro->nombreruc', '$OBJRegistro->dniruc', '$OBJRegistro->email' ,'$OBJRegistro->telefono', '1');";


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
            $sql ="SELECT pe.nPerCodigo as idusu, pe.nombrersocial, pe.dniruc, (CASE WHEN LENGTH(pe.dniruc) <= 8 THEN 'DNI' ELSE 'RUC' END) AS tipodoc, pe.email, pe.numero, us.cUsuUsuario FROM persona pe INNER JOIN usuario us ON pe.nPerCodigo = us.nPerCodigo WHERE pe.estado = 1 AND nUsuCodigo NOT IN (1);";
            $resul = $this->db->query($sql);

        } catch (Exception $exc) {
            echo $exc;
        }
        return $resul;

    }

    public function resultadoUsuariosEditar($usu){
        try {
            $sql ="SELECT pe.nPerCodigo as id, pe.nombrersocial,   pe.dniruc,  pe.email,   pe.numero,   us.cUsuUsuario, us.cUsuClave FROM persona pe  INNER JOIN usuario us    ON pe.nPerCodigo = us.nPerCodigo   WHERE pe.nPerCodigo = $usu;";
            $resul = $this->db->query($sql);
        }
        catch (Exception $exc) {
            echo $exc;
        }
        return $resul;
    }

    public function actualizarUsuario(BRegistro $OBJRegistro){
        try {
            $sql = "UPDATE persona set nombrersocial = '$OBJRegistro->nombreruc', dniruc = '$OBJRegistro->dniruc', email = '$OBJRegistro->email', numero = '$OBJRegistro->telefono' WHERE nPerCodigo = $OBJRegistro->id;";
            $sql2 = "UPDATE usuario set cUsuClave = '$OBJRegistro->clave' WHERE nPerCodigo = $OBJRegistro->id;";
            $resul = $this->db->query($sql);
            $resul2 = $this->db->query($sql2);
            if($resul){
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

    public function eliminarUsuario($usu){
        try {
            $sql = "UPDATE persona set estado = 0 WHERE nPerCodigo = $usu;";
            $resul = $this->db->query($sql);
        }
        catch (Exception $exc) {
            echo $exc;
        }
        return $resul;        
    }

    

    









}