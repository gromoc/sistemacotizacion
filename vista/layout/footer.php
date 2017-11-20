<hr style="color: black;">
<center>
<br>

<footer id="footer">
© copyright - <a target="_blank" href="http://www.copyright.es">COTIZACIONES METALICAS 2017</a> - Todos los derechos reservados
</footer>

</center>
    <script type="text/javascript" src="<?= base_url_js."jquery.min.js ";?>"></script>
    <!-- <script type="text/javascript" src="<?= base_url_js."jquery.corner.js ";?>"></script> -->
    <script type="text/javascript" src="<?= base_url_js."wow.min.js ";?>"></script>
    <script>
        new WOW().init();
    </script>

    <script type="text/javascript" src="<?= base_url_js."move-top_1.js ";?>"></script>
    <script type="text/javascript" src="<?= base_url_js."easing_1.js ";?>"></script>
    <script type="text/javascript" src="<?= base_url_js."hover_pack.js ";?>"></script>
    <script type="text/javascript" src="<?= base_url_js."jquery.openCarousel.js ";?>"></script>
    <script type="text/javascript" src="<?= base_url_js."easing.js ";?>"></script>
    <script type="text/javascript" src="<?= base_url_js."move-top.js ";?>"></script>
    <script type="text/javascript" src="<?= base_url_js."jquery.magnific-popup.js ";?>"></script>
    
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>

    <script>
        $(function () {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();
            $(pull).on('click', function (e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function () {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
    <!----//End-top-nav-script---->
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>


<script>
    function IrUbicacion() {
        document.form.action = "<?= base_url."controlador/iniciocontrolador.php";?>";
            document.form.method = "GET";
        document.form.op.value = "1";
        document.form.submit();
    }
</script>
<!-- <script type="text/javascript">
    function ajax() {
        var req = new XMLHttpRequest();
        req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) {
                document.getElementById('chat').innerHTML = req.responseText;
            }
        }
        req.open('GET', 'chat.php', true);
        req.send();
    }
    //linea que hace que se refresque la página cada segundo
    setInterval(function () {
        ajax();
    }, 1000);
</script> -->


<script type="text/javascript" src="<?= base_url_js."jquery.mixitup.min.js ";?>"></script>
		<script type="text/javascript">
			$(function () {
				var filterList = {
					init: function () {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector: '.portfolio',
							filterSelector: '.filter',
							effects: ['fade'],
							easing: 'snap',
							// call the hover effect
							onMixEnd: filterList.hoverEffect()
						});

					},
					hoverEffect: function () {
						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(
							function () {
								$(this).find('.label').stop().animate({
									bottom: 0
								}, 200, 'easeOutQuad');
								$(this).find('img').stop().animate({
									top: -30
								}, 500, 'easeOutQuad');
							},
							function () {
								$(this).find('.label').stop().animate({
									bottom: -40
								}, 200, 'easeInQuad');
								$(this).find('img').stop().animate({
									top: 0
								}, 300, 'easeOutQuad');
							}
						);

					}

				};
				// Run the show!
				filterList.init();
			});
		</script>

        <!-- MENU -->


    <script>
            $(function () {

                $("#slideshow > div:gt(0)").hide();

                setInterval(function () {
                    $('#slideshow > div:first')
                        .fadeOut(2000)
                        .next(1000)
                        .fadeIn(3000)
                        .end(1000)
                        .appendTo('#slideshow');
                }, 4000);

            });
        </script>
        <!----//End-script---->


        <?php 
        
        ?>