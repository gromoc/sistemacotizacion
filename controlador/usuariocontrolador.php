
<?php
  require_once "../util/conexionbd.php";
  require_once "../util/conexionbd2.php";
  $op=$_GET['op'];
  switch ($op)
  {
    case 1: {  
        
            header('Location:../vista/inicio.php');
       
        
        break;}  
    case 2:
    {
        $usuario=$_GET['txtusuario'];
        $clave=$_GET['txtclave'];
        $cliente = 'cliente';
        $admin = 'admin';
        $consulta = "select  *  from    cliente    where   nomusuario='$usuario' and   password='$clave' and  tipousuario='$cliente'  ";
        $conexion->query($consulta);
        if ($consulta = "select  *  from    cliente    where   nomusuario='$usuario' and   password='$clave' and  tipousuario='$cliente'  " &
            $conexion->query($consulta)){
                    $mensaje= $consulta;   
                    header('Location:../vista/validacion.php?mensaje='.$consulta);
                }
                else{
        $consulta = "select  *  from    cliente    where   nomusuario='$usuario' and   password='$clave' and  tipousuario='$admin'  ";
        $i = $conexion->query($consulta);
            if($i==1)
        {
                    header('Location:../vista/admin.php');
        }
        else
        {
          $mensaje= 'Usuario Incorrecto';   
          header('Location:../vista/login.php?mensaje='.$mensaje);
        }
        }
    break;}
    case 3:
    {     unset($_SESSION['LISTAUSUARIO']);// MATAR LA SESION 
          $objUSUARIODAO=new USUARIODAO();
          $LISTA=$objUSUARIODAO->LISTARUSUARIO();
          $_SESSION['LISTAUSUARIO']=$LISTA;         
          header('Location:../VISTA/MANTENIMIENTO/USUARIO/FrmUsuarioMant.php');           
     break;   
    }
    case 4:
    {
     $objUSUARIODAO=new USUARIODAO();
     $LISTA=$objUSUARIODAO->LISTARUSUARIO();
     $_SESSION['LISTAUSUARIO']=$LISTA;   
     header('Location:../VISTA/MANTENIMIENTO/USUARIO/FrmUsuarioMant.php');   
        
    break;
    }
      case 5:
     {
      $CODUSUARIO=$_GET['cod'];
       $objUSUARIOBEAN=new USUARIOBEAN();
       $objUSUARIOBEAN->setCODUSUARIO($CODUSUARIO);
       $objUSUARIODAO=new USUARIODAO();
       
       $i=$objUSUARIODAO->ELIMINARUSUARIO($objUSUARIOBEAN);
        if($i==1)
          { $mensaje= 'Registro Eliminado !!!!!!!!!!';  
          }
          else
          { $mensaje= 'Registro No Eliminado !!!!!!!!!!';   
          } 
          unset($_SESSION['LISTAUSUARIO']);//MATAMOS LA SESION
          $LISTA=$objUSUARIODAO->LISTARUSUARIO();
          $_SESSION['LISTAUSUARIO']=$LISTA;   
          header('Location:../VISTA/MANTENIMIENTO/USUARIO/FrmUsuarioMant.php?mensaje='.$mensaje);  
    break;
    }
    case 6 :
    {  $cod=$_GET['cod'];
       $nombreusuario=$_GET['nombreusuario'];
       $apepaterusuario=$_GET['apepaterusuario'];
       $apematerusuario=$_GET['apematerusuario'];
       $email=$_GET['email'];
       $telf=$_GET['telf'];
       $direc=$_GET['direc'];
       $foto=$_GET['foto'];
       $nomusuario=$_GET['nomusuario'];
       $passusuario=$_GET['passusuario'];
       $tipousuario=$_GET['tipousuario'];
       $descripusuario=$_GET['descripusuario'];
       $est=$_GET['est'];
       
       
       $_SESSION['CODUSUARIO']=$cod;
       $_SESSION['NOMBREUSUARIO']=$nombreusuario;
       $_SESSION['APEPATERUSUARIO']=$apepaterusuario;
       $_SESSION['APEMATERUSUARIO']=$apematerusuario;
       $_SESSION['EMAIL']=$email;
       $_SESSION['TELEFONO']=$telf;
       $_SESSION['DIRECCION']=$direc;
       $_SESSION['FOTO']=$foto;
       $_SESSION['NOMUSUARIO']=$nomusuario; 
       $_SESSION['PASSUSUARIO']=$passusuario;
       $_SESSION['TIPOUSUARIO']=$tipousuario;
       $_SESSION['DESCRIPUSUARIO']=$descripusuario;
       $_SESSION['ESTADO']=$est;
       header('Location:../VISTA/MANTENIMIENTO/USUARIO/FrmModificarUsuarioMant.php');    
     break;
    }
    case 7  :
    {
        $cod=$_GET['txtcodigo'];
        $nombreusuario=$_GET['txtnombreusuario'];
        $apepaterusuario=$_GET['txtapepaterusuario'];
        $apematerusuario=$_GET['txtapematerusuario'];
        $EMAIL=$_GET['txtemail'];
        $TELEFONO=$_GET['txttelefono'];
        $DIRECCION=$_GET['txtdireccion'];
        $FOTO=$_GET['imagen'];
        $nomusuario=$_GET['txtnomusuario'];
        $passusuario=$_GET['txtpassusuario'];
        $tipousuario=$_GET['txttipousuario'];
        $descripusuario=$_GET['txtdescripusuario'];
        $est=$_GET['txtestado'];
        $objUSUARIOBEAN=new USUARIOBEAN();
        $objUSUARIOBEAN->setCODUSUARIO($cod);
        $objUSUARIOBEAN->setNOMBREUSUARIO($nombreusuario);
        $objUSUARIOBEAN->setAPEPATERUSUARIO($apepaterusuario);
        $objUSUARIOBEAN->setAPEMATERUSUARIO($apematerusuario);
        $objUSUARIOBEAN->setEMAIL($EMAIL);
        $objUSUARIOBEAN->setTELEFONO($TELEFONO);
        $objUSUARIOBEAN->setDIRECCION($DIRECCION);
        $objUSUARIOBEAN->setFOTO($FOTO);
        $objUSUARIOBEAN->setNOMUSUARIO($nomusuario);
        $objUSUARIOBEAN->setPASSUSUARIO($passusuario);
        $objUSUARIOBEAN->setTIPOUSUARIO($tipousuario);
        $objUSUARIOBEAN->setDESCRIPUSUARIO($descripusuario);
        $objUSUARIOBEAN->setESTADO($est);
        
        $objUSUARIODAO=new USUARIODAO();
        $i= $objUSUARIODAO->MODIFICARUSUARIO($objUSUARIOBEAN);
         if($i==1)
              { $mensaje= 'Registro Modificado !!!!!!!!!!';  
          }
          else
          { $mensaje= 'Registro No Modificado !!!!!!!!!!';   
          }
    header('Location:../VISTA/MANTENIMIENTO/USUARIO/FrmModificarUsuarioMant.php?mensaje='.$mensaje);
    break;
    }
    case 8: { 
        
            header('Location:../VISTA/ADMINISTRADOR/FrmMenuMant.php');
       
        
            break;}
    case 9 : { 
        $usuario=$_GET['txtusuario'];
        $clave=$_GET['txtclave'];
        $tipousuario=$_GET['tipousuario'];
        $objeto=new USUARIODAO();
        $estado=$objeto->validarUsuario($usuario, $clave, $tipousuario);

        if($estado==1 & $tipousuario=='ADMINISTRADOR')
        {
          Session::setAttribute("usuario",  $usuario);
          Session::setAttribute("clave",  $clave);
          Session::setAttribute("tipousuario",  $tipousuario);
          $destino = "../VISTA/ADMINISTRADOR/InicioAdm.php";         
          header("location:$destino");
        }
        
        else
        {
          Session::setAttribute("error", "Usuario y Contraseña Incorrecta");
          $mensaje= 'Usuario Incorrecto';   
          header('Location:../vista/login.php?mensaje='.$mensaje);
        }
        
        break;}
        
        case 10: { 
        
            header('Location:../VISTA/InicioSistemaControlTesis.php');
            
            break;}
            
    case 11 : { 
          Session::removeAttribute("usuario");
          $destino = "../index.php";     
          header("location:$destino");
        break;}
        
    case 12: { 
       
        if($tipousuario=='ADMINISTRADOR'){
          header('Location:../VISTA/ADMINISTRADOR/InicioAdm.php');
          }
          else
              if ($tipousuario=='DOCENTE') {
           header('Location:../VISTA/DOCENTE/InicioDoc.php');
              }
            break;}
    case 13:
    {
  $cod=$_GET['txtcod'];
  $nombreusuario=$_GET['txtnombreusuario'];
  $apepaterusuario=$_GET['txtapepaterusuario'];
  $apematerusuario=$_GET['txtapematerusuario'];
  $email=$_GET['txtemail'];
  $telf=$_GET['txttelefono'];
  $direc=$_GET['txtdireccion'];
  $foto=$_GET['txtfoto'];
  $nomusuario=$_GET['txtnomusuario'];
  $passusuario=$_GET['txtpassusuario'];
  $tipousuario=$_GET['txttipousuario'];
  $descripusuario=$_GET['txtdescripusuario'];
  $est=$_GET['txtestado'];
  $objUSUARIOBEAN=new USUARIOBEAN();
  $objUSUARIOBEAN->setCODUSUARIO($cod);
  $objUSUARIOBEAN->setNOMBREUSUARIO($nombreusuario);
  $objUSUARIOBEAN->setAPEPATERUSUARIO($apepaterusuario);
  $objUSUARIOBEAN->setAPEMATERUSUARIO($apematerusuario);
  $objUSUARIOBEAN->setEMAIL($email);
  $objUSUARIOBEAN->setTELEFONO($telf);
  $objUSUARIOBEAN->setDIRECCION($direc);
  $objUSUARIOBEAN->setFOTO($foto);
  $objUSUARIOBEAN->setNOMUSUARIO($nomusuario);
  $objUSUARIOBEAN->setPASSUSUARIO($passusuario);
  $objUSUARIOBEAN->setTIPOUSUARIO($tipousuario);
  $objUSUARIOBEAN->setDESCRIPUSUARIO($descripusuario);
  $objUSUARIOBEAN->setESTADO($est);
  
  $objUSUARIODAO=new USUARIODAO();
  $i= $objUSUARIODAO->CREARUSUARIO($objUSUARIOBEAN);
  if($i==1)
  {
      $mensaje= 'Se Ha Registrado Correctamente';  
  }
  else
  {
      $mensaje= 'No Se Ha Registrado Correctamente';   
  }
  
  header('Location:../VISTA/logearse.php?mensaje='.$mensaje);
 break;
    }
    case 14 :
    {   $objUSUARIODAO=new USUARIODAO();
        $LISTA=$objUSUARIODAO->LISTARDATOSUSUARIO();
        $_SESSION['LISTAUSUARIO']=$LISTA;
       header('Location:../VISTA/MANTENIMIENTO/ConfigurarCuenta.php');    
     break;
    }
    case 15 :
    {  $cod=$_GET['cod'];
       $nombreusuario=$_GET['nombreusuario'];
       $apepaterusuario=$_GET['apepaterusuario'];
       $apematerusuario=$_GET['apematerusuario'];
       $email=$_GET['email'];
       $telf=$_GET['telf'];
       $direc=$_GET['direc'];
       $foto=$_GET['foto'];
       $nomusuario=$_GET['nomusuario'];
       $passusuario=$_GET['passusuario'];
       $tipousuario=$_GET['tipousuario'];
       $descripusuario=$_GET['descripusuario'];
       $est=$_GET['est'];
       
       
       $_SESSION['CODUSUARIO']=$cod;
       $_SESSION['NOMBREUSUARIO']=$nombreusuario;
       $_SESSION['APEPATERUSUARIO']=$apepaterusuario;
       $_SESSION['APEMATERUSUARIO']=$apematerusuario;
       $_SESSION['EMAIL']=$email;
       $_SESSION['TELEFONO']=$telf;
       $_SESSION['DIRECCION']=$direc;
       $_SESSION['FOTO']=$foto;
       $_SESSION['NOMUSUARIO']=$nomusuario; 
       $_SESSION['PASSUSUARIO']=$passusuario;
       $_SESSION['TIPOUSUARIO']=$tipousuario;
       $_SESSION['DESCRIPUSUARIO']=$descripusuario;
       $_SESSION['ESTADO']=$est;
       header('Location:../VISTA/MANTENIMIENTO/ConfigurarDatos.php');    
     break;
    }
    case 16  :
    {
        $cod=$_GET['txtcodigo'];
        $nombreusuario=$_GET['txtnombreusuario'];
        $apepaterusuario=$_GET['txtapepaterusuario'];
        $apematerusuario=$_GET['txtapematerusuario'];
        $EMAIL=$_GET['txtemail'];
        $TELEFONO=$_GET['txttelefono'];
        $DIRECCION=$_GET['txtdireccion'];
        $FOTO=$_GET['imagen'];
        $usuario=$_GET['txtnomusuario'];
        $passusuario=$_GET['txtpassusuario'];
        $tipousuario=$_GET['txttipousuario'];
        $descripusuario=$_GET['txtdescripusuario'];
        $est=$_GET['txtestado'];
        $objUSUARIOBEAN=new USUARIOBEAN();
        $objUSUARIOBEAN->setCODUSUARIO($cod);
        $objUSUARIOBEAN->setNOMBREUSUARIO($nombreusuario);
        $objUSUARIOBEAN->setAPEPATERUSUARIO($apepaterusuario);
        $objUSUARIOBEAN->setAPEMATERUSUARIO($apematerusuario);
        $objUSUARIOBEAN->setEMAIL($EMAIL);
        $objUSUARIOBEAN->setTELEFONO($TELEFONO);
        $objUSUARIOBEAN->setDIRECCION($DIRECCION);
        $objUSUARIOBEAN->setFOTO($FOTO);
        $objUSUARIOBEAN->setNOMUSUARIO($usuario);
        $objUSUARIOBEAN->setPASSUSUARIO($passusuario);
        $objUSUARIOBEAN->setTIPOUSUARIO($tipousuario);
        $objUSUARIOBEAN->setDESCRIPUSUARIO($descripusuario);
        $objUSUARIOBEAN->setESTADO($est);
        
        $objUSUARIODAO=new USUARIODAO();
        $i= $objUSUARIODAO->MODIFICARUSUARIO($objUSUARIOBEAN);
         if($i==1)
              { $mensaje= 'Registro Modificado !!!!!!!!!!';  
              Session::setAttribute("usuario",  $usuario);
          }
          else
          { $mensaje= 'Registro No Modificado !!!!!!!!!!';   
          }
    header('Location:../VISTA/MANTENIMIENTO/ConfigurarDatos.php?mensaje='.$mensaje);
    break;
    }
    case 17: { 
       
        if($tipousuario=='ADMINISTRADOR'){
          header('Location:../VISTA/ADMINISTRADOR/InicioAdm.php');
          }
            else
              if ($tipousuario=='DOCENTE') {
           header('Location:../VISTA/DOCENTE/InicioDoc.php');
              }
            else
                if ($tipousuario=='COORDINADOR') {
           header('Location:../VISTA/COORDINADOR/InicioCoor.php');
              }
              else
                if ($tipousuario=='ESTUDIANTE') {
           header('Location:../VISTA/ESTUDIANTE/InicioEst.php');
              }
            break;}
    }// fin del  switch
        
?>

