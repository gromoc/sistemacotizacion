
<?php 
session_start();
ob_start();
require_once '../bean/BRegistro.php';
require_once '../dao/mContacto.php';
require_once '../dao/mUsuario.php';

if(isset($_POST['tipoform'])){
    $obcregistro = new cRegistro();

    switch ($_POST['tipoform']){
        case "entrar":
            $obcregistro->validarUsuario();
            break;
        case "registro":
            $obcregistro->registrarUsuario();
            break;
        default:
            header('Location: ../vista/vLogin.php'); 
    }



}


class cRegistro{
    private $model;
    private $bean;

    public function __construct()
    {
        
    }

    public function validarUsuario(){
        $objContacto=new mContacto();
        $objBean=new BRegistro();

        $objBean->setUsuario($_POST['txtusuario']);
        $objBean->setClave($_POST['txtclave']);
        $resultado=$objContacto->validarAcceso($objBean);

        if($resultado == 1){
            header('Location: ../admin/');     
        }elseif($resultado == 2){
        
            header('Location: ../vista/index.php?sec=vCotizacion'); 
        
        }elseif($resultado == 200){
        
            header('Location: ../vista/index.php?sec=vLogin&res=0'); 
        }
    }

    public function registrarUsuario(){
        $objBeanRegistro= new BRegistro();
        $objUsuario = new mUsuario();

        $objBeanRegistro->setNombreruc($_POST['txtnombrersocial']);
        $objBeanRegistro->setDniRuc($_POST['txtdniruc']);
        $objBeanRegistro->setEmail($_POST['txtemail']);
        $objBeanRegistro->setTelefono($_POST['txttelefono']);
        $objBeanRegistro->setUsuario($_POST['txtnomusuario']);  
        $objBeanRegistro->setClave($_POST['txtpassusuario']);
        $resultado=$objUsuario->registrarUsuario($objBeanRegistro);
        if($resultado > 0){
            header('Location:../vista/vLogin.php?registro=ok');   
        }else{
            header('Location:../vista/vLogin.php?registro=error');   
        }
    }



}


?>
