<?php
        ob_start();
        require_once '../bean/BProducto.php';
        require_once '../dao/mProducto.php';

        // if(!isset($_POST['enviar'])){
        //     header('Location: ../vista/mantenedores/vProducto.php?res=noautorizado'); 
        // } else {
        //     switch ($_POST['tipoform']){
        //         case "nuevo":
        //             $objcproducto = new cProducto();
        //             $objcproducto->guardarProducto();
        //             break;
        //         default:
        //         header('Location: ../vista/mantenedores/vProducto.php?res=noautorizado'); 
        //     }
        // }

class cProducto {
    // ! SE DEBE CREAR UNA CLASE PARA MANEJAR POR BLOQUES
    private $model;
    private $bean;

    public function __construct()
    {
        $this->model=new mProducto();
        $this->bean=new BProducto();
    }

    public function guardarProducto(){
          
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
    public function getProductForCategory($cat){

        // $this->bean->setCategoria($cat);
        $resultado = $this->model->setProductsforCategory($cat);
        return $resultado;
    }
    public function getProductForId($pro){

        // $this->bean->setCategoria($cat);
        $resultado = $this->model->setProductsforId($pro);
        return $resultado;
    }
    public function getUsuarioForId($id){

        $resultado = $this->model->setUsuarioForId($id);
        return $resultado;
    }

}








?>