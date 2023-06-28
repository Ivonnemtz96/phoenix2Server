<!-- All JavaScript files=================================== -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<!-- Plugins for this template -->
<script src="/assets/js/modernizr.custom.js"></script>
<script src="/assets/js/jquery.dlmenu.js"></script>
<script src="/assets/js/jquery-plugin-collection.js"></script>
<!-- Custom script for this template -->
<script src="/assets/js/script.js"></script>


<!-- pop up -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.magnific-popup/1.0.0/jquery.magnific-popup.min.js"></script>
<script>
$('.open-popup-link').magnificPopup({
    type: 'inline',
    midClick: true,
    mainClass: 'mfp-fade'
});
$(document).on('click', '.popup-modal-dismiss', function(e) {
    e.preventDefault();
    $.magnificPopup.close();
});
</script>


<!-- Carousel de opiniones -->
<script>
jQuery(document).ready(function($) {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    $('#service-slider').owlCarousel({
        loop: true,
        items: 3,
        margin: 0,
        autoplay: true,
        dots: false,
        nav: true,
        navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });
});
</script>