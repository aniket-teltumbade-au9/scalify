<?php include "config.php"; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="cf-2fa-verify" content="9cb044bdd079b2a">

    <link rel="preload" href="<?php echo BASE_URL; ?>assets/fonts/OldschoolGrotesk_W-Light.woff2" as="font"
        crossorigin="">
    <link rel="preload" href="<?php echo BASE_URL; ?>assets/fonts/OldschoolGrotesk_W-Regular.woff2" as="font"
        crossorigin="">
    <link rel="preload" href="<?php echo BASE_URL; ?>assets/fonts/OldschoolGrotesk_W-Book.woff2" as="font"
        crossorigin="">
    <style>
    [x-cloak] {
        display: none
    }
    </style>

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/main.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/styles/andyslider.css">
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>assets/images/favicons/favicon-96x96.png"
        sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo BASE_URL; ?>assets/images/favicons/favicon.svg" />
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo BASE_URL; ?>assets/images/favicons/apple-touch-icon.png" />
    <link rel="manifest" href="<?php echo BASE_URL; ?>assets/images/favicons/site.webmanifest" />

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#f05223">
    <meta name="application-name" content="craftcms-tailwind">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4Y5JE2ZX7C"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-4Y5JE2ZX7C');
    </script>
    <!-- page wise seo -->
    <?php include './elements/metainfo.php'; ?>
    <link href="https://scalify.ae/" rel="canonical">
    <link href="https://scalify.ae/" rel="home">
    <link type="text/plain" href="https://scalify.ae/humans.txt" rel="author">
    <script>
    if (localStorage.darkMode === undefined) {

        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {

            localStorage.darkMode = 'true';
            document.documentElement.classList.add('dark');

        } else {

            localStorage.darkMode = 'false';

        }

    } else {

        if (localStorage.darkMode === 'true') {

            document.documentElement.classList.add('dark');

        } else {

            document.documentElement.classList.remove('dark');

        }

    };
    </script>
    <!-- <script type="text/javascript" async src="/pagead/viewthroughconversion/1011547503/"></script> -->
</head>