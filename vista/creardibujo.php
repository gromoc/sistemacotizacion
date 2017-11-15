<?php
ob_start();
session_start();// creando la sesion  
include ('../util/conexionbd.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
<html>
    <head>
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/bootstrap.css";?>" rel='stylesheet' type='text/css' />
    <link type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilopropio.css";?>" rel="stylesheet">
    <link type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilo.css";?>" rel="stylesheet">
    <link type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style.css";?>" rel="stylesheet">
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/magnific-popup.css";?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://aurea.es/style.css?nocache=" type="text/css" media="screen" />
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery-1.11.1.min.js";?>"></script>    
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery.magnific-popup.js";?>" type="text/javascript"></script>
	<script>
            function grabar()
            {
            document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/creardibujocontrolador.php";?>";
            document.form.method="GET";
            document.form.op.value="2";
            document.form.submit();
            }
            function regresar()
            {
            document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/creardibujocontrolador.php";?>";
            document.form.method="GET";
            document.form.op.value="3";
            document.form.submit(); 
            }
            function Cotizar(){
            document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/creardibujocontrolador.php";?>";
            document.form.method="GET";
            document.form.op.value="4";
            document.form.submit();         
            }
            $(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
		});
            });
	</script>
                <style>
                .fondo1 {
                background-color: rgb(88, 214, 141);
                color: rgb(88, 214, 141);
                }
                .fondo2 {
                background-color: rgb(150, 210, 241);
                color: rgb(150, 210, 241);
                }
                .fondo3 {
                background-color: rgb(255, 0, 0);
                color: rgb(255, 0, 0);
                }               
                </style>
<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/move-top.js";?>"></script>
<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/easing.js";?>"></script>
        <title>CREAR DIBUJO</title>
        <script>
             function IrUbicacion()
             {
             document.form.action="../../controlador/iniciocontrolador.php";
             document.form.method="GET";
             document.form.op.value="1";
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
        </div><br><br><br><br>
        <a style="color: red;">Esta función aun no esta disponible, estamos trabajando en esto</a>
        <br>
    <div class="main">
   	   	  <div class="about section" id="section-2">
   	   	    <div class="container">
   	   	  	</div>
   	   	</div>
   	   	<div class="portfolio section" id="section-3">
   	   	   <ul class="portfolio_grids">
	  	  	<li>
	  	  	<div class="view view-fifth">
                            <div class="mask">
                    <div class="mask1">
                        <table class="margenboton"><tr><td>
                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                            <div class="estilopropio10" onmouseover="this.style.background='skyblue'" onmouseout="this.style.background='white'">
                                 Introducir Medidas</div></a>
                                  </td>
                                  <td>
                            <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/presupuesto.php";?>">
                            <div class="estilopropio10" onmouseover="this.style.background='skyblue'" onmouseout="this.style.background='white'" type="button" value="Cotizar">
                            Cotizar
                            </div>
                            </a>
                                  </td></tr>
                        </table>
		                    <div id="small-dialog1" class="mfp-hide">
							<div class="pop_up1">
							   	<form  name="form">
                <input type="hidden" name="op">
                <center>
                <table border="20" class="boton5">
                    <tr   class="boton5">
                        <td class="tituloTabla" colspan="2" >INSERTAR MEDIDAS</td>
                    </tr>
                    
                    <tr>
                        <td class="boton5">Ancho :</td>
                        <td class="boton1"><input type="text" name="txtancho"></td>
                    </tr>
                    <tr>
                        <td class="boton5">Alto :</td>
                        <td class="boton1"><input type="text" name="txtlargo"></td>
                    </tr>
                    <tr>
                        <td class="boton5">Escoger Color</td>
                        <td>
                            <select style="width: 100px;" name="txtcolor" title="Seleccionar Color">
                                <option style="background: red;"></option>
                                <option style="background: black;"></option>
                                <option style="background: blue;"></option>
                            </select>
                        </td>
                    </tr>
                </table>
                    
                    <table border="10">
                    <tr>
                        <td><br><input class="estilopropio" onmouseover="this.style.background='#336699'" onmouseout="this.style.background='black'" type="button" value="Grabar"  onclick="grabar()"></td>
                    </tr>
                </table>
                </center>
								</div>
							 </div>
                        </div>
                     </div>
                            <br>
                        <table class="estilopropio3">
                        <tr><td class="estilopropio5" colspan="3">DISEÑO DE PUERTA</td></tr>
                        <tr>
                <td><br>
                    <a type="buttom" name="angulo" title = "Angulo" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/angulo.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
                    <a type="buttom" name="platina" title = "Platina" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/platina.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
                    <a type="buttom" name="te" title = "Te" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/te.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
                    <a type="buttom" name="redondoliso" title = "Redondo Liso" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/redondoliso.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
                    <a type="buttom" name="cuadrado" title = "Tubo Cuadrado" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/cuadrado.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
                    <a type="buttom" name="rectangulo" title = "Tubo Rectangulo" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/rectangulo.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
                    <a type="buttom" name="tuboredondo" title = "Tubo Redondo" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/tuboredondo.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
                    <a type="buttom" name="plancha" title = "Plancha" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/plancha.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
                    <a type="buttom" name="mallarombo" title = "Malla Rombo" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/mallarombo.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
                </td> 
                <td><br>
                    <img style="display: block; margin: auto;" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/modelopuerta.png";?>" title = "Puerta" class="img-responsive" alt=""/>
                                            </td>
                <td>
                    <br><pre style="display: block; margin: auto;" class="estilopropio4">
            Detalles:
<hr class="estilopropio4">
            <font class="estilopropio8"><?php if(isset($_GET['mensaje'])){echo $_GET['mensaje'];}?></font>
            Cliente: 
            Color: 
            Marco: 
            Medidas: <font class="estilopropio8"><?php if(isset($_GET['mensaje'])){echo $_GET['mensaje'];}?></font>
            Grosor de Revestimiento: 
                    </pre><br>
                    <script type="text/javascript">
                    function Enviardatos(){
                        $.ajax({
                       $('#mensaje').html('Tu mensaje no ha sido enviado correctamente');
                       })
        var angulo=document.getElementById('angulo').value;
        $.ajax({
            type:'POST',
            url:'../envia.php',
            data:('angulo='+angulo+),
            success:function(respuesta){
                if (respuesta==1){
                    $('mensaje').html('Tu mensaje ha sido enviado correctamente');
                }else {
                    $('mensaje').html('Tu mensaje no ha sido enviado correctamente');
                }
            }
        })
    }
                    </script>
                    <script>
function mostrarSugerencia(str) {
var xmlhttp;
var contenidosRecibidos = new Array();
var nodoMostrarResultados = document.getElementById('nombrematerial');
var contenidosAMostrar = '';

if (str.length==0) { document.getElementById("txtInformacion").innerHTML=""; nodoMostrarResultados.innerHTML = ''; return; }

xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    contenidosRecibidos = xmlhttp.responseText.split(",");
    document.getElementById("txtInformacion").innerHTML=contenidosRecibidos[0];
    for (var i=1; i<contenidosRecibidos.length;i++) {
    contenidosAMostrar = contenidosAMostrar+'<div id="caracteristicas'+i+'"> <a href="http://localhost:8090/Cotizacion_estructuras_metalicas/vista/creardibujo.php">' + contenidosRecibidos[i]+ '</a></div>';
    }
    nodoMostrarResultados.innerHTML = contenidosAMostrar;
    }
}

xmlhttp.open("GET"," datosCU01206F.php?material="+str);
xmlhttp.send();
}
</script>
<h2 class="estilopropio4">Elige un material:</h2>
<form action="">
 <select class="estilopropio4" onchange="mostrarSugerencia(this.value)" style='font-size:18px;'>
  <option value="none">Elige</option>
  <option value="angulo">Angulo</option>
  <option value="te">Te</option>
  <option value="platina">Platina</option>
  <option value="tuboredondo">Tubo Redondo</option>
</select>
</form>
<p class="estilopropio4"><span style="color:red;" id="txtInformacion"></span></p>
<div class="estilopropio4" id="nombrematerial"> </div>
                </td> 
                        </tr></table><br>
                  </div>
	  	  	</li>
	  	  </ul>
	  	  
		  </div>
     </div>
    </center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div style="color: red;">© Copyright 2001-2017 <a target="_blank" href="http://www.copyright.es">Copyright.es</a> - All Rights Reserved - Legal - Todos los derechos reservados</div><br><br>
    </body>
</html>
<?php 
ob_end_flush();
?>