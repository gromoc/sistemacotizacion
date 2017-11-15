<html>
    <head>
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilo.css";?>" rel="stylesheet">
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilopropio.css";?>" rel="stylesheet">
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style.css";?>" rel="stylesheet">
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/magnific-popup.css";?>" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>INGRESAR AL SISTEMA</title>
  <script>
 function enviar(){
        var usu=document.form.txtusuario.value;
        var clave=document.form.txtclave.value;
        var tipousuario=document.form.tipousuario.value;
        if(usu.length==0){
            alert('Ingrese Usuario, gracias');
            document.form.txtusuario.focus();return;
        }else{
            if(clave.length==0){
                alert('Ingrese Clave, gracias');
                document.form.txtclave.focus();return;
            }
            else{
            if(tipousuario.length==0){
                alert('Ingrese Tipo de usuario, gracias');
                document.form.txtclave.focus();return;
            }
            else{
                document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/usuariocontrolador.php";?>";
                document.form.method="GET";
                document.form.op.value="9";
                document.form.submit();
            }
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

        </script>
    </head>
    <body onload="cargar()" class="style1">
    <center>
        <div id="botonfijo1"> 
            <a href="creardibujo.php" align="center" >
                            <button class="botonfijo1">VOLVER</button>
                </a>
        </div>
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
    <hr>
    <br><br><br>
    <a style="color: red;">Esta función aun no esta disponible, estamos trabajando en esto</a><br>
        <font>
        <imput type="text" class="text_menu2"  style='width:400px; height:30px; text-align: justify' >PRESUPUESTO DE LA ESTRUCTURA</imput>
        </font><br>
        <table class="estilopropio7" align="center">
                    <tr style="margin: 35px; display: block;">
                        <td style="margin: 35px; display: block;">
                    <imput style="float: right;"><?php date_default_timezone_set("America/Lima");echo "<br>Fecha y Hora: " . date("Y/m/d - h:i:s a");?></imput><br><br><br>
                            <u style="font-family: arial black;text-align: center; margin: auto; display: block;">PRESUPUESTO</u>
                            <br><br>
                    Nombre del Cliente:
                    <br><br>
                    Medidas de la estructura: <font><?php if(isset($_GET['mensaje'])){echo $_GET['mensaje'];}?></font>
                    <br><br>
                    Color:
                    <br><br>
                    Precio Total:
                </td>
            </tr>
        </table>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
                   <hr width="100%">
            <br>
            <br>
            <font face="arial black" color="red" size="2">TE FACILITAMOS LA VIDA!!!
            </font>
            <br>
            <br>
        </center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div style="color: red;">© Copyright 2001-2017 <a target="_blank" href="http://www.copyright.es">Copyright.es</a> - All Rights Reserved - Legal - Todos los derechos reservados</div><br><br>
    </body>
</html>