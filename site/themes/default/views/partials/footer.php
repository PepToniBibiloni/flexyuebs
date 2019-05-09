<?php namespace Flextype;?>
    <?php Themes::view('partials/tail')->display() ?>
      <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark noborder">
        <div id="copyrights">
            <div class="container center clearfix">
                Copyright Uebs 2019 | All Rights Reserved
            </div>
        </div>

    </footer><!-- #footer end -->
    </div>


<!-- External JavaScripts
============================================= -->
<script src="/site/themes/default/assets/dist/js/jquery.js"></script>
<script src="/site/themes/default/assets/dist/js/plugins.js"></script>
<!-- Google Map JavaScripts
============================================= -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCzkxzbEni5vR_Ugt1De8gBzrLX3236bnA"></script>
<script src="/site/themes/default/assets/dist/js/jquery.gmap.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="/site/themes/default/assets/dist/js/functions.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
</script>

<script>

    jQuery(window).on( 'load', function(){

        // Google Map
        jQuery('#headquarters-map').gMap({
            address: 'Melbourne, Australia',
            maptype: 'ROADMAP',
            zoom: 14,
            markers: [
                {
                    address: "Melbourne, Australia",
                    html: "Melbourne, Australia",
                    icon: {
                        image: "images/icons/map-icon-red.png",
                        iconsize: [32, 32],
                        iconanchor: [14,44]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: false,
                zoomControl: false,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            },
            styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"-100"},{"lightness":"30"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"gamma":"0.00"},{"lightness":"74"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
        });

    });

</script>
  </body>
</html>
