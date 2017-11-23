<?php 
ob_start();
include ('../controlador/cProducto.php');
?>

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
                                <a href="<?php echo " http://".$_SERVER['HTTP_HOST']."/Cotizacion_estructuras_metalicas/vista/detallarmedidas.php ";?>">
                                <p type="text" name="id">
                                    <font name="txtid">
                                        <?php echo $row['idProducto']; ?>
                                    </font>
                                </p>
                                <img style="width:100px; height:170px" src="data:image/jpg;base64,<?php echo base64_encode($row['prodImg']); ?>" />
                                <p>
                                    <?php echo $row['prodNombre']; ?>
                                    <?php echo $row['prodAlto']; ?> x
                                    <?php echo $row['prodAncho']; ?>
                                </p>
                            </a>
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