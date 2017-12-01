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
                case "actualizarproducto":
                     $objcproducto->actualizarProductoAdmin();
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

    public function mostsetLargoProductorarProducto(){
        
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

    public function mostrarProducto(){
        
        $resultado = $this->model->obtenerProductos();
        return $resultado;
    }

    public function mostrarProductoEditar($idproducto){
        $resultado = $this->model->obtenerInfoProducto($idproducto);
        $r = $resultado->fetch_object();
        $this->bean->setId($r->idProducto);
        $this->bean->setNombre($r->prodNombre);
        $this->bean->setAltoProducto($r->prodAlto);
        $this->bean->setAnchoProducto($r->prodAncho);
        $this->bean->setLargoProducto($r->prodLargo);
        return $this->bean;
    }

    public function actualizarProductoAdmin(){
        
        $this->bean->setId($_POST['idproducto']);
        $this->bean->setNombre($_POST['nvchproducto']);
        $this->bean->setAltoProducto($_POST['naltoproducto']);
        $this->bean->setAnchoProducto($_POST['nanchoproducto']);
        $this->bean->setLargoProducto($_POST['nlargoproducto']);
        $resultado = $this->model->actualizarProducto($this->bean);
        if($resultado){
            header('Location:../admin/index.php?sec=vProductos&msj=ok');   
        }else{
            header('Location:../admin/index.php?sec=vProductos&msj=error');   
        }
        
    }

    public function eliminarProductoAdmin($idproducto){
        $resultado = $this->model->eliminarProducto($idproducto);
        if($resultado){
            header('Location:../admin/index.php?sec=vProductos&msj=ok');  
        } else{
            header('Location:../admin/index.php?sec=vProductos&msj=error');   
        }
    }

    public function getAccesorioProducto(){
        $resultado = $this->model->accesorioProducto();
        return $resultado;
    }


}








?>