<?php 
include('../../util/init.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<!-- PERSONALIZADO -->
	<link href="<?= base_url_css."bootstrap.css "; ?>" rel="stylesheet">
	<link href="<?= base_url_css."main.css "; ?>" rel="stylesheet">


</head>
<body>

	<div class="col-md-2">
		<div class="row">
		<nav class="navbar navbar-default sidebar" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a>
								ADMIN PANEL
							</a>
						</li>
						<li class="active">
							<a href="#">Home
								<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span>
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios
								<span class="caret"></span>
								<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span>
							</a>
							<ul class="dropdown-menu forAnimate" role="menu">
								<li>
									<a href="{{URL::to('createusuario')}}">Crear</a>
								</li>
								<li>
									<a href="#">Modificar</a>
								</li>
								<li>
									<a href="#">Reportar</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Informes</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Libros
								<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span>
							</a>
						</li>
						<li>
							<a href="#">Tags
								<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		</div>

	</div>
	<div class="col-md-10 main">
		<div class="row">
			<ol class="breadcrumb">
				<li class="active">Registro de Productos</li>
			</ol>
		</div>
		<!--/.row-->
		<br>

		<!--registro producto form-->
		<div class="row">
			<div class="col-lg-12">
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
			</div>
			<!-- /.col-->
		</div>
		<!-- /.row -->
		<!--end registro form-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Productos en almancen</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1"
						    data-pagination="true" data-sort-name="name" data-sort-order="desc">
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
		</div>
		<!--/.row-->
		<form action="" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;" enctype="multipart/form-data">
			<input type="hidden" name="intidproducto" value="" />
		</form>
		</form>
	</div>
	<!--/.main-->
	<script src="<?= base_url_js."jquery.min.js "; ?>"></script>
	<script src="<?= base_url_js."bootstrap.min.js "; ?>"></script>
	<div id="panel-footer">
		<?php 
        if(isset($misJs)){
            echo $misJs; 
        }
    ?>
	</div>
</body>

</html>