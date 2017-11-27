<?php 
include ('../controlador/cProducto.php');
$class= new cProducto();
$resultado;
?>

<?php 

if(isset($_GET['msj']))
{
    if($_GET['msj']=='ok'){
        echo $mensaje= "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> Su transaccion se completo correctamente</div>";
    }else{
        echo $mensaje= "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> Hubo un error en la transaccion</div>";
    }
}

if(isset($_GET['action'])){
            switch($_REQUEST['action'])
            {
                case 'editar':
                $resultado = $class->mostrarProductoEditar($_REQUEST['prod']);
                break;
    
                case 'eliminar':
                $resultado = $class->eliminarProductoAdmin($_REQUEST['prod']);
                break;

                
            }
    
          //  echo "<h2>HOLA" .  var_dump($resultado) . "</h2>";
        }

?>

<div class="panel panel-default">
    <div class="panel-heading">Mantenimiento de Producto</div>
    <div class="panel-body">
        <div class="col-md-6">
            <form action="../controlador/cProducto.php" method="POST" class="pure-form pure-form-stacked" style="margin-bottom:30px;"
                enctype="multipart/form-data">
                <label for="">Producto</label>
                <input class="form-control" type="text" name="nvchproducto" autocomplete="off" value="<?php echo isset($_REQUEST['action']) ? $resultado->getNombre() : ""; ?>" style="width:100%;" placeholder='Ingrese el nombre del producto'
                    required/>

                <label for="">Alto Producto</label>
                <input class="form-control" type="text" name="naltoproducto" autocomplete="off" value="<?php echo isset($_REQUEST['action']) ? $resultado->getAltoProducto() : ""; ?>" style="width:100%;" placeholder='Ingrese descripcion del producto'
                    required/>

                <label for="">Ancho Producto</label>
                <input class="form-control" type="text" name="nanchoproducto" autocomplete="off" value="<?php echo isset($_REQUEST['action']) ? $resultado->getAnchoProducto() : ""; ?>" placeholder='Ingrese distribuidor'
                    style="width:100%;" required/>

                    <label for="">Largo Producto</label>
                <input class="form-control" type="text" name="nlargoproducto" autocomplete="off" value="<?php echo isset($_REQUEST['action']) ? $resultado->getLargoProducto() : ""; ?>" placeholder='Ingrese distribuidor'
                    style="width:100%;" required/>
                <br>
                <input type="hidden" name="tipoform"  value="<?php echo isset($_REQUEST['action']) ? "actualizarproducto" : "nuevo"; ?>">
                <input type="hidden" name="idproducto" value="<?php echo isset($_REQUEST['action']) ? $resultado->getId() : "0"; ?>">
                <button type="submit" id="enviar" name="enviar" class="btn btn-primary button cta hvr-float-shadow">Guardar</button>
                <button type="reset" class="btn btn-danger button cta hvr-float-shadow">Limpiar</button>
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
                                    <th style="text-transform: uppercase">accion</th>
									<th style="text-transform: uppercase">Producto</th>
									<th style="text-transform: uppercase">Alto Producto</th>
									<th style="text-transform: uppercase">Ancho Producto</th>
									<th style="text-transform: uppercase">Largo Producto</th>
								</tr>
							</thead>
                            <?php  foreach($class->mostrarProducto() as $row):  ?>
                            <tr style="text-transform: uppercase">
                                <td>
											<a href="?sec=vProductos&action=editar&prod=<?php echo $row['idProducto']; ?>"  title="Editar Producto"> <span class='fa fa-2x fa-pencil-square-o'></span></a>
			                                <a href="?sec=vProductos&action=eliminar&prod=<?php echo $row['idProducto']; ?>"  title="Eliminar Producto"><span class="fa fa-2x fa-trash"></span></a>
			                    </td>
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