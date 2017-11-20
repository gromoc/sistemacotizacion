<?php
require_once '../util/database.php';
class mProducto
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

  public function createNewMessage(BProducto $OBJProducto){ 

    try {    
      $sql="INSERT INTO contacto(nombre,email,mensaje)"
            . "VALUES('$OBJProducto->nombre',"
            . "       '$OBJProducto->descripcion'," 
            . "       '$OBJProducto->distribuidor')";
          
       $result=$this->db->query($sql);

       $row_cnt=$this->db->affected_rows;
  
    } 
    catch (Exception $exc) {
        echo $exc;
    }
   return $row_cnt;    

  }

}
