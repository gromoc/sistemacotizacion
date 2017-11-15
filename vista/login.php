<html>
    <head>
    <meta charset="windows-1252">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/bootstrap.css";?>" rel='stylesheet' type='text/css'>
    <link type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilo.css";?>" rel="stylesheet">
    <link type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style.css";?>" rel="stylesheet">
    <link type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilopropio.css";?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style.css";?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/magnific-popup.css";?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://aurea.es/style.css?nocache=" type="text/css" media="screen" />
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery-1.11.1.min.js";?>"></script> 
    <script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery-1.9.0.min.js";?>"></script> 
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery.openCarousel.js";?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/easing.js";?>"></script>
    <script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/move-top.js";?>"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery.magnific-popup.js";?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $("#hide").click(function(){
        $("#element").hide();
        });
        $("#show").click(function(){
        $("#element").show();
        });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
        $("#enviar-btn").click(function() {
        var name = $("input#name").val();
        var message = $("textarea#message").val();
        var dataString = 'name=' + name + '&message=' + message;
        $.ajax({
            type: "POST",
            url: "addmessage.php",
            data: dataString,
            success: function() {
                $("#element").hide();
                $('#newmessage').append('<h2>Tu información ha sido recibida correctamente!</h2><table><tr><td>Nombre:</td><td>'+name+'</td></tr><tr><td>Mensaje:</td><td>'+message+'</td></tr></table>');
            }
        });
        return false;
        });
        });
        </script>
        <script>
         function enviar(){
        var usu=document.form.txtusuario.value;
        var clave=document.form.txtclave.value;
        if(usu.length==0){
            alert('Ingrese Usuario, gracias');
            document.form.txtusuario.focus();return;
        }else{
            if(clave.length==0){
                alert('Ingrese Clave, gracias');
                document.form.txtclave.focus();return;
            }
            else{
                document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/usuariocontrolador.php";?>";
                document.form.method="GET";
                document.form.op.value="2";
                document.form.submit();
            }
    }
    }

    function cerrar(){
                document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/iniciocontrolador.php";?>";
                document.form.method="GET";
                document.form.op.value="1";
                document.form.submit();
    }

    function cargar(){
      document.form.txtusuario.focus();
    }

    function registrar()
            {
         document.form.action="../controlador/creardibujocontrolador.php";
         document.form.method="GET";
         document.form.op.value="1";
         document.form.submit();
            }
        </script>
        <script type="text/javascript">
        function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if (req.readyState == 4 && req.status == 200){
                    document.getElementById('mensaje').innerHTML = req.responseText;
                }
            }
            req.open('GET','validacion.php',true);
            req.send();
        }
        //linea que hace que se refresque la página cada segundo
        setInterval(function(){ajax();}, 1000);
        </script>
        <title>INGRESAR AL SISTEMA</title>
    </head>
    <body onload="cargar()" class="fondodemetal">
        <center>
        <div class="tablainicio">
        <table class="boton8">
        <tr>
            <td class="fila_superior1">
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/inicio.php";?>">
                <img class="imagenfilasuperior1" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/left-fold.png";?>" alt="">
                </a>
            </td>
            <td class="fila_superior2">EMPRESA DE FABRICACION DE ESTRUCTURAS METALICAS DE: HENRRY HOLMES PAYTAN CARREÑO</td>
            <td class="fila_superior3">
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/inicio.php";?>">
                <img class="imagenfilasuperior3" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/left-fold.png";?>" alt="">
                </a>
            </td>
        </tr>
        </table>
        </div>
            <form   name="form">
                <input type="hidden" name="op">
                <br><br><br><br>
        <font>
        <imput type="text" class="text_menu2"  style='width:400px; height:30px; text-align: justify' >INGRESAR AL SISTEMA</imput>
        </font>
                <font class="boton4">
                    <?php    
                       if(isset($_GET['mensaje']))
                       {
                        echo $_GET['mensaje'] ;   
                       }
                    ?> 
                </font>
                <table border="10" align="center" class="tablaLista" style="width:100%; height:380px">
            <tr>
            </tr>
            <tr>
                <td ><div align="center"><input name="txtusuario" placeholder="Usuario" type="text" align="center" style="width: 300px; height: 30px; margin: auto;" size="30"></div></td>
            </tr>
            <tr>
                <td><div align="center"><input name="txtclave" placeholder="Contraseña" type="password" align="center" style="width: 300px; height: 30px; margin: auto;" size="30"></div></td>
            </tr>
            <tr align="center" style="display: block; align-content: center; text-align: center; margin: auto;">
                    <td style="display: block; align-content: center; text-align: center; margin: auto;">
                    <a style="align-content: center; text-align: center; margin: auto;" class="boton" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='#757575'" style="width:70px; height:70px" title="Ingresar al Sistema" href="javascript:enviar()">
                    <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/ingresar.png";?>" style="width:50px; height:50px" border='1'>INGRESAR</a>
                    <a style="align-content: center; text-align: center; margin: auto;" class="boton" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='#757575'" style="width:70px; height:70px" title="Salir" href="javascript:cerrar()">
                    <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/salir.png";?>" style="width:50px; height:50px" border='1'>SALIR</a>
                </td>
            <br><br>
                <font class="estilopropio8"><?php if(isset($_POST['mensaje'])){echo $_POST['mensaje'];}?></font>
            <br><br>
                </tr>
                <tr><td colspan="2">
                <br><br>
                    <imput type="text" class="text_fila_3">
                    Nuevo usuario? 
                    <a href="#" id="show">Registrate aquí</a>
<div id="element" style="display: none;">
    <br>
   <div id="close"><a href="#" id="hide">cerrar</a></div>
   <br>
             
       <table border="10" class="tablaLista" style="margin: auto;">
                    
            <tr>
            <td class="text_normal2" style='text-align: justify'>Nombre o Razon Social</td>
            <td>
            <input type = "text" class = "form-control" 
               name = "txtnombrersocial" placeholder = "Nombre o Razon social" 
               required autofocus>
                </td></tr>
            <tr>
            <td class="text_normal2" style='text-align: justify'>DNI o RUC de la empresa</td>
            <td>
            <input type = "text" class = "form-control" 
               name = "txtdniruc" placeholder = "DNI o RUC" 
               required autofocus>
                </td></tr>
            <tr>
            <td class="text_normal2" style='text-align: justify'>Email</td>    
            <td>
            <input type = "text" class = "form-control"
               name = "txtemail" placeholder = "Email" required>
                </td></tr>
            <tr>
            <td class="text_normal2" style='text-align: justify'>Telefono</td>    
            <td>
            <input type = "text" class = "form-control"
               name = "txttelefono" placeholder = "Telefono" required>
                </td></tr>
            <tr>
            <td class="text_normal2" style='text-align: justify'>Nombre Usuario</td>
            <td><input type="text" name="txtnomusuario" class = "form-control" placeholder = "Nombre de ingreso" required autofocus></td>
            </tr>
            <tr>
            <td class="text_normal2" style='text-align: justify'>Contraseña Usuario</td>
            <td><input type="password" name="txtpassusuario" class = "form-control" placeholder = "Contraseña" required autofocus></td>
            </tr>
            </table>
            <br><br>
                    <a class="boton" tyle="display: block; align-content: center; text-align: center; margin: auto;" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='#FDF5E6'" style="width:70px; height:70px" title="Salir" href="javascript:registrar()">REGISTRAR</a>
</div>
            <br>
            <br></td></tr></table>
                <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
                   <hr width="100%">
            <br>
            <br>
            <center>
            <font face="arial black" color="red" size="2">TE FACILITAMOS LA VIDA!!!
            </font>
            <br>
            <br>
            <br>
            </center>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div style="color: red;">© Copyright 2001-2017 <a target="_blank" href="http://www.copyright.es">Copyright.es</a> - All Rights Reserved - Legal - Todos los derechos reservados</div><br><br>
            </form>
        </center>
    </body>
</html>