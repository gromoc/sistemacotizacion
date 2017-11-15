<?php
require_once '../util/conexionbd.php';
require_once '../bean/clientebean.php';
class clientedao
{
    public function crearcliente(clientebean   $objclientebean)
    { $i=0;
    try
    {   $sql="INSERT INTO cliente(id,nombrersocial,dniruc,email,numero)"
            . "VALUES('$objclientebean->id',"
            . "       '$objclientebean->nombrersocial',"
            . "       '$objclientebean->dniruc',"
            . "       '$objclientebean->email',"
            . "       '$objclientebean->numero')";
          
          $objc=new ConexionBD();
       $cn=$objc->getConexionBD();
       $i=mysql_query($sql,$cn);
       mysql_close();       
   } catch (Exception $exc) 
   {
   }
   return $i;      
  }
    
    public function listarcliente()
    { try
      {
       $sql="SELECT * FROM   cliente;";
       $objc=new ConexionBD(); // creando objeto en PHP
       $cn= $objc->getConexionBD(); // conectandonos a la BD
       $rs=  mysql_query($sql,$cn);
       $LISTA=array();
       while($fila=  mysql_fetch_assoc($rs))
       {
       $LISTA[]=$fila; // GUARDANDO LOS REGISTRO A LA LISTA
       }    
       mysql_close(); // conexion Cerrada      
        } catch (Exception $exc)
        {           
        }
        return $LISTA;
    }
  
    public function LISTARDATOSUSUARIO()
    { try
      {$usuario=  Session::getAttribute("usuario");
       $sql="SELECT * FROM   USUARIO where ESTADO='A' and NOMUSUARIO='$usuario' ;";
       $objc=new ConexionBD(); // creando objeto en PHP
       $cn= $objc->getConexionBD(); // conectandonos a la BD
       $rs=  mysql_query($sql,$cn);
       $LISTA=array();
       while($fila=  mysql_fetch_assoc($rs))
       {
       $LISTA[]=$fila; // GUARDANDO LOS REGISTRO A LA LISTA
       }    
       mysql_close(); // conexion Cerrada      
        } catch (Exception $exc)
        {           
        }
        return $LISTA;
    }
    
    public function LISTARUSUARIOESTUDIANTE()
    { try
      {
       $sql="SELECT * FROM   USUARIO where ESTADO='A' and TIPOUSUARIO='ESTUDIANTE' ;";
       $objc=new ConexionBD(); // creando objeto en PHP
       $cn= $objc->getConexionBD(); // conectandonos a la BD
       $rs=  mysql_query($sql,$cn);
       $LISTA=array();
       while($fila=  mysql_fetch_assoc($rs))
       {
       $LISTA[]=$fila; // GUARDANDO LOS REGISTRO A LA LISTA
       }    
       mysql_close(); // conexion Cerrada      
        } catch (Exception $exc)
        {           
        }
        return $LISTA;
    }
    
  public function CREARUSUARIO(USUARIOBEAN    $objUSUARIOBEAN)
    { $i=0;
    try
    {   $sql="INSERT INTO USUARIO(CODUSUARIO,NOMBREUSUARIO,APEPATERUSUARIO,APEMATERUSUARIO,EMAIL,TELEFONO,DIRECCION,FOTO,NOMUSUARIO,PASSUSUARIO,TIPOUSUARIO,DESCRIPUSUARIO,ESTADO)"
            . "VALUES('$objUSUARIOBEAN->CODUSUARIO',"
            . "       '$objUSUARIOBEAN->NOMBREUSUARIO',"
            . "       '$objUSUARIOBEAN->APEPATERUSUARIO',"
            . "       '$objUSUARIOBEAN->APEMATERUSUARIO',"
            . "       '$objUSUARIOBEAN->EMAIL',"
            . "       '$objUSUARIOBEAN->TELEFONO',"
            . "       '$objUSUARIOBEAN->DIRECCION',"
            . "       '$objUSUARIOBEAN->FOTO',"
            . "       '$objUSUARIOBEAN->NOMUSUARIO',"
            . "       '$objUSUARIOBEAN->PASSUSUARIO',"
            . "       '$objUSUARIOBEAN->TIPOUSUARIO',"
            . "       '$objUSUARIOBEAN->DESCRIPUSUARIO',"
            . "       '$objUSUARIOBEAN->ESTADO')";
          
          $objc=new ConexionBD();
       $cn=$objc->getConexionBD();
       $i=mysql_query($sql,$cn);
       mysql_close();       
   } catch (Exception $exc) 
   {
   }
   return $i;      
  }
  
    public function MODIFICARUSUARIO(USUARIOBEAN    $objUSUARIOBEAN)
    { $i=0;
        try
        { $sql="Update USUARIO set"
                . "     NOMBREUSUARIO='$objUSUARIOBEAN->NOMBREUSUARIO',"
                . "     APEPATERUSUARIO='$objUSUARIOBEAN->APEPATERUSUARIO',"
                . "     APEMATERUSUARIO='$objUSUARIOBEAN->APEMATERUSUARIO',"
                . "     EMAIL='$objUSUARIOBEAN->EMAIL',"
                . "     TELEFONO='$objUSUARIOBEAN->TELEFONO',"
                . "     DIRECCION='$objUSUARIOBEAN->DIRECCION',"
                . "     FOTO='$objUSUARIOBEAN->FOTO',"
                . "     NOMUSUARIO='$objUSUARIOBEAN->NOMUSUARIO',"
                . "     PASSUSUARIO='$objUSUARIOBEAN->PASSUSUARIO',"
                . "     TIPOUSUARIO='$objUSUARIOBEAN->TIPOUSUARIO',"
                . "     DESCRIPUSUARIO='$objUSUARIOBEAN->DESCRIPUSUARIO',"
                . "     ESTADO='$objUSUARIOBEAN->ESTADO'"
                . "     WHERE   CODUSUARIO='$objUSUARIOBEAN->CODUSUARIO' ";
          
          $objc=new ConexionBD();
      $cn=$objc->getConexionBD();
      $i=mysql_query($sql,$cn);
      mysql_close();
      
      } catch (Exception $exc) 
      {   
         $i=0;
     }
     return  $i;
     }
    public function   ELIMINARUSUARIO(USUARIOBEAN    $objUSUARIOBEAN)
  {   $estado=0;
   try   
   {   $sql="DELETE  FROM  USUARIO  WHERE CODUSUARIO='$objUSUARIOBEAN->CODUSUARIO' ";
       $objc=new ConexionBD();
       $cn=$objc->getConexionBD();
       $estado=mysql_query($sql,$cn);
       mysql_close();       
   } catch (Exception $exc) 
   {
   }
   return $estado;      
  }
  
    public function validarUsuario($usuario,$clave,$tipousuario){
     $estado=0;
      try{                
            $sql = "select  *  from    usuario    where   NOMUSUARIO='$usuario' and   PASSUSUARIO='$clave' and  TIPOUSUARIO='$tipousuario'  ";          
            $objc = new ConexionBD();
            $cn=$objc->getConexionBD();            
            $rs = mysql_query($sql,$cn);             
            $lista = array();
            while( $fila = mysql_fetch_assoc($rs) ){
            	$lista[] = $fila;
            }                        
            if( count($lista) == 1 ){
            	 $estado=1;                 
            }
        }catch(Exception $e){
                    $estado=0;
        }
     return $estado;
    }
}
?>