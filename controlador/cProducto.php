<?php
        ob_start();
        require_once '../bean/BProducto.php';
        require_once '../dao/mProducto.php';

        if(!isset($_POST['enviar'])){
            header('Location: ../vista/mantenedores/vProducto.php?res=noautorizado'); 
        } else {
            switch ($_POST['tipoform']){
                case "nuevo":
                    $objcproducto = new cProducto();
                    $objcproducto->guardarProducto();
                    break;
                default:
                header('Location: ../vista/mantenedores/vProducto.php?res=noautorizado'); 
            }
        }

class cProducto {
    // ! SE DEBE CREAR UNA CLASE PARA MANEJAR POR BLOQUES

    public function __CONSTRUCT()
    {
       
    }

    public function guardarProducto(){
        $objBeanProducto=new BProducto();
        $objProducto=new mProducto();            
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

    public function mostrarProducto(){
        $objProducto=new mProducto(); 
        $resultado = $objProducto->obtenerProductos();

        return $resultado;
    }

}








?>