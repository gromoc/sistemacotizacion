<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>mostrar imagen</title>
    </head>
    <body>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>IMAGEN</th>
                <th>ANCHO</th>
                <th>ALTO</th>
            </tr>
            </thead>
            <tbody>
                <?php
        include ('../util/conexionbd.php');
        $query = "SELECT * FROM puertas";
        $resultado = $conexion ->query($query);
        while($row = $resultado->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><img style="width:100px; height:170px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
                    <td><?php echo $row['alto']; ?></td>
                    <td><?php echo $row['ancho']; ?></td>
                </tr>
        <?php
        }
        ?>
            </tbody>
        </table>
    </body>
</html>
