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
    <style>
        .banner-section {
            background-image: url({{ asset('images/banners..jpg') }}) !important;
            background-repeat: no-repeat;
            background-size: 100% 101%;
            padding: 230px 0 150px;
        }
    </style>
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

    <script>
        // Attendre que le DOM soit chargé
        document.addEventListener("DOMContentLoaded", function() {
            // Récupérer les liens du menu
            const menuLinks = document.querySelectorAll("nav ul li a");

            // Fonction pour mettre à jour la classe active du menu
            function updateActiveLink() {
                const scrollPosition = window.scrollY;

                // Parcourir chaque lien du menu pour vérifier quelle section est visible
                menuLinks.forEach(link => {
                    const sectionId = link.getAttribute("href");
                    const section = document.querySelector(sectionId);

                    // Vérifier si la section est visible dans la fenêtre de visualisation
                    if (section.offsetTop <= scrollPosition && section.offsetTop + section.offsetHeight > scrollPosition) {
                        // Ajouter la classe active au lien du menu correspondant
                        link.classList.add("active");
                    } else {
                        // Supprimer la classe active si la section n'est pas visible
                        link.classList.remove("active");
                    }
                });
            }

            // Mettre à jour la classe active du menu lors du défilement
            window.addEventListener("scroll", updateActiveLink);
        });
    </script>
</body>

</html>
