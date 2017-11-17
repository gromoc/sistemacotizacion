<?php
require_once "../util/conexionbd.php";
require_once "../bean/puertabean.php";
require_once "../util/session.php";
class puertadao
{

    public function listarpuerta()
    { try
      {
       $sql="SELECT * FROM puertas;";
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
    
    public function INSERTARASISTENCIA(ASISTENCIABEAN    $objASISTENCIABEAN)
    { $i=0;
    try
    {   $sql="INSERT INTO ASISTENCIA(CODASISTENCIA,ESTUDIANTE,ESTADOASISTENCIA,DESCRIPASISTENCIA,CODDOCENTE,ESTADO)"
            . "VALUES('$objASISTENCIABEAN->CODASISTENCIA',"
            . "       '$objASISTENCIABEAN->ESTUDIANTE',"
            . "       '$objASISTENCIABEAN->ESTADOASISTENCIA',"
            . "       '$objASISTENCIABEAN->DESCRIPASISTENCIA',"
            . "       '$objASISTENCIABEAN->CODDOCENTE',"
            . "       '$objASISTENCIABEAN->ESTADO')";
          
          $objc=new ConexionBD();
       $cn=$objc->getConexionBD();
       $i=mysql_query($sql,$cn);
       mysql_close();       
   } catch (Exception $exc) 
   {
   }
   return $i;      
  } 
  
  
    public function MODIFICARASISTENCIA(ASISTENCIABEAN    $objASISTENCIABEAN)
    { $i=0;
        try
        { $sql="Update ASISTENCIA set"
                . "     ESTUDIANTE='$objASISTENCIABEAN->ESTUDIANTE',"
                . "     ESTADOASISTENCIA='$objASISTENCIABEAN->ESTADOASISTENCIA',"
                . "     DESCRIPASISTENCIA='$objASISTENCIABEAN->DESCRIPASISTENCIA',"
                . "     CODDOCENTE='$objASISTENCIABEAN->CODDOCENTE',"
                . "     ESTADO='$objASISTENCIABEAN->ESTADO'"
                . "     WHERE   CODASISTENCIA='$objASISTENCIABEAN->CODASISTENCIA' ";
          
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
    public function   ELIMINARASISTENCIA(ASISTENCIABEAN    $objASISTENCIABEAN)
  {   $estado=0;
   try   
   {   $sql="DELETE  FROM  ASISTENCIA  WHERE CODASISTENCIA='$objASISTENCIABEAN->CODASISTENCIA' ";
       $objc=new ConexionBD();
       $cn=$objc->getConexionBD();
       $estado=mysql_query($sql,$cn);
       mysql_close();       
   } catch (Exception $exc) 
   {
   }
   return $estado;      
  }  
}
?>