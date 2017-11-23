<?php
require_once '../util/database.php';
class mContacto
{
    private $db;

    public function __construct(){

      $this->db=Conectar::conexion();

    }

    // public function get_personas(){
    //   $consulta=$this->db->query("select * from personas;");
    //   while($filas=$consulta->fetch_assoc()){
    //       $this->personas[]=$filas;
    //   }
    //   return $this->personas;
    // }

  public function createNewMessage(BContacto $OBJContacto){ 

    try {    
      $sql="INSERT INTO contacto(nombre,email,mensaje)"
            . "VALUES('$OBJContacto->nombre',"
            . "       '$OBJContacto->email'," 
            . "       '$OBJContacto->mensaje')";
          
       $result=$this->db->query($sql);

       $row_cnt=$this->db->affected_rows;
  
    } 
    catch (Exception $exc) {
        echo $exc;
    }
   return $row_cnt;    

  }

  public function validarAcceso(BRegistro $OBJDatos){
    try{
      $usuario=$OBJDatos->usuario;
      $clave = $OBJDatos->clave;

      $sql="SELECT cUsuUsuario, cUsuTipo FROM usuario WHERE cUsuUsuario='$usuario' AND cUsuClave='$clave'";

      $result=$this->db->query($sql);

      if($result->num_rows == 1){

        $row = mysqli_fetch_assoc($result);
        $respuesta= $row['cUsuTipo'];
        $_SESSION['user']= $row['cUsuUsuario'];
  
      }else{

        $respuesta=200;
      }

    }
    catch (Exception $exc) {
      echo $exc;
    }
  return $respuesta;   
  }

}
?>