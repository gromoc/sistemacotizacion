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

}
?>