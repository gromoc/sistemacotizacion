<?php
  ob_start();
  session_start();// creando la sesion  
  require_once "../util/session.php";
  include ('../util/conexionbd.php');
  ?>
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
    <script>
        function seleccionar(){
            document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/puertacontrolador.php";?>";
            document.form.method="GET";
            document.form.op.value="1";
            document.form.submit();
        }
        function crearddibujo()
        {
            document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/creardibujocontrolador.php";?>";
            document.form.method="GET";
            document.form.op.value="2";
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
    <title>COTIZAR PUERTAS</title>
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
    <br><br>
    <table>
        <tr>
    </table>
    <div class="main">
      <div class="content">
    	        <div class="content_top">
    	        	<div class="wrap">
		          	   <h3>Modelos de Puertas</h3>
		          	</div>
		          	<div class="line"> </div>
		          	<div class="wrap">
		          	 <div class="ocarousel_slider">  
	      				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
			                <div class="ocarousel_window">
                                        <?php 
                                        $query = "SELECT * FROM puertas";
                                        $resultado = $conexion ->query($query);
                                        while($row = $resultado->fetch_assoc()){
                                        ?>
                                            <a href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/detallarmedidas.php";?>">
                                                <p type="text" name="id"><font name="txtid"><?php echo $row['id']; ?></font></p><img style="width:100px; height:170px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/> <p> <?php echo $row['nombre']; ?> <?php echo $row['alto']; ?> x <?php echo $row['ancho']; ?></p></a>
			                <?php } ?>
                                        </div>
                                        <span>           
			                <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
			                <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
                                        </span>
					</div>
				</div>  
                                </div>
    	        </div>
        </div>
        </div>
    <br><br><br><hr><hr><hr>
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
                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                            <div class="estilopropio" onmouseover="this.style.background='#336699'" onmouseout="this.style.background='black'">
                                O DIBUJA TU PROPIO MODELO</div></a>
		                <div id="small-dialog1" class="mfp-hide">
                                    <div class="pop_up1">
                <center>
                    PARA ACCEDER A NUESTRO SERVICIO DE COTIZACION DEBES REGISTRARTE<br><br>
                    <form method='POST' valign="top" cellpadding="0">
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
            <table border="10">
                <tr>
                    <td><br><input id="enviar" class="estilopropio" type="submit" onmouseover="this.style.background='#336699'" onmouseout="this.style.background='black'" name="enviar" value="LISTO"></td>
                </tr>
            </table>
         </form>
            <?php
            if (isset($_POST['enviar'])){
                $nombrersocial = $_POST['txtnombrersocial'];
                $dniruc = $_POST['txtdniruc'];
                $email = $_POST['txtemail'];
                $telefono = $_POST['txttelefono'];
                $nomusuario = $_POST['txtnomusuario'];
                $password = $_POST['txtpassusuario'];
                $consulta = "INSERT INTO cliente (nombrersocial,dniruc,email,telefono,nomusuario,password,tipousuario) VALUES ('$nombrersocial','$dniruc','$email','$telefono','$nomusuario','$password','cliente')";
                $ejecutar = $conexion->query($consulta);
                if ($ejecutar){
                    $mensaje= 'Registrado exitosamente!';
                    header('Location:../vista/creardibujo.php?mensaje='.$mensaje);
                }
                else {
                    $mensaje= 'Ingreso mal algun dato, vuelva a intentarlo!';
                    header('Location:../vista/cotizarpuerta.php?mensaje='.$mensaje);
                }
            }
            ?>
                </center>
                                    </div>
				</div>
                        </div>
                    </div>
                </div>
	  	  	</li>
	  	</ul>	  
		</div>
    </div>
    <font class="estilopropio8"><?php if(isset($_GET['mensaje'])){echo $_GET['mensaje'];}?></font>
    </center>
    <hr><hr><hr>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div style="color: red;">© Copyright 2001-2017 <a target="_blank" href="http://www.copyright.es">Copyright.es</a> - All Rights Reserved - Legal - Todos los derechos reservados</div><br><br>
    </body>
</html>