<?php
include '../util/conexionbd.php';
        $consulta = "SELECT * FROM chat ORDER BY id DESC";
        $ejecutar = $conexion->query($consulta);
        while($fila = $ejecutar->fetch_array()):
?>
                    <div id='datos-chat'>
                        <a style="color: #1c62c4; width: 80px;"><?php echo $fila['nombre']; ?>: </a>
                        <span style="color: #848484; text-align: justify;"><?php echo $fila['mensaje']; ?></span>
                        <span style="float: right; width: 80px;"><?php echo formatearFecha($fila['fecha']); ?></span>
                    </div>
<?php endwhile; 
function formatearFecha($fecha) {
    return date('g:i a', strtotime($fecha));
}

?>