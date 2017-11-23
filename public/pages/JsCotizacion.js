var cotizacion = (function(cotizacion, undefined) {
  var _disable = true;

  cotizacion.pageLoad = function() {
    $(".productoCont").click(function(e) {
      e.preventDefault();
        var id = $(this).data("id");
        $("#img-deta").attr("src", $(this).find('img').attr('src'));
        $("#detaProducto .titulo").text($(this).data("name").toUpperCase());
        $("#detaProducto .ancho").text($(this).data("ancho") + "m");
        $("#detaProducto .alto").text($(this).data("alto") + "m");
        $("#detaProducto .coti a").attr("href","index.php?sec=vNuevaCotizacion&pro="+id);
        $("#detaProducto").modal();
    });
  };

  return cotizacion;

})(cotizacion || {});

$(function() {
  cotizacion.pageLoad();
});
