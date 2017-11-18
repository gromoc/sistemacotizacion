<?php 
  ob_start();
  require_once '../bean/BContacto.php';
  require_once '../dao/mContacto.php';
  $objContacto=new mContacto();
  $objBean=new BContacto();

  $objBean->setNombre($_POST['nombre']);
  $objBean->setEmail($_POST['email']);
  $objBean->setMensaje($_POST['mensaje']);

  $resultado=$objContacto->createNewMessage($objBean);

  if($resultado > 0){
    header('Location: ../vista/index.php?sec=vContactanos&res=ok');   
  }else{
    header('Location: ../vista/index.php?sec=vContactanos&res=error');   
  }

?>