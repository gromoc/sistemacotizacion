<?php
require_once '../UTIL/ConexionBD.php';
require_once '../BEAN/ADMINISTRADORBEAN.php';
require_once '../BEAN/USUARIOBEAN.php';
class ADMINISTRADORDAO
{
    public function FILTRARLISTADOADMINISTRADOR(USUARIOBEAN    $objUSUARIOBEAN)
    {   try
        { $sql="SELECT * FROM   ADMINISTRADOR where CODUSUARIO='$objUSUARIOBEAN->CODUSUARIO'' ;";
          $objc=new ConexionBD();
          $cn=$objc->getConexionBD();
          $rs= mysql_query($cn, $sql);
          $lista=array();
          while($fila=mysql_fetch_assoc($rs))
          {
           $lista[]=$fila;
          } 
          mysql_close($cn);
          } catch (Exception $exc)
          {  
          }
        return $lista;
    }
    public function LISTARADMINISTRADOR()
    { try
      {
       $sql="SELECT * FROM   ADMINISTRADOR where ESTADO='A' ;";
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
    public function MODIFICARADMINISTRADOR(ADMINISTRADORBEAN    $objADMINISTRADORBEAN)
    { $i=0;
        try
        { $sql="UPDATE ADMINISTRADOR SET"
                . "    NOMADMIN='$objADMINISTRADORBEAN->NOMADMIN',"
                . "    APEPATERADMIN='$objADMINISTRADORBEAN->APEPATERADMIN',"
                . "    APEMATERADMIN='$objADMINISTRADORBEAN->APEMATERADMIN',"
                . "    EMAIL='$objADMINISTRADORBEAN->EMAIL',"
                . "    TELEFONO='$objADMINISTRADORBEAN->TELEFONO',"
                . "    DIRECCION='$objADMINISTRADORBEAN->DIRECCION',"
                . "    FOTO='$objADMINISTRADORBEAN->FOTO',"
                . "    ESTADO='$objADMINISTRADORBEAN->ESTADO',"
                . "    CODUSUARIO='$objADMINISTRADORBEAN->CODUSUARIO'"
                . "    where CODADMIN='$objADMINISTRADORBEAN->CODADMIN' ;";
          
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
}
?>
