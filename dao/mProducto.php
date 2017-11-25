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
      $sql="INSERT INTO productos(prodNombre,prodAlto,prodAncho, prodLargo)"
            . "VALUES('$OBJProducto->nombre',"
            . "       '$OBJProducto->altoproducto'," 
            . "       '$OBJProducto->anchoproducto',"
            . "       '$OBJProducto->largoproducto');";  
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
        $sql = "SELECT * FROM productos;";
        $result=$this->db->query($sql);
        if($result->num_rows >= 1){
          
          while($row = $result->fetch_assoc()){
            $data[] = $row;
          }
        }else{

          $data = false;
        }
        return $data;
        
      }  catch (Exception $exc) {
        echo $exc;
    }
  }
  public function setProductsforCategory($categoria){
      try{
        $sql = "SELECT * FROM productos p INNER JOIN categorias c ON p.idCategoria = c.idCategoria WHERE p.idCategoria='$categoria'";
        $result=$this->db->query($sql);
        if($result->num_rows >= 1){
          
          while($row = $result->fetch_assoc()){
            $data[] = $row;
          }
        }else{

          $data = false;
        }
        return $data;

      }  catch (Exception $exc) {
        echo $exc;
    }
  }
  public function setProductsforId($idProducto){
    try{
      $sql = "SELECT * FROM productos p WHERE p.idProducto='$idProducto'";
      $result=$this->db->query($sql);
      if($result->num_rows >= 1){
        
        while($row = $result->fetch_assoc()){
          $data[] = $row;
        }
      }else{

        $data = false;
      }
      return $data;

    }  catch (Exception $exc) {
      echo $exc;
  }
}
public function setUsuarioForId($idUser){
  try{
    $sql = "SELECT * FROM usuario u INNER JOIN persona p ON u.nPerCodigo = p.nPerCodigo WHERE p.nPerCodigo='$idUser'";
    $result=$this->db->query($sql);
    if($result->num_rows >= 1){
      
      while($row = $result->fetch_assoc()){
        $data[] = $row;
      }
    }else{

      $data = false;
    }
    return $data;

  }  catch (Exception $exc) {
    echo $exc;
}
}



}
