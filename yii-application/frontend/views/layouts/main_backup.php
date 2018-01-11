<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
    <html lang="en"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?= Html::encode($this->title) ?></title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet" type="text/css">
        <link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/media1.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="utilcarousel-files/utilcarousel/util.carousel.css" />
        <link rel="stylesheet" href="utilcarousel-files/utilcarousel/util.carousel.skins.css" />

        <link href="src/css/mightyslider.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->




    </head>
<body>
<header>
    <div class="top-head hidden-xs">
        <div class="container">
            <div class="col-md-12">
                <ul>
                    <li><a href="#"><i><img src="images/icons/email.svg"></i>Email us</a></li>
                    <li><a href="#"><i><img src="images/icons/call.svg"></i>Request Callback</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid hidden-sm hidden-sm hidden-md hidden-lg">
        <div class="row">
            <div class="my_showroom">
                <div class="dropdown showroom_drop">
                    <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> My Showroom <span class="show_num">1</span>
                        <p>Compare up to 3 vehicles</p>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <div class="show_header"> <img src="images/car1.jpg"> BMW 3 Series </div>
                        <div class="showbtn">
                            <ul>
                                <li><a href="#"><i><img src="images/delete.png"></i>Delete</a></li>
                                <li><a href="#"><i><img src="images/copy.png"></i>Copy</a></li>
                            </ul>
                        </div>
                        <div class="my-list">
                            <ul>
                                <li>
                                    <div class="list-col">
                                        <div class="list-pic"> <img src="images/icon1.png"> </div>
                                        <div class="lis-des">
                                            <h6>Second slot empty</h6>
                                            <p>Add more vehicles to compare deals</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-col">
                                        <div class="list-pic"> <img src="images/icon1.png"> </div>
                                        <div class="lis-des">
                                            <h6>Third slot empty</h6>
                                            <p>Add more vehicles to compare deals</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="list-bottom-button"> <a href="#" class="btn btn-red"><i><img src="images/search.png"></i>go to my showroom</a> <a href="#" class="clear-btn">Clear list</a> </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-head whtbg_menu">
        <div class="container-fluid">
            <div class="col-lg-6 col-md-7">
                <nav class="navbar navbar-default menu menu2">
                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle x collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="#"><img src="images/logo_blog.png" class="hidden-xs"> <img src="images/logo-mob.png" class="hidden-sm hidden-sm hidden-md hidden-lg"></a> <a href="#" class="icon-mob"><img src="images/mob-phone.png"></a> <a href="#" class="icon-mob"><img src="images/email-mob.png"></a> </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Leasing Guide <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu ldrop">
                                    <li><a href="#">Personal Car leasing</a></li>
                                    <li><a href="#">Business Car Leasing</a></li>
                                    <li><a href="#">Van Leasing</a></li>
                                    <li>
                                        <div class="lg-box">
                                            <p>Not Sure what you want?</p>
                                            <a href="#">Help me choose a car</a> </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Special Offers</a></li>
                            <li><a href="#">Services</a></li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Leasing <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">wear and tear</a></li>
                                    <li><a href="#">deprecation</a></li>
                                    <li><a href="#">Bik calculator</a></li>
                                    <li><a href="#">fuel cost calculator</a></li>
                                    <li><a href="#">Glossary of terms</a></li>
                                    <li><a href="#">end of contract</a></li>
                                    <li><a href="#">Frequently asked questions</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More<span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">About AMT</a></li>
                                    <li><a href="#">Meet the Team</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="top-head hidden-sm hidden-sm hidden-md hidden-lg">
                            <div class="container">
                                <div class="col-md-12">
                                    <ul>
                                        <li><a href="#"><i><img src="images/email.png"></i>Email us</a></li>
                                        <li><a href="#"><i><img src="images/call.png"></i>Request Callback</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <div class="col-lg-6 col-md-5 top_rtl">
                <div class="my_showroom">
                    <div class="dropdown showroom_drop">
                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> My Showroom <span class="show_num">1</span>
                            <p>Compare up to 3 vehicles</p>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <div class="show_header"> <img src="images/car1.jpg"> BMW 3 Series </div>
                            <div class="showbtn">
                                <ul>
                                    <li><a href="#"><i><img src="images/delete.png"></i>Delete</a></li>
                                    <li><a href="#"><i><img src="images/copy.png"></i>Copy</a></li>
                                </ul>
                            </div>
                            <div class="my-list">
                                <ul>
                                    <li>
                                        <div class="list-col">
                                            <div class="list-pic"> <img src="images/icon1.png"> </div>
                                            <div class="lis-des">
                                                <h6>Second slot empty</h6>
                                                <p>Add more vehicles to compare deals</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-col">
                                            <div class="list-pic"> <img src="images/icon1.png"> </div>
                                            <div class="lis-des">
                                                <h6>Third slot empty</h6>
                                                <p>Add more vehicles to compare deals</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="list-bottom-button"> <a href="#" class="btn btn-red"><i><img src="images/search.png"></i>go to my showroom</a> <a href="#" class="clear-btn">Clear list</a> </div>
                        </ul>
                    </div>
                </div>
                <div class="feefo-rating">
                    <ul>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                    </ul>
                    <p>XXXX reviews</p>
                    <div class="feefologo"> <img src="images/feefo-logo.png"> </div>
                </div>
                <div class="top_phone">
                    <p>Mon-Fri 9am - 5.30pm</p>
                    <h4><img src="images/icons/phone.svg">0113 3502784</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="site-breadcrum">
        <div class=" container">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="sitebread-inner">
                    <ul>
                        <li><a href="#"><img src="images/home.png"></a></li>
                        <li><a href="#">personal Leasing</a></li>
                        <li><a href="#">Audi leasing deals</a></li>
                        <li><a href="#">A1</a></li>
                        <li class="active">Advance Search</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</header>
        <?= $content ?>


<footer id="footer">
    <div class="bottomline">
        <div class="container">
            <div class="row">
                <div class="footr_type">
                    <div class="col-lg-3 col-sm-12 col-md-3">
                        <dIV class="footer-single">
                            <div class="logo">
                                <h2>AMT Contract Hire & Leasing</h2>
                            </div>
                            <address>
                                <p>AMT Contract Hire & <br>
                                    Leasing Ltd, AMT House,<br>
                                    174 Armley Road<br>
                                    Leeds, Ls122QH</p>
                                <p>Tel: 0113 387 4241</p>
                                <p>Fax: 0844 826 23 01</p>
                            </address>
                        </dIV>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-md-3">
                        <div class="logo">
                            <h2>Leasing</h2>
                        </div>
                        <div class="listing_line">
                            <ul>
                                <li><a class="nav-link js-scroll-trigger" href="#home1">Personal car leasing</a></li>
                                <li><a class="nav-link js-scroll-trigger"  href="#about">Business car leasing</a></li>
                                <li><a  class="nav-link js-scroll-trigger" href="#works_row">Van leasing</a></li>
                                <li><a class="nav-link js-scroll-trigger" href="#ourservice">Special offers</a></li>
                                <li><a class="nav-link js-scroll-trigger" href="#whyus">My Showroom</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-md-3">
                        <div class="logo">
                            <h2>More</h2>
                        </div>
                        <div class="listing_line">
                            <ul>
                                <li><a class="nav-link js-scroll-trigger" href="#home1">Services</a></li>
                                <li><a class="nav-link js-scroll-trigger"  href="#about">Leasing guides</a></li>
                                <li><a  class="nav-link js-scroll-trigger" href="#works_row">About AMT</a></li>
                                <li><a class="nav-link js-scroll-trigger" href="#ourservice">Blog</a></li>
                                <li><a class="nav-link js-scroll-trigger" href="#whyus">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-md-3">
                        <div class="logo">
                            <h2>Connect with us</h2>
                        </div>
                        <div class="demopadding">
                            <div class="icon social fb"><i class="fa fa-facebook"></i></div>
                            <div class="icon social tw"><i class="fa fa-twitter"></i></div>
                            <div class="icon social in"><i class="fa fa-youtube"></i></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="foter_textline">
            <p>Registered Address: AMT Contract Hire & Leasing Ltd, AMT House, 174 Armley Road, Leeds, LS12 2QH, Tel: 0113 387 4241, Fax: 0844 826 2301
                Please note: Whilst every effort has been made to ensure the accuracy of the vehicle information and images, some errors may occur. It is important that you do not rely solely on the information, images or prices shown but to check with AMT Contract Hire & Leasing about any items that may affect your decision to lease this vehicle. Finance is subject to status. © </p>
            <p>AMT Contract Hire & Leasing Ltd is authorised and regulated by the Financial Conduct Authority: FRN0308831. AMT Contract Hire & Leasing is a credit broker and not a lender.
                BVRLA Membership No: 1559 | Data Protection Reg: ZA209348 | Registered in England and Wales No: 04504282 | VAT Registration Number: GB820808738
                AMT Contract Hire & Leasing Ltd is subsidiary of AMT Global Investments Ltd - Registered in England and Wales No: 05904790</p>
        </div>
        <div class="home_provider">
            <div class="row">
                <div class="col-lg-12">
                    <p> <img src="images/footer-logos/BVRLA.png" alt=" " class="img-responsive"> <img src="images/footer-logos/FCA.png" alt=" " class="img-responsive"> <img src="images/footer-logos/LEX.png" alt=" " class="img-responsive"> <img src="images/footer-logos/ARVAL.png" alt=" " class="img-responsive"> <img src="images/footer-logos/ALD.png" alt=" " class="img-responsive"><img src="images/footer-logos/hitachi.png" alt=" " class="img-responsive"><img src="images/footer-logos/leasys.png" alt=" " class="img-responsive"> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 col-md-9 col-xs-12">
                    <div class="bottom_nav">
                        <ul class="blacktp">
                            <li><a class="active" href="#Site map ">Site map </a></li>
                            <li><a href="#terms"> Terms & conditions </a></li>
                            <li><a href="#treating">Treating Customers Fairly </a></li>
                            <li><a href="#complaints">Complaints </a></li>
                            <li><a href="#cookie"> Cookie Policy </a></li>
                            <li><a href="#initial">initial disclosure </a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-3 col-xs-12">
                    <div class="author_text">Website by <span>Parallax</span></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>



<script src="js/wow.min.js"></script>
<script src="js/group.js"></script>
<script src="utilcarousel-files/utilcarousel/jquery.utilcarousel.min.js"></script>

<script src="js/slider/js/retina.js" type="text/javascript"></script>
<script src="js/slider/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
<script src="js/slider/js/jquery.simplr.smoothscroll.js" type="text/javascript"></script>

<script src="js/slider/js/google-code-prettify/prettify.js"></script>
<script src="js/slider/js/google-code-prettify/lang-css.js"></script>

<script src="src/js/mightyslider.min.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>

<script src="js/slider/js/jquery.requestAnimationFrame.js"></script>
<script src="js/slider/js/ilightbox/js/ilightbox.packed.js"></script>



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

<script src="js/easy-responsive-tabs.js"></script>

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


<script src="js/jssor.slider-22.1.9.min.js" type="text/javascript"></script>
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

</body>
</html>

<?php $this->endPage() ?>
