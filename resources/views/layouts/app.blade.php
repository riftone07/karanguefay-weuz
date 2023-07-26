<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KaranguéFay - Paiement numérique des agents de santé</title>

    <link rel="shortcut icon" href="{{ asset('images/logo/LogoKF1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="v2/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="v2/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="v2/assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="v2/assets/css/plugin/slick.css">
    <link rel="stylesheet" href="v2/assets/css/custom-family.css">
    <link rel="stylesheet" href="v2/assets/css/plugin/magnific-popup.css">
    <link rel="stylesheet" href="v2/assets/css/plugin/animate.css">
    <link rel="stylesheet" href="{{ asset('v2/assets/css/style.css') }}">
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    {{-- header start --}}
    @include("components.header")
    {{-- header end --}}

    {{-- hero start --}}
    @include("components.hero")
    {{-- hero end --}}

    @yield("content")

    {{-- FAQ start --}}
    @include("components.faq")
    {{-- FAQ end --}}

    {{-- footer start --}}
    @include("components.footer")
    {{-- footer end --}}

    <script src="v2/assets/js/jquery.min.js"></script>
    <script src="v2/assets/js/proper-min.js"></script>
    <script src="v2/assets/js/bootstrap.min.js"></script>
    <script src="v2/assets/js/fontawesome.js"></script>
    <script src="v2/assets/js/plugin/slick.js"></script>
    <script src="v2/assets/js/plugin/jquery.magnific-popup.min.js"></script>
    <script src="v2/assets/js/plugin/jquery.nice-select.min.js"></script>
    <script src="v2/assets/js/plugin/wow.min.js"></script>
    <script src="v2/assets/js/plugin/plugin.js"></script>
    <script src="v2/assets/js/main.js"></script>
</body>

</html>
