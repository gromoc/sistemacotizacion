<?php

class CREARDIBUJODAO
{
    public function MODIFICARMEDIDAS($ancho,$largo)
    { $i=0;
        try
        { 
            // Crear una imagen de 55x30
$im = imagecreatetruecolor($ancho+10, $largo+10);
$blanco = imagecolorallocate($im, 255, 255, 255);

// Dibujar un rectángulo blanco
imagefilledrectangle($im, 10, 10, $ancho, largo, $blanco);

// Guardar la imagen
imagepng($im, './imagefilledrectangle.png');
imagedestroy($im);
      
      } catch (Exception $exc) 
      {   
         $i=0;
     }
     return  $i;
     }
}
?>
