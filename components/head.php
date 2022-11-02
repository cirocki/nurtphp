<?php
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

<link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
<link rel="manifest" href="/assets/icons/site.webmanifest">
<link rel="mask-icon" href="/assets/icons/safari-pinned-tab.svg" color="#525750">
<meta name="msapplication-TileColor" content="#ddded0">
<meta name="theme-color" content="#ddded0">


    <!-- CSS  -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/fonts/icomoon/icomoon.css" />
    <!-- FONTS  -->
    <link rel="stylesheet" href="https://use.typekit.net/lpv8xig.css">
    <!-- SCRIPTS  -->
    <script src="./assets/js/scripts.js"></script>
    <script src="./assets/js/gsap.min.js"></script>
    <script src="./assets/js/ScrollTrigger.min.js"></script>
    <script src="./assets/js/ScrollToPlugin.min.js"></script>
    <!-- If you dont need GSAP, delete this files -->
</head>

<body>
