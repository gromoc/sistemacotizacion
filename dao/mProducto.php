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
      $sql="INSERT INTO producto(nombre,descripcion,distribuidor, fechacrea)"
            . "VALUES('$OBJProducto->nombre',"
            . "       '$OBJProducto->descripcion'," 
            . "       '$OBJProducto->distribuidor',
            NOW())";    
       $result=$this->db->query($sql);
       $row_cnt=$this->db->affected_rows;
    } 
    catch (Exception $exc) {
        echo $exc;
    }
   return $row_cnt;   
  }

  public function obtenerProductos(){
    try{
      $sql = "SELECT * FROM producto;";
      $result=$this->db->query($sql);
      $resultado = array();
      foreach($$result->fetchAll(PDO::FETCH_OBJ) as $r)
			{
        $OBJProducto = new BProducto();
        $OBJProducto->setNombre($r->nombre);
        $OBJProducto->setDescripcion($r->descripcion);
        $OBJProducto->setDistribuidor($r->distribuidor);
        $resultado[] = $OBJProducto;          
      }
      return $resultado;
    }  catch (Exception $exc) {
      echo $exc;
  }
  }

}