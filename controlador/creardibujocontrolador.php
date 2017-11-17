<?php
  ob_start();
  require_once '../bean/clientebean.php';
  require_once '../dao/clientedao.php';
  require_once "../util/session.php";
  include '../util/conexionbd.php';
  $op=$_GET['op'];
  switch ($op)
  {
    case 1: {  
    $nombrersocial = $_GET['txtnombrersocial'];
    $dniruc = $_GET['txtdniruc'];
    $email = $_GET['txtemail'];
    $telefono = $_GET['txttelefono'];
    $nomusuario = $_GET['txtnomusuario'];
    $password = $_GET['txtpassusuario'];
    $consulta = "INSERT INTO cliente (nombrersocial,dniruc,email,telefono,nomusuario,password,tipousuario) VALUES ('$nombrersocial','$dniruc','$email','$telefono','$nomusuario','$password','cliente')";
    $i = $ejecutar = $conexion->query($consulta);
    if($i==1)
  {
      $mensaje= 'Registro Insertado !!!!!!!!!!';  
  }
  else
  {
      $mensaje= 'Registro No Insertado !!!!!!!!!!';   
  }
    header('Location:../vista/login.php?mensaje='.$mensaje);
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