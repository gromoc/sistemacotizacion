<?php 
include ('../controlador/cProducto.php');
$class= new cProducto();
?>

<div class="panel panel-default">
    <div class="panel-heading">Registro producto</div>
    <div class="panel-body">
        <div class="col-md-6">
            <form action="../controlador/cProducto.php" method="POST" class="pure-form pure-form-stacked" style="margin-bottom:30px;"
                enctype="multipart/form-data">
                <label for="">Producto</label>
                <input class="form-control" type="text" name="nvchproducto" autocomplete="off" value="" style="width:100%;" placeholder='Ingrese el nombre del producto'
                    required/>

                <label for="">Alto Producto</label>
                <input class="form-control" type="text" name="naltoproducto" autocomplete="off" value="" style="width:100%;" placeholder='Ingrese descripcion del producto'
                    required/>

                <label for="">Ancho Producto</label>
                <input class="form-control" type="text" name="nanchoproducto" autocomplete="off" value="" placeholder='Ingrese distribuidor'
                    style="width:100%;" required/>

                    <label for="">Largo Producto</label>
                <input class="form-control" type="text" name="nlargoproducto" autocomplete="off" value="" placeholder='Ingrese distribuidor'
                    style="width:100%;" required/>
                <br>
                <input type="hidden" name="tipoform" value="nuevo">
                <button type="submit" id="enviar" name="enviar" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Limpiar</button>
            </form>
        </div>
    </div>
</div>

        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Productos en almancen</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th style="text-transform: uppercase">Producto</th>
									<th style="text-transform: uppercase">Alto Producto</th>
									<th style="text-transform: uppercase">Ancho Producto</th>
									<th style="text-transform: uppercase">Largo Producto</th>
								</tr>
							</thead>
                            <?php  foreach($class->mostrarProducto() as $row):  ?>
                            <tr style="text-transform: uppercase">
                                <td><?php echo $row['prodNombre'];  ?></td> 
                                <td><?php echo $row['prodAlto'];  ?></td> 
                                <td><?php echo $row['prodAncho'];  ?></td> 
                                <td><?php echo $row['prodLargo'];  ?></td> 
                            <tr>   
                            <?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>