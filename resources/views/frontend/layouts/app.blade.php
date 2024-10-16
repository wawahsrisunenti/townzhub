<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <!-- SEO Meta Tags -->
        <meta name="description" content="Discover innovative digital solutions with DCLIQ. We focus on empowering your business transformation with effective digital marketing strategies, creative design, web development, and SEO development. Join us to unlock your business's potential and achieve greater success!">
        <meta name="keywords" content="digital agency, digital marketing agency, business transformation, digital marketing, creative design, technology development, branding solutions, online strategy, digital solutions, business empowerment, marketing consultancy, SEO">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="@yield('title', config('app.name'))">
        <meta property="og:description" content="Discover innovative digital solutions with DCLIQ.">
        <meta property="og:image" content="{{asset('asset/template/wp-content/uploads/2023/07/1726556093_header.png')}}"> 
        <meta property="og:url" content="{{ request()->url() }}">
        <meta property="og:type" content="website">
    
        <title>@yield('title', config('app.name'))</title>
    
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5YY8CPBKS8"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-5YY8CPBKS8');
        </script>
    
         <!-- Robots-->
       <meta name="robots" content="@yield('robots', 'index')">

        <!-- Favicon -->
        <link href="{{asset('favicon.ico')}}" rel="icon">

        <meta charset="UTF-8" />



        <meta name="robots" content="max-image-preview:large" />
        <link rel="dns-prefetch" href="//stats.wp.com" />
        <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
        <link rel="dns-prefetch" href="//fonts.googleapis.com" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css" integrity="sha512-DJLNx+VLY4aEiEQFjiawXaiceujj5GA7lIY8CHCIGQCBPfsEG0nGz1edb4Jvw1LR7q031zS5PpPqFuPA8ihlRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style id="wp-emoji-styles-inline-css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
        </style>
        <link rel="stylesheet" id="wp-block-library-css" href="{{asset('asset/template/wp-content/themes/ogency/style.css')}}" media="all" />
        <style id="classic-theme-styles-inline-css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em;
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none;
        }
        </style>
        <style id="global-styles-inline-css">
            body {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
                    rgba(6, 147, 227, 1) 0%,
                    rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
                    rgb(122, 220, 180) 0%,
                    rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
                    rgba(252, 185, 0, 1) 0%,
                    rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
                    rgba(255, 105, 0, 1) 0%,
                    rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
                    rgb(238, 238, 238) 0%,
                    rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
                    rgb(74, 234, 220) 0%,
                    rgb(151, 120, 209) 20%,
                    rgb(207, 42, 186) 40%,
                    rgb(238, 44, 130) 60%,
                    rgb(251, 105, 98) 80%,
                    rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
                    rgb(255, 206, 236) 0%,
                    rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
                    rgb(254, 205, 165) 0%,
                    rgb(254, 45, 45) 50%,
                    rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
                    rgb(255, 203, 112) 0%,
                    rgb(199, 81, 192) 50%,
                    rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
                    rgb(255, 245, 203) 0%,
                    rgb(182, 227, 212) 50%,
                    rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg,
                    rgb(202, 248, 128) 0%,
                    rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg,
                    rgb(2, 3, 129) 0%,
                    rgb(40, 116, 252) 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
                6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            }

            :where(.is-layout-flex) {
                gap: 0.5em;
            }

            :where(.is-layout-grid) {
                gap: 0.5em;
            }

            body .is-layout-flex {
                display: flex;
            }

            body .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }

            body .is-layout-flex>* {
                margin: 0;
            }

            body .is-layout-grid {
                display: grid;
            }

            body .is-layout-grid>* {
                margin: 0;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }

            .wp-block-navigation a:where(:not(.wp-element-button)) {
                color: inherit;
            }

            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }

            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }

            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }

            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }

            .wp-block-pullquote {
                font-size: 1.5em;
                line-height: 1.6;
            }
        </style>
        <style id="woocommerce-inline-inline-css">
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link rel="stylesheet" id="animate-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/animate/animate.min.css')}}" media="all" />
        <link rel="stylesheet" id="custom-animate-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/animate/custom-animate.css')}}" media="all" />
        <link rel="stylesheet" id="bootstrap-select-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" media="all" />
        <link rel="stylesheet" id="bxslider-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/bxslider/jquery.bxslider.css')}}" media="all" />
        <link rel="stylesheet" id="jarallax-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/jarallax/jarallax.css')}}" media="all" />
        <link rel="stylesheet" id="jquery-magnific-popup-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" media="all" />
        <link rel="stylesheet" id="odometer-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/odometer/odometer.min.css')}}" media="all" />
        <link rel="stylesheet" id="tiny-slider-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/tiny-slider/tiny-slider.min.css')}}" media="all" />
        <link rel="stylesheet" id="owl-carousel-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/owl-carousel/owl.carousel.min.css')}}" media="all" />
        <link rel="stylesheet" id="owl-theme-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" media="all" />
        <link rel="stylesheet" id="reey-font-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/reey-font/stylesheet.css')}}" media="all" />
        <link rel="stylesheet" id="alagambe-font-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/alagambe-font/stylesheet.css')}}" media="all" />
        <link rel="stylesheet" id="swiper-css" href="{{asset('asset/template/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css')}}" media="all" />
        <link rel="stylesheet" id="jquery-ui-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/timepicker/timePicker.css')}}" media="all" />
        <link rel="stylesheet" id="jquery-ui-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/jquery-ui/jquery-ui.css')}}" media="all" />
        <link rel="stylesheet" id="ogency-addon-style-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/css/ogency-addon.css')}}" media="all" />
        <link rel="stylesheet" id="slick-css" href="{{asset('asset/template/wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.css')}}" media="all" />
        <link rel="stylesheet" id="perfect-scrollbar-css" href="{{asset('asset/template/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" media="all" />
        <link rel="stylesheet" id="perfect-scrollbar-wpc-css" href="{{asset('asset/template/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/custom-theme.css')}}" media="all" />
        <link rel="stylesheet" id="magnific-popup-css" href="{{asset('asset/template/wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/magnific-popup.css')}}" media="all" />
        <link rel="stylesheet" id="woosq-feather-css" href="{{asset('asset/template/wp-content/plugins/woo-smart-quick-view/assets/libs/feather/feather.css')}}" media="all" />
        <link rel="stylesheet" id="woosq-icons-css" href="{{asset('asset/template/wp-content/plugins/woo-smart-quick-view/assets/css/icons.css')}}" media="all" />
        <link rel="stylesheet" id="woosq-frontend-css" href="{{asset('asset/template/wp-content/plugins/woo-smart-quick-view/assets/css/frontend.css')}}" media="all" />
        <link rel="stylesheet" id="woosw-icons-css" href="{{asset('asset/template/wp-content/plugins/woo-smart-wishlist/assets/css/icons.css')}}" media="all" />
        <link rel="stylesheet" id="woosw-frontend-css" href="{{asset('asset/template/wp-content/plugins/woo-smart-wishlist/assets/css/frontend.css')}}" media="all" />


        <style id="woosw-frontend-inline-css">
            .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-notice {
                background-color: #5fbd74;
            }

            .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-popup-content-bot-inner a:hover {
                color: #5fbd74;
                border-color: #5fbd74;
            }
        </style>
        <link rel="stylesheet" id="ogency-fonts-css" href="//fonts.googleapis.com/css?family=Plus+Jakarta+Sans%3A200%2C200i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%26subset%3Dlatin%2Clatin-ext" media="all" />
        <link rel="stylesheet" id="flaticons-css" href="{{asset('asset/template/wp-content/themes/ogency/assets/vendors/flaticons/css/flaticon.css')}}" media="all" />
        <link rel="stylesheet" id="ogency-icons-css" href="{{asset('asset/template/wp-content/themes/ogency/assets/vendors/ogency-icons/style.css')}}" media="all" />
        <link rel="stylesheet" id="bootstrap-css" href="{{asset('asset/template/wp-content/themes/ogency/assets/vendors/bootstrap/css/bootstrap.min.css')}}" media="all" />
        <link rel="stylesheet" id="fontawesome-css" href="{{asset('asset/template/wp-content/themes/ogency/assets/vendors/fontawesome/css/all.min.css')}}" media="all" />
        <link rel="stylesheet" id="ogency-style-css" href="{{asset('asset/template/wp-content/themes/ogency/style.css')}}" media="all" />

        <style id="ogency-style-inline-css">
            :root {
                --ogency-primary: #f2edea;
                --ogency-primary-rgb: 242, 237, 234;
                --ogency-base: #02066f;
                --ogency-base-rgb: 245, 144, 13;
                --ogency-black: #000000;
                --ogency-black-rgb: 0, 0, 0;
            }

            .page-header__bg {
                background-image: url();
            }

            .page-header__overlay {
                background-image: url();
            }

            .preloader .preloader__image {
                background-image: url('asset/template/wp-content/uploads/2023/07/loader.png');
            }

            :root {
                --ogency-primary: #f2edea;
                --ogency-primary-rgb: 242, 237, 234;
                --ogency-base: #02066f;
                --ogency-base-rgb: 245, 144, 13;
                --ogency-black: #000000;
                --ogency-black-rgb: 0, 0, 0;
                --ogency-secondary: #5b4034;
                --ogency-secondary-rgb: 91, 64, 52;
            }

            .page-header__bg {
                background-image: url("/asset/template/wp-content/uploads/2023/07/page-header-bg-1-1.jpg");
            }

            @font-face {
                font-family: "star";
                src: url("/wp-content/plugins/woocommerce/assets/fonts/star.eot");
                src: url("/wp-content/plugins/woocommerce/assets/fonts/star.eot?#iefix") format("embedded-opentype"),
                url("/wp-content/plugins/woocommerce/assets/fonts/star.woff") format("woff"),
                url("/wp-content/plugins/woocommerce/assets/fonts/star.ttf") format("truetype"),
                url("/wp-content/plugins/woocommerce/assets/fonts/star.svg#star") format("svg");
                font-weight: normal;
                font-style: normal;
            }
        </style>
        <link rel="stylesheet" id="ogency-dark-mode-css" href="{{asset('asset/template/wp-content/themes/ogency/assets/css/modes/ogency-dark.css')}}" media="all" />
        <link rel="stylesheet" id="recent-posts-widget-with-thumbnails-public-style-css" href="{{asset('asset/template/wp-content/plugins/recent-posts-widget-with-thumbnails/public.css')}}" media="all" />

        <link rel="stylesheet" id="elementor-icons-css" href="{{asset('asset/template/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css')}}" media="all" />
        <link rel="stylesheet" id="elementor-frontend-css" href="{{asset('asset/template/wp-content/plugins/elementor/assets/css/frontend-lite.min.css')}} " media="all" />
        <link rel="stylesheet" id="elementor-post-6-css" href="{{asset('asset/template/wp-content/uploads/elementor/css/post-6.css')}} " media="all" />
        <link rel="stylesheet" id="elementor-post-1565-css" href="{{asset('asset/template/wp-content/uploads/elementor/css/post-1565.css')}}" media="all" />
        <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.5.4" media="all" />
        <link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{asset('asset/template/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css')}} " media="all" />
        <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{asset('asset/template/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css')}} " media="all" />
        <link rel="stylesheet" id="elementor-icons-shared-1-css" href="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/ogency-icons/style.css')}} " media="all" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

        <script type="text/template" id="tmpl-unavailable-variation-template"> <p>Sorry, this product is unavailable. Please choose a different combination.</p>
        </script>
        <script src="{{asset('asset/template/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js')}} " id="wp-polyfill-inert-js"></script>
        <script src="{{asset('asset/template/wp-includes/js/dist/vendor/regenerator-runtime.min.js')}} " id="regenerator-runtime-js"></script>
        <script src="{{asset('asset/template/wp-includes/js/dist/vendor/wp-polyfill.min.js')}} " id="wp-polyfill-js"></script>
        <script src="{{asset('asset/template/wp-includes/js/dist/hooks.min.js')}} " id="wp-hooks-js"></script>
        <script src="https://stats.wp.com/w.js?ver=202426" id="woo-tracks-js"></script>
        <script src="{{asset('asset/template/wp-includes/js/jquery/jquery.min.js')}} " id="jquery-core-js"></script>
        <script src="{{asset('asset/template/wp-includes/js/jquery/jquery-migrate.min.js')}} " id="jquery-migrate-js"></script>
        <link rel="https://api.w.org/" href="/wp-json/" />
        <link rel="alternate" type="application/json" href="/wp-json/wp/v2/pages/1565" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc.php?rsd" />
        <meta name="generator" content="WordPress 6.5.4" />
        <meta name="generator" content="WooCommerce 7.9.0" />
        <link rel="canonical" href="/home-light/" />
        <link rel="shortlink" href="/?p=1565" />

        <meta name="bmi-version" content="1.2.9" />
        <noscript>
        <style>
            .woocommerce-product-gallery {
            opacity: 1 !important;
            }
        </style>
        </noscript>
        <meta name="generator" content="Elementor 3.15.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap" />
        <link rel="icon" href="{{asset('favicon-new.png')}}" sizes="32x32" />
        <link rel="icon" href="{{asset('favicon-new.png')}}" sizes="192x192" />
        <link rel="apple-touch-icon" href="{{asset('favicon-new.png')}}" />
        <meta name="msapplication-TileImage" content="{{asset('favicon-new.png')}}" />


    </head>

    <body class="page-template page-template-elementor_header_footer page page-id-1565 theme-ogency woocommerce-no-js custom-cursor woocommerce-active elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-1565">

        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>
        <!-- Preloader -->
        <div class="preloader">
            <div class="preloader__image"></div>
        </div>
        <!-- /.preloader -->
        <div id="page" class="site page-wrapper">
            <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>
            <!-- the loop -->

            <x-top-navigation />





        @yield('content')


        <x-footer />


    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, "woocommerce-js");
            document.body.className = c;
        })();
        </script>
        <link rel="stylesheet" id="elementor-post-1650-css" href="{{asset('asset/template/wp-content/uploads/elementor/css/post-1650.css')}} " media="all" />
        <link rel="stylesheet" id="elementor-post-196-css" href="{{asset('asset/template/wp-content/uploads/elementor/css/post-196.css')}} " media="all" />
        <link rel="stylesheet" id="elementor-post-621-css" href="{{asset('asset/template/wp-content/uploads/elementor/css/post-621.css')}} " media="all" />

        <script src="{{asset('asset/template/wp-content/plugins/contact-form-7/includes/swv/js/index.js')}}" id="swv-js"></script>
        <script id="contact-form-7-js-extra">
        var wpcf7 = {
            api: {
            // root: "https:\/\/bracketweb.com\/ogencywp\/wp-json\/",
            namespace: "contact-form-7\/v1",
            },
        };
        </script>
        <script src="{{asset('asset/template/wp-content/plugins/contact-form-7/includes/js/index.js')}}" id="contact-form-7-js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js?ver=1719213795" id="js-cookie-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/layerdrops-toolbar/assets/js/jQuery.style.switcher.min.js')}}" id="jquery-style-switcher-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/layerdrops-toolbar/assets/js/color-switcher.js')}} " id="layerdrops-toolbar-color-switcher-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js')}}" id="jquery-blockui-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js')}} " id="wc-add-to-cart-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js')}} " id="woocommerce-js"></script>
        <script src="{{asset('asset/template/wp-includes/js/jquery/ui/core.min.js')}}" id="jquery-ui-core-js"></script>
        <script src="{{asset('asset/template/wp-includes/js/jquery/ui/datepicker.min.js')}}" id="jquery-ui-datepicker-js"></script>
        <script id="jquery-ui-datepicker-js-after">
        jQuery(function(jQuery) {
            jQuery.datepicker.setDefaults({
            closeText: "Close",
            currentText: "Today",
            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", ],
            monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec", ],
            nextText: "Next",
            prevText: "Previous",
            dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", ],
            dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
            dateFormat: "d M",
            firstDay: 1,
            isRTL: false,
            });
        });
        </script>
        <script src="{{asset('asset/template/wp-content/themes/ogency/assets/vendors/bootstrap/js/bootstrap.min.js')}}" id="bootstrap-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}" id="bootstrap-select-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/bxslider/jquery.bxslider.min.js')}}" id="jquery-bxslider-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/countdown/countdown.min.js')}}" id="countdown-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/jarallax/jarallax.min.js')}}" id="jarallax-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}" id="jquery-ajaxchimp-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/jquery-appear/jquery.appear.min.js')}}" id="jquery-appear-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}" id="jquery-magnific-popup-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/odometer/odometer.min.js')}}" id="odometer-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/tiny-slider/tiny-slider.min.js')}}" id="tiny-slider-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/owl-carousel/owl.carousel.min.js')}}" id="owl-carousel-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}" id="jquery-circle-progress-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/swiper/swiper.min.js')}}" id="swiper-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/wow/wow.js')}}" id="wow-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/sharer/sharer.min.js')}}" id="sharer-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/timepicker/timePicker.js')}}" id="timepicker-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/circleType/jquery.circleType.js')}}" id="circletype-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/vendors/circleType/jquery.lettering.min.js')}}" id="circleletter-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/ogency-addon/assets/js/ogency-addon.js')}}" id="ogency-addon-script-js"></script>
        <script src="{{asset('asset/template/wp-includes/js/underscore.min.js')}}" id="underscore-js"></script>
        <script src="{{asset('asset/template/wp-includes/js/wp-util.min.js')}}" id="wp-util-js"></script>
        <script id="wc-add-to-cart-variation-js-extra">
        var wc_add_to_cart_variation_params = {
            wc_ajax_url: "\/ogencywp\/?wc-ajax=%%endpoint%%",
            i18n_no_matching_variations_text: "Sorry, no products matched your selection. Please choose a different combination.",
            i18n_make_a_selection_text: "Please select some product options before adding this product to your cart.",
            i18n_unavailable_text: "Sorry, this product is unavailable. Please choose a different combination.",
        };
        </script>
        <script src="{{asset('asset/template/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js')}}" id="wc-add-to-cart-variation-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.min.js')}}" id="slick-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}" id="perfect-scrollbar-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}" id="magnific-popup-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/woo-smart-wishlist/assets/js/frontend.js')}}" id="woosw-frontend-js"></script>
        <script src="{{asset('asset/template/wp-content/themes/ogency/assets/vendors/isotope/isotope.js')}}" id="isotope-js"></script>
        <script src="{{asset('asset/template/wp-includes/js/imagesloaded.min.js')}}" id="imagesloaded-js"></script>
        <script src="{{asset('asset/template/wp-content/themes/ogency/assets/js/ogency-theme.js')}}" id="ogency-theme-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js')}}" id="elementor-webpack-runtime-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/elementor/assets/js/frontend-modules.min.js')}}" id="elementor-frontend-modules-js"></script>
        <script src="{{asset('asset/template/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js')}}" id="elementor-waypoints-js"></script>
        <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            environmentMode: {
            edit: false,
            wpPreview: false,
            isScriptDebug: false,
            },
            i18n: {
            shareOnFacebook: "Share on Facebook",
            shareOnTwitter: "Share on Twitter",
            pinIt: "Pin it",
            download: "Download",
            downloadImage: "Download image",
            fullscreen: "Fullscreen",
            zoom: "Zoom",
            share: "Share",
            playVideo: "Play Video",
            previous: "Previous",
            next: "Next",
            close: "Close",
            a11yCarouselWrapperAriaLabel: "Carousel | Horizontal scrolling: Arrow Left & Right",
            a11yCarouselPrevSlideMessage: "Previous slide",
            a11yCarouselNextSlideMessage: "Next slide",
            a11yCarouselFirstSlideMessage: "This is the first slide",
            a11yCarouselLastSlideMessage: "This is the last slide",
            a11yCarouselPaginationBulletMessage: "Go to slide",
            },
            is_rtl: false,
            breakpoints: {
            xs: 0,
            sm: 480,
            md: 768,
            lg: 1025,
            xl: 1440,
            xxl: 1600
            },
            responsive: {
            breakpoints: {
                mobile: {
                label: "Mobile Portrait",
                value: 767,
                default_value: 767,
                direction: "max",
                is_enabled: true,
                },
                mobile_extra: {
                label: "Mobile Landscape",
                value: 880,
                default_value: 880,
                direction: "max",
                is_enabled: false,
                },
                tablet: {
                label: "Tablet Portrait",
                value: 1024,
                default_value: 1024,
                direction: "max",
                is_enabled: true,
                },
                tablet_extra: {
                label: "Tablet Landscape",
                value: 1200,
                default_value: 1200,
                direction: "max",
                is_enabled: false,
                },
                laptop: {
                label: "Laptop",
                value: 1366,
                default_value: 1366,
                direction: "max",
                is_enabled: false,
                },
                widescreen: {
                label: "Widescreen",
                value: 2400,
                default_value: 2400,
                direction: "min",
                is_enabled: false,
                },
            },
            },
            version: "3.15.1",
            is_static: false,
            experimentalFeatures: {
            e_dom_optimization: true,
            e_optimized_assets_loading: true,
            e_optimized_css_loading: true,
            additional_custom_breakpoints: true,
            e_swiper_latest: true,
            "landing-pages": true,
            e_global_styleguide: true,
            },
            urls: {
            // assets: "https:\/\/bracketweb.com\/ogencywp\/wp-content\/plugins\/elementor\/assets\/",
            },
            swiperClass: "swiper",
            settings: {
            page: [],
            editorPreferences: []
            },
            kit: {
            active_breakpoints: ["viewport_mobile", "viewport_tablet"],
            global_image_lightbox: "yes",
            lightbox_enable_counter: "yes",
            lightbox_enable_fullscreen: "yes",
            lightbox_enable_zoom: "yes",
            lightbox_enable_share: "yes",
            lightbox_title_src: "title",
            lightbox_description_src: "description",
            },
            post: {
            id: 1565,
            title: "Home%20Light%20%E2%80%93%20Ogency",
            excerpt: "",
            featuredImage: false,
            },
        };
        </script>
        <script src="{{asset('asset/template/wp-content/plugins/elementor/assets/js/frontend.min.js')}}" id="elementor-frontend-js"></script>



        @if (Route::is('index'))
        <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "Organization",
                    "@id": "{{env('APP_URL')}}/#organization",
                    "name": "{{env('APP_NAME')}}",
                    "url": "{{env('APP_URL')}}/",
                    "sameAs": ["https://www.facebook.com/MGOALINDOindonesia", "https://www.instagram.com/mgoalindo/", "https://www.youtube.com/channel/UCnXAvRR6koz0ZvvCRTqfj-w", "https://twitter.com/MGOALINDO"],
                    "logo": { "@type": "ImageObject", "@id": "{{env('APP_URL')}}", "url": "{{env('APP_URL')}}/upload/logo/mgoallogo.png", "width": 1667, "height": 454, "caption": "{{env('APP_NAME')}}" },
                    "image": { "@id": "{{env('APP_URL')}}" }
                },
                {
                    "@type": "WebSite",
                    "@id": "{{env('APP_URL')}}/#website",
                    "url": "{{env('APP_URL')}}",
                    "name": "{{env('APP_NAME')}}",
                    "publisher": { "@id": "{{env('APP_URL')}}/#organization" },
                    "potentialAction": { "@type": "SearchAction", "target": "{{env('APP_URL')}}/search?q={q}", "query-input": "required name=q" }
                },
                {
                    "@type": "ImageObject",
                    "@id": "{{env('APP_URL')}}/#primaryimage",
                    "url": "{{env('APP_URL')}}/upload/banner/HdZ4-Desktop_Podcast.jpg",
                    "width": 1280,
                    "height": 720,
                    "caption": "{{env('APP_NAME')}}"
                },
                {
                    "@type": "WebPage",
                    "@id": "{{env('APP_URL')}}/#webpage",
                    "url": "{{env('APP_URL')}}",
                    "inLanguage": "id-ID",
                    "name": "Portal Berita Bola Terkini - {{env('APP_NAME')}}",
                    "isPartOf": { "@id": "{{env('APP_URL')}}/#website" },
                    "about": { "@id": "{{env('APP_URL')}}/#organization" },
                    "primaryImageOfPage": { "@id": "{{env('APP_URL')}}/#primaryimage" },
                    "datePublished": "2020-10-19T11:36:02+07:00",
                    "dateModified": "2021-03-10T15:44:42+07:00",
                    "description": "{{env('APP_NAME')}}.com - Berita olahraga terupdate, berita bola terkini. Berita hasil pertandingan, berita klub dan kompetisi bola, berita transfer pemain."
                }
            ]
        }
        </script>
        @endif

    </body>
</html>
