<?php

// ! SE DEBE CREAR UNA CLASE PARA MANEJAR POR BLOQUES
ob_start();
require_once '../bean/BProducto.php';
require_once '../dao/mProducto.php';
$objBeanProducto=new BProducto();
$objProducto=new mProducto();


if(isset($_POST['enviar'])){
    
      $objBeanProducto->setNombre($_POST['nvchproducto']);
      $objBeanProducto->setDescripcion($_POST['nvchdescripcion']);
      $objBeanProducto->setDistribuidor($_POST['nvchcantidad']);
    
      $resultado=$objProducto->createNewMessage($objBeanProducto);
    
      if($resultado > 0){
        header('Location: ../vista/mantenedores/vProducto.php?res=ok');   
      }else{
        header('Location: ../vista/mantenedores/vProducto.php?res=error');   
      }
      
    }





?>