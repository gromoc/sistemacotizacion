<?php 

if (isset($_POST['angulo'])){
    echo 1;
}
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<?php
echo "The time is " . date("h:i:sa");
?>
<?php
date_default_timezone_set("America/Lima");
echo "<br>Fecha y Hora: " . date("Y/m/d - h:i:s a");
?>