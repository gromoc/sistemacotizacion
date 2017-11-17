<meta charset = "utf-8"/>
<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Pragma" content="no-cache">
<?php // Datos

$material[0]="angulo"; $material[1]="te"; $material[2]="platina"; $material[3]="tuboredondo";

$caracteristicas[0][0]="Figura: <img src='../IMAGENES/angulo.png' style='width:30px; heigth:30px;'>"; $caracteristicas[0][1]="Espesor: 3/16"; $caracteristicas[0][2]="Disponible"; $caracteristicas[0][3]="Peso: 5kg"; $caracteristicas[0][4]="Resistencia: Aun no definida";
$caracteristicas[1][0]="Figura: <img src='../IMAGENES/te.png' style='width:30px; heigth:30px;'>"; $caracteristicas[1][1]="Espesor: 3/16"; $caracteristicas[1][2]="Disponible"; $caracteristicas[1][3]="Peso: 5kg"; $caracteristicas[1][4]="Resistencia: Aun no definida";
$caracteristicas[2][0]="Figura: <img src='../IMAGENES/platina.png' style='width:30px; heigth:30px;'>"; $caracteristicas[2][1]="Espesor: 3/16"; $caracteristicas[2][2]="Disponible"; $caracteristicas[2][3]="Peso: 5kg"; $caracteristicas[2][4]="Resistencia: Aun no definida";
$caracteristicas[3][0]="Figura: <img src='../IMAGENES/tuboredondo.png' style='width:30px; heigth:30px;'>"; $caracteristicas[3][1]="Espesor: 3/16"; $caracteristicas[3][2]="Disponible"; $caracteristicas[3][3]="Peso: 5kg"; $caracteristicas[3][4]="Resistencia: Aun no definida";
 
// Rescatamos el parámetro pais que nos llega mediante la url que invoca xmlhttp
$MaterialRecibido=$_REQUEST["material"]; $caracteristicasDevueltas="";
$existeMaterial = false;
for ($i = 0; $i<count($material) ; $i++) {     if ($MaterialRecibido == $material[$i]) {$indiceMaterial = $i; $existeMaterial=true;} }

$msg = 'CARACTERÍSTICAS: <br>'.'Material: '.$MaterialRecibido.'<br>';
if ($existeMaterial) {$msg = $msg. 'Codigo: '.$indiceMaterial;}
$caracteristicasRespuesta = "";

//  Creamos el array a devolver
for ($i = $indiceMaterial; $i<count($caracteristicas[$indiceMaterial]) ; $i++) {
    $caracteristicasRespuesta .= ",".$caracteristicas[$indiceMaterial][$i];
}

echo $msg.$caracteristicasRespuesta;
?>