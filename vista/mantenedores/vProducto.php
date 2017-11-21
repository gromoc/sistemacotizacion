<?php 
include('../../util/init.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../layout/header.php'); ?>
    <!-- PERSONALIZADO -->
    <link href="<?= base_url_css."estiloproducto.css"; ?>" rel="stylesheet">
</head>
<body>
    

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
			<div class="row">
				<ol class="breadcrumb">
					<li class="active">Registro de Productos</li>
				</ol>
			</div><!--/.row-->
			<br>
			
			<!--registro producto form-->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Registro producto</div>
						<div class="panel-body">
							<div class="col-md-6">
				                <form action="../../controlador/cProducto.php" method="POST" class="pure-form pure-form-stacked" style="margin-bottom:30px;" enctype="multipart/form-data">
				                    <label for="">Producto</label>
				                    <input class="form-control" type="text" name="nvchproducto" autocomplete="off" value="" style="width:100%;" placeholder='Ingrese el nombre del producto' required/>

				                    <label for="">Descripcón</label>
				                    <input class="form-control" type="text" name="nvchdescripcion" autocomplete="off" value="" style="width:100%;" placeholder='Ingrese descripcion del producto' required/>

				                    <label for="">Distribuidor</label>
				                    <input class="form-control" type="text" name="nvchcantidad" autocomplete="off" value="" placeholder='Ingrese distribuidor' style="width:100%;" required/>
				                    <br>
									<input type="hidden" name="tipoform" value="nuevo">
									<button type="submit" id="enviar" name="enviar"	 class="btn btn-primary">Guardar</button>
									<button type="reset" class="btn btn-danger">Limpiar</button>
				                </form>
							</div>
						</div>
					</div>
				</div><!-- /.col-->
			</div><!-- /.row -->
			<!--end registro form-->

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Productos en almancen</div>
						<div class="panel-body">
							<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							    <thead>
								    <tr>
								        <th>Codigo Prod.</th>
								        <th style="text-transform: uppercase">Producto</th>
								        <th style="text-transform: uppercase">Descripción</th>
								        <th style="text-transform: uppercase">Distribuidor</th>
								        <th style="text-transform: uppercase">Opciones</th>
								    </tr>
							    </thead>
								
							</table>
						</div>
					</div>
				</div>
			</div><!--/.row-->	
                <form action="" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;" enctype="multipart/form-data">
                    <input type="hidden" name="intidproducto" value="" />
                </form> 
		</form>
	</div><!--/.main-->

    <?php include('../layout/footer.php'); ?>
    <div id="panel-footer">
    <?php 
        if(isset($misJs)){
            echo $misJs; 
        }
    ?>
    </div>
</body>
</html>