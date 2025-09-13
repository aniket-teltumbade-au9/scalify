<?php

$metaData = [
    '/' => [ // Corrected: Removed trailing space from the key
        'meta' => [
            'title' => 'Scalify – E-Commerce Fulfillment Solutions and Comprehensive Digital Commerce Solutions for the GCC Region',
            'generator' => 'SEOmatic',
            'description' => 'Scalify offers integrated digital commerce services, including technology, inventory management, logistics, marketing, and customer support, enabling businesses to efficiently expand across the GCC markets with advanced fulfillment and real-time analytics',
            'referrer' => 'no-referrer-when-downgrade',
            'robots' => 'all',
            'keywords' => 'Scalify, e-commerce solutions, digital commerce, GCC e-commerce, inventory management, logistics solutions, fulfillment services, online marketplace, cross-border e-commerce, order management, AI-driven analytics, last-mile delivery, customer support services, digital marketing for e-commerce, Shopify solutions, UAE e-commerce, Saudi Arabia e-commerce, automated fulfillment, real-time analytics, scalable e-commerce platform',
            // 'google-site-verification' => 'ZikbnV1IVlAqjvGIKMS0UAdV3L8g33An2PE',
        ],
        'fb' => [
            'profile_id' => '61570405543693',
        ],
        'og' => [
            'locale' => 'en_AE',
            'site_name' => 'Scalify',
            'type' => 'website',
            'url' => 'https://scalify.ae/',
            'title' => 'Warehouse Service Provider Agency UAE | Scalify.ae',
            'description' => 'Scalify offers integrated digital commerce services, including technology, inventory management, logistics, marketing, and customer support, enabling businesses to efficiently expand across the GCC markets with advanced fulfillment and real-time analytics',
            'image' => 'https://scalify.ae/assets/images/og-image.jpg',
            'image:width' => '1200',
            'image:height' => '630',
            'image:alt' => 'Scalify.ae provides expert warehouse services, including storage, order fulfillment, and distribution, for businesses in the UAE and GCC.',
            'see_also' => [
                'https://www.linkedin.com/company/scalifyuae/',
                'https://www.facebook.com/scalifyuae',
                'https://www.instagram.com/scalify.uae/',
            ],
        ],
        'twitter' => [
            'card' => 'summary_large_image',
            'site' => '@scalifyae',
            'creator' => '@scalifyae',
            'title' => 'Warehouse Service Provider Agency UAE | Scalify.ae',
            'description' => 'Scalify offers integrated digital commerce services, including technology, inventory management, logistics, marketing, and customer support, enabling businesses to efficiently expand across the GCC markets with advanced fulfillment and real-time analytics',
            'image' => 'https://scalify.ae/assets/images/twitter-image.jpg',
            'image:width' => '800',
            'image:height' => '418',
            'image:alt' => 'Scalify.ae offers professional warehouse and logistics services in the United Arab Emirates.',
        ],
        'link' => [
            'canonical' => 'https://scalify.ae/',
            'home' => 'https://scalify.ae/',
            'author' => 'https://scalify.ae/humans.txt',
        ],
    ],
    '/about' => [ // Corrected: Removed trailing space
        'meta' => [
            'title' => 'Scalify – E-Commerce Fulfillment Solutions and Comprehensive Digital Commerce Solutions for the GCC Region',
            'description' => 'Scalify offers integrated digital commerce services, including technology, inventory management, logistics, marketing, and customer support, enabling businesses to efficiently expand across the GCC markets with advanced fulfillment and real-time analytics',
            'keywords' => 'Scalify, e-commerce solutions, digital commerce, GCC e-commerce, inventory management, logistics solutions, fulfillment services, online marketplace, cross-border e-commerce, order management, AI-driven analytics, last-mile delivery, customer support services, digital marketing for e-commerce, Shopify solutions, UAE e-commerce, Saudi Arabia e-commerce, automated fulfillment, real-time analytics, scalable e-commerce platform',
        ],
        'og' => [
            'title' => 'About Us | Scalify.ae',
            'url' => 'https://scalify.ae/about',
        ],
        'link' => [
            'canonical' => 'https://scalify.ae/about',
        ],
    ],
    '/services' => [ // Corrected: Removed trailing space
        'meta' => [
            'title' => 'Scalify – E-Commerce Fulfillment Solutions and Comprehensive Digital Commerce Solutions for the GCC Region',
            'description' => 'Explore the full range of warehouse and logistics services offered by Scalify.ae, including storage, fulfillment, and distribution.',
            'keywords' => 'Scalify, e-commerce solutions, digital commerce, GCC e-commerce, inventory management, logistics solutions, fulfillment services, online marketplace, cross-border e-commerce, order management, AI-driven analytics, last-mile delivery, customer support services, digital marketing for e-commerce, Shopify solutions, UAE e-commerce, Saudi Arabia e-commerce, automated fulfillment, real-time analytics, scalable e-commerce platform',
        ],
        'og' => [
            'title' => 'Our Services | Scalify.ae',
            'url' => 'https://scalify.ae/services',
        ],
        'link' => [
            'canonical' => 'https://scalify.ae/services',
        ],
    ],
    '/contact' => [ // Corrected: Removed trailing space
        'meta' => [
            'title' => 'Scalify – E-Commerce Fulfillment Solutions and Comprehensive Digital Commerce Solutions for the GCC Region',
            'description' => 'Scalify offers integrated digital commerce services, including technology, inventory management, logistics, marketing, and customer support, enabling businesses to efficiently expand across the GCC markets with advanced fulfillment and real-time analytics',
            'keywords' => 'Scalify, e-commerce solutions, digital commerce, GCC e-commerce, inventory management, logistics solutions, fulfillment services, online marketplace, cross-border e-commerce, order management, AI-driven analytics, last-mile delivery, customer support services, digital marketing for e-commerce, Shopify solutions, UAE e-commerce, Saudi Arabia e-commerce, automated fulfillment, real-time analytics, scalable e-commerce platform',
        ],
        'og' => [
            'title' => 'Contact Us | Scalify.ae',
            'url' => 'https://scalify.ae/contact',
        ],
        'link' => [
            'canonical' => 'https://scalify.ae/contact',
        ],
    ],
];

/**
 * Generates comprehensive HTML meta tags based on the page path using a lookup array.
 *
 * @param string $pagePath The path of the current page (e.g., '/', '/about').
 * @return void
 */
function generateMetaTags(string $pagePath): void
{
    global $metaData; // Use the global keyword to access the array

    // Corrected: Directly access the array using the full path
    $pageData = $metaData[$pagePath] ?? null;

    if ($pageData) {
        // ... (rest of the code for generating tags is correct)
        // Generate standard <meta> tags
        if (isset($pageData['meta']['title'])) {
            echo "<title>" . $pageData['meta']['title'] . "</title>\n";
        }
        if (isset($pageData['meta'])) {
            foreach ($pageData['meta'] as $name => $content) {
                echo "<meta name=\"$name\" content=\"" . htmlspecialchars($content) . "\">\n";
            }
        }

        // Generate <meta> tags with the 'property' attribute (e.g., og:, fb:)
        $property_tags = ['fb', 'og'];
        foreach ($property_tags as $prefix) {
            if (isset($pageData[$prefix])) {
                foreach ($pageData[$prefix] as $property => $content) {
                    // Handle 'see_also' which is an array
                    if (is_array($content)) {
                        foreach ($content as $item) {
                            echo "<meta property=\"$prefix:$property\" content=\"" . htmlspecialchars($item) . "\">\n";
                        }
                    } else {
                        echo "<meta property=\"$prefix:$property\" content=\"" . htmlspecialchars($content) . "\">\n";
                    }
                }
            }
        }

        // Generate <meta> tags for Twitter
        if (isset($pageData['twitter'])) {
            foreach ($pageData['twitter'] as $name => $content) {
                echo "<meta name=\"twitter:$name\" content=\"" . htmlspecialchars($content) . "\">\n";
            }
        }

        // Generate <link> tags
        if (isset($pageData['link'])) {
            foreach ($pageData['link'] as $rel => $href) {
                $type = ($rel === 'author') ? ' type="text/plain"' : '';
                echo "<link href=\"" . htmlspecialchars($href) . "\" rel=\"$rel\"$type>\n";
            }
        }
    }
}
// --------------------------------------------------------------------------------------------------------------------------------------------------------
// THE PART BELOW GOES ON YOUR PAGE (e.g., index.php, about.php)
// --------------------------------------------------------------------------------------------------------------------------------------------------------

// Determine the page path
// Define the project's subfolder name for local development
// define('PROJECT_SUBFOLDER', '/scalify.ae');

// Get the full request URI
$request_uri = $_SERVER['REQUEST_URI'];

// Check if we are on localhost
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    // If on localhost, remove the subfolder from the URI
    $currentPath = str_replace(PROJECT_SUBFOLDER, '', $request_uri);
} else {
    // If on a live server, the URI is already the correct path
    $currentPath = $request_uri;
}

// Clean up the path: remove query string and trailing slashes
$currentPath = parse_url($currentPath, PHP_URL_PATH);
$currentPath = rtrim($currentPath, '/');

// Handle the homepage path correctly
if ($currentPath === '') {
    $currentPath = '/';
}

// Now $currentPath will be correct for both local and production
// e.g., on local it will be '/about' instead of '/scalify.ae/about'
// on production it will also be '/about'
generateMetaTags($currentPath);
