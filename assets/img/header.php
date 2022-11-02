<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
if (empty($pageTitle)) {
    $pageTitle = 'Starter Title';
}
if (empty($pageDescription)) {
    $pageDescription = 'Starter page description - 160 characters';
}
?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- SEO  -->
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "address": [{
                "@type": "PostalAddress",
                "addressLocality": "Borkowo",
                "postalCode": "83-330",
                "streetAddress": "Karlikowska 2",
                "addressCountry": {
                    "@type": "country",
                    "name": "PL"
                }
            }],
            "name": "Starter name",
            "knowsLanguage": ["English", "Polish"],
            "image": "http://starter.web/assets/img/starter-logo.jpg",
            "logo": "http://starter.web/assets/img/starter-logo.jpg",
            "url": "http://starter.web/",
            "priceRange": "$"
        }
    </script>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png" />
    <link rel="manifest" href="/assets/icons/site.webmanifest" />
    <link rel="mask-icon" href="/assets/icons/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#232c29" />
    <meta name="theme-color" content="#232c29" />
    <!-- CSS  -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/fonts/icomoon/icomoon.css" />
    <!-- FONTS  -->
    <link rel="stylesheet" href="https://use.typekit.net/tkt8tlg.css" />
    <!-- SCRIPTS  -->
    <script src="./assets/js/scripts.js"></script>
    <script src="./assets/js/gsap.min.js"></script>
    <script src="./assets/js/ScrollTrigger.min.js"></script>
    <script src="./assets/js/ScrollToPlugin.min.js"></script>
    <!-- If you dont need GSAP, delete this files -->
</head>

<body>
    <!-- HEADER  -->
    <header class="main-header">
        <div class="container">
            <div class="menu-wrapper">
                <div class="top-part">
                    <div class="branding-wrapper">
                        <a class="logo" href="/">
                            <span class="icon-logo"></span>
                            <span class="icon-sygnet"></span>
                        </a>
                    </div>
                    <div class="hamburger-wrapper">
                        <div id="navbar-toggler" aria-expanded="false" aria-label="Toggle navigation" class="hamburger hamburger--spin js-hamburger ">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bot-part">
                    <nav class="nav-primary">
                        <div class="menu-primary-menu-container">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item <?= ($activePage == 'menu') ? 'active' : ''; ?>">
                                    <a href="/menu">Menu</a>
                                </li>
                                <li class="menu-item <?= ($activePage == 'o-restauracji') ? 'active' : ''; ?>">
                                    <a href="/o-restauracji">O restauracji</a>
                                </li>
                                <li class="menu-item <?= ($activePage == 'oferta') ? 'active' : ''; ?>"><a href="/oferta">Oferta</a></li>
                                <li class="menu-item <?= ($activePage == 'kontakt') ? 'active' : ''; ?>"><a href="/kontakt">Kontakt</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- / HEADER  -->