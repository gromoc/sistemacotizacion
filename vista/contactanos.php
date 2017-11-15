<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include '../util/conexionbd.php';
?>
<html>
    <head>
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilo.css";?>" rel="stylesheet"/>
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilopropio.css";?>" rel="stylesheet"/>
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style.css";?>" rel="stylesheet"/>
    <link rel="stylesheet" href="http://aurea.es/style.css?nocache=" type="text/css" media="screen" />
        <meta charset="windows-1252">
        <title>CONTACTANOS</title>
        <script>
             function IrUbicacion()
             {
             document.form.action="../../controlador/iniciocontrolador.php";
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
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
            req.open('GET','chat.php',true);
            req.send();
        }
        //linea que hace que se refresque la página cada segundo
        setInterval(function(){ajax();}, 1000);
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
            <button class="estilo1" style="background-color: #CCFFFF;" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='#CCFFFF'">Contactanos</button>
            </a>
            <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/cotizar.php";?>">
            <button class="estilo1" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='white'">Cotizar</button>
            </a>
            <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/login.php";?>">
            <button class="estilo1" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='white'">Registrate</button>
            </a>
            </td></tr>
        </table>
        </div>
    <br><br><br><br>
    <a class="msg1">Caminamos de la mano con la tecnología</a>
    <br><br>
    <div style="text-align: center;">
    <table class="style2">
        <tr style="margin: auto; display: block; padding: 5px">
            <td class="facebook2">
                <a class="facebook3" target="_blank" href="https://www.facebook.com/henry.paytancarreno">
                <img style="width: 25px; height: 25px; border: 2px solid blue;" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/fb.png";?>">
                FACEBOOK
                </a>
                </td>
        </tr>
        <tr>
            <td style="margin: auto; display: block;">
                <font style="font-family: arial black; width: 50%; margin: auto;">NUMEROS DE CONTACTO: </font>
    <font class="texto-quienes-somos" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'">
    <img style="width:30px; height:30px; align-content: flex-end" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Phone_number.png";?>" alt="" />   
    997789832  <img style="width:30px; height:30px; align-content: flex-end" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/Claro.png";?>" alt="" />
    </font>
    <br>
    <font class="texto-quienes-somos" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'">
    <img style="width:30px; height:30px; align-content: flex-end" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Phone_number.png";?>" alt="" />   
    921469547  <img style="width:30px; height:30px; align-content: flex-end" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/Bitel.png";?>" alt="" />
    </font>
    <br>
    <font class="texto-quienes-somos" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'">
    <img style="width:30px; height:30px; align-content: flex-end" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Phone_number.png";?>" alt="" />   
    966321800  <img style="width:30px; height:30px; align-content: flex-end" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/Claro.png";?>" alt="" />
    </font><br><br>
            </td>
        </tr>
            <tr style="width: 90%; margin: auto;">
                <td style="width: 90%; margin: auto;">
                    <font style=" font-family: arial black; width: 50%; margin: auto;">CORREOS DE CONTACTO: </font>
                </td>
            </tr>
            <tr style="width: 90%; margin: auto;">
                <td>
        <font class="texto-quienes-somos" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'">
        henrryhoilmes@gmail.com</font>
                </td>
            </tr>
            <tr style="width: 90%; margin: auto;">
                <td>
    <font class="texto-quienes-somos" onmouseover="this.style.background='url(../imagenes/metal.png) no-repeat center center'" onmouseout="this.style.background=' url(../imagenes/metal.png)'">
    reynaldo6621@gmail.com</font><br>
                </td>
            </tr>
    </table>
    </div>
    <table class="tablachat">
        <tr style="margin: auto; display: block;">
            <td style="margin: auto; display: block; font-family: arial black; color: white; text-align: center;">CHAT USUARIOS</td>
        </tr>
        <tr>
            <td style="margin: auto; display: block;">
        <div class="contenedorchat" style="margin: auto; display: block;">
            <form method='POST' valign="top" cellpadding="0" style="margin: auto; display: block;">
                <textarea style="margin: auto; display: block; height: 30px;" name='nombre' autofocus="autofocus" placeholder="Ingresa tu Nombre"></textarea>
                <br>
                <textarea style="margin: auto; display: block; height: 30px;" name='mensaje' placeholder="Ingresa tu Mensaje"></textarea>
                <br>
                <input style="margin: auto; display: block;" id="enviar" type="submit" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='#CCFFFF'" name="enviar" value="ENVIAR">
            </form>
            <div id='caja-chat' onload="ajax();">
                <div id='chat'></div>
            </div>
            <?php
            if (isset($_POST['enviar'])){
                $nombre = $_POST['nombre'];
                $mensaje = $_POST['mensaje'];
                $consulta = "INSERT INTO chat (nombre,mensaje) VALUES ('$nombre','$mensaje')";
                $ejecutar = $conexion->query($consulta);
                if ($ejecutar){
                    echo "<embed loop='false' src='chat.mp3' hidden='true' autoplay='true'>";
                }
            }
            ?>
        </div>
            </td>
        </tr>
    </table>
    </center>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div style="color: red;">© Copyright 2001-2017 <a target="_blank" href="http://www.copyright.es">Copyright.es</a> - All Rights Reserved - Legal - Todos los derechos reservados</div><br><br>
        <?php
        // put your code here
        ?>
    </body>
</html>