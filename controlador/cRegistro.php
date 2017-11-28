<?php 
ob_start();
session_start();
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
        case "registroadmin":
            $obcregistro->registrarUsuarioAdmin();
            break;
        case "actualizarusuadmin":
            $obcregistro->actualizarUsuarioAdmin();
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
        $objContacto= new mContacto();
        $objBean=new BRegistro();

        $objBean->setUsuario($_POST['txtusuario']);
        $objBean->setClave($_POST['txtclave']);
        $resultado=$objContacto->validarAcceso($objBean);

        if($resultado == 1){
            header('Location: ../admin/');     
        }elseif($resultado == 2){
        
            header('Location: ../vista/index.php?sec=vCotizacion&res=1'); 
        
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
            header('Location:../vista/index.php?sec=vLogin&msj=ok');   
        }else{
            header('Location:../vista/index.php?sec=vLogin&msj=error');   
        }
    }

    public function registrarUsuarioAdmin(){
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
            header('Location:../admin/index.php?sec=vUsuarios&msj=ok');   
        }else{
            header('Location:../admin/index.php?sec=vUsuarios&msj=error');   
        }
    }

    public function obtenerUsuarios(){
        $objUsuario = new mUsuario();
        return $objUsuario->resultadoUsuarios();
    }

    public function obtenerUsuarioEditar($usu){
        $objBeanRegistro= new BRegistro();
        $objUsuario = new mUsuario();

        $resul = $objUsuario->resultadoUsuariosEditar($usu);
        $r = $resul->fetch_object();
        $objBeanRegistro->setId($r->id);
        $objBeanRegistro->setNombreruc($r->nombrersocial);
        $objBeanRegistro->setDniRuc($r->dniruc);
        $objBeanRegistro->setEmail($r->email);
        $objBeanRegistro->setTelefono($r->numero);
        $objBeanRegistro->setUsuario($r->cUsuUsuario);
        $objBeanRegistro->setClave($r->cUsuClave);
        return $objBeanRegistro;
    }   

    public function actualizarUsuarioAdmin(){        
        $objBeanRegistro= new BRegistro();
        $objUsuario = new mUsuario();
        $objBeanRegistro->setId($_POST['idusuario']);
        $objBeanRegistro->setNombreruc($_POST['txtnombrersocial']);
        $objBeanRegistro->setDniRuc($_POST['txtdniruc']);
        $objBeanRegistro->setEmail($_POST['txtemail']);
        $objBeanRegistro->setTelefono($_POST['txttelefono']);
        $objBeanRegistro->setUsuario($_POST['txtnomusuario']);  
        $objBeanRegistro->setClave($_POST['txtpassusuario']);
        $resultado = $objUsuario->actualizarUsuario($objBeanRegistro);
        if($resultado){
            header('Location:../admin/index.php?sec=vUsuarios&msj=ok');   
        }else{
            header('Location:../admin/index.php?sec=vUsuarios&msj=error');   
        }
    }

    public function eliminarUsuarioAdmin($usu){
        $objBeanRegistro= new BRegistro();
        $objUsuario = new mUsuario();
        $resultado = $objUsuario->eliminarUsuario($usu);
        if($resultado){
            header('Location:../admin/index.php?sec=vUsuarios&msj=ok');   
        }else{
            header('Location:../admin/index.php?sec=vUsuarios&msj=error');   
        }
    }



}


?>
