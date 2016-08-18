<!doctype html>

<html class="js csstransitions video svg inlinesvg svgclippaths modern-browser not-mobile js csstransitions video svg inlinesvg svgclippaths modern-browser js csstransitions video svg inlinesvg svgclippaths modern-browser js csstransitions video svg inlinesvg svgclippaths modern-browser js csstransitions video svg inlinesvg svgclippaths modern-browser js csstransitions video svg inlinesvg svgclippaths modern-browser js csstransitions video svg inlinesvg svgclippaths modern-browser js csstransitions video svg inlinesvg svgclippaths modern-browser" lang="en"><head><meta http-equiv="content-type" content="text/html;charset=UTF-8">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Centro de Neuromodulação</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="referrer" content="origin">



    <meta property="fb:app_id" content="803180099766052">
    <meta property="og:site_name" content="Centro de Neuromodulação">
    <meta property="og:title" content="Home | Centro de Neuromodulação">
    <meta property="og:url" content="index.html">
    <meta property="og:description" content="Nós somos... bláh bláh">


    <meta property="og:image" content="assets/uploads/2014/08/18-1600x800.jpg">
    <meta property="og:image:url" content="assets/uploads/2014/08/18-1600x800.jpg">

    <!--trocar todas as imagens-->
    <link rel="apple-touch-icon" sizes="57x57" href="theme/images/favicons/apple-touch-icon-57x57-9e41f838fa.png">
    <link rel="apple-touch-icon" sizes="60x60" href="theme/images/favicons/apple-touch-icon-60x60-61eced9b63.png">
    <link rel="apple-touch-icon" sizes="72x72" href="theme/images/favicons/apple-touch-icon-72x72-03d872d9f6.png">
    <link rel="apple-touch-icon" sizes="76x76" href="theme/images/favicons/apple-touch-icon-76x76-4f7266e637.png">
    <link rel="apple-touch-icon" sizes="114x114" href="theme/images/favicons/apple-touch-icon-114x114-af3f9d754d.png">
    <link rel="apple-touch-icon" sizes="120x120" href="theme/images/favicons/apple-touch-icon-120x120-8f80bcbb5b.png">
    <link rel="apple-touch-icon" sizes="144x144" href="theme/images/favicons/apple-touch-icon-144x144-4d53b498e3.png">
    <link rel="apple-touch-icon" sizes="152x152" href="theme/images/favicons/apple-touch-icon-152x152-b0c947da76.png">
    <link rel="apple-touch-icon" sizes="180x180" href="theme/images/favicons/apple-touch-icon-180x180-b3415e4427.png">
    <link rel="icon" type="image/png" href="theme/images/favicons/favicon-32x32-16d864abff.png" sizes="32x32">
    <link rel="icon" type="image/png" href="theme/images/favicons/favicon-194x194-52fce67c45.png" sizes="194x194">
    <link rel="icon" type="image/png" href="theme/images/favicons/favicon-96x96-165f54371d.png" sizes="96x96">
    <link rel="icon" type="image/png" href="theme/images/favicons/android-chrome-192x192-ca6391956e.png" sizes="192x192">
    <link rel="icon" type="image/png" href="theme/images/favicons/favicon-16x16-3c015a0795.png" sizes="16x16">
    <link rel="manifest" href="theme/images/favicons/manifest-8743dc857b.json">
    <link rel="mask-icon" href="theme/images/favicons/safari-pinned-tab-551917f6c3.svg" color="#002d72">
    <meta name="apple-mobile-web-app-title" content="Centro de Neuromodulação">
    <meta name="application-name" content="Centro de Neuromodulação">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="theme/images/favicons/mstile-144x144-8b217b2343.png">
    <meta name="theme-color" content="#ffffff">


    <link rel="https://api.w.org/" href="wp-json/index.html">
    <link rel="canonical" href="index.html">

    <link rel="stylesheet" type="text/css" href="{{asset('/css/brainanim.css')}}">
    <link rel="stylesheet" href="{{asset('/css/base-e1f1a1c0a0.css')}}">
    <link rel="stylesheet" href="{{asset('/css/home-c67872ce6d.css')}}">
    <style>
        .alert-on .identity-stripe {
            border-top-color: #2C2C33;
        }

        .alert-on .identity-stripe .logo-tab {
            background-color: #2C2C33;
        }

        .alert-on.page-layout_inner .minimal-title {
            background-color: #2C2C33 !important;
        }
    </style>

    <script>
        {{--<script async="" src="../www.google-analytics.com/analytics.js"></script>--}}
        window.programExplorerUrl = "academics/index.html";
    </script>
    <script>
        function setHeroHeight() {

            /**
             * Do not alter the size of the hero on old browsers.
             * We are falling back to the no JavaScript for these browsers.
             */
            if (!modernBrowser) {
                return;
            }

            var hero = document.getElementById("bbHeroSection");
            var heroOffset = hero.getBoundingClientRect().bottom;
            var windowHeight = document.documentElement.clientHeight;

            var height = windowHeight - heroOffset;

            hero.style.height = height + "px"

        }
    </script>

    <script src="{{asset('/js/modernizr-acd544d837.js')}}"></script>
    <script src="{{asset('/js/head-c1049261eb.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

</head>

<body class="home page page-id-12375 page-template-default  show-nav-fries unscrolled">
@yield('content')

</body>
</html>