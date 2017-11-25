<?php
        ob_start();
        require_once '../bean/BProducto.php';
        require_once '../dao/mProducto.php';

         if(isset($_POST['tipoform'])){
            $objcproducto = new cProducto();
         /*    header('Location: ../vista/mantenedores/vProducto.php?res=noautorizado'); 
               
              } else {*/
            switch ($_POST['tipoform']){
                case "nuevo":
                     $objcproducto->guardarProducto();
                     break;
                default:
               header('Location: ../admin/sections/vProductos.php?res=noautorizado'); 
             }
         }

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
        $objBeanProducto=new BProducto();
        $objProducto=new mProducto();    

        $objBeanProducto->setNombre($_POST['nvchproducto']);
        $objBeanProducto->setAltoProducto($_POST['naltoproducto']);
        $objBeanProducto->setAnchoProducto($_POST['nanchoproducto']);
        $objBeanProducto->setLargoProducto($_POST['nlargoproducto']);        
        $resultado=$objProducto->createNewMessage($objBeanProducto);        
        if($resultado > 0){
        header('Location: ../admin/index.php?res=ok');   
        }else{
            header('Location: ../admin/index.php?res=error');   
        }   
    }

    public function mostrarProducto(){
        
        $resultado = $this->model->obtenerProductos();
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