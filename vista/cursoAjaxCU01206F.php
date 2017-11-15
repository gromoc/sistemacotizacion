
<!DOCTYPE html><html><head><title>Cursos aprende a programar</title><meta charset="utf-8"> 
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
    contenidosAMostrar = contenidosAMostrar+'<div id="caracteristicas'+i+'"> <a href="http://localhost:8090/Cotizacion_estructuras_metalicas/VISTA/CrearDibujo.php">' + contenidosRecibidos[i]+ '</a></div>';
    }
    nodoMostrarResultados.innerHTML = contenidosAMostrar;
    }
}

xmlhttp.open("GET"," datosCU01206F.php?material="+str);
xmlhttp.send();
}
</script>
</head>
<body style="margin:20px;font-family:sans-serif;font-size:18px;">
     <style type="text/css">
 *{font-family:sans-serif;} a:link {text-decoration:none;}
 div div {color: black; background-color:white; font-size: 20px; float:left; border: solid; margin: 20px; padding:15px;}
 </style>
<h2>Elige un material:</h2>
<form action="">
 <select onchange="mostrarSugerencia(this.value)" style='font-size:18px;'>
  <option value="none">Elige</option>
  <option value="angulo">Angulo</option>
  <option value="te">Te</option>
  <option value="platina">Platina</option>
  <option value="tuboredondo">Tubo Redondo</option>
</select>
    <table onchange="mostrarSugerencia(this.value)"><tr>
    <td class="estilopropio6"><br>
        <button value='angulo' title = "Angulo">
                        <img value='angulo' src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/angulo.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
        </button><br>
                    <a type="buttom" name="platina" value="platina" title = "Platina" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/platina.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
                    <a type="buttom" name="te" value="te" title = "Te" href="javascript:Enviardatos();">
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
                    <a type="buttom" name="tuboredondo" value="tuboredondo" title = "Tubo Redondo" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/tuboredondo.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
                    <a type="buttom" name="plancha" title = "Plancha" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/plancha.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
                    <a type="buttom" name="mallarombo" title = "Malla Rombo" href="javascript:Enviardatos();">
                        <img src="<?php echo "http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/imagenes/mallarombo.png";?>" style="width: 30px; height: 30px; border: 1px solid black">
                    </a><br>
    </td></tr></table>
</form>
<br/>
<p>Informacion sobre operacion en segundo plano con Ajax: <span style="color:red;" id="txtInformacion"></span></p>
<div id="nombrematerial"> </div>
</body>
</html>