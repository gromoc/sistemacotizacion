<?php
  session_start();
  require_once '../bean/puertabean.php';
  require_once '../dao/puertadao.php';
  require_once '../util/session.php';
  require_once '../util/conexionbd.php';
  $op=$_GET['op'];
  switch ($op)
  {
    case 1: {
    $id=$_GET['txtid'];
    $mensaje= $id;   
    header('Location:../vista/detallarmedidas.php?mensaje='.$mensaje);
        break;
    }  
    case 2:
    {
    $objpuertadao=new puertadao();
    $LISTA=$objpuertadao->listarpuerta();
    $_SESSION['listapuerta']=$LISTA;   
    header('Location:../vista/cotizarpuerta.php');
        break;
    }
    
    case 3:
    {
    $nombre_imagen='../imagenes/modelopuerta1.jpg';
    $ancho_get=$_GET['txtancho'];
    $alto_get=$_GET['txtalto'];
    header('Content-Type:image/jpeg');
    list ($ancho, $alto)=  getimagesize($nombre_imagen);
    $nuevo_ancho=$ancho*$ancho_get;
    $nuevo_alto=$alto*$alto_get;
    $thumb=  imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
    $origen=  imagecreatefromjpeg($nombre_imagen);
    imagecopyresized($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
    imagejpeg($thumb, '../imagenes/modificadopuerta1.jpg');
    imagedestroy($thumb);
    header('Location:../vista/detallarmedidas.php');
    break;
    }
        
    case 4:
    {
    $ancho=$_GET['txtancho'];
    $largo=$_GET['txtlargo'];
    $color=$_GET['txtcolor'];
    $mensaje = $ancho.' x '.$largo;
    header('Location:../vista/presupuesto.php?mensaje='.$mensaje);
    break;
    }
  }// fin del  switch
  
  
  
?>