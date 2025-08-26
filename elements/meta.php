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
    <!-- <link rel="shortcut icon" href="/images/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="/images/favicon/favicon-48x48.png">
    <link rel="manifest" href="/images/favicon/manifest.json">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#fff">
    <meta name="application-name" content="craftcms-tailwind">
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="/images/favicon/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="/images/favicon/apple-touch-icon-1024x1024.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="craftcms-tailwind">
    <meta name="msapplication-TileColor" content="#FFF">
    <meta name="msapplication-TileImage" content="/images/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
    <title>Web Design Manchester | Web Design Agency | Scalify</title>
    <script type="text/javascript" async src="./scripts/analytics.js"></script>
    <script type="text/javascript" async src="/gtag/js"></script>
    <script type="text/javascript" async src="/gtag/js"></script>
    <script type="text/javascript" async src="./scripts/analytics.js"></script>
    <script type="text/javascript" async src="/gtag/js"></script>
    <script async src="./scripts/gtm.js"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments)
    };
    gtag('js', new Date());
    gtag('config', 'UA-25433005-15', {
        'send_page_view': true,
        'anonymize_ip': false,
        'link_attribution': false,
        'allow_display_features': false
    });
    gtag('config', 'AW-1011547503', {
        'send_page_view': true
    });
    </script>
    <script>
    dl = [];
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dl', 'GTM-WV3N2X');
    </script>
    <meta name="generator" content="SEOmatic">
    <meta name="description"
        content="An award-winning Web Design Agency in Manchester, UK who specialise in Branding, Web Design, Craft CMS, eCommerce and Organic SEO.">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta name="robots" content="all">
    <meta content="128076510545259" property="fb:profile_id">
    <meta content="en_GB" property="og:locale">
    <meta content="Scalify" property="og:site_name">
    <meta content="website" property="og:type">
    <meta content="https://scalify.ae/" property="og:url">
    <meta content="Web Design Manchester | Web Design Agency" property="og:title">
    <meta
        content="An award-winning Web Design Agency in Manchester, UK who specialise in Branding, Web Design, Craft CMS, eCommerce and Organic SEO."
        property="og:description">
    <meta
        content="https://made-byShape.transforms.svdcdn.com/production/uploads/images/Open-Graph/madebyScalify-home.jpg?w=1200&h=630&q=82&auto=format&fit=crop&dm=1722518913&s=e456c7a65aa7feded9f0be73391573f6"
        property="og:image">
    <meta content="1200" property="og:image:width">
    <meta content="630" property="og:image:height">
    <meta
        content="Born in 2010, Scalify is an Award-Winning Web Design Agency based in Manchester specialising in Web Design , Branding , eCommerce , Digital Marketing and Organic SEO. So, if you need a professional Manchester Web Design Agency to support you with your branding or website design, get in touch with us today. Why our studio outside of Manchester works for us Types of clients we want to work with Why I chose to work for a small design agency"
        property="og:image:alt">
    <meta content="https://www.behance.net/madebyScalify" property="og:see_also">
    <meta content="https://instagram.com/madebyScalify" property="og:see_also">
    <meta content="https://github.com/madebyScalify/" property="og:see_also">
    <meta content="https://twitter.com/madebyScalify" property="og:see_also">
    <meta content="https://www.linkedin.com/company/madebyScalify/mycompany/" property="og:see_also">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@madebyScalify">
    <meta name="twitter:creator" content="@madebyScalify">
    <meta name="twitter:title" content="Web Design Manchester | Web Design Agency">
    <meta name="twitter:description"
        content="An award-winning Web Design Agency in Manchester, UK who specialise in Branding, Web Design, Craft CMS, eCommerce and Organic SEO.">
    <meta name="twitter:image"
        content="https://made-byShape.transforms.svdcdn.com/production/uploads/images/Open-Graph/madebyScalify-home.jpg?w=1200&h=630&q=82&auto=format&fit=crop&dm=1722518913&s=e456c7a65aa7feded9f0be73391573f6">
    <meta name="twitter:image:width" content="800">
    <meta name="twitter:image:height" content="418">
    <meta name="twitter:image:alt"
        content="Born in 2010, Scalify is an Award-Winning Web Design Agency based in Manchester specialising in Web Design , Branding , eCommerce , Digital Marketing and Organic SEO. So, if you need a professional Manchester Web Design Agency to support you with your branding or website design, get in touch with us today. Why our studio outside of Manchester works for us Types of clients we want to work with Why I chose to work for a small design agency">
    <meta name="google-site-verification" content="ZikbnV1IVlAqjvGIKMS0UAdV3L8g33An2KBDBFej2PE"> -->
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