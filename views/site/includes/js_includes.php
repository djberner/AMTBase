<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>



<script src="/js/wow.min.js"></script>
<script src="/js/group.js"></script>
<script src="/utilcarousel-files/utilcarousel/jquery.utilcarousel.min.js"></script>

<script src="/js/slider/js/retina.js" type="text/javascript"></script>
<script src="/js/slider/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
<script src="/js/slider/js/jquery.simplr.smoothscroll.js" type="text/javascript"></script>

<script src="/js/slider/js/google-code-prettify/prettify.js"></script>
<script src="/js/slider/js/google-code-prettify/lang-css.js"></script>

<script src="/src/js/mightyslider.min.js" type="text/javascript"></script>
<script src="/js/custom.js" type="text/javascript"></script>

<script src="/js/slider/js/jquery.requestAnimationFrame.js"></script>
<script src="/js/slider/js/ilightbox/js/ilightbox.packed.js"></script>



<script>
    $(document).ready(function(){
        jQuery.goup({trigger: 10,
            containerSize:40,
            bottomOffset: 50,
            locationOffset: 50,
            title: 'Back To Top',
            containerColor: '840b23',
        });


        // $('.panel-heading a').click(function() {
        // $('.panel-heading').removeClass('active');


        //if(!$(this).closest('.panel').find('.panel-collapse').hasClass('in'))
        // $(this).parents('.panel-heading').addClass('active');
        //});

        $('#testimonial').utilCarousel({
            showItems : 1,
            breakPoints : [[1920, 1]],
            autoPlay : true,
            navigationText : ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
            navigation : true

        });

        $('#hm_specialofr').utilCarousel({
            pagination : true,
            navigationText : ['<i class="icon-left-open-big"></i>', '<i class=" icon-right-open-big"></i>'],
            breakPoints : [[1920, 3], [1200, 3], [992, 2],  [767, 1], [480, 1],  ],
            navigation : true,
            rewind : false
        });



    });
</script>

<script src="/js/easy-responsive-tabs.js"></script>

<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });

</script>

<script>
    function getScrollbarWidth() {
        var outer = document.createElement("div");
        outer.style.visibility = "hidden";
        outer.style.width = "100px";
        document.body.appendChild(outer);

        var widthNoScroll = outer.offsetWidth;
        // force scrollbars
        outer.style.overflow = "scroll";

        // add innerdiv
        var inner = document.createElement("div");
        inner.style.width = "100%";
        outer.appendChild(inner);

        var widthWithScroll = inner.offsetWidth;

        // remove divs
        outer.parentNode.removeChild(outer);

        return widthNoScroll - widthWithScroll;
    }

    jQuery(document).ready(function($){
        var $win = $(window),
            isTouch = !!('ontouchstart' in window),
            clickEvent = isTouch ? 'tap' : 'click',
            scrollbarWidth = getScrollbarWidth();

        $('body').append('<style>html .ilightbox-noscroll { padding-right: ' + scrollbarWidth + 'px; } html .ilightbox-noscroll #navigation { padding-right: ' + (scrollbarWidth + 20) + 'px; }</style>');



        // Cycling By Slides Example
        (function(){
            var $carousel = $('#cycling_by_slides'),
                $frame = $('.frame', $carousel),
                $controls = $('div.controls', $carousel),
                $scrollbar = $('div.scrollbar', $carousel);
            $frame.mightySlider({
                speed: 300,
                easing: 'easeOutExpo',

                // Navigation options
                navigation: {
                    navigationType: 'centered',
                    activateOn: clickEvent
                },

                // Scrolling options
                scrolling: {
                    scrollBy: 0,
                    scrollSource: null

                },

                // Scrollbar options
                scrollBar: {
                    scrollBarSource: $scrollbar
                },

                // Buttons options
                buttons: {
                    prev: $('.prev', $controls),
                    next: $('.next', $controls)
                },

                // Cycling options
                cycling: {
                    cycleBy: 'slides',
                    pauseTime: 1500,
                    pauseOnHover: 1
                }
            });

            var API = $frame.data().mightySlider;

            // Method calling buttons
            $carousel.on(clickEvent, 'button[data-action]', function () {
                var action = $(this).data('action');

                switch (action) {
                    case 'add':
                        API.add('<li>' + API.slides.length + '</li>');
                        break;
                    case 'remove':
                        API.remove(-1);
                        break;
                    default:
                        API[action]();
                }
            });
        })();
        // End of Cycling By Slides Example



    });
</script>




<script type="text/javascript">
    /**
     * Get viewport/window size (width and height).
     *
     * @return {Object}
     */
    function getViewport() {
        var e = window,
            a = 'inner';
        if (!('innerWidth' in window)) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        return {
            width: e[a + 'Width'],
            height: e[a + 'Height']
        }
    }

    jQuery(document).ready(function($) {
        var $win = $(window),
            isTouch = !!('ontouchstart' in window),
            clickEvent = isTouch ? 'tap' : 'click';

        (function(){
            /**
             * Calculate the slides width in percent based on the parent's width.
             *
             * @return {String}
             */
            function calculator(width){
                var percent = '60%';

                if (width <= 480) {
                    percent = '100%';
                }
                else if (width <= 767) {
                    percent = '55%';
                }

                return percent;
            };

            // Global slider's DOM elements
            var $example = $('#example'),
                $frame = $('.frame', $example),
                $details = $('div.details', $example),
                $title = $('#title', $details),
                $photographer = $('#photographer', $details),
                $description = $('#description', $details),
                lastIndex = -1;

            // Calling new mightySlider class
            var slider = new mightySlider($frame, {
                    speed: 1000,
                    startAt: 1,
                    autoScale: 1,
                    easing: 'easeOutExpo',

                    // Navigation options
                    navigation: {
                        slideSize: calculator(getViewport().width),
                        keyboardNavBy: 'slides',
                        activateOn: clickEvent
                    },

                    // Dragging options
                    dragging: {
                        swingSpeed: 0.12,
                        onePage: 1
                    },

                    // Buttons options
                    buttons: !isTouch ? {
                        prev: $('a.mSPrev', $frame),
                        next: $('a.mSNext', $frame)
                    } : {},



                    // Cycling options
                    cycling: {
                        cycleBy: 'slides'
                    }
                },

                // Register callbacks to the events
                {
                    // Register mightySlider :active event callback
                    active: function(name, index) {
                        var slideOptions = this.slides[index].options;

                        if (lastIndex !== index)
                            $details.stop().animate({ opacity: 0 }, 500, function(){
                                $title.html(slideOptions.title);
                                $photographer.html(slideOptions.photographer);
                                $description.html(slideOptions.description);
                                $details.animate({ opacity: 1 }, 500);
                            });

                        lastIndex = index;
                    }
                }).init();

            // Register window :resize event callback
            $win.resize(function(){
                // Update slider options using 'set' method
                slider.set({
                    navigation: {
                        slideSize: calculator(getViewport().width)
                    }
                });
            });
        })();
    });


</script>







<script>

    /* wow animation put it after Document.ready  */
    wow = new WOW(
        {
            mobile: false
        });
    wow.init();

</script>


<script src="/js/jssor.slider-22.1.9.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_SlideshowTransitions = [
            {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
        ];

        var jssor_1_options = {
            $AutoPlay: true,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 4,
                $SpacingX: 16,
                $SpacingY: 16,
                $Align: 360
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*responsive code begin*/
        /*you can remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 800);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*responsive code end*/
    };
</script>

<script type="text/javascript">jssor_1_slider_init();</script>
