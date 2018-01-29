<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/jquery-3.2.1.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/group.js"></script>
<script src="/js/easyResponsiveTabs.js"></script>
<script src="/js/slider/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>

<script src="/js/slider/js/google-code-prettify/prettify.js"></script>
<script src="/js/slider/js/google-code-prettify/lang-css.js"></script>

<script src="/js/custom.js" type="text/javascript"></script>

<script src="/js/slider/js/jquery.requestAnimationFrame.js"></script>

<script src="/js/slider/js/ilightbox/js/ilightbox.packed.js"></script>
<script src="/js/jquery.matchHeight.js" type="text/javascript"></script>
<script src="/src/slick/slick.min.js" type="text/javascript"></script>

<script type="text/javascript">
   $(document).ready(function(){


    $('#showroom_filter').easyResponsiveTabs();
     // Slider for Testimonials Section
     $('.slick-slider-testimonials').slick({
       draggable:true,
       dots: true,
        centerMode: true,
        centerPadding: ($('.slick-slider-testimonials').find('>div').outerWidth() / 2) + 'px', // This gives the half effect for the next and previous slides
        slidesToShow: 1,
        width: 600,
        variableWidth: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              centerPadding: 1,
              slidesToShow:1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              centerPadding: 1,
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 480,
            settings: {
              centerPadding: 1,
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          }
        ]


     });
      // Slider for Recently Viewed Vehicles
     $('.slick-slider-vehicles').slick({
          draggable:true,
       dots: false,
         infinite: true,
         speed: 300,
         slidesToShow: 4,
         slidesToScroll: 3,
         responsive: [
           {
             breakpoint: 1024,
             settings: {
               slidesToShow: 3,
               slidesToScroll: 3,
               infinite: true,
               dots: true
             }
           },
           {
             breakpoint: 600,
             settings: {
               slidesToShow: 2,
               slidesToScroll: 2,
             }
           },
           {
             breakpoint: 480,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1,
             }
           }
         ],


     });
     // Slider for Special OFfers on the Special Offers page
     $('.slick-slider-vehicles-special-offers').slick({
          draggable:true,
       dots: true,
       arrows:true,
         infinite: true,
         speed: 300,
         slidesToShow: 3,
         slidesToScroll: 2,
         responsive: [
           {
             breakpoint: 1024,
             settings: {
               slidesToShow: 2,
               slidesToScroll: 2,
               infinite: true,
               dots: true
             }
           },
           {
             breakpoint: 600,
             settings: {
               slidesToShow: 2,
               slidesToScroll: 2,
               dots:false,
             }
           },
           {
             breakpoint: 480,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1,
               dots:false,
             }
           }
         ],


     });
     // Slider for Short Specials on other pages
     $('.special-offers-slick').slick({
          draggable:true,
       dots: true,
         infinite: true,
         speed: 300,
         autoplay: true,
         autoplaySpeed: 10000,
         slidesToShow: 3,
         slidesToScroll: 3,
         responsive: [
           {
             breakpoint: 1024,
             settings: {
                 autoplaySpeed: 10000,
               slidesToShow: 3,
               slidesToScroll: 3,
               infinite: true,
               dots: true
             }
           },
           {
             breakpoint: 600,
             settings: {
                 autoplaySpeed: 10000,
               slidesToShow: 2,
               slidesToScroll: 2,
             }
           },
           {
             breakpoint: 480,
             settings: {
                autoplaySpeed: 10000,
               slidesToShow: 1,
               slidesToScroll: 1,
             }
           }
         ],


     });
     // Company Stats Slider
     $('.slick-slider-company-stats').slick({
          draggable:true,
       dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
autoplaySpeed: 8000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]


     });
   });






// This is a short script I stole from css-tricks to ease the scrolling for content and internal clicks

$(document).ready(function(){
  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });

    jQuery.goup({trigger: 10,
	containerSize:40,
   bottomOffset: 50,
    locationOffset: 50,
    title: 'Back To Top',
   containerColor: '840b23',
      });
});

</script>
   <script>
   wow = new WOW(
   {
       mobile: false
   });
   wow.init();
   $(function() {
   	$('.benefit-item').matchHeight();
    $('.ofr_lease').matchHeight();
    $('.faq_col').matchHeight();
   });
   	</script>
