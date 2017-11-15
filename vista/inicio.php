<?php
    include '../util/conexionbd.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
<meta charset="windows-1252"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!---- animated-css ---->
		<link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/animate.css";?>" rel="stylesheet" type="text/css" media="all">
		<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery.corner.js";?>"></script> 
		<script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/wow.min.js";?>"></script>
		<script>
		 new WOW().init();
		</script>
                <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/bootstrap_2.css";?>" rel='stylesheet' type='text/css' />
                <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery.min_1.js";?>"></script>
                <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style_3.css";?>" rel='stylesheet' type='text/css' />
                <script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/move-top_1.js";?>"></script>
		<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/easing_1.js";?>"></script>
                <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilo.css";?>" rel="stylesheet"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900' rel='stylesheet' type='text/css'/>
<link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/inicio.php";?>" rel='stylesheet' type='text/css'/>
<link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style.css";?>" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/util/conexionbd.php";?>"/>
<link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style_1.css";?>" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style_2.css";?>" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/magnific-popup.css";?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/magnific-popup.css";?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery.min.js";?>"></script>
<script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/hover_pack.js";?>"></script>
<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery-1.9.0.min.js";?>"></script> 
<script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery.openCarousel.js";?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/easing.js";?>"></script>
<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/move-top.js";?>"></script>
<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/bootstrap_1.css";?>"></script>
<script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery.magnific-popup.js";?>" type="text/javascript"></script>
		
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
<script>
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
<title>EMPRESA DE HENRRY HOLMES PAYTAN CARREÑO</title>
        <script>
             function IrUbicacion()
             {
             document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/iniciocontrolador.php";?>";
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
                <div id="menuvertical"> 
            <ul>
        <li align="center" ><a href="#" align="center" >
                            <button class="boton-chat" onmouseover="this.style.background='#CCFFFF'" onmouseout="this.style.background='white'">CHAT USUARIOS</button>
                </a>
        <ul>
            <li>
            <center>
                <div id='contenedor'>
            <form method='POST' valign="top" cellpadding="0">
                <textarea style="height: 30px;" name='nombre' autofocus="autofocus" placeholder="Ingresa tu Nombre"></textarea>
                <textarea  style="height: 30px;" name='mensaje' placeholder="Ingresa tu Mensaje"></textarea>
                <input id="enviar" type="submit" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='#CCFFFF'" name="enviar" value="ENVIAR">
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
            </center>
            </li>                        
        </ul>
        </li>
            </ul>
        </div>
            </center>

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
            <button class="estilo1" style="background-color: #CCFFFF;" onmouseover="this.style.background='#CCCCFF'" onmouseout="this.style.background='#CCFFFF'">Inicio</button>
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
    <div class="slide-banner-left">
					<img class="slide-img"/>
				<!----slider-script---->
						<script>
							$(function() {
							
								$("#slideshow > div:gt(0)").hide();
						
								setInterval(function() { 
								  $('#slideshow > div:first')
								    .fadeOut(2000)
								    .next(1000)
								    .fadeIn(3000)
								    .end(1000)
								    .appendTo('#slideshow');
								},  4000);
								
							});
						</script>
						<!----//End-script---->
						<div id="slideshow">
							   <div>
                                                               <a onmouseover="this.style.background='#CECEF6'" onmouseout="this.style.background='white'" class="letrasinicio">BIENVENIDOS A LA PAGINA WEB MAS INNOVADORA</a>
							   </div>
							   <div>
							    <a onmouseover="this.style.background='#CECEF6'" onmouseout="this.style.background='white'" class="letrasinicio">DONDE PUEDES COTIZAR TUS PRODUCTOS Y SERVICIOS ONLINE</a>
							   </div>
							   <div>
							    <a onmouseover="this.style.background='#CECEF6'" onmouseout="this.style.background='white'" class="letrasinicio">NO NECESITAS MOVERTE DE TU CASA PARA AVERIGUAR PRECIOS</a>
							   </div>
					</div>
					<div class="banner-head">
					</div>				
			</div>
    </center>
  <div class="main">
      <div class="content">
    	        <div class="content_top">
    	        	<div class="wrap">
                            <h3><a style="border: 3px solid #000080; color:#000080; background: url(../imagenes/metal.png) no-repeat center center;">
                                    Nuestros Productos</a><i style="font-size:15px; color:#000080;"> - Fabricamos todo tipo de Estructuras Metálicas</i></h3>
		          	</div>
		          	<div class="line"> </div>
		          	<div class="wrap">
		          	 <div class="ocarousel_slider">  
	      				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
			                <div class="ocarousel_window">
			                   <a href="#" title="img1"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Baranda1.jpg";?>" alt="" /><p>Barandas</p></a>
			                   <a href="#" title="img2"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Estructura1.jpg";?>" alt="" /><p>Estructuras</p></a>
			                   <a href="#" title="img3"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Hangar1.jpg";?>" alt="" /><p>Hangar</p></a>
			                   <a href="#" title="img4"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Hangar2.jpg";?>" alt="" /><p>Hangar</p></a>
			                   <a href="#" title="img5"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Puente1.jpg";?>" alt="" /><p>Puentes</p></a>
			                   <a href="#" title="img6"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Puerta1.jpg";?>" alt="" /><p>Puertas</p></a>
			                   <a href="#" title="img1"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Puerta2.jpg";?>" alt="" /><p>Puertas</p></a>
			                   <a href="#" title="img2"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Puerta3.jpg";?>" alt="" /><p>Puertas</p></a>
			                   <a href="#" title="img3"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Reja1.jpg";?>" alt="" /><p>Rejas</p></a>
			                   <a href="#" title="img4"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Techo1.jpg";?>" alt="" /><p>Techos</p></a>
			                   <a href="#" title="img5"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Valla1.jpg";?>" alt="" /><p>Vallas</p></a>
			                   <a href="#" title="img6"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/Ventana2.jpg";?>" alt="" /><p>Ventanas</p></a>
                                           <a href="#" title="img6"> <img style="width:100px; height:100px" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/images/ventana1.jpg";?>" alt="" /><p>Ventanas</p></a>
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
    <br><br>
    <div id="port" class="portfolio">
				<div class="head-section">
					<div class="container">
                                            <h3 style="color:#000080;"><br>OBRAS</h3>
					</div>
				</div>
				<!--- Portfolio --->
			<div id="port" class="portfolio-box">
				
					<!---- start-portfolio-script----->
					<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery.mixitup.min.js";?>"></script>
					<script type="text/javascript">
						$(function () {
							var filterList = {
								init: function () {
								
									// MixItUp plugin
									// http://mixitup.io
									$('#portfoliolist').mixitup({
										targetSelector: '.portfolio',
										filterSelector: '.filter',
										effects: ['fade'],
										easing: 'snap',
										// call the hover effect
										onMixEnd: filterList.hoverEffect()
									});				
								
								},
								hoverEffect: function () {
									// Simple parallax effect
									$('#portfoliolist .portfolio').hover(
										function () {
											$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
											$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
										},
										function () {
											$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
											$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
										}		
									);				
								
								}
					
							};
							// Run the show!
							filterList.init();
						});	
					</script>
					<div class="container">
						<!----//End-portfolio-script----->
						<ul id="filters" class="clearfix">
							<li class="filtter-color1"><span class="filter active" style="border: 3px solid #000080; color:#000080; background: url(../imagenes/metal.png) no-repeat center center;" data-filter="app card icon logo web">TODAS</span></li>
							<li class="filtter-color2"><span class="filter" style="border: 3px solid #000080; color:#000080; background: url(../imagenes/metal.png) no-repeat center center;" data-filter="app">TECHOS</span></li>
							<li class="filtter-color3"><span class="filter" style="border: 3px solid #000080; color:#000080; background: url(../imagenes/metal.png) no-repeat center center;" data-filter="card">LEVADIZAS</span></li>
							<li class="filtter-color4"><span class="filter" style="border: 3px solid #000080; color:#000080; background: url(../imagenes/metal.png) no-repeat center center;" data-filter="icon">ENROLLABLES</span></li>
							<li class="filtter-color5"><span class="filter" style="border: 3px solid #000080; color:#000080; background: url(../imagenes/metal.png) no-repeat center center;" data-filter="app">PORTONES</span></li>
						</ul>
					</div>
					<div id="portfoliolist">
					<div class="portfolio logo1 mix_all port-big-grid wow bounceIn" data-wow-delay="0.5s" data-cat="logo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" style=" width: 445px; height: 227px;" src="../images/obra1.png" /><div class="b-wrapper">
						     	<div class="caption">
                                                            <h4>PROYECTO</h4>
                                                        <h2 class="b-animate b-from-left    b-delay03 ">
						     			Obra1: Cada uno de nuestros proyectos estan pensados en las necesidades de nuestros clientes, buscando sobrepasar sus espectativas para que tanto la empresa como el cliente sigan creciendo.
						     	</h2>
                                                        </div>
						  	</div></a>
		                </div>
					</div>				
					<div class="portfolio app mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" style=" width: 445px; height: 227px;" src="../images/obra2.png" />
                                                     <div class="b-wrapper">
						     	<div class="caption">
                                                            <h4>PROYECTO</h4>
                                                            <h2 class="b-animate b-from-left    b-delay03 " style="text-align: justify;">
						     			Obra2: Cada uno de nuestros proyectos estan pensados en las necesidades de nuestros clientes, buscando sobrepasar sus espectativas.
						     	</h2>
                                                        </div>
						  	</div></a>
		                </div>
					</div>		
					<div class="portfolio web mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="web" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" style=" width: 445px; height: 227px;" src="../images/obra3.png" />
                                                     <div class="b-wrapper">
						     	<div class="caption">
                                                            <h4>PROYECTO</h4>
                                                        <h2 class="b-animate b-from-left    b-delay03 ">
						     			Obra3: Cada uno de nuestros proyectos estan pensados en las necesidades de nuestros clientes, buscando sobrepasar sus espectativas para que tanto la empresa como el cliente sigan creciendo.
						     	</h2>
                                                        </div>
						  	</div></a>
		                </div>
					</div>				
					<div class="portfolio icon mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
                                                        <img class="p-img" style=" width: 445px; height: 227px;" src="../images/obra6.png" />
                                                            <div class="b-wrapper">
						     	<div class="caption">
                                                            <h4>PROYECTO</h4>
                                                        <h2 class="b-animate b-from-left    b-delay03 ">
                                                            Obra4: Cada uno de nuestros proyectos estan pensados en las necesidades de nuestros clientes, buscando sobrepasar sus espectativas para que tanto la empresa como el cliente sigan creciendo.
						     	</h2>
                                                        </div>
						  	</div></a>
		                </div>
					</div>	
					<div class="portfolio app mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" style=" width: 445px; height: 227px;" src="../images/obra5.png" /><div class="b-wrapper">
						     	<div class="caption">
                                                            <h4>PROYECTO</h4>
                                                        <h2 class="b-animate b-from-left    b-delay03 ">
						     			Obra5: Cada uno de nuestros proyectos estan pensados en las necesidades de nuestros clientes, buscando sobrepasar sus espectativas para que tanto la empresa como el cliente sigan creciendo.
						     	</h2>
                                                        </div>
						  	</div></a>
		                </div>
					</div>			
					<div class="portfolio card mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" style=" width: 445px; height: 227px;" src="../images/obra10.png" /><div class="b-wrapper">
						     	<div class="caption">
                                                            <h4>PROYECTO</h4>
                                                        <h2 class="b-animate b-from-left    b-delay03 ">
						     			Obra6: Cada uno de nuestros proyectos estan pensados en las necesidades de nuestros clientes, buscando sobrepasar sus espectativas para que tanto la empresa como el cliente sigan creciendo.
						     	</h2>
                                                        </div>
						  	</div></a>
		                </div>
					</div>	
					<div class="portfolio icon mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" style=" width: 445px; height: 227px;" src="../images/obra7.png" /><div class="b-wrapper">
						     	<div class="caption">
                                                            <h4>PROYECTO</h4>
                                                        <h2 class="b-animate b-from-left    b-delay03 ">
						     			Obra7: Cada uno de nuestros proyectos estan pensados en las necesidades de nuestros clientes, buscando sobrepasar sus espectativas para que tanto la empresa como el cliente sigan creciendo.
						     	</h2>
                                                        </div>
						  	</div></a>
		                </div>
					</div>	
					<div class="portfolio app mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" style=" width: 445px; height: 227px;" src="../images/obra4.png" /><div class="b-wrapper">
						     	<div class="caption">
                                                            <h4>PROYECTO</h4>
                                                        <h2 class="b-animate b-from-left    b-delay03 ">
						     			Obra8: Cada uno de nuestros proyectos estan pensados en las necesidades de nuestros clientes, buscando sobrepasar sus espectativas para que tanto la empresa como el cliente sigan creciendo.
						     	</h2>
                                                        </div>
						  	</div></a>
		                </div>
					</div>			
					<div class="portfolio card mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" style=" width: 445px; height: 227px;" src="../images/obra9.png" /><div class="b-wrapper">
						     	<div class="caption">
                                                            <h4>PROYECTO</h4>
                                                        <h2 class="b-animate b-from-left    b-delay03 ">
						     			Obra9: Cada uno de nuestros proyectos estan pensados en las necesidades de nuestros clientes, buscando sobrepasar sus espectativas para que tanto la empresa como el cliente sigan creciendo.
						     	</h2>
                                                        </div>
						  	</div></a>
		                </div>
					</div>	
					<div class="clearfix"> </div>	
				</div>
			</div>
				</div>
                                <br><br>
                                <div style="align-content: center; margin: auto; display: block;">
                                    <a style="margin: auto;" class="catch-me wow shake" data-wow-delay="0.3s" target="_blank" href="http://www.facebook.com/sharer.php?u=http://www.cotizacionesmetalicas.com"> 
                                    <table class="style4">
                                    <tr><td>
                                    <img  class="imgfb" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/fb.jpg";?>">
                                    </td><td class="facebook" style="color: #CCFFFF; text-align: justify; font-family: Arial black; text-shadow: 0 1px 0 grey, 0 2px 0 lightblue, 0 3px 0 #bbb, 0 4px 0 black;">Compartir esta pagina en "FACEBOOK"</td></tr>
                                    </table>
                                    </a>
				</div>
    <br>
    <hr style="color: black;">
    </table>
    <hr style="color: black;">
        <?php
        // put your code here
        ?>
    <br><br><br><br><br><br><br><br><br><br>
    
    <br><br><br><br><br><br><br><br><div style="color: red;">© Copyright 2001-2017 <a target="_blank" href="http://www.copyright.es">Copyright.es</a> - All Rights Reserved - Legal - Todos los derechos reservados</div><br><br>
    </body>
</html>
