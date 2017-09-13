<!DOCTYPE html>
<html lang="en-us" class="no-js">

<head>
    <meta charset="utf-8">
    <title>Celebra.do - Organizador de fiestas</title>
    <meta name="description" content="Organiza tus fiestas y eventos de una manera sencilla.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jose Gratereaux">

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="/soon/img/favicon.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="/soon/img/favicon-retina-ipad.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="/soon/img/favicon-retina-iphone.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="/soon/img/favicon-standard-ipad.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="/soon/img/favicon-standard-iphone.png">

    <!-- ============== Resources style ============== -->
    <link rel="stylesheet" href="/soon/css/style.css" />

    <!-- Modernizr runs quickly on page load to detect features -->
    <script src="/soon/js/modernizr.custom.js"></script>
</head>

<body>

        <!-- YouTube link -->
        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=xhymVbGlXsA',containment:'body',autoPlay:true, mute:true, startAt:13, stopAt:0, opacity:1}"></a>

        <!-- Page preloader -->
        <div id="loading">
            <div id="preloader">
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Overlay and Star effect -->
        <div class="global-overlay">
            <div class="overlay skew-part light-overlay">

                <div id='stars'></div>
                <div id='stars2'></div>
                <div id='stars3'></div>

            </div>
        </div>

        <!-- START - Home/Left Part -->
        <section id="left-side">

            <!-- Your logo -->
            <img src="/soon/img/logo.png" alt="" class="brand-logo" />

            <div class="content">

                <h1 class="text-intro opacity-0"> <br>
                    Tu planificador de eventos!</h1>

                <h2 class="text-intro opacity-0">Pronto podrás organizar tus fiestas y eventos de una manera sencilla!.<br>
                    Con nosotros serás un invitado en tu fiesta.</h2>
                <nav>
                    <ul>
                        <li>
                            <a href="#" id="open-more-info" data-target="right-side" class="light-btn text-intro opacity-0">Más Información</a>
                        </li>
                        <li>
                            <a href="/pre-register" class="action-btn trigger text-intro opacity-0">Notificame!</a>
                        </li>
                    </ul>
                </nav>

            </div>

            <!-- Social icons -->
            <div class="social-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>

            </div>

        </section>
        <!-- END - Home/Left Part -->

        <!-- OPEN - Player control -->
        <nav id="player-nav">
            <ul>
                <li data-toggle="tooltip" data-placement="top" data-title="Play" data-trigger="hover">
                    <a onclick="$('#bgndVideo').playYTP()"><i class="fa fa-play"></i></a>
                </li>

                <li data-toggle="tooltip" data-placement="top" data-title="Pause" data-trigger="hover">
                    <a onclick="$('#bgndVideo').pauseYTP()"><i class="fa fa-pause"></i></a>
                </li>

                <li class="full-play" data-toggle="tooltip" data-placement="top" data-title="Fullscreen" data-trigger="hover">
                    <a class="expand-player"><i class="fa fa-expand"></i></a>
                </li>

                <li class="comp-play display-none" data-toggle="tooltip" data-placement="top" data-title="Reduce" data-trigger="hover">
                    <a class="compress-player"><i class="fa fa-compress"></i></a>
                </li>

            </ul>
        </nav> <!-- CLOSE - Player control -->

        <!-- START - More Informations/Right Part -->
        <section id="right-side" class="hide-right">

            <div class="content">

                <h3>Que haremos?</h3>

                <span class="separator"></span>

                <p>Es el portal donde inicia la organización de tu evento. Un espacio funcional, en el que encontrarás el más completo directorio de proveedores con las informaciones más importantes de los servicios y productos que ofrecen  para cada detalle del evento.</p>

                <p>&nbsp;</p>

                <p>Podrás encontrar desde lugares para la celebración, invitaciones, catering, decoración, pastelería, fotografía, animación y muchos más; verás tantas opciones que vas a tener que elegir.Sólo tienes que seleccionar a los proveedores de interés y solicitas cotización al instante.</p>

                <p>&nbsp;</p>

                <p>Será portal útil y accesible en el que podrás solicitar múltiples cotizaciones, preparar y archivar presupuesto de tu evento, envío de invitaciones y confirmación de asistencia vía emails y muchos más.</p>

                <span class="separator"></span>

                <div class="info-contact row">

                <h3>Nosotros</h3>

                    <div class="col-xs-12 col-sm-4 col-lg-4 item-map">
                        <div class="contact-item"><i class="icon ion-ios-telephone"></i>
                            <p>Celular:
                                <br>829-638-1569</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-lg-4 item-map">
                        <div class="contact-item"><i class="icon ion-ios-location"></i>
                            <p>Santo Domingo, <br> República Dominicana</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-lg-4 item-map">
                        <div class="contact-item"><i class="icon ion-ios-email"></i>
                            <p><a href="mailto:info@celebra.do">info@celebra.do</a>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /. Content -->

            <footer>

                <p>© Celebra 2017 &copy; Todos los derechos reservados</p>

            </footer>

        </section>
        <!-- START - More Informations/Right Part -->

        <!-- Button Cross to close the More Informations/Right Part -->
        <button id="close-more-info" class="hide-close"><i class="icon ion-ios-close-outline"></i></button>


        <!-- Root element of PhotoSwipe, the gallery. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

            <!-- Background of PhotoSwipe. 
                It's a separate element as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>

            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">

                <!-- Container that holds slides. 
                    PhotoSwipe keeps only 3 of them in the DOM to save memory.
                    Don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">

                    <div class="pswp__top-bar">

                        <!--  Controls are self-explanatory. Order can be changed. -->

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                        <button class="pswp__button pswp__button--share" title="Share"></button>

                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                              <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                              </div>
                            </div>
                        </div>

                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div> 
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>

                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>

                </div>

            </div>

</div>
<!-- /. Root element of PhotoSwipe. Must have class pswp. -->

<!-- ///////////////////\\\\\\\\\\\\\\\\\\\ -->
<!-- ********** Resources jQuery ********** -->
<!-- \\\\\\\\\\\\\\\\\\\/////////////////// -->

<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
<script src="/soon/js/jquery.min.js"></script>
<script src="/soon/js/jquery.easings.min.js"></script>
<script src="/soon/js/bootstrap.min.js"></script>

<!-- PhotoSwipe Core JS file -->
<script src="/soon/js/velocity.min.js"></script>

<!-- PhotoSwipe UI JS file -->
<script src="/soon/js/velocity.ui.min.js"></script>

<!-- Newsletter plugin -->
<script src="/soon/js/notifyMe.js"></script>

<!-- Contact form plugin -->
<script src="/soon/js/contact-me.js"></script>

<!-- Slideshow/Image plugin -->
<script src="/soon/js/vegas-youtube-mobile.js"></script>

<!-- YouTube plugin -->
<script src="/soon/js/jquery.mb.YTPlayer.js"></script>

<!-- Scroll plugin -->
<script src="/soon/js/jquery.mousewheel.js"></script>

<!-- Custom Scrollbar plugin -->
<script src="/soon/js/jquery.mCustomScrollbar.js"></script>

<!-- Popup Newsletter Form -->
<script src="/soon/js/classie.js"></script>
<script src="/soon/js/dialogFx.js"></script>

<!-- PhotoSwipe Core JS file -->
<script src="/soon/js/photoswipe.js"></script>

<!-- PhotoSwipe UI JS file -->
<script src="/soon/js/photoswipe-ui-default.js"></script>

<!-- Main JS File -->
<script src="/soon/js/main.js"></script>

<!--[if lt IE 10]><script type="text/javascript" src="/soon/js/placeholder.js"></script><![endif]-->

</body>

</html>