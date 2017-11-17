<?php 
include('../util/init.php');
include('../util/functions.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('layout/header.php'); ?>
</head>

<body>
    <?php include('layout/menu.php'); ?>
    <div id="main-contend">
        
         <?php 
         if(isset($_GET['sec'])){
            $url= $_GET['sec'].".php";
         }else{
            $url= "vInicio.php";
         }
         include($url);
         ?>
    </div>
    <?php include('layout/footer.php'); ?>
    <div id="panel-footer">
    <?php 
        if(isset($misJs)){
            echo $misJs; 
        }
    ?>
    </div>
</body>

</html>