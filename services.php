<!doctype html>
<html>

<?php include './elements/meta.php'; ?>

<body class="bg-white | dark:bg-grayDark-600" x-data="app()" x-init="baseInit(), gaEvents()">
    <?php
// services.php - Dynamic route handler for service pages
// include "elements/info.php"; // Assuming this file contains $services_list
include './elements/header.php';

// Get the requested service from URL parameter

if (isset($_GET['service'])) {
    $service_param = $_GET['service'];
    echo "<script>console.log('$service_param')</script>";
    // Sanitize the route parameter
    $service_param = strtolower(trim($service_param));
    $service_param = preg_replace('/[^a-z0-9-_]/', '', $service_param);

// Define a default service to prevent errors
    $default_service = [
        'name' => 'Our Services',
        'tagline_short' => 'Comprehensive business solutions in UAE',
        'slug' => 'our-services',
        'brief_description' => 'Explore our wide range of professional services designed to help your business succeed in the UAE market.',
        'capabilities' => [
            [
                'short_title' => 'Company Registration',
                'short_description' => 'Streamlined legal registration to get your business officially recognized.',
            ],
            [
                'short_title' => 'Regulatory Compliance',
                'short_description' => 'Ensure adherence to all local and industry-specific laws and standards.',
            ],
            [
                'short_title' => 'Infrastructure Planning',
                'short_description' => 'Strategic layout and facility design for maximum efficiency.',
            ],
            [
                'short_title' => 'Workforce Recruitment',
                'short_description' => 'Skilled labor sourcing and training tailored to warehouse needs.',
            ],
            [
                'short_title' => 'Financial Structuring',
                'short_description' => 'Budgeting and financial planning to optimize operational costs.',
            ],
        ],
        'image' => 'vision.jpeg',
        'tagline_long' => 'Find the perfect solution for your business needs.',
    ];

// Use array_filter with 'use' and get the single matching array
    $cserv = array_filter($services_list, function ($array) use ($service_param) {
        return $array['slug'] === $service_param;
    });

// Get the first element of the filtered array, or false if not found
    $current_service = reset($cserv);

// Determine which service to display
    if ($current_service) {
        // A matching service was found
        $page_title = $current_service['name'];
    } else {
        // No matching service found, use the default
        $current_service = $default_service;
        $page_title = $default_service['name'];
    }?>
    <div class="w-full pt-20 pb-10 | lg:pt-32 lg:pb-16 | xl:pt-40">
        <div class="px-2 | sm:px-6 | xl:px-12 | 2xl:px-20 | 3xl:px-40 | 4xl:px-60">
            <div class="w-full flex flex-wrap justify-between">
                <div class="px-2 | lg:px-3 | xl:px-4 w-full | lg:w-9/16">
                    <div class="flex flex-col space-y-3 | lg:space-y-5 items-start">
                        <div class="inline-flex items-center space-x-2  ">
                            <div class="bg-gray-600 | dark:bg-grayDark-100 w-1.5 h-1.5 rounded-full"></div>
                            <div class="font-light text-sm | lg:text-base text-gray-600 | dark:text-grayDark-100">
                                <?php echo $current_service['name']; ?>
                            </div>
                        </div>
                        <h1
                            class=" text-2-5xl | lg:text-4vw | 4xl:text-3.5vw font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-none text-balance lg:pr-20 ">
                            <?php echo $current_service['tagline_short']; ?></h1>
                    </div>
                </div>
                <div class="px-2 | lg:px-3 | xl:px-4 w-full | lg:w-7/16 mt-5 | lg:mt-10">
                    <div class="w-full relative ">
                        <p
                            class="text-base | xl:text-md text-gray-600 dark:text-grayDark-200 font-sans-primary relative z-10 text-pretty font-light leading-7  mb-6">
                            <?php echo $current_service["brief_description"]; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class=" w-full py-0">
            <div class="px-2 | sm:px-6 | xl:px-12 | 2xl:px-20 | 3xl:px-40 | 4xl:px-60">
                <div class="px-2 | lg:px-3 | xl:px-4 w-full flex flex-wrap relative">
                    <div
                        class="absolute top-0 left0 z-20 bg-white pb-4 pr-4 rounded-br-2xl | lg:rounded-br-3xl lg:pb-6 lg:pr-8 | dark:bg-grayDark-600">
                        <svg id="Layer_1"
                            class="w-10 h-10 | lg:w-12 lg:h-12 text-white fill-current absolute -top-px right-px transform translate-x-full dark:text-grayDark-600"
                            version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100"
                            xml:space="preserve">
                            <path d="M51.9 0v1.9c-27.6 0-50 22.4-50 50H0V0h51.9z"></path>
                        </svg><svg id="Layer_1"
                            class="w-10 h-10 | lg:w-12 lg:h-12 text-white fill-current absolute bottom-px -left-px transform translate-y-full dark:text-grayDark-600"
                            version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 100 100"
                            xml:space="preserve">
                            <path d="M51.9 0v1.9c-27.6 0-50 22.4-50 50H0V0h51.9z"></path>
                        </svg>
                        <div class="relative group inline-flex items-center" x-data="{ hover: false }"
                            x-on:mouseenter="hover = true" x-on:mouseleave="hover = false">
                            <svg width="0" height="0" class="absolute hidden" color-interpolation-filters="sRGB">
                                <defs>
                                    <filter id="buttonFilter">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur">
                                        </feGaussianBlur>
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="buttonFilter">
                                        </feColorMatrix>
                                        <feComposite in="SourceGraphic" in2="buttonFilter" operator="atop">
                                        </feComposite>
                                        <feBlend in="SourceGraphic" in2="buttonFilter"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                            <a href="#448285" class="inline-flex relative group outline-none  | focus:outline-none "
                                style="filter: url(#buttonFilter);">
                                <div
                                    class="w-auto inline-flex items-center justify-center relative leading-tight shadow-none overflow-hidden rounded-full border-default bg-gray-600 text-white | dark:bg-grayDark-400 dark:text-grayDark-100 py-2 px-5">
                                    <div class="relative inline-flex top-px flex-shrink-0">
                                        <div>
                                            Tell me more</div>
                                    </div>
                                </div>
                                <div
                                    class="bg-gray-600 | dark:bg-grayDark-400 flex-shrink-0 overflow-hidden flex items-center justify-center -ml-1 rounded-full transform transition-transform | w-9 h-9 | xl:group-hover:translate-x-3  xl:group-hover:rotate-45 | js-button-icon">
                                </div>
                            </a>
                            <div
                                class="w-9 h-9 absolute top-0 right-0 flex items-center justify-center z-20 transition-transform transform w-9 h-9 | xl:group-hover:translate-x-3  xl:group-hover:rotate-45 || js-button-arrow">
                                <div class="relative overflow-hidden text-white | dark:text-grayDark-100">
                                    <div
                                        class="relative top-0 left-0 transition-transform transform || js-button-arrow-icon-primary ">
                                        <svg class="w-3 h-3 fill-current transform rotate-90"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute top-0 left-0 transition-transform transform translate-y-full -translate-x-full || js-button-arrow-icon-secondary ">
                                        <svg class="w-3 h-3 fill-current transform rotate-90"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full relative z-10 overflow-hidden rounded-2xl transform-gpu bg-gray-50 | dark:bg-grayDark-500 | lg:rounded-3xl h-screen-fix-70">
                        <picture>
                            <?php if (!empty($current_service['image'])): ?>
                            <img src="<?php echo BASE_URL . 'assets/images/services/' . htmlspecialchars($current_service['image']); ?>"
                                alt="<?php echo htmlspecialchars($current_service['name']); ?>"
                                class="w-full absolute top-0 left-0 w-full h-full object-cover rounded-2xl"
                                loading="lazy">
                            <?php endif; ?>
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div id="448285"></div>
        <div class="w-full py-20 | lg:py-24 | 2xl:py-32 | 4xl:py-40">
            <!-- <div class="px-2 | sm:px-6 | xl:px-12 | 2xl:px-20 | 3xl:px-40 | 4xl:px-60">
                <div class="w-full flex flex-wrap justify-between">
                    <div class="px-2 | lg:px-3 | xl:px-4 relative w-full mb-10 | lg:mb-0 lg:w-9/16 | 3xl:w-10/16">
                        <div class="flex flex-col space-y-3 | lg:space-y-5 items-start">
                            <div class="inline-flex items-center space-x-2 w-auto | lg:absolute lg:top-7 lg:left-4 ">
                                <div class="bg-gray-600 | dark:bg-grayDark-100 w-1.5 h-1.5 rounded-full"></div>
                                <div class="font-light text-sm | lg:text-base text-gray-600 | dark:text-grayDark-100">
                                    Web Design
                                </div>
                            </div>
                            <h2
                                class="text-2-5xl | lg:text-3.5vw | 4xl:text-3vw font-sans-primary tracking-tight text-gray-600  | dark:text-grayDark-100 leading-none text-balance lg:indent-48 mb-5">
                                Are you a startup brand, well established company, in the UAE or GCC? We provide
                                services to a range of
                                clients.</h2>
                            <div class="relative group inline-flex items-center" x-data="{ hover: false }"
                                x-on:mouseenter="hover = true" x-on:mouseleave="hover = false">
                                <svg width="0" height="0" class="absolute hidden" color-interpolation-filters="sRGB">
                                    <defs>
                                        <filter id="buttonFilter">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur">
                                            </feGaussianBlur>
                                            <feColorMatrix in="blur" mode="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                                result="buttonFilter">
                                            </feColorMatrix>
                                            <feComposite in="SourceGraphic" in2="buttonFilter" operator="atop">
                                            </feComposite>
                                            <feBlend in="SourceGraphic" in2="buttonFilter"></feBlend>
                                        </filter>
                                    </defs>
                                </svg>
                                <a href="<?php echo BASE_URL; ?>/about/"
                                    class="inline-flex relative group outline-none  | focus:outline-none "
                                    style="filter: url(#buttonFilter);">
                                    <div
                                        class="w-auto inline-flex items-center justify-center relative leading-tight shadow-none overflow-hidden rounded-full border-default bg-primary-600 text-gray-600 py-2 px-5">
                                        <div class="relative inline-flex top-px flex-shrink-0">
                                            <div>
                                                About Scalify</div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-primary-600 flex-shrink-0 overflow-hidden flex items-center justify-center -ml-1 rounded-full transform transition-transform | w-9 h-9 | xl:group-hover:translate-x-3  xl:group-hover:rotate-45 | js-button-icon">
                                    </div>
                                </a>
                                <div
                                    class="w-9 h-9 absolute top-0 right-0 flex items-center justify-center z-20 transition-transform transform w-9 h-9 | xl:group-hover:translate-x-3  xl:group-hover:rotate-45 || js-button-arrow">
                                    <div class="relative overflow-hidden text-gray-600">
                                        <div
                                            class="relative top-0 left-0 transition-transform transform || js-button-arrow-icon-primary ">
                                            <svg class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div
                                            class="absolute top-0 left-0 transition-transform transform translate-y-full -translate-x-full || js-button-arrow-icon-secondary ">
                                            <svg class="w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512">
                                                <path
                                                    d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2 | lg:px-3 | xl:px-4 w-full | lg:w-4/16">
                        <div class="text-sm font-light text-gray-400 mb-5 | 4xl:text-sm | dark:text-gray-200">
                            Our <?php echo $current_service['name']; ?> Capabilities
                        </div>
                        <div class="w-full">
                            <?php foreach ($current_service['capabilities'] as $capability) {?>
                            <div class="w-full mb-3">
                                <div class="flex space-x-5">
                                    <div
                                        class="w-5 h-5 flex-shrink-0 mt-px rounded-full flex items-center justify-center bg-gray-600 | dark:bg-primary-600 | 4xl:w-6 4xl:h-6">
                                        <svg class="w-3 h-3 fill-current | 4xl:w-3.5 4xl:h-3.5 text-white dark:text-grayDark-600"
                                            width="14" height="16" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512">
                                            <path
                                                d="M447.9 142.5l-23.2 22L181 395.3l-22 20.8-22-20.8L23.2 287.6 0 265.6l44-46.5 23.2 22L159 328l221.7-210 23.2-22 44 46.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="leading-snug font-light text-gray-600 | dark:text-grayDark-100">
                                        <?php echo $capability['short_title']; ?>
                                    </div>
                                </div>
                            </div>
                            <?php }?>

                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <?php
} else {
    include "./service.php";
}
// echo var_dump($current_service);
// Include header
include './elements/footer.php';
?>

    <script src="./scripts/player.js"></script>
    <iframe allow="join-ad-interest-group" data-tagging-id="AW-1011547503" data-load-time="1755098995722" height="0"
        width="0"
        src="https://td.doubleclick.net/td/rul/1011547503?random=1755098995655&cv=11&fst=1755098995655&fmt=3&bg=ffffff&guid=ON&async=1&en=gtag.config&gtm=45be5881v9216784696za200xec&gcd=13l3l3l3l1l1&dma=0&tag_exp=101509157~103116026~103200004~103233427~104527906~104528500~104684208~104684211~104948812~104948813~105033763~105033765~105103161~105103163~105113532~105231383~105231385&u_w=1536&u_h=864&url=https%3A%2F%2Fscalify.ae%2F&hn=www.googleadservices.com&frm=0&tiba=Web%20Design%20Manchester%20%7C%20Web%20Design%20Agency%20%7C%20MadeByScalify&npa=0&pscdl=label_only_3&auid=1499034477.1754144169&uaa=x86&uab=64&uafvl=Not)A%253BBrand%3B8.0.0.0%7CChromium%3B138.0.7204.185%7CGoogle%2520Chrome%3B138.0.7204.185&uamb=0&uam=&uap=Windows&uapv=10.0.0&uaw=0&fledge=1&data=event%3Dgtag.config"
        style="display: none; visibility: hidden;"></iframe><iframe height="0" width="0"
        style="display: none; visibility: hidden;"></iframe>
    <script>
    window.SERVD_CSRF_TOKEN_NAME = "CRAFT_CSRF_TOKEN";

    function injectCSRF() {
        var inputs = document.getElementsByName(window.SERVD_CSRF_TOKEN_NAME);
        var len = inputs.length;
        if (len > 0) {
            var xhr = new XMLHttpRequest();
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status <= 299) {
                    var tokenInfo = JSON.parse(this.responseText);
                    window.csrfTokenValue = tokenInfo.token;
                    window.csrfTokenName = tokenInfo.name;
                    for (var i = 0; i < len; i++) {
                        inputs[i].setAttribute("value", tokenInfo.token);
                    }
                    window.dispatchEvent(new CustomEvent("servd.csrfloaded", {
                        detail: {
                            token: tokenInfo.token
                        }
                    }));
                } else {
                    window.dispatchEvent(new CustomEvent("servd.csrffailed"));
                }

            };
            xhr.open("GET", "https://scalify.ae/index.php/actions/servd-asset-storage/csrf-token/get-token/");
            xhr.send();
        }
    }
    setTimeout(function() {
        if (!window.SERVD_MANUAL_CSRF_LOAD) {
            injectCSRF();
        }
    }, 50);
    document.addEventListener('alpine:init', () => {
        Alpine.data('cursor', () => ({
            icon: 'arrow-up-right',
            x: 0,
            y: 0,
            endX: (window.innerWidth / 2),
            endY: (window.innerHeight / 2),
            cursorVisible: true,
            cursorEnlarged: false,
            cursorHovering: false,
            cursorDragging: false,
            cursor: document.querySelector('.js-cursor'),
            dragCursor: document.querySelector('.js-cursor-drag'),
            init() {

                _self = this;

                _self.dotSize = _self.cursor.offsetWidth;

                _self.setupEventListeners();

            },
            setupEventListeners() {

                _self = this;

                // Drag

                document.querySelectorAll('.js-cursor-trigger-drag').forEach((element) => {

                    element.addEventListener('mouseover', function() {

                        var icon = element.getAttribute('data-icon');

                        if (icon) {
                            _self.icon = icon;
                        } else {
                            _self.icon = 'arrow-up-right';
                        }

                        _self.cursorDragging = true;
                        _self.cursorEnlarged = true;

                        _self.toggleCursorDrag();

                    });

                    element.addEventListener('mouseout', function() {

                        _self.cursorDragging = false;
                        _self.cursorEnlarged = false;

                        _self.toggleCursorDrag();

                    });

                });

                // Position

                document.addEventListener('pointermove', function(event) {

                    _self.endX = event.clientX;
                    _self.endY = event.clientY;

                    _self.cursor.style.top = _self.endY + 'px';
                    _self.cursor.style.left = _self.endX + 'px';

                });

            },
            toggleCursorDrag() {

                _self = this;

                if (_self.cursorDragging) {

                    _self.dragCursor.classList.remove('scale-0');
                    // _self.cursor.classList.remove('opacity-0');
                    document.body.classList.add('no-cursor');

                } else {

                    _self.dragCursor.classList.add('scale-0');
                    // _self.cursor.classList.add('opacity-0');
                    document.body.classList.remove('no-cursor');

                }

            },
        }))
    });
    document.addEventListener('alpine:init', () => {
        Alpine.data('modal423709', () => ({
            visible: false,
            setupModal(id) {

                // Prevent keys from interferring with the video

                navigator.mediaSession.setActionHandler('play', function() {});
                navigator.mediaSession.setActionHandler('pause', function() {});
                navigator.mediaSession.setActionHandler('seekbackward', function() {});
                navigator.mediaSession.setActionHandler('seekforward', function() {});
                navigator.mediaSession.setActionHandler('previoustrack', function() {});
                navigator.mediaSession.setActionHandler('nexttrack', function() {});

                // Get video elements

                const video = document.querySelector(`.js-modal-video-${id}`);
                const videoProgress = document.querySelector(`.js-modal-video-progress-${id}`);

                const videoPlayPause = document.querySelector(`.js-modal-video-play-pause-${id}`);
                const videoSound = document.querySelector(`.js-modal-video-sound-${id}`);

                const videoPlayIcon = document.querySelector(`.js-modal-video-play-icon-${id}`);
                const videoPauseIcon = document.querySelector(`.js-modal-video-pause-icon-${id}`);

                const videoVolumeOnIcon = document.querySelector(
                    `.js-modal-video-volume-on-icon-${id}`);
                const videoVolumeOffIcon = document.querySelector(
                    `.js-modal-video-volume-off-icon-${id}`);

                // Video controls

                if (video) {

                    if (video.tagName == 'IFRAME') {

                        const player = new Vimeo.Player(video);

                        // Video controls

                        videoSound.addEventListener('click', (event) => {

                            player.getVolume().then(function(volume) {

                                if (videoVolumeOnIcon.classList.contains(
                                        'hidden')) {

                                    player.setVolume(1);
                                    videoVolumeOnIcon.classList.remove('hidden');
                                    videoVolumeOffIcon.classList.add('hidden');

                                } else {

                                    player.setVolume(0);
                                    videoVolumeOnIcon.classList.add('hidden');
                                    videoVolumeOffIcon.classList.remove('hidden');

                                }

                            });

                            event.preventDefault();

                        });

                        videoPlayPause.addEventListener('click', (event) => {

                            player.getPaused().then(function(paused) {

                                if (paused) {

                                    player.play();
                                    videoPlayIcon.classList.add('hidden');
                                    videoPauseIcon.classList.remove('hidden');

                                } else {

                                    player.pause();
                                    videoPlayIcon.classList.remove('hidden');
                                    videoPauseIcon.classList.add('hidden');

                                }

                            });

                            event.preventDefault();

                        });

                    } else {

                        videoSound.addEventListener('click', (event) => {

                            if (videoVolumeOnIcon.classList.contains('hidden')) {

                                video.muted = false;
                                videoVolumeOnIcon.classList.remove('hidden');
                                videoVolumeOffIcon.classList.add('hidden');

                            } else {

                                video.muted = true;
                                videoVolumeOnIcon.classList.add('hidden');
                                videoVolumeOffIcon.classList.remove('hidden');

                            }

                            event.preventDefault();

                        });

                        videoPlayPause.addEventListener('click', (event) => {

                            if (video.paused) {

                                video.play();
                                videoPlayIcon.classList.add('hidden');
                                videoPauseIcon.classList.remove('hidden');

                            } else {

                                video.pause();
                                videoPlayIcon.classList.remove('hidden');
                                videoPauseIcon.classList.add('hidden');

                            }

                            event.preventDefault();

                        });

                    }

                }

                this.$watch('visible', function(value) {

                    if (value != false) {

                        document.body.classList.add('overflow-hidden');

                        // Video (Vimeo)

                        if (video) {

                            if (video.tagName == 'IFRAME') {

                                const player = new Vimeo.Player(video);

                                // Initialise video

                                player.setCurrentTime(0);
                                player.play();
                                player.setVolume(1);

                                // Progress bar

                                setInterval(() => {

                                    if (videoProgress) {

                                        player.getCurrentTime().then(function(
                                            seconds) {

                                            player.getDuration().then(
                                                function(duration) {

                                                    videoProgress.style
                                                        .width = (
                                                            seconds /
                                                            duration) *
                                                        100 + '%';

                                                });

                                        });

                                    }

                                }, 100);

                            } else {

                                // Initialise video

                                video.currentTime = 0;
                                video.play();

                                // Progress bar

                                setInterval(() => {

                                    if (videoProgress) {

                                        videoProgress.style.width = (video
                                                .currentTime / video.duration) *
                                            100 + '%';

                                    }

                                }, 100);

                            }

                        }


                    } else {

                        document.body.classList.remove('overflow-hidden');
                    }

                });

            },
            closeModal(id) {

                this.visible = false;

                const video = document.querySelector('.js-modal-video-' + id);
                const videoProgress = document.querySelector('.js-modal-video-progress-' + id);

                if (video) {

                    if (video.tagName == 'IFRAME') {

                        const player = new Vimeo.Player(video);

                        player.pause();


                    } else {

                        video.pause();
                        videoProgress.style.width = '0%';

                    }
                }

            }
        }))
    });
    document.addEventListener('alpine:init', () => {
        Alpine.data('header', () => ({
            headerSmall: false,
            menu: false,
            headerDirection: 'down',
            headerPosition: 0,
            updatedHeaderPosition: 0,
            hideHeader: false,
            darkMode: localStorage.darkMode === 'true' ? true : false,
            updateHeader() {

                const header = document.querySelector('.js-header');

                if (window.scrollY > 10) {

                    this.headerSmall = true;

                    this.headerPosition = window.scrollY;

                    if (this.headerPosition > this.updatedHeaderPosition) {

                        this.headerDirection = 'down';

                    } else {

                        this.headerDirection = 'up';

                    }

                    this.updatedHeaderPosition = this.headerPosition;

                } else {

                    this.headerSmall = false;

                }

                let headerWidth = '60rem';
                let headerWidthWide = '99vw';

                ScrollTrigger.matchMedia({
                    '(min-width: 1024px)': () => {

                        headerWidth = '60rem';
                        headerWidthWide = '99vw';

                    },
                    '(max-width: 1023px)': () => {

                        headerWidth = '16rem';
                        headerWidthWide = '99vw';

                    }
                });

                if (window.scrollY > 10) {

                    gsap.to(header, {
                        duration: 0.6,
                        width: headerWidth,
                        ease: 'power4.out',
                    });

                    header.classList.add('header-background');


                } else {

                    gsap.to(header, {
                        duration: 0.6,
                        width: headerWidthWide,
                        ease: 'power4.out',
                    });

                    header.classList.remove('header-background');

                }

            },
            mobileMenu() {

                const header = document.querySelector('.js-header');
                const mobileMenu = document.querySelector('.js-mobile-menu');

                let headerWidth = '60rem';
                let headerWidthWide = '94vw';

                ScrollTrigger.matchMedia({
                    '(min-width: 1024px)': () => {

                        headerWidth = '60rem';
                        headerWidthWide = '94vw';

                    },
                    '(max-width: 1023px)': () => {

                        headerWidth = '16rem';
                        headerWidthWide = '94vw';

                    }
                });

                this.$watch('menu', value => {

                    if (value == 'mobileMenu') {

                        document.body.classList.add('overflow-hidden');

                        gsap.to(header, {
                            duration: 0.4,
                            width: headerWidthWide,
                            ease: 'power4.out',
                        });

                        gsap.to(mobileMenu, {
                            duration: 0.4,
                            delay: window.scrollY > 10 ? 0.2 : 0,
                            height: '27.5rem',
                            ease: 'power4.out',
                        });

                        gsap.to(mobileMenu, {
                            duration: 1,
                            delay: window.scrollY > 10 ? 0.3 : 0.1,
                            opacity: 1,
                            ease: 'power4.out',
                        });


                        header.classList.add('header-background');

                    } else {

                        document.body.classList.remove('overflow-hidden');

                        setTimeout(() => {

                            if (window.scrollY > 10) {

                                header.classList.add('header-background');

                            } else {

                                header.classList.remove('header-background');

                            }

                        }, 400);

                        gsap.to(mobileMenu, {
                            duration: 0.6,
                            opacity: 0,
                            ease: 'power4.out',
                        });

                        gsap.to(mobileMenu, {
                            duration: 0.4,
                            height: '0rem',
                            delay: 0.2,
                            ease: 'power4.out',
                        });

                        if (window.scrollY > 10) {

                            gsap.to(header, {
                                duration: 0.4,
                                delay: 0.4,
                                width: headerWidth,
                                ease: 'power4.out',
                            });

                        } else {

                            gsap.to(header, {
                                duration: 0.4,
                                delay: 0.4,
                                width: '99vw',
                                ease: 'power4.out',
                            });

                        }

                    }

                });

            }
        }))
    });
    document.addEventListener('alpine:init', () => {
        Alpine.data('modal430895', () => ({
            visible: false,
            setupModal(id) {

                // Prevent keys from interferring with the video

                navigator.mediaSession.setActionHandler('play', function() {});
                navigator.mediaSession.setActionHandler('pause', function() {});
                navigator.mediaSession.setActionHandler('seekbackward', function() {});
                navigator.mediaSession.setActionHandler('seekforward', function() {});
                navigator.mediaSession.setActionHandler('previoustrack', function() {});
                navigator.mediaSession.setActionHandler('nexttrack', function() {});

                // Get video elements

                const video = document.querySelector(`.js-modal-video-${id}`);
                const videoProgress = document.querySelector(`.js-modal-video-progress-${id}`);

                const videoPlayPause = document.querySelector(`.js-modal-video-play-pause-${id}`);
                const videoSound = document.querySelector(`.js-modal-video-sound-${id}`);

                const videoPlayIcon = document.querySelector(`.js-modal-video-play-icon-${id}`);
                const videoPauseIcon = document.querySelector(`.js-modal-video-pause-icon-${id}`);

                const videoVolumeOnIcon = document.querySelector(
                    `.js-modal-video-volume-on-icon-${id}`);
                const videoVolumeOffIcon = document.querySelector(
                    `.js-modal-video-volume-off-icon-${id}`);

                // Video controls

                if (video) {

                    if (video.tagName == 'IFRAME') {

                        const player = new Vimeo.Player(video);

                        // Video controls

                        videoSound.addEventListener('click', (event) => {

                            player.getVolume().then(function(volume) {

                                if (videoVolumeOnIcon.classList.contains(
                                        'hidden')) {

                                    player.setVolume(1);
                                    videoVolumeOnIcon.classList.remove('hidden');
                                    videoVolumeOffIcon.classList.add('hidden');

                                } else {

                                    player.setVolume(0);
                                    videoVolumeOnIcon.classList.add('hidden');
                                    videoVolumeOffIcon.classList.remove('hidden');

                                }

                            });

                            event.preventDefault();

                        });

                        videoPlayPause.addEventListener('click', (event) => {

                            player.getPaused().then(function(paused) {

                                if (paused) {

                                    player.play();
                                    videoPlayIcon.classList.add('hidden');
                                    videoPauseIcon.classList.remove('hidden');

                                } else {

                                    player.pause();
                                    videoPlayIcon.classList.remove('hidden');
                                    videoPauseIcon.classList.add('hidden');

                                }

                            });

                            event.preventDefault();

                        });

                    } else {

                        videoSound.addEventListener('click', (event) => {

                            if (videoVolumeOnIcon.classList.contains('hidden')) {

                                video.muted = false;
                                videoVolumeOnIcon.classList.remove('hidden');
                                videoVolumeOffIcon.classList.add('hidden');

                            } else {

                                video.muted = true;
                                videoVolumeOnIcon.classList.add('hidden');
                                videoVolumeOffIcon.classList.remove('hidden');

                            }

                            event.preventDefault();

                        });

                        videoPlayPause.addEventListener('click', (event) => {

                            if (video.paused) {

                                video.play();
                                videoPlayIcon.classList.add('hidden');
                                videoPauseIcon.classList.remove('hidden');

                            } else {

                                video.pause();
                                videoPlayIcon.classList.remove('hidden');
                                videoPauseIcon.classList.add('hidden');

                            }

                            event.preventDefault();

                        });

                    }

                }

                this.$watch('visible', function(value) {

                    if (value != false) {

                        document.body.classList.add('overflow-hidden');

                        // Video (Vimeo)

                        if (video) {

                            if (video.tagName == 'IFRAME') {

                                const player = new Vimeo.Player(video);

                                // Initialise video

                                player.setCurrentTime(0);
                                player.play();
                                player.setVolume(1);

                                // Progress bar

                                setInterval(() => {

                                    if (videoProgress) {

                                        player.getCurrentTime().then(function(
                                            seconds) {

                                            player.getDuration().then(
                                                function(duration) {

                                                    videoProgress.style
                                                        .width = (
                                                            seconds /
                                                            duration) *
                                                        100 + '%';

                                                });

                                        });

                                    }

                                }, 100);

                            } else {

                                // Initialise video

                                video.currentTime = 0;
                                video.play();

                                // Progress bar

                                setInterval(() => {

                                    if (videoProgress) {

                                        videoProgress.style.width = (video
                                                .currentTime / video.duration) *
                                            100 + '%';

                                    }

                                }, 100);

                            }

                        }


                    } else {

                        document.body.classList.remove('overflow-hidden');
                    }

                });

            },
            closeModal(id) {

                this.visible = false;

                const video = document.querySelector('.js-modal-video-' + id);
                const videoProgress = document.querySelector('.js-modal-video-progress-' + id);

                if (video) {

                    if (video.tagName == 'IFRAME') {

                        const player = new Vimeo.Player(video);

                        player.pause();


                    } else {

                        video.pause();
                        videoProgress.style.width = '0%';

                    }
                }

            }
        }))
    });
    document.addEventListener('alpine:init', () => {
        Alpine.data('logoCarousel', () => ({
            carousel(id) {

                const swiper = new Swiper(`.js-carousel-${id}`, {
                    slidesPerView: 2,
                    loop: true,
                    speed: 8000,
                    autoplay: {
                        delay: 0,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 3,
                        },
                        768: {
                            slidesPerView: 3.5,
                        },
                        1024: {
                            slidesPerView: 3.5,
                        },
                        1280: {
                            slidesPerView: 4,
                        },
                        1400: {
                            slidesPerView: 4,
                        },
                        1600: {
                            slidesPerView: 5,
                        },
                    }
                });

                window.addEventListener('resize', () => {

                    clearTimeout(window.resizedFinished);

                    window.resizedFinished = setTimeout(function() {

                        swiper.update();
                        swiper.autoplay.start();

                    }, 50);

                });

                const logos = document.querySelectorAll(`.js-logo-${id}`);

                // ScrollTrigger.matchMedia({
                //     '(min-width: 1280px)': () => {

                //         gsap.to(logos, {
                //             scrollTrigger: {
                //                 trigger: logos,
                //                 scrub: true,
                //                 start: 'top 110%',
                //                 end: 'bottom top'
                //             },
                //             x: -200,
                //             ease: 'none',
                //         });

                //     }
                // });

            }
        }));
    });
    document.addEventListener('alpine:init', () => {
        Alpine.data('modal430950', () => ({
            visible: false,
            setupModal(id) {

                // Prevent keys from interferring with the video

                navigator.mediaSession.setActionHandler('play', function() {});
                navigator.mediaSession.setActionHandler('pause', function() {});
                navigator.mediaSession.setActionHandler('seekbackward', function() {});
                navigator.mediaSession.setActionHandler('seekforward', function() {});
                navigator.mediaSession.setActionHandler('previoustrack', function() {});
                navigator.mediaSession.setActionHandler('nexttrack', function() {});

                // Get video elements

                const video = document.querySelector(`.js-modal-video-${id}`);
                const videoProgress = document.querySelector(`.js-modal-video-progress-${id}`);

                const videoPlayPause = document.querySelector(`.js-modal-video-play-pause-${id}`);
                const videoSound = document.querySelector(`.js-modal-video-sound-${id}`);

                const videoPlayIcon = document.querySelector(`.js-modal-video-play-icon-${id}`);
                const videoPauseIcon = document.querySelector(`.js-modal-video-pause-icon-${id}`);

                const videoVolumeOnIcon = document.querySelector(
                    `.js-modal-video-volume-on-icon-${id}`);
                const videoVolumeOffIcon = document.querySelector(
                    `.js-modal-video-volume-off-icon-${id}`);

                // Video controls

                if (video) {

                    if (video.tagName == 'IFRAME') {

                        const player = new Vimeo.Player(video);

                        // Video controls

                        videoSound.addEventListener('click', (event) => {

                            player.getVolume().then(function(volume) {

                                if (videoVolumeOnIcon.classList.contains(
                                        'hidden')) {

                                    player.setVolume(1);
                                    videoVolumeOnIcon.classList.remove('hidden');
                                    videoVolumeOffIcon.classList.add('hidden');

                                } else {

                                    player.setVolume(0);
                                    videoVolumeOnIcon.classList.add('hidden');
                                    videoVolumeOffIcon.classList.remove('hidden');

                                }

                            });

                            event.preventDefault();

                        });

                        videoPlayPause.addEventListener('click', (event) => {

                            player.getPaused().then(function(paused) {

                                if (paused) {

                                    player.play();
                                    videoPlayIcon.classList.add('hidden');
                                    videoPauseIcon.classList.remove('hidden');

                                } else {

                                    player.pause();
                                    videoPlayIcon.classList.remove('hidden');
                                    videoPauseIcon.classList.add('hidden');

                                }

                            });

                            event.preventDefault();

                        });

                    } else {

                        videoSound.addEventListener('click', (event) => {

                            if (videoVolumeOnIcon.classList.contains('hidden')) {

                                video.muted = false;
                                videoVolumeOnIcon.classList.remove('hidden');
                                videoVolumeOffIcon.classList.add('hidden');

                            } else {

                                video.muted = true;
                                videoVolumeOnIcon.classList.add('hidden');
                                videoVolumeOffIcon.classList.remove('hidden');

                            }

                            event.preventDefault();

                        });

                        videoPlayPause.addEventListener('click', (event) => {

                            if (video.paused) {

                                video.play();
                                videoPlayIcon.classList.add('hidden');
                                videoPauseIcon.classList.remove('hidden');

                            } else {

                                video.pause();
                                videoPlayIcon.classList.remove('hidden');
                                videoPauseIcon.classList.add('hidden');

                            }

                            event.preventDefault();

                        });

                    }

                }

                this.$watch('visible', function(value) {

                    if (value != false) {

                        document.body.classList.add('overflow-hidden');

                        // Video (Vimeo)

                        if (video) {

                            if (video.tagName == 'IFRAME') {

                                const player = new Vimeo.Player(video);

                                // Initialise video

                                player.setCurrentTime(0);
                                player.play();
                                player.setVolume(1);

                                // Progress bar

                                setInterval(() => {

                                    if (videoProgress) {

                                        player.getCurrentTime().then(function(
                                            seconds) {

                                            player.getDuration().then(
                                                function(duration) {

                                                    videoProgress.style
                                                        .width = (
                                                            seconds /
                                                            duration) *
                                                        100 + '%';

                                                });

                                        });

                                    }

                                }, 100);

                            } else {

                                // Initialise video

                                video.currentTime = 0;
                                video.play();

                                // Progress bar

                                setInterval(() => {

                                    if (videoProgress) {

                                        videoProgress.style.width = (video
                                                .currentTime / video.duration) *
                                            100 + '%';

                                    }

                                }, 100);

                            }

                        }


                    } else {

                        document.body.classList.remove('overflow-hidden');
                    }

                });

            },
            closeModal(id) {

                this.visible = false;

                const video = document.querySelector('.js-modal-video-' + id);
                const videoProgress = document.querySelector('.js-modal-video-progress-' + id);

                if (video) {

                    if (video.tagName == 'IFRAME') {

                        const player = new Vimeo.Player(video);

                        player.pause();


                    } else {

                        video.pause();
                        videoProgress.style.width = '0%';

                    }
                }

            }
        }))
    });
    document.addEventListener('alpine:init', () => {
        Alpine.data('modal426302', () => ({
            visible: false,
            setupModal(id) {

                // Prevent keys from interferring with the video

                navigator.mediaSession.setActionHandler('play', function() {});
                navigator.mediaSession.setActionHandler('pause', function() {});
                navigator.mediaSession.setActionHandler('seekbackward', function() {});
                navigator.mediaSession.setActionHandler('seekforward', function() {});
                navigator.mediaSession.setActionHandler('previoustrack', function() {});
                navigator.mediaSession.setActionHandler('nexttrack', function() {});

                // Get video elements

                const video = document.querySelector(`.js-modal-video-${id}`);
                const videoProgress = document.querySelector(`.js-modal-video-progress-${id}`);

                const videoPlayPause = document.querySelector(`.js-modal-video-play-pause-${id}`);
                const videoSound = document.querySelector(`.js-modal-video-sound-${id}`);

                const videoPlayIcon = document.querySelector(`.js-modal-video-play-icon-${id}`);
                const videoPauseIcon = document.querySelector(`.js-modal-video-pause-icon-${id}`);

                const videoVolumeOnIcon = document.querySelector(
                    `.js-modal-video-volume-on-icon-${id}`);
                const videoVolumeOffIcon = document.querySelector(
                    `.js-modal-video-volume-off-icon-${id}`);

                // Video controls

                if (video) {

                    if (video.tagName == 'IFRAME') {

                        const player = new Vimeo.Player(video);

                        // Video controls

                        videoSound.addEventListener('click', (event) => {

                            player.getVolume().then(function(volume) {

                                if (videoVolumeOnIcon.classList.contains(
                                        'hidden')) {

                                    player.setVolume(1);
                                    videoVolumeOnIcon.classList.remove('hidden');
                                    videoVolumeOffIcon.classList.add('hidden');

                                } else {

                                    player.setVolume(0);
                                    videoVolumeOnIcon.classList.add('hidden');
                                    videoVolumeOffIcon.classList.remove('hidden');

                                }

                            });

                            event.preventDefault();

                        });

                        videoPlayPause.addEventListener('click', (event) => {

                            player.getPaused().then(function(paused) {

                                if (paused) {

                                    player.play();
                                    videoPlayIcon.classList.add('hidden');
                                    videoPauseIcon.classList.remove('hidden');

                                } else {

                                    player.pause();
                                    videoPlayIcon.classList.remove('hidden');
                                    videoPauseIcon.classList.add('hidden');

                                }

                            });

                            event.preventDefault();

                        });

                    } else {

                        videoSound.addEventListener('click', (event) => {

                            if (videoVolumeOnIcon.classList.contains('hidden')) {

                                video.muted = false;
                                videoVolumeOnIcon.classList.remove('hidden');
                                videoVolumeOffIcon.classList.add('hidden');

                            } else {

                                video.muted = true;
                                videoVolumeOnIcon.classList.add('hidden');
                                videoVolumeOffIcon.classList.remove('hidden');

                            }

                            event.preventDefault();

                        });

                        videoPlayPause.addEventListener('click', (event) => {

                            if (video.paused) {

                                video.play();
                                videoPlayIcon.classList.add('hidden');
                                videoPauseIcon.classList.remove('hidden');

                            } else {

                                video.pause();
                                videoPlayIcon.classList.remove('hidden');
                                videoPauseIcon.classList.add('hidden');

                            }

                            event.preventDefault();

                        });

                    }

                }

                this.$watch('visible', function(value) {

                    if (value != false) {

                        document.body.classList.add('overflow-hidden');

                        // Video (Vimeo)

                        if (video) {

                            if (video.tagName == 'IFRAME') {

                                const player = new Vimeo.Player(video);

                                // Initialise video

                                player.setCurrentTime(0);
                                player.play();
                                player.setVolume(1);

                                // Progress bar

                                setInterval(() => {

                                    if (videoProgress) {

                                        player.getCurrentTime().then(function(
                                            seconds) {

                                            player.getDuration().then(
                                                function(duration) {

                                                    videoProgress.style
                                                        .width = (
                                                            seconds /
                                                            duration) *
                                                        100 + '%';

                                                });

                                        });

                                    }

                                }, 100);

                            } else {

                                // Initialise video

                                video.currentTime = 0;
                                video.play();

                                // Progress bar

                                setInterval(() => {

                                    if (videoProgress) {

                                        videoProgress.style.width = (video
                                                .currentTime / video.duration) *
                                            100 + '%';

                                    }

                                }, 100);

                            }

                        }


                    } else {

                        document.body.classList.remove('overflow-hidden');
                    }

                });

            },
            closeModal(id) {

                this.visible = false;

                const video = document.querySelector('.js-modal-video-' + id);
                const videoProgress = document.querySelector('.js-modal-video-progress-' + id);

                if (video) {

                    if (video.tagName == 'IFRAME') {

                        const player = new Vimeo.Player(video);

                        player.pause();


                    } else {

                        video.pause();
                        videoProgress.style.width = '0%';

                    }
                }

            }
        }))
    });
    document.addEventListener('alpine:init', () => {
        Alpine.data('featureQuote', () => ({
            crossBrowserClasses(id) {

                const isWindows = navigator.platform.indexOf('Win') > -1;
                const isAndroid = navigator.userAgent.toLowerCase().indexOf("android") > -1;

                const elements = document.querySelectorAll(`.js-cross-browser-${id}`);

                elements.forEach(element => {

                    if (isWindows) {

                        const windowsRemove = element.getAttribute('data-windows-remove')
                            .split('|');
                        const windowsAdd = element.getAttribute('data-windows-add').split(
                            '|');

                        element.classList.remove(...windowsRemove);
                        element.classList.add(...windowsAdd);

                    }

                    if (isAndroid) {

                        const androidRemove = element.getAttribute('data-android-remove')
                            .split('|');
                        const androidAdd = element.getAttribute('data-android-add').split(
                            '|');

                        element.classList.remove(...androidRemove);
                        element.classList.add(...androidAdd);

                    }

                });

            }
        }))
    });
    document.addEventListener('alpine:init', () => {
        Alpine.data('ticker', () => ({
            carousels(id, speed) {

                const carousels = document.querySelectorAll(`.js-carousel-${id}`);
                const mediaQuery = window.matchMedia('(max-width: 768px)');

                if (mediaQuery.matches) {
                    speed = speed / 1.5;
                }

                carousels.forEach((carousel, index) => {

                    const parentSelector = carousel;
                    const clone = parentSelector.innerHTML;

                    const firstElement = parentSelector.children[0];
                    const lastElement = parentSelector.children[parentSelector.children
                        .length - 1];

                    let i = 0;

                    if (index % 2 === 0) {

                        this.animateCarousel('beforeend', 'left', firstElement, clone,
                            parentSelector, i, speed);

                    } else {

                        this.animateCarousel('afterbegin', 'right', lastElement, clone,
                            parentSelector, i, speed);

                    }

                });

            },
            animateCarousel(position, margin, element, clone, parentSelector, i, speed) {

                parentSelector.insertAdjacentHTML(position, clone);
                parentSelector.insertAdjacentHTML(position, clone);

                setInterval(function() {

                    margin === 'left' ?
                        element.style.marginLeft = `-${i}px` :
                        element.style.marginRight = `-${i}px`;


                    if (i > element.clientWidth) {
                        i = 0;
                    }

                    i = i + speed;

                }, 0);

            }
        }));
    });
    document.addEventListener('alpine:init', () => {
        Alpine.data('pageLinksCarousel', () => ({
            isStart: true,
            isEnd: false,
            carousel(id) {

                const carousel = new Swiper('.js-carousel-' + id, {
                    slidesPerView: 1.2,
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.js-carousel-next-' + id,
                        prevEl: '.js-carousel-prev-' + id,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1.7,
                        },
                        1024: {
                            slidesPerView: 2.2,
                        },
                        1800: {
                            slidesPerView: 2.5,
                        }
                    },
                });

                carousel.on('slideChange', () => {
                    this.isStart = carousel.isBeginning;
                    this.isEnd = carousel.isEnd;
                });

            }
        }));
    });
    document.addEventListener('alpine:init', () => {
        Alpine.data('app', () => ({
            viewportHeight: null,
            gaEvents() {

                document.querySelectorAll('a[href^="mailto"]')
                    .forEach(element => {

                        element.addEventListener('click', (event) => {
                            window.dataLayer = window.dataLayer || [];
                            window.dataLayer.push({
                                'event': 'email_lead'
                            });
                        })

                    });

                document.querySelectorAll('a[href^="tel:"]')
                    .forEach(element => {

                        element.addEventListener('click', (event) => {
                            window.dataLayer = window.dataLayer || [];
                            window.dataLayer.push({
                                'event': 'phone_lead'
                            });
                        })

                    });

                document.querySelectorAll('.js-social-link')
                    .forEach(element => {

                        element.addEventListener('click', (event) => {
                            window.dataLayer = window.dataLayer || [];
                            window.dataLayer.push({
                                'event': 'social_links'
                            });
                        })

                    });






            },
            baseInit() {

                viewportHeight = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${viewportHeight}px`);

                const darkMode = Cookies.get('darkMode');

                if (darkMode == 'true') {
                    document.querySelector('html').classList.add('dark');
                }


            }
        }))
    });
    </script>
</body>

</html>