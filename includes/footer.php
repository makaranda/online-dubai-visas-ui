
<section class="footer-top-area">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 footer-section mt-3">
                <a href="./"><img src="assets/images/odvisa-logo.png" alt="Visa" class="img-fluid"></a>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-2 footer-section mt-3">
                <h5>Company</h5>
                <ul class="footer-list-view">
                    <li><a href="#">Visas</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Our Office</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-4 footer-section mt-3">
                <h5>Information</h5>
                <ul class="footer-list-view">
                    <li><a href="#">Visa Refusals, Cancellation and Refunds</a></li>
                    <li><a href="#">CTerms and Conditions</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center mt-3">
                <h5>Payment Methods</h5>
                <p class="payment-method-txt"><img src="assets/images/padlock.png" alt="lock icon" width="15" height="15" class="payment-method-img"> 100% Secure payment options</p>
                <div class="payment-icons">
                    <img alt="icon" src="assets/images/payment-icons/visa.svg" width="60" height="50">
                    <img alt="icon" src="assets/images/payment-icons/mastercard.svg" width="60" height="50">
                    <img alt="icon" src="assets/images/payment-icons/american-express.svg" width="60" height="50">
                    <img alt="icon" src="assets/images/payment-icons/apple-pay.svg" width="60" height="40">
                    <img alt="icon" src="assets/images/payment-icons/samsung-pay.svg" width="60" height="50">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer-bottom-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-12">
                <p>All visa processed by site is subject to approval by UAE immigration and we are not affiliated with any UAE government or immigration authority.</p>
            </div>
            <div class="col-12 col-md-12">
                <p class="pb-0 mb-0 footer-copyright-area">Copyright © <?php echo date('Y');?> www.damro.lk | All Rights Reserved</p>
            </div>
            <div class="col-12 col-md-12">
                <ul class="footer-social-media-area">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="">
	<a class="btn-whatsapp-pulse" href="https://api.whatsapp.com/send?phone=94773944180" target="_blank"><i class="fa fa-whatsapp my-float"></i></a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
<script src="assets/js/particles.js"></script>
<script src="assets/js/app.js"></script>

<script>
$(document).ready(function(){
    
    window.onload =function(){
        document.getElementById("my-video").play();
    }

    $(document).scroll(function () {
        var scroll = $(this).scrollTop();
        var topDist = $("#main-page").position();
        //alert(scroll+'/'+topDist.top);
        if (scroll > topDist.top) {
            //$('#mainNavArea').css({"position":"fixed","top":"0","z-index":"99","width": "100%","background-color": "#fff"});
            $('#mainNavArea').addClass('nav-sticky');
        } else {
            //$('#mainNavArea').css({"position":"relative","top":"auto","z-index":"99"});
            $('#mainNavArea').removeClass('nav-sticky');
        }
    });

    $('.btn-toggle-mobile').on('click',function(){
        $(this).addClass("d-none");
        $('.btn-close-area').removeClass("d-none");
        $('.btn-close-area').addClass("d-block");
    });

    $('.btn-close-area').on('click',function(){
        $(this).removeClass("d-block");
        $('.btn-toggle-mobile').addClass("d-block");
        $('.btn-toggle-mobile').removeClass("d-none");
        $('.btn-close-area').addClass("d-none");
    });


    /*

    const myCarouselElement = document.querySelector('#myCarousel')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 2000,
    touch: false
    });

    */

    /*$('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        autoplay:true,
        dots: false,
        nav: false,
        navElement: true,
        autoplayTimeout:5000,
        pagination: false,
        autoplayHoverPause:true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:5,
                loop:true
            }
        }
    });
        */




});
    var count_particles, stats, update;
        stats = new Stats;
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
        count_particles = document.querySelector('.js-count-particles');
        update = function() {
            stats.begin();
            stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);
(function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass:true,
      autoplay:true,
      dots: false,
      nav: false,
      responsive: {
        0: {
          items: 2,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();
</script>


</body>
</html>