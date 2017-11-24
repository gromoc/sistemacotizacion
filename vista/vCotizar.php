<?php 
ob_start();
include ('../controlador/cProducto.php');
?>
<?php echo "hola"; ?>
<?php if(isset($_GET['cat'])): ?>

<?php 
$class= new cProducto();
$result = $class->getProductForCategory($_GET['cat']);
$categoria = $result[0]['nomCartegoria'];
?>
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="wrap">
                <h3>MODELOS DE <?= strtoupper($categoria);  ?></h3>
            </div>
            <div class="wrap">
                <div class="ocarousel_slider">
                    <div class="ocarousel example_photos" data-ocarousel-perscroll="3">
                        <div class="ocarousel_window">
                            <?php foreach($result as $row): ?>
                                <div class="productoCont" data-id="<?php echo $row['idProducto']; ?>" data-name="<?php echo $row['prodNombre']; ?>" data-alto="<?php echo $row['prodAlto']; ?>" data-ancho="<?php echo $row['prodAncho']; ?>">
                                    <img  src="data:image/jpg;base64,<?php echo base64_encode($row['prodImg']); ?>" />
                                    <p class="name"><?php echo strtoupper($row['prodNombre']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <span>
                            <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
                            <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<style>
#detaProducto legend{
    font-size: 22px;
    font-weight: 600;
}
#detaProducto .detalle{
    margin-top:10px;
}
#detaProducto .detalle{
    margin-top:10px;
}
#detaProducto .coti{
    margin-top:20px;
}
#detaProducto #img-deta{
    max-height: 300px;
    margin: auto;
    display: block;
}
</style>
<div id="detaProducto" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <div class="row">
            <div class="col-md-5"><img  id="img-deta" src="" alt="foto"></div>
            <div class="col-md-7">
                <legend class="titulo">TITULO</legend>
                <hr>
                <p>Productos de calidad y ha bajo costo solo en estructuras metálicas SA</p>
                <div class="detalle">
                    <p><b>Ancho: </b><span class="ancho">50 cm</span></p>
                    <p><b>Alto: </b><span class="alto">50 cm</span></p>
                   
                </div>
                <div class="coti">
                    <a class="btn btn-default" href="">Solicitar Cotización</a>
                </div>
                              
            </div>
        </div>  
        
      </div>

    </div>
  </div>
</div>

<?php 
	$misJs=add_js("JsCotizacion.js");
?>