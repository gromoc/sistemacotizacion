
<?php 
session_start();
ob_start();
require_once '../bean/BRegistro.php';
require_once '../dao/mContacto.php';
$objContacto=new mContacto();
$objBean=new BRegistro();

if(isset($_POST['acceso'])){

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


?>
