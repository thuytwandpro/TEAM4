<html lang="zxx">
    <head>
        <title>PTY Shoes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <base href="{{asset('')}}">
        <script type="application/x-javascript">
            addEventListener("load", function () {
            	setTimeout(hideURLbar, 0);
            }, false);
            
            function hideURLbar() {
            	window.scrollTo(0, 1);
            }
        </script>
        <!-- //custom-theme -->
        <link href="pages/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="pages/css/shop.css" type="text/css" media="screen" property="" />
        <link href="pages/css/style7.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="pages/css/flexslider.css" type="text/css" media="screen" />
        <link href="pages/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="pages/css/contact.css">
        <link rel="stylesheet" type="text/css" href="pages/css/thanhtoan.css">
        <link rel="stylesheet" href="pages/css/about.css" type="text/css" media="screen" property="" />
        <!-- Owl-carousel-CSS -->
        <link rel="stylesheet" type="text/css" href="pages/css/jquery-ui1.css">
        <link href="pages/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome-icons -->
        <link href="pages/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        <!-- banner -->
        @yield('header')
        @yield('content')
        @yield('slidebar')
        @include('layouts.signup')
        @include('layouts.footer')
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <script type="text/javascript" src="pages/js/jquery-2.1.4.min.js"></script>
        <!-- //js -->
        <!-- cart-js -->
        <script src="pages/js/minicart.js"></script>
        <script>
            shoe.render();

            shoe.cart.on('shoe_checkout', function (evt) {
                var items, len, i;

                if (this.subtotal() > 0) {
                    items = this.items();

                    for (i = 0, len = items.length; i < len; i++) {}
                }
            });
        </script>
        <!-- //cart-js -->
        <!-- /nav -->
        <script src="pages/js/modernizr-2.6.2.min.js"></script>
        <script src="pages/js/classie.js"></script>
        <script src="pages/js/demo1.js"></script>
        <script src="pages/js/imagezoom.js"></script>
        <script src="pages/js/easy-responsive-tabs.js"></script>
        <script>
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true, // 100% fit in a container
                    closed: 'accordion', // Start closed if in accordion view
                    activate: function (event) { // Callback function if tab is switched
                        var $tab = $(this);
                        var $info = $('#tabInfo');
                        var $name = $('span', $info);
                        $name.text($tab.text());
                        $info.show();
                    }
                });
                $('#verticalTab').easyResponsiveTabs({
                    type: 'vertical',
                    width: 'auto',
                    fit: true
                });
            });
        </script>
        <script src="pages/js/jquery.flexslider.js"></script>
        <script>
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
        <script src="pages/js/search.js"></script>
        <script type="text/javascript" src="pages/js/move-top.js"></script>
        <script type="text/javascript" src="pages/js/easing.js"></script>
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
        <script type="text/javascript" src="pages/js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>
        