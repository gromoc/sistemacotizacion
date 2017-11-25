var cotizacion = (function(cotizacion, undefined) {
  var _disable = true;

  cotizacion.pageHover = function() {
    // $(".productoCont").hover(function(e) {
    //   e.preventDefault();
    //     var id = $(this).data("id");
    //     $("#img-deta").attr("src", $(this).find('img').attr('src'));
    //     $("#detaProducto .titulo").text($(this).data("name").toUpperCase());
    //     $("#detaProducto .ancho").text($(this).data("ancho") + "m");
    //     $("#detaProducto .alto").text($(this).data("alto") + "m");
    //     $("#detaProducto .coti a").attr("href","index.php?sec=vNuevaCotizacion&pro="+id);
    //     $("#detaProducto").modal();
    // });

    var moveLeft = 20;
    var moveDown = 10;
  
    $('.productoCont').hover(function(e) {
      $('div#pop-up').show()
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
        $("#pop-up .titulo").text($(this).data("name").toUpperCase());
        $("#pop-up .ancho").text($(this).data("ancho") + "m");
        $("#pop-up .alto").text($(this).data("alto") + "m");


    }, function() {
      $('div#pop-up').hide();
    });
  
    $('.productoCont').mousemove(function(e) {
      $("div#pop-up").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
    });

  },
  cotizacion.pageClick = function(){
    $(".productoCont").click(function(e){
      var id = $(this).data("id");
      var session = $(this).data("session");
      if(session == 0){

        location.href = 'index.php?sec=vLogin';

      }else if(session == 1){

        location.href = 'index.php?sec=vNuevaCotizacion&pro='+id;
      }
      
    });
  }

  return cotizacion;

})(cotizacion || {});

$(function() {
  cotizacion.pageHover();
  cotizacion.pageClick();
});
