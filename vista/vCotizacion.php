<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
  ob_start();
  //session_start();// creando la sesion  
  require_once "../util/session.php";
  require_once '../util/conexionbd.php';
  ?>
<html>
    <head>
    <link type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilo.css";?>" rel="stylesheet"/>
    <link type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style.css";?>" rel="stylesheet"/>
    <link type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilopropio.css";?>" rel="stylesheet"/>
    <link rel="stylesheet" href="http://aurea.es/style.css?nocache=" type="text/css" media="screen" />
        <meta charset="windows-1252">
        <title>COTIZAR</title>
        <script>
            function IrUbicacion()
            {
            document.form.action="../../controlador/iniciocontrolador.php";
            document.form.method="GET";
            document.form.op.value="1";
            document.form.submit();
            }
            function verpuerta()
            {  
            document.form.action="../../controlador/puertacontrolador.php";
            document.form.method="GET";
            document.form.op.value="2";
            document.form.submit();
            }
         </script>
    </head>
    <body class="style1">
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
        <table class="boton9">
        <tr class="boton2"><td colspan="2">
        <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/inicio.php";?>">
            <button class="estilo1" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='white'">Inicio</button>
            </a>
            <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/quienes_somos.php";?>">
            <button class="estilo1" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='white'">Nosotros</button>
            </a>
            <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/ubicacion.php";?>">
            <button class="estilo1" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='white'">Ubicanos</button>
            </a>
            <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/contactanos.php";?>">
            <button class="estilo1" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='white'">Contactanos</button>
            </a>
            <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/cotizar.php";?>">
            <button class="estilo1" style="background-color: #CCFFFF;" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='#CCFFFF'">Cotizar</button>
            </a>
            <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/login.php";?>">
            <button class="estilo1" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='white'">Registrate</button>
            </a>
            </td></tr>
        </table>
        </div>
    <br><br><br><br>
    <a class="msg1">Caminamos de la mano con la tecnología</a>
    <br>
    <br>
    <a onmouseover="this.style.background='#CECEF6'" onmouseout="this.style.background='white'" class="letrasinicio">
        ¿QUE DESEAS COTIZAR?</a>
    <br>
    <br>

    <table style="width: 100%;">
        <tr>
            <td class="fondocostado1">
            </td>
            <td class="estilopropio1"><br>
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/cotizarpuerta.php";?>">
                <button   class="estilo2" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'"   onclick="verpuerta()">
                PUERTAS</button>
                </a><br>
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/cotizarventana.php";?>">
                <button   class="estilo2" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'">
                VENTANAS</button>
                </a><br>
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/cotizarbaranda.php";?>">
                <button   class="estilo2" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'">
                BARANDAS</button>
                </a><br>
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/cotizarescalera.php";?>">
                <button   class="estilo2" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'">
                ESCALERAS</button>
                </a><br>
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/cotizarportones.php";?>">
                <button   class="estilo2" onclick="MantIncidencias()" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'"  >
                PORTONES</button>
                </a><br>
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/cotizarrejas.php";?>">
                <button   class="estilo2" onclick="MantObservaciones()" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'"  >
                REJAS</button>
                </a><br>
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/cotizartechos.php";?>">
                <button   class="estilo2" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'"  >
                TECHOS METÁLICOS</button>
                </a><br>
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/cotizararmarios.php";?>">
                <button   class="estilo2" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'"  >
                ARMARIOS METÁLICOS</button>
                </a><br>
                    <button   class="estilo2" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseover="this.style.constructor=''" onmouseout="this.style.background=' url(../imagenes/metal.png)'"  >
                    OTROS</button><br><br>
            </td>
            <td class="fondocostado2">
            </tr>
            </table><br>
    </center>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div style="color: red;">© Copyright 2001-2017 <a target="_blank" href="http://www.copyright.es">Copyright.es</a> - All Rights Reserved - Legal - Todos los derechos reservados</div><br><br>
        <?php
        // put your code here
        ?>
    </body>
</html>