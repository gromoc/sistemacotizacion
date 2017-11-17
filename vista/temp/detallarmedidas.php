<?php
ob_start();
?>
<?php
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/bootstrap.css";?>" rel='stylesheet' type='text/css' />
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilopropio.css";?>" rel="stylesheet">
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilo.css";?>" rel="stylesheet">
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style.css";?>" rel="stylesheet">
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/magnific-popup.css";?>" rel="stylesheet" type="text/css">
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery-1.11.1.min.js";?>"></script>    
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery.magnific-popup.js";?>" type="text/javascript"></script>
		<link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/magnific-popup.css";?>" rel="stylesheet" type="text/css">
		<script>
                function grabar()
            {
         document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/creardibujocontrolador.php";?>";
         document.form.method="GET";
         document.form.op.value="3";
         document.form.submit();
            }
            function regresar()
            {
          document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/creardibujocontrolador.php";?>";
          document.form.method="GET";
          document.form.op.value="";
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
<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/move-top.js";?>"></script>
<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/easing.js";?>"></script>
        <title>DETALLAR MEDIDAS</title>
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
        </div>
    <br><br><br><br>
</center>
    <center>
        <a style="color: red;">Esta función aun no esta disponible, estamos trabajando en esto</a>
    <a style="width: 200px; height: 50px; display: block;" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/cotizarpuerta.php";?>">
        <img style="width: 200px; height: 50px; display: block;" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/regresar.png";?>">
    </a>
    </center>
    <center>
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
                        <table class="margenboton">
                            <tr><td>
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
                            </tr>
                        </table>
		                     <div id="small-dialog1" class="mfp-hide">
							   <div class="pop_up1">
							   	 <form  name="form">
                <input type="hidden" name="op">
                <center>
                <table border="20" class="boton5">
                    <tr   class="boton5">
                        <td class="tituloTabla" colspan="2"  style="">INSERTAR MEDIDAS</td>
                    </tr>
                    
                    <tr>
                        <td class="boton5">Ancho :</td>
                        <td class="boton1"><input type="text" name="txtancho"></td>
                    </tr>
                    <tr>
                        <td class="boton5">Alto :</td>
                        <td class="boton1"><input type="text" name="txtalto"></td>
                    </tr>
                </table>
                    <table class="tablaLista" border="10">
                    <tr>
                        <td><input class="boton" type="button" value="Grabar"  onclick="grabar()"></td>
                    </tr>
                </table>
                </center>
								</div>
							 </div>
                        </div>
                     </div>
                        <table class="estilopropio3">
                            <tr>
                                <td class="estilopropio5" colspan="2">PUERTA CONTRAPLACADA</td></tr>
                                        <tr>                                            
                <td><br>
                    <?php 
                                        include ('../util/conexionbd.php');
                                        $query = "SELECT * FROM puertas where id='2'";
                                        $resultado = $conexion ->query($query);
                                        while($row = $resultado->fetch_assoc()){
                                        ?>
                    <img style="width:200px; height:300px; margin: auto; display: block;" src="data:image/jpg;base64,<?php echo base64_encode($id=$row['imagen']); ?>"/>
                                            </td>
                <td>
                    <br><pre style="display: block; margin: auto;" class="estilopropio4">
            Detalles:
<hr class="estilopropio4">
            Codigo: <?php echo $row['id']; ?><br>
            Nombre: <?php echo $row['nombre']; ?><br>
            Cliente:
            Descripción: <font class="estilopropio8"><?php if(isset($_GET['mensaje'])){echo $_GET['mensaje'];}?></font>
            Color: 
            Marco: 
            Medidas: <?php echo $row['alto']; ?> x <?php echo $row['ancho']; ?><br>
            Grosor de Revestimiento: 
                    </pre><br>
                </td> 
                <?php } ?>
                        </tr>
                                    </table>
                                    <font class="boton4">
            <?php    
               if(isset($_GET['mensaje']))
               {
                echo $_GET['mensaje'] ;
               }
            ?> 
        </font>
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