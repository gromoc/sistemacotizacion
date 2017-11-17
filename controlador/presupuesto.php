<?php
  ob_start();
  $op=$_GET['op'];
  switch ($op)
  {
    case 1: {  
        
            header('Location:../vista/inicio.php');
       
        
        break;}  
    case 2:
    {
  $ancho=$_GET['txtancho'];
  $largo=$_GET['txtlargo'];
  $color=$_GET['txtcolor'];
  $im = imagecreate($ancho+10, $largo+10);
$colorimage = imagecolorallocate($im, 255, 0, 0);
// Dibujar un rectángulo blanco
imagefilledrectangle($im, 10, 10, $ancho, $largo, $colorimage);

// Guardar la imagen
imagepng($im, '../imagenes/modelopuerta.png');
imagedestroy($im);
$mensaje = $ancho.' x '.$largo;
  header('Location:../vista/creardibujo.php?mensaje='.$mensaje);
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
        
  }// fin del  switch
  
  
  
?>