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
      $sql="INSERT INTO productos(prodNombre,prodAlto,prodAncho, prodLargo, prodEstado)"
            . "VALUES('$OBJProducto->nombre',"
            . "       '$OBJProducto->altoproducto'," 
            . "       '$OBJProducto->anchoproducto',"
            . "       '$OBJProducto->largoproducto'), 1;";  
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

public function obtenerInfoProducto($idProducto){
  try {
    $sql = "SELECT * FROM productos WHERE idProducto = $idProducto WHERE idProducto = 1 ;";
    $result=$this->db->query($sql);
  }
  catch (Exception $exc) {
    echo $exc;
  }
return $result;
}

public function actualizarProducto(BProducto $OBJProducto){
  $data;
  try {
    $sql = "update productos set prodNombre = '$OBJProducto->nombre', "
           ."prodAlto = $OBJProducto->altoproducto, "
           ."prodAncho = $OBJProducto->anchoproducto, "
           ."prodLargo = $OBJProducto->largoproducto WHERE idProducto = $OBJProducto->id;";
    $result=$this->db->query($sql);
    
    if($result){
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

public function eliminarProducto($idProducto){
  try {
    $sql = "update productos set prodEstado = 0 WHERE idProducto = $idProducto;";
    $result=$this->db->query($sql);
  }
  catch (Exception $exc) {
    echo $exc;
  }
return $result;
}

public function accesorioProducto(){
  try{
    $sql = "select '0' idAcessorio,  'SELECCIONE' nombreAccesorio UNION ALL select idAcessorio, nombreAccesorio FROM accesorio order by idAcessorio;";
    $result=$this->db->query($sql);
    if($result->num_rows >= 1){      
      while($row = $result->fetch_assoc()){
        $data[] = $row;
      }
    }else{
      $data = false;
    }
    return $data;
  } 
  catch (Exception $exc) {
    echo $exc;
  }
}



}
