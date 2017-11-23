<html>
<head>
    <style>
    ul {
    width: 50px;
    height: 50px;
    border: 1px solid #FFFFFF;
    }
    li {
    width: 50px;
    height: 50px;
    border: 1px solid #FFFFFF;
    }
    .fondo1 {
    background-color: #999;
    }
    .fondo2 {
    background-color: #333;
    }
    .fondo3 {
    background-color: #666;
    }
    .fondo4 {
    background-color: rgb(88, 214, 141);
    }
    .fondo5 {
    background-color: rgb(250, 210, 241);
    }
    </style>
<script>
function cambiar_fondo_con_class(id){
document.body.className='fondo'+id;
}
</script>
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/bootstrap.css";?>" rel='stylesheet' type='text/css' >
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilopropio.css";?>" rel="stylesheet">
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/estilo.css";?>" rel="stylesheet">
    <link   type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/style.css";?>" rel="stylesheet">
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery-1.11.1.min.js";?>"></script>    
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/js/jquery.magnific-popup.js";?>" type="text/javascript"></script>
		<link href="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/css/magnific-popup.css";?>" rel="stylesheet" type="text/css">
		<script>
                function grabar()
            {
         document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/CREARDIBUJOcontrolador.php";?>";
         document.form.method="GET";
         document.form.op.value="2";
         document.form.submit();
            }
            function regresar()
            {
          document.form.action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/controlador/CREARDIBUJOcontrolador.php";?>";
          document.form.method="GET";
          document.form.op.value="3";
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
<body>
<p>Da click en un recuadro para cambiar el fondo de la página</p>
<ul id="1" class ="fondo1" onclick="cambiar_fondo_con_class(id)"></ul>
<ul id="2" class ="fondo2" onclick="cambiar_fondo_con_class(id)"></ul>
<ul id="3" class ="fondo3" onclick="cambiar_fondo_con_class(id)"></ul>
<ul id="4" class ="fondo4" onclick="cambiar_fondo_con_class(id)"></ul>
<br><br>
<center>
<div class="main">
   	   	  <div class="about section" id="section-2">
   	   	    <div class="container">
   	   	  	</div>
   	   	 </div>
   	   	 <div class="portfolio section" id="section-3">
   	   	   <div class="portfolio_grids">
	  	  	<div class="view view-fifth">
                            <div class="mask">
                      <div class="mask1">
                         <a class="popup-with-zoom-anim" href="#small-dialog1"> <div class="info" style="color: #000099; font-family: arial black; font-size: 20px; border: 5px solid #000099; width: 300px; height: 40px; background-color: white; -moz-border-radius: .9em; border-radius: .9em" onmouseover="this.style.background='skyblue'" onmouseout="this.style.background='white'">Introducir Medidas</div></a>
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
                        <tr><td class="estilopropio5" colspan="3">DISEÑO DE PUERTA</td></tr>
                        <tr>                                            
                <td><br>
                    <img style="display: block; margin: auto;" src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/modelopuerta.png";?>" title = "Puerta" class="img-responsive" alt=""/>
                                            </td>
                <td><br><pre style="display: block; margin: auto;" class="estilopropio4">
            Detalles:
<hr class="estilopropio4">
            Color: 
            Marco: 
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
    contenidosAMostrar = contenidosAMostrar+'<div id="caracteristicas'+i+'"> <a href="http://localhost:8090/Cotizacion_estructuras_metalicas/vista/CrearDibujo.php">' + contenidosRecibidos[i]+ '</a></div>';
    }
    nodoMostrarResultados.innerHTML = contenidosAMostrar;
    }
}

xmlhttp.open("GET"," datosCU01206F.php?material="+str);
xmlhttp.send();
}
</script>
<h2>Elige un material:</h2>
<form action="">
 <select onchange="mostrarSugerencia(this.value)" style='font-size:18px;'>
  <option value="none">Elige</option>
  <option value="angulo">Angulo</option>
  <option value="te">Te</option>
  <option value="platina">Platina</option>
  <option value="tuboredondo">Tubo Redondo</option>
</select>
</form>
<p style="width: 300px">Informacion: <br><span style="color:red;" id="txtInformacion"></span></p>
<div id="nombrematerial"> </div>
                </td> 
                        </tr></table><br>
                  </div>
	  	  </div>
		  </div>
     </div>
</center>
</body>
</html>