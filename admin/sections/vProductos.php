<?php 
include ('../controlador/cProducto.php');
$class= new cProducto();
$result = $class->mostrarProducto();
print_r($result);
foreach($result as $row){
    echo "<p>".$result['prodNombre']."</p>";
}
?>

<div class="panel panel-default">
    <div class="panel-heading">Registro producto</div>
    <div class="panel-body">
        <div class="col-md-6">
            <form action="../../controlador/cProducto.php" method="POST" class="pure-form pure-form-stacked" style="margin-bottom:30px;"
                enctype="multipart/form-data">
                <label for="">Producto</label>
                <input class="form-control" type="text" name="nvchproducto" autocomplete="off" value="" style="width:100%;" placeholder='Ingrese el nombre del producto'
                    required/>

                <label for="">Descripcón</label>
                <input class="form-control" type="text" name="nvchdescripcion" autocomplete="off" value="" style="width:100%;" placeholder='Ingrese descripcion del producto'
                    required/>

                <label for="">Distribuidor</label>
                <input class="form-control" type="text" name="nvchcantidad" autocomplete="off" value="" placeholder='Ingrese distribuidor'
                    style="width:100%;" required/>
                <br>
                <input type="hidden" name="tipoform" value="nuevo">
                <button type="submit" id="enviar" name="enviar" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Limpiar</button>
            </form>
        </div>
    </div>
</div>