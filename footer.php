 <!-- jQuery -->
        <script src="js\jquery-1.11.1.min.js"></script>
        <!-- Pace -->
        <script src="js\pace\pace.min.js"></script> 
        <!-- Bootstrap -->
        <script src="js\bootstrap\bootstrap.js"></script>    
        <!-- Modernizr -->
        <script src="js\modernizr\modernizr.js"></script>  
        <!-- Device JS -->
        <script src="js\devicejs\device.js"></script>  
        <!-- TinyNav -->
        <script src="js\tinynav\tinynav.min.js"></script>
        <!-- SmoothScroll -->
        <script src="js\smoothscroll\jquery.smooth-scroll.js"></script>
        <!-- Flexslider -->
        <script src="js\flexslider\jquery.flexslider.js"></script>  
        <!-- Sticky -->
        <script src="js\sticky\jquery.sticky.js"></script>  
        <!-- Waypoint -->
        <script src="js\waypoint\jquery.waypoints.min.js"></script>
        <!-- DoubleTapToGo -->
        <script src="js\jquery-ui-widget\jquery.ui.widget.js"></script>
        <script src="js\jquery-doubletaptogo\jquery.dcd.doubletaptogo.js"></script>
        <!-- Vide -->
        <script src="js\vide\jquery.vide.js"></script>
        <!-- Stellar -->
        <script src="js\stellar\jquery.stellar.js"></script>
        <!-- Masonry -->
        <script src="js\masonry\masonry.pkgd.min.js"></script>
        <!-- Countdown -->
        <script src="js\countdown\jquery.plugin.js"></script>
        <script src="js\countdown\jquery.countdown.js"></script>
        <!-- Countdown Labels / Localisation -->
        <script src="js\countdown\jquery.countdown-custom-label.js"></script>
        <!-- Magnific Popup -->
        <script src="js\magnific-popup\jquery.magnific-popup.js"></script>
        <!-- Owl Carousel -->
        <script src="js\owlcarousel\owl.carousel.js"></script>
        <!-- Slidebars -->
        <script src="js\slidebars\slidebars.js"></script> 

        <!-- Custom Core Script -->
        <script type="text/javascript" src="js\script.js"></script>        
        <!-- Custom Additional Script -->
        <script type="text/javascript" src="js\main-slider-fade.js"></script>
        <script type="text/javascript" src="js\side-navbar.js"></script>

        <script type="text/javascript">
                $("#music-button").click(function(e){
                    e.preventDefault();
                    if ($("#music-button i").hasClass("fa fa-music")){
                        $("#options-setting").addClass("move-right");
                        $("#music-button i").removeClass("fa fa-music");
                        $("#music-button i").addClass("de-icon-cancel-3");
                    }
                    else
                    {
                        $("#options-setting").removeClass("move-right");
                        $("#music-button i").removeClass("de-icon-cancel-3");
                        $("#music-button i").addClass("fa fa-music");
                    }
                });

                $('.control-music').click(function(){
                    $('#music-button').click();
                });
        </script>